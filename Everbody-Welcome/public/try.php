

<?php

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "../public/DigiCertGlobalRootCA.crt", NULL, NULL);
if (!$conn) {
    die("mysqli_init failed");
    echo "A";
}

if (!mysqli_real_connect($conn, "afpproject-server.mysql.database.azure.com", "tkgwwyrhag", "Blackdown12345", "afpproject-database", 3306, MYSQLI_CLIENT_SSL)) {
    die("Connect Error: " . mysqli_connect_error());
    echo "B";
}

if ($conn) {
    echo "Connection successful!";
}



?>