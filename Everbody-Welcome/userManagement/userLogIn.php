<?php


include_once("sql.php");
if (isset($_POST['submit'])){
    verifyLogin($_POST['email'], $_POST['pwd']);
    }
  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login Form</title>
    <link rel="stylesheet" href="../css/userManagementStyle.css"/>
  </head>
  <body>
    <div class="login-container">
      <div class="login-form">
        <h2>Login Form</h2>
        <form method="post">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />

          <label for="password">Password</label>
          <input type="password" id="pwd" name="pwd" required />


          <button type="submit" name="submit" >Login</button>


        </form> 
        <p>Don't have an account? <a href="createAccount.php">Sign up</a></p>
      </div>
    </div>
  </body>
</html>