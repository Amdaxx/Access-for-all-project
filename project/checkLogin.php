<?php
function verifyUser () {
    if (!isset($_POST['usrname']) or !isset($_POST['password'])){
        return;  // <-- return null;  
    }

    $db = new mysql();
    $stmt = $db->prepare();
    $stmt->bindParam();
    $stmt->bindParam();
 
    $result = $stmt->execute();
    $rows_array = [];
    while ($row=$result->fetchArray())
    {
        $rows_array[]=$row;
    }
    return $rows_array;
}