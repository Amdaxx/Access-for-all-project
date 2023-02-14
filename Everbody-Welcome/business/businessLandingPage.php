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


<div id="header">
  <ul>
    <li style = "font-size: 40px" >Company Name Here</li>
    <img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"></img>
    <li style="float:right"><a class="active" href="http://localhost/Access-for-all-project/Everbody-Welcome/public/landingPage.php">Sign Out</a></li>
  </ul>    
</div>

<div class="Srec1" ><br><br>
  <h1 id="viewAudit"><a href="#">View Audits</a></h1>
</div>

<div class="Srec2" ><br><br>
  <h1 id="newAudit"><a href="#">New Audits</a></h1>
</div>

      <div class="Srec3" ><br>
        <h1 id="EDI"><a href="updateBusinessDetails.php">Edit Company information</a></h1>
      </div>

      