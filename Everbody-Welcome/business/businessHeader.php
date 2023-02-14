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

<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavhome.css">

<div id="header">
  <ul>
    <li> <img style = "float:left;" src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"></img></li>
    <li style = "font-size: 40px" ><?php echo $_SESSION['name']?></li>
    <li style="float:right"><a class="active" href="http://localhost/Access-for-all-project/Everbody-Welcome/public/landingPage.php">Sign Out</a></li>
  </ul>    
</div>

