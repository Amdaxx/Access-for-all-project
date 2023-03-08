<?php

echo "hello"
?>
<br>

<?php


 $conn = mysqli_init();
 mysqli_ssl_set($conn,NULL,NULL, "../public/DigiCertGlobalRootCA.crt", NULL, NULL);
 if(mysqli_real_connect($conn, "afpproject-server.mysql.database.azure.com", "tkgwwyrhag", "Blackdown12345", "afpproject-database", 3306, MYSQLI_CLIENT_SSL)==TRUE)
 {
    echo "oui";
 }
 else
 {
    echo "non";
 }


?>