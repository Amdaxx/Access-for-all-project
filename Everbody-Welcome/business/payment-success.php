<?php 
// Include configuration file  
require_once 'config.php'; 
include_once("../SQL/sql.php");

$path = "../public/LandingPage.php";
session_start();
if (!isset($_SESSION['business'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); //calling the function from session.php
 
// Include database connection file   
 
$payment_id = $statusMsg = ''; 
$status = 'error'; 
$db = new mysqli('afpproject-server.mysql.database.azure.com', 'tkgwwyrhag', 'Blackdown12345', 'afadb');
 

if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
} else {
    echo "";
}
// Check whether stripe checkout session is not empty 
if(!empty($_GET['session_id'])){ 
    $session_id = $_GET['session_id']; 
     
    // Fetch transaction data from the database if already exists 
    $sqlQ = "SELECT * FROM transactions WHERE stripe_checkout_session_id = ?"; 
    $stmt = $db->prepare($sqlQ);  
    $stmt->bind_param("s", $db_session_id); 
    $db_session_id = $session_id; 
    $stmt->execute(); 
    $result = $stmt->get_result(); 
 
    if($result->num_rows > 0){ 
        // Transaction details 
        $transData = $result->fetch_assoc(); 
        $payment_id = $transData['id']; 
        $transactionID = $transData['txn_id']; 
        $paidAmount = $transData['paid_amount']; 
        $paidCurrency = $transData['paid_amount_currency']; 
        $payment_status = $transData['payment_status']; 
         
        $customer_name = $transData['customer_name']; 
        $customer_email = $transData['customer_email']; 
         
        $status = 'success'; 
        $statusMsg = 'Your Payment has been Successful!'; 
    }else{ 
        // Include the Stripe PHP library 
        require_once '../stripe-php/init.php'; 
         
        // Set API key 
        $stripe = new \Stripe\StripeClient(STRIPE_API_KEY); 
         
        // Fetch the Checkout Session to display the JSON result on the success page 
        try { 
            $checkout_session = $stripe->checkout->sessions->retrieve($session_id); 
        } catch(Exception $e) {  
            $api_error = $e->getMessage();  
        } 
         
        if(empty($api_error) && $checkout_session){ 
            // Get customer details 
            $customer_details = $checkout_session->customer_details; 
 
            // Retrieve the details of a PaymentIntent 
            try { 
                $paymentIntent = $stripe->paymentIntents->retrieve($checkout_session->payment_intent); 
            } catch (\Stripe\Exception\ApiErrorException $e) { 
                $api_error = $e->getMessage(); 
            } 
             
            if(empty($api_error) && $paymentIntent){ 
                // Check whether the payment was successful 
                if(!empty($paymentIntent) && $paymentIntent->status == 'succeeded'){ 
                    // Transaction details  
                    $transactionID = $paymentIntent->id; 
                    $paidAmount = $paymentIntent->amount; 
                    $paidAmount = ($paidAmount/100); 
                    $paidCurrency = $paymentIntent->currency; 
                    $payment_status = $paymentIntent->status; 
                     
                    // Customer info 
                    $customer_name = $customer_email = ''; 
                    if(!empty($customer_details)){ 
                        $customer_name = !empty($customer_details->name)?$customer_details->name:''; 
                        $customer_email = !empty($customer_details->email)?$customer_details->email:''; 
                    } 
                     
                    // Check if any transaction data is exists already with the same TXN ID 
                    $sqlQ = "SELECT id FROM transactions WHERE txn_id = ?"; 
                    $stmt = $db->prepare($sqlQ);  
                    $stmt->bind_param("s", $transactionID); 
                    $stmt->execute(); 
                    $result = $stmt->get_result(); 
                    $prevRow = $result->fetch_assoc(); 
                     
                    if(!empty($prevRow)){ 
                        $payment_id = $prevRow['id']; 
                    }else{ 
                        // Insert transaction data into the database 
                        $sqlQ = "INSERT INTO transactions (customer_name,customer_email,item_name,item_number,item_price,item_price_currency,paid_amount,paid_amount_currency,txn_id,payment_status,stripe_checkout_session_id,created,modified) VALUES (?,?,?,?,?,?,?,?,?,?,?,NOW(),NOW())"; 
                        $stmt = $db->prepare($sqlQ); 
                        $stmt->bind_param("ssssdsdssss", $customer_name, $customer_email, $productname, $productID, $productPrice, $currency, $paidAmount, $paidCurrency, $transactionID, $payment_status, $session_id); 
                        $insert = $stmt->execute(); 
                        goPremium($venue);
                        if($insert){ 
                            $payment_id = $stmt->insert_id; 
                        } 
                    } 
                     
                    $status = 'success'; 
                    $statusMsg = 'The payment was successful'; 
                }else{ 
                    $statusMsg = "Transaction has been failed!"; 
                } 
            }else{ 
                $statusMsg = "Unable to fetch the transaction details! $api_error";  
            } 
        }else{ 
            $statusMsg = "Invalid Transaction! $api_error";  
        } 
    } 
}else{ 
    $statusMsg = "Invalid Request!"; 
} 
?>

<link rel="stylesheet" href="../css/payment-result.css">
<link rel="stylesheet" href="../css/topNavHome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-w7fp+8KZpDb7ZqfJr1r5Rdq+Rxl1MzlOiqpKOUcFdwf+qlw3qZDJ+C1OgbQztgkFnoHSu3yHj/O/wupTgQYzw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<header id="nav-wrapper">
    <nav id="nav">
      <div class="nav left">
        <span class="gradient skew"><h1 class="logo un-skew"><img src="../pictures/logo.png"></h1></span>
        <button id="menu" class="btn-nav"><span class="fas fa-bars"></span></button>
      </div>
    </nav>
</header>

<a href="businessLandingPage.php" class="back-button"><i class="fa fa-arrow-left"></i> Back</a>

<?php if(!empty($payment_id)){ ?>

<div class="card">
  <div class="card-content">
  <h1 class="card-title"><?php echo $statusMsg; ?></h1>
    <h2 class="card-title">Payment Information</h2>
    <p class="card-text"><b>Reference Number:</b> <?php echo $payment_id; ?></p>
            <p class="card-text"><b>Transaction ID:</b> <?php echo $transactionID; ?></p>
            <p class="card-text"><b>Paid Amount:</b> <?php echo $paidAmount.' '.$paidCurrency; ?></p>
            <p class="card-text"><b>Payment Status:</b> <?php echo $payment_status; ?></p>
            
            <h4>Customer Information</h4>
            <p class="card-text"><b>Name:</b> <?php echo $customer_name; ?></p>
            <p class="card-text"><b>Email:</b> <?php echo $customer_email; ?></p>
            
            <h4>Product Information</h4>
            <p class="card-text"><b>Name:</b> <?php echo $productName; ?></p>
            <p class="card-text"><b>Price:</b> <?php echo $productPrice.' '.$currency; ?></p>

            <?php }else{ ?>
            <h1 class="error">Your Payment been failed!</h1>
            <p class="error"><?php echo $statusMsg; ?></p>
        <?php } ?>
  </div>
</div>
	