<?php
require_once('../SQL/sql.php');



$servername = 'afpproject-server.mysql.database.azure.com';
$username = 'adel';
$password = 'adel';
$dbname = 'afpproject-database';


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";