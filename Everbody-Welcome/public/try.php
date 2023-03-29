<?php
 
echo "conn 1:";

/* Attempt to connect to MySQL database */
$mysqli = new mysqli('afpproject-server.mysql.database.azure.com', 'tkgwwyrhag', 'Blackdown12345', 'afadb');
 

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
    echo "Connected successfully!";
}







$sql4 = "CREATE TABLE questions(
  question VARCHAR(50) NOT NULL ,
  type VARCHAR(30) NOT NULL,
  surveytype VARCHAR(30) NOT NULL 
)";



$sql3 = "CREATE TABLE venues(
  venueid VARCHAR(10) NOT NULL PRIMARY KEY ,
  logid VARCHAR(10) NOT NULL,
  venuename VARCHAR(30) NOT NULL,
  address VARCHAR(30) NOT NULL,
  postcode VARCHAR(10) NOT NULL,
  city VARCHAR(20) NOT NULL,
  type VARCHAR(15) NOT NULL,
  premium VARCHAR(3) NOT NULL,
  numberofaudits INTEGER NOT NULL,
  picture BLOB
)";

if (mysqli_query($mysqli, $sql3)) {
  echo "Table venues created successfully";
} else {
  echo "Error deleting table: " . mysqli_error($mysqli);
}

if (mysqli_query($mysqli, $sql4)) {
  echo "Table questions created successfully";
} else {
  echo "Error deleting table: " . mysqli_error($mysqli);
}





/*
$sql0 = "DROP TABLE transactions";

if (mysqli_query($mysqli, $sql0)) {
    echo "Table deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($mysqli);
}

  $sql25 = "CREATE TABLE transactions(
    id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    customer_name varchar(50)  COLLATE utf8_unicode_ci NOT NULL,
    customer_email varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    item_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    item_number varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    item_price float(10,2) NOT NULL,
    item_price_currency varchar(10) COLLATE utf8_unicode_ci NOT NULL,
    paid_amount float(10,2) NOT NULL,
    paid_amount_currency varchar(10) COLLATE utf8_unicode_ci NOT NULL,
    txn_id varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    payment_status varchar(25) COLLATE utf8_unicode_ci NOT NULL,
    stripe_checkout_session_id varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
    created datetime NOT NULL,
    modified datetime NOT NULL
  )";

if (mysqli_query($mysqli, $sql25)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($mysqli);
}

*/


/*


*/

/*
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
*/
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
