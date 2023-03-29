<?php
include_once("../SQL/sql.php");
if (isset($_POST['submit'])){
    verifyLogin($_POST['email'], $_POST['pwd']);
    }
  
?>


<link rel="stylesheet" href="../css/userManagementStyle.css">

<?php include '../public/publicHeader.php';?>
<body>
<div class="login-container">
    <div class="login-form">
    <h2>Business Portal</h2>
    <form method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="pwd" name="pwd">

        <button type="submit" name="submit" >Login</button>
    </form> 
    <p>Don't have an account? <a style="color:black" href="../userManagement/createAccount.php">Sign up</a></p>
    </div>
</div>
</body>
<?php include '../public/footer.php';?>
