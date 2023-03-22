<?php

use Stripe\Terminal\Location;

require_once 'config.php';  


if (isset($_POST['submit'])){

}

?>

<link rel=""


<!-- Display errors returned by checkout session -->
<div id="paymentResponse" class="hidden"></div>
<script src="https://js.stripe.com/v3/"></script>
	
<!-- Product details -->
<h2><?php echo $product; ?></h2>
<p>By investing in our service, you can ensure compliance with legal requirements, enhance your reputation, and increase patronage. We provide you with a comprehensive report outlining our findings and recommendations for improvement. With our service, you can make your building more inclusive and accessible for all.
Improving accessibility in your building can attract a wider range of customers and tenants, including people with disabilities. It also helps you reduce liability and enhance your reputation as an inclusive and welcoming place.</p>
<p>Price: <b>£<?php echo $productPrice.' '.strtoupper($currency); ?></b></p>

<!-- Payment button -->
<form method=""post>
<button class="stripe-button" name="submit" id="payButton">
    <div class="spinner hidden" id="spinner"></div>
    <span id="buttonText">Pay Now</span>
</button>
</form>
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
const createCheckoutSession = function (stripe) {
    return fetch("payment_init.php", {
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