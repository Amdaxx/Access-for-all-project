<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";


session_start();

if (!isset($_SESSION['business'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); //calling the function from session.php

$id = $_SESSION['id']; 



// Include the QR code library
  include "phpqrcode/qrlib.php";

  // The URL you want to encode into the QR code
$url = "https://afpproject.azurewebsites.net/Everbody-Welcome/public/landingPage.php";


// Set the size and error correction level of the QR code
  $size = 10;
  $level = "L";

// Generate the QR code and output it to the browser
  QRcode::png($url, false, $level, $size);


?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="../css/businessHomepage.css">
<link rel="stylesheet" href="../css/venueTableStyle.css">
<link rel="stylesheet" href="../css/overall-page.css">


<style>

  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #696969;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  .data:hover {background-color: coral;}
</style>
</head>

<div class="flex-wrapper">

  <div id="header">
    <?php include "businessHeader.php";?>    
  </div>
  <body>
    <div style="overflow-x:auto;margin-top:20px;">
      <table class="center" border='1' style='border-collapse:collapse'>
      <th>Question No.</th>
      <th>Question</th>
      <th>Yes/No</th>
      <th>Proof</th>
      <th>Comments</th>
      <tr class = "data">
        <td width='200'><?php echo '1'; ?></td>
        <td width='200'><?php echo 'Is there an accessible bathroom?'; ?></td>
        <td width='40'><?php echo 'YES'; ?></td>
        <td  width='200'><img  src="../pictures/dummyPictures/C1.jpg" alt="ME"></td>
        <td  width='200'><?php echo 'Yes, there are several accessible bathrooms throughout the Cantor buidling.'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '2'; ?></td>
        <td width='250'><?php echo 'Is there a disabled refuge point?'; ?></td>
        <td width='40'><?php echo 'YES'; ?></td>
        <td  width='200'><img  src="../pictures/dummyPictures/C2.jpg" alt="ME"></td>
        <td  width='200'><?php echo 'There is a disabled refuge point.'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '3'; ?></td>
        <td width='250'><?php echo 'Is there a stairlift?'; ?></td>
        <td width='40'><?php echo 'YES'; ?></td>
        <td  width='200'><img  src="../pictures/dummyPictures/C3.jpg" alt="ME"></td>
        <td  width='200'><?php echo 'There is a stairlift available to travel between floors.'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '4'; ?></td>
        <td width='250'><?php echo 'Is the clear door opening width of the entrance more than 75cm?'; ?></td>
        <td width='40'><?php echo 'YES'; ?></td>
        <td  width='200'><img  src="../pictures/dummyPictures/C4.jpg" alt="ME"></td>
        <td  width='200'><?php echo 'The door openings are adequately sized.'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '5'; ?></td>
        <td width='250'><?php echo 'Is there a hearing loop?'; ?></td>
        <td width='40'><?php echo 'NO'; ?></td>
        <td  width='200'></td>
        <td  width='200'><?php echo 'There is not currently a hearing loop.'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '6'; ?></td>
        <td width='250'><?php echo 'Is there an elevator available?'; ?></td>
        <td width='40'><?php echo 'YES'; ?></td>
        <td  width='200'><img  src="../pictures/dummyPictures/C5.jpg" alt="ME"></td>
        <td  width='200'><?php echo 'There is an elevator to travel between floors.'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '7'; ?></td>
        <td width='250'><?php echo 'Is there an alternative entrance, with level access (without steps or raised thresholds)?'; ?></td>
        <td width='40'><?php echo 'NO'; ?></td>
        <td  width='200'></td>
        <td  width='200'><?php echo 'There is not.'; ?></td>
      </tr>
      </table>
    </div>

  </body>

  <?php include "../public/footer.php" ?>

</div>
