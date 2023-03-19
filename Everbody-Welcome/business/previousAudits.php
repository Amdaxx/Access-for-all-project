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
<link rel="stylesheet" href="../css/venueTableStyle.css">
<link rel="stylesheet" href="../css/overall-page.css">

<style>

  table {
    top:20px;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
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

  <?php 
  $res = getAudits($_GET['venueid']);
  ?>
  <body>
    <div style="overflow-x:auto;   top: 20px;position: relative;">
      <table class="center" border='1' style='border-collapse:collapse'>
        <th>Audit Number</th>
        <th>Audit Type</th>
        <th>Date Submitted</th>
        <th>View Audit</th>
      </tr>
      <?php foreach ($res as $venue): ?>
      <tr class = "data">
        <td><?php echo $venue['auditnumber']?></td>
        <td><?php echo $venue['type']?></td>
        <td><?php echo $venue['dates']?></td>
        <td><input type="button" value="View Audit" onclick="window.location.href='../business/viewAudits.php';"></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>

<?php include "../public/footer.php" ?>

</div>