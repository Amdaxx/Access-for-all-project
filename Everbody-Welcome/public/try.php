

<?php


define("DB_NAME", "afadb");
 
echo "conn 1:";

/* Attempt to connect to MySQL database */
$mysqli = new mysqli('afpproject-server.mysql.database.azure.com', 'tkgwwyrhag', 'Blackdown12345', 'afadb');
 
// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
    echo "Connected successfully!";
}
?>
