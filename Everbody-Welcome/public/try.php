

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


$sql1 = "CREATE TABLE venues(
    venueid VARCHAR(10) NOT NULL PRIMARY KEY ,
    logid VARCHAR(10) NOT NULL,
    venuename VARCHAR(30) NOT NULL,
    address VARCHAR(30) NOT NULL,
    postcode VARCHAR(10) NOT NULL,
    type VARCHAR(15) NOT NULL,
    numberofaudits NOT NULL
)";


  if ($mysqli->query($sql1) === TRUE) {
    echo "Table venues created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }

?>

