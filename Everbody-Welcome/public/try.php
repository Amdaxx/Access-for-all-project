

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

$sql = "DROP TABLE venues";

// Execute the query
if (mysqli_query($mysqli, $sql)) {
    echo "Table deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($mysqli);
}

$sql2 = "CREATE TABLE venues(
    venueid VARCHAR(10) NOT NULL PRIMARY KEY ,
    logid VARCHAR(10) NOT NULL,
    venuename VARCHAR(30) NOT NULL,
    address VARCHAR(30) NOT NULL,
    postcode VARCHAR(10) NOT NULL,
    type VARCHAR(15) NOT NULL,
    numberofaudits INTEGER NOT NULL
)";

if ($mysqli->query($sql2) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $mysqli->error;
  }

?>

