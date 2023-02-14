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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavhome.css">

<body style = "background-color:cdc7c7">
  <div id="header">
    <?php include "businessHeader.php" ?>    
  </div>
  <div class="button-background">
    <btn-group>
      <button>New Audit</button>
      <button>Edit Audit</button>
      <button>Edit Company Information</button>
    </btn-group>
  </div>
  <?php include "../public/footer.php" ?>
  </body>