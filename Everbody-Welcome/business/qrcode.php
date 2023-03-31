<?php
$path = "../public/LandingPage.php";
session_start();
if (!isset($_SESSION['business'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); //calling the function from session.php

// Include the QR code library
include "phpqrcode/qrlib.php";

// The URL you want to encode into the QR code
$url = "https://afpproject.azurewebsites.net/Everbody-Welcome/public/venuePage.php?venueid=".$_GET['venueid'];


// Set the size and error correction level of the QR code
$size = 10;
$level = "L";

// Generate the QR code and output it to the browser
QRcode::png($url, false, $level, $size);

?>