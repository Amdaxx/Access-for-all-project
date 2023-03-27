<?php 
if(isset($_POST['submit'])){
    $comment = $_POST['comment'];
    $email = $_POST['email'];

    $mailTo = "jonahcole01091989@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from Everybody Welcome.\n\n".$comment;

    mail($mailTo, $comment, $txt, $headers);
    header("Location: landingPage.php?mailsent");
}
?>