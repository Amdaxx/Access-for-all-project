<?php

echo "hello"
?>
<br>

<?php


 $conn = mysqli_init();
 mysqli_ssl_set($conn,NULL,NULL, "{path to CA cert}", NULL, NULL);
 mysqli_real_connect($conn, "afpproject-server.mysql.database.azure.com", "tkgwwyrhag", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);

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
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);   
mysqli_query($conn, $sql3);   
mysqli_query($conn, $sql4);   
mysqli_query($conn, $sql5);


?>