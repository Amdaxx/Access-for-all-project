<?php
require_once('../SQL/sql.php');


$dbname = 'afpproject-database';
$servername = 'afpproject-server.mysql.database.azure.com';
$username = 'adel';
$password = 'adel';



// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";