<?php 
 
// Product Details  
// Minimum amount is $0.50 US  
$productname = "Specific Audit";  
$productID = "AA12345";  
$productPrice = 3; 
$currency = "gbp"; 
$venue;
  
/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51MgTEkABIo4c0M7G9lrmsnlUPwxinApGa6AvVPaXmpRUx2ooHun06a9xK9zqTnk1HL7XhPXBunadFKRfz0T1OQu300FBQ7GpK6'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51MgTEkABIo4c0M7GjhESu3hlaIF7SW00hXeASZMlxfG2IPXBeegKv1cBbR0tlRsWyhUrpBFwHFvABPiLtGoHPm3n00gitZlgTE'); 
define('STRIPE_SUCCESS_URL', 'https://afpproject.azurewebsites.net/Everbody-Welcome/business/payment-success.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'https://afpproject.azurewebsites.net/Everbody-Welcome/business/payment-cancel.php'); //Payment cancel URL 




 
?>