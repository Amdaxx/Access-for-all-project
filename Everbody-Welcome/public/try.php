

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

$sql1 = "CREATE TABLE logs(
    logid VARCHAR(10) NOT NULL PRIMARY KEY ,
    email VARCHAR(30) NOT NULL,
    pwd VARCHAR(300) NOT NULL,
    stat VARCHAR(30) NOT NULL 
)";
$sql2 = "CREATE TABLE businessinfos(
    logid VARCHAR(10) NOT NULL PRIMARY KEY ,
    companyName VARCHAR(30) NOT NULL,
    postcode VARCHAR(10) NOT NULL,
    address VARCHAR(30) NOT NULL,
    phone VARCHAR(15) NOT NULL
)";
$sql3 = "CREATE TABLE venues(
    venueid VARCHAR(10) NOT NULL PRIMARY KEY ,
    logid VARCHAR(10) NOT NULL,
    venuename VARCHAR(30) NOT NULL,
    address VARCHAR(30) NOT NULL,
    postcode VARCHAR(10) NOT NULL,
    type VARCHAR(15) NOT NULL ,
    numberofaudits NOT NULL
)";
$sql4 = "CREATE TABLE questions(
    question VARCHAR(50) NOT NULL
    )";
$sql5 = "CREATE TABLE audits(
    venueid VARCHAR(10) NOT NULL ,
    question VARCHAR(50) NOT NULL ,
    answer VARCHAR(3) NOT NULL ,
    comment VARCHAR(40) ,
    proof VARCHAR(30) ,
    auditnumber INTEGER NOT NULL 
)";
if ($mysqli->query($sql1) === TRUE) {
    echo "Table logs created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }
  if ($mysqli->query($sql2) === TRUE) {
    echo "Table businessinfo created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }
  if ($mysqli->query($sql3) === TRUE) {
    echo "Table venues created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }
  if ($mysqli->query($sql4) === TRUE) {
    echo "Table questions created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }
  if ($mysqli->query($sql5) === TRUE) {
    echo "Table audits created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }
?>
