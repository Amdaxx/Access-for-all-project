<?php
require_once('../SQL/sql.php');

echo "hehe";

$servername = 'afpproject-server.mysql.database.azure.com';
$username = 'tkgwwyrhag';
$password = 'RI41G4S77ZWA1QYW';
$dbname = 'afpproject-database';
try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}?>