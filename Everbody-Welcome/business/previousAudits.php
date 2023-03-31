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
<title>Previous Audits</title>
<meta name="description" content="This page displays the audit number, audit type, date submitted and a button to view the previous audits.">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="../css/businessHomepage.css">
<link rel="stylesheet" href="../css/table.css">
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

  <div class = "homeButtons"> 
    <a href="qrcode.php?venueid=<?php echo $_GET['venueid']?>"><button class="btn btn-primary btn-md">Generate Qr Code To Your Latest Audit</button></a>
  </div>


  <div class="table-container">
  <table class="table">
    <thead>
      <tr>
       <th>Audit Number</th>
        <th>Audit Type</th>
        <th>Date Submitted</th>
        <th>View Audit</th>
      </tr>
    </thead>
    <?php foreach ($res as $venue):?>
    <tbody>
      <tr>
      <td width='250'><?php echo $venue['auditnumber']; ?></td>
      <td width='250'><?php echo $venue['type']; ?></td>
      <td width='250'><?php echo $venue['dates']; ?></td>
      <td width='250'>
        <?php 
        $type ="";
        if($venue['type'] =="Advanced Survey")
        {
          $type = "premium";
        }
        else
        {
          $type = "general";
        }
        ?>
        <a href="surveyResults.php?venueid=<?php echo $venue['venueid'];?>&type=<?php echo $type;?>&number=<?php echo $venue['auditnumber'];?>">
        <?php echo "View Audit"; ?>
        </a>
      </td>
      </tr>
    </tbody>
    <?php endforeach;?>
  </table>
</div>
</body>

<?php include "../public/footer.php" ?>

</div>