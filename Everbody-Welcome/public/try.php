<?php

echo "hello"
?>
<br>

<?php


 $conn = mysqli_init();
 mysqli_ssl_set($conn,NULL,NULL, "{path to CA cert}", NULL, NULL);
 mysqli_real_connect($conn, "afpproject-server.mysql.database.azure.com", "tkgwwyrhag", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);

if($conn->connect_error)
{
    echo "MERDE";
}
?>