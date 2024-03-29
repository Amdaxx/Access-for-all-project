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






?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="../css/table.css">

</head>

<div class="flex-wrapper" style = "min-height:80vh">

  <div id="header">
    <?php include "businessHeader.php";?>    
  </div>
  <body>
    <div class="table-container" style="overflow-x:auto;margin-top:20px;">
      <table class="table">
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
