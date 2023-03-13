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
</head>

<div class="flex-wrapper">
  <div id="header">
      <?php include "businessHeader.php";
      $res = displayBusinessDetails($_SESSION['id']);
      ?>  
  </div>

  <body style = "background-color:cdc7c7">
  <?php
;
  ?>
    <div class = "row">
      <div class="twocolumn">
        <div class="button-background">
          <btn-group>
            <button><a href="viewVenues.php">View Venues</a></button>
            <button><a href="createVenue.php">Create New Venue</a></button>
            <button><a href="updateBusinessDetails.php">Edit Company Information</a></button>
          </btn-group>
        </div>
      </div>

      
      <div class="twocolumn" >
        <div class ="company-info">
          <h1><b>Company Information</b></h1>
          <p><u>Company Name: </u> </p>
          <?php echo $res[0]; ?>
          <p><u>Email: </u></p>
          <?php  echo $res[4]?>
          <p><u>Address: </u></p>
          <?php echo $res[2]; ?>
          <p><u>Post Code: </u></p>
          <?php echo $res[1]; ?>
          <p><u>Contact Number: </u></p>
          <?php echo $res[3]; ?>
          <p><u>Venues Added: </u></p>       
          <?php echo $res[5]; ?>
        </div> 
      </div> 
    </div> 
  </div>

  

  </body>
  <?php include "../public/footer.php" ?>
  
</div>  
