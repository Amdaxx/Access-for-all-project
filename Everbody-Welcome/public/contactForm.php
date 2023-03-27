<?php
if (isset($_POST['submit'])) {
    $comment = $_POST['comment'];
    $email = $_POST['email'];
    $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $subject = 'Message from Everybody Welcome Website';
    $to = 'jonahcole01091989@example.com'; // Replace with your email address
    $message = "You have received an email from Everybody Welcome. \n\n" .
               "Message: " . $comment . "\n\n" .
               "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        header("Location: landingPage.php?mailsent");
    } else {
        echo "Error sending email";
    }
}
?>