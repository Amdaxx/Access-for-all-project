<?php
include_once("../SQL/sql.php");
if (isset($_POST['submit'])){
    createAdmin($_POST['email'], $_POST['pwd']);
    }
?>

<div>
<form method="post">
    <label for="">email</label>
    <input type="text" name="email">
    <label for="">password</label>
    <input type="text" name="pwd">
    <button type="submit" name="submit" value="login">create admin</button>
</form>
</div>