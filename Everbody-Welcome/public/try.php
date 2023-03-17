

<?php


define("DB_NAME", "afadb");
 
echo "conn 1:";

/* Attempt to connect to MySQL database */
$mysqli = new mysqli('afpproject-server.mysql.database.azure.com', 'tkgwwyrhag', 'Blackdown12345', 'afadb');
 

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
    echo "Connected successfully!";
}


$sql0 = "DROP TABLE generalsurveyresults";

if (mysqli_query($mysqli, $sql0)) {
    echo "Table deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($mysqli);
}



$sql1 = "CREATE TABLE generalsurveyresults(
    venueid VARCHAR(10) NOT NULL ,
    question VARCHAR(50) NOT NULL ,
    answer VARCHAR (3) NOT NULL ,
    auditnumber INTEGER NOT NULL
    )";

if ($mysqli->query($sql1) === TRUE) {
    echo "Table recordaudits created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }

/*
$sql1 = "CREATE TABLE recordaudits(
    venueid VARCHAR(10) NOT NULL  ,
    auditnumber VARCHAR(30) NOT NULL,
    type VARCHAR(30) NOT NULL,
    dates DATE NOT NULL
)";

$sql2 = "CREATE TABLE generalsurveyresults(
    venueid VARCHAR(10) NOT NULL ,
    question VARCHAR(50) NOT NULL ,
    answer VARCHAR (3) NOT NULL ,
    auditnumber INTEGER NOT NULL
    )";

$sql3 = "CREATE TABLE advancedsurveyresults(
    venueid VARCHAR(10) NOT NULL ,
    question VARCHAR(50) NOT NULL ,
    answer VARCHAR(3) NOT NULL ,
    comment VARCHAR(40) ,
    proof VARCHAR(30) ,
    auditnumber INTEGER NOT NULL 
)";

$sql4 = "CREATE TABLE question(
    question VARCHAR(50) NOT NULL ,
    type VARCHAR(30) NOT NULL 
)";


  if ($mysqli->query($sql2) === TRUE) {
    echo "Table generalsurveyresults created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }

  if ($mysqli->query($sql3) === TRUE) {
    echo "Table advancedresults created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }

  if ($mysqli->query($sql4) === TRUE) {
    echo "Table questions created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }

?>

*/
