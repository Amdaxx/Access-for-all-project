<?php

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

use Stripe\Terminal\Location;

$venue = $_GET['venueid'];
goPremium($venue);
?>

<head>
<link rel="stylesheet" href="../css/payment.css">


<!-- Display errors returned by checkout session -->
<div id="paymentResponse" class="hidden"></div>
<script src="https://js.stripe.com/v3/"></script>

<div class="flex-wrapper">
  <div id="header">
      <?php include "../business/businessHeader.php";
      $res = displayBusinessDetails($_SESSION['id']);
      ?>  
  </div>
</div>


<body>
<div class="product">
    <div class="product-img">
        <img src="../pictures/logo2.png" alt="">
        <span class="tag">new</span>
    </div>
    <div class="product-listing">
    <div class="content">
        <h1 class="name">Upgrade To Premium</h1>
        <p class="info">By investing in our service, you can ensure compliance with legal requirements, enhance your reputation, and increase patronage. We provide you with a comprehensive report outlining our findings and recommendations for improvement. With our service, you can make your building more inclusive and accessible for all.
        Improving accessibility in your building can attract a wider range of customers and tenants, including people with disabilities. It also helps you reduce liability and enhance your reputation as an inclusive and welcoming place.</p>
        <p class="price"><b>£<?php echo $productPrice.' '.strtoupper($currency); ?></b></p>
        <div class="btn">
        <button class="stripe-button" name="submit" id="payButton">
            <div class="spinner hidden" id="spinner"></div>
            <span id="buttonText">Upgrade</span>
        </button>
        </div>
    </div>
    </div>
</div>
</body>
<script>
// Set Stripe publishable key to initialize Stripe.js
const stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

// Select payment button
const payBtn = document.querySelector("#payButton");

// Payment request handler
payBtn.addEventListener("click", function (evt) {
    setLoading(true);

    createCheckoutSession().then(function (data) {
        if(data.sessionId){
            stripe.redirectToCheckout({
                sessionId: data.sessionId,
            }).then(handleResult);
        }else{
            handleResult(data);
        }
    });
});


// Create a Checkout Session with the selected product
<?php $url = "payment_init.php?venueid=" . $_GET['venueid']; ?>
const createCheckoutSession = function (stripe) {
    return fetch("<?php echo $url; ?>", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            createCheckoutSession: 1,
        }),
    }).then(function (result) {
        return result.json();
    });
};

// Handle any errors returned from Checkout
const handleResult = function (result) {
    if (result.error) {
        showMessage(result.error.message);
    }
    
    setLoading(false);
};

// Show a spinner on payment processing
function setLoading(isLoading) {
    if (isLoading) {
        // Disable the button and show a spinner
        payBtn.disabled = true;
        document.querySelector("#spinner").classList.remove("hidden");
        document.querySelector("#buttonText").classList.add("hidden");
    } else {
        // Enable the button and hide spinner
        payBtn.disabled = false;
        document.querySelector("#spinner").classList.add("hidden");
        document.querySelector("#buttonText").classList.remove("hidden");
    }
}

// Display message
function showMessage(messageText) {
    const messageContainer = document.querySelector("#paymentResponse");
	
    messageContainer.classList.remove("hidden");
    messageContainer.textContent = messageText;
	
    setTimeout(function () {
        messageContainer.classList.add("hidden");
        messageText.textContent = "";
    }, 5000);
}

</script>