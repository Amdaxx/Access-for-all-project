<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";


session_start();

if (!isset($_SESSION['uadmin'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); //calling the function from session.php

$id = $_SESSION['id']; 
?>