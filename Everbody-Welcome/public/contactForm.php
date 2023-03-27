<?php 
if(isset($_POST['submit'])){
    $comment = $_POST['comment'];
    $email = $_POST['email'];

    $mailTo = "c0025745@hallam.shu.ac.uk";
    $headers = "From: ".$email;
    $txt = "You have received an email from Everybody Welcome.\n\n".$comment;

    mail($mailTo, $comment, $txt, $headers);
    header("Location: landingPage.php?mailsent");
}
?>