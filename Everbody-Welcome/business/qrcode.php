<?php
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