<?php
if (isset($_POST['submit'])) {
    $comment = $_POST['comment'];
    $email = $_POST['email'];
    
    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }
    
    $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $subject = 'Message from Everybody Welcome Website';
    $to = 'jonahcole01091989@gmail.com'; // Replace with Everybody Welcome email address
    $message = "You have received an email from Everybody Welcome. \n\n" .
               "Message: " . $comment . "\n\n" .
               "From: " . $email;

    // Send email and handle errors
    if (mail($to, $subject, $message, $headers, "-f $email")) {
        header("Location: landingPage.php?mailsent");
        exit();
    } else {
        echo "Error sending email: " . error_get_last()['message'];
        exit();
    }
} else {
    echo "No form submitted";
    exit();
}
?>