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
<link rel="stylesheet" href="../css/businessHomepage.css">
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
    <table class="center" border='1' style='border-collapse:collapse;margin-top:20px;'>  
      <th>Venue Name</th>
      <th>Venue Type</th>
      <th>Venue Postcode</th>
      <th>Venue Address</th>
      <th>Edit Venue Details</th>
      <th>View Past Audits</th>
      <th>New Audit</th>

      <?php 
      $res = viewVenues($_SESSION['id']);
      foreach ($res as $venue):
      ?>
      <tr class = "data">
        <td width='250'><?php echo $venue['venuename']; ?></td>
        <td width='60'><?php echo $venue['type']; ?></td>
        <td  width='250'><?php echo $venue['postcode']; ?></td>
        <td  width='250'><?php echo $venue['address']; ?></td>
        
        <td width='200'><div class="btn-group">
        <a href="updateVenue.php?id=<?php echo $venue['venueid']; ?>">
        <input type="button" value="Edit Venue Details"></div>
        </a>

        <td width='200'><div class="btn-group">
        <a href="previousAudits.php?venueid=<?php echo $venue['venueid']; ?>">
        <input type="button" value="Past Audits"></div>
        </a>

        <td width='200'><div class="btn-group">
        <a href="generalSurvey.php?venueid=<?php echo $venue['venueid']; ?>&type=<?php echo $venue['type']?>">
        <input type="button" value="New Audit"></div>
        </a>

        <td width='200'><div class="btn-group">
        <input type="button" value="Published"></div>

        
        <?php endforeach;?>
    </table>
  </body>

  <?php include "../public/footer.php" ?>

</div>
