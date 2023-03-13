

<?php


define("DB_NAME", "afadb");
 
echo "conn 1:";

/* Attempt to connect to MySQL database */
$mysqli = new mysqli('afpproject-server.mysql.database.azure.com', 'tkgwwyrhag', 'Blackdown12345', 'afadb');
 

echo "hello";

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
    echo "Connected successfully!";
}




$sql = "CREATE TABLE venues(
  venueid VARCHAR(10) NOT NULL PRIMARY KEY ,
  logid VARCHAR(50) NOT NULL ,
  venuename VARCHAR(3) NOT NULL ,
  address VARCHAR(40) ,
  postcote VARCHAR(10) ,
  type VARCHAR(15) NOT NULL ,
  numberofaudits INTEGER NOT NULL

)";



  if ($mysqli->query($sql) === TRUE) {
    echo "Table questions created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }


?>

