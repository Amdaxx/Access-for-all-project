

<?php


define("DB_NAME", "afadb");
 
echo "conn 1:";

/* Attempt to connect to MySQL database */
$mysqli = new mysqli("afpproject-server.mysql.database.azure.com", "tkgwwyrhag", "Blackdown12345", "afadb");
 
// Check connection
if($mysqli === false){
    echo "c'est pas bon du tt";
}
else
{
    echo "c'est good kho";
}

?>

<br>
<br>
<br>

<?php
echo "conn 2:";

/* Attempt to connect to MySQL database */
$mysqli = new mysqli("afpproject-server.mysql.database.azure.com", "tkgwwyrhag", "Blackdown12345", "afpproject-database");
 
// Check connection
if($mysqli === false){
    echo "c'est pas bon du tt";
}
else
{
    echo "c'est good kho";
}