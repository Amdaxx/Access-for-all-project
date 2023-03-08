

<?php

define("DB_SERVER", "afpproject-server.mysql.database.azure.com" );
define("DB_USERNAME", "tkgwwyrhag");
define("DB_PASSWORD", "Blackdown12345");
define("DB_NAME", "afadb");
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>