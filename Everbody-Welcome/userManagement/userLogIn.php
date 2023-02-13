<?php
include_once("sql.php");
if (isset($_POST['submit'])) {
    verifyLogin($_POST['email'], $_POST['pass']);
}




?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavhome.css">


    <div id="header">
      <ul>
        <li><a href="http://localhost/Access-for-all-project/Everbody-Welcome/userManagement/userLogin.php">Log In</a></li>
        <button2 onclick="window.location.href='http://localhost/Access-for-all-project/Everbody-Welcome/public/landingPage.php';" type= "button" ><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"></img></button2>
        <li style="float:right"><a class="active" href="http://localhost/Access-for-all-project/Everbody-Welcome/userManagement/createAccount.php">Create Account</a></li>
      </ul>    
    </div>
  <body>
    <br><br><br>
    <img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="logo" class="logo">
        <form id = "centerform" method="post">
        <div class="form-group row">
            <label for="mail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
            <input type="email" class="form-control" id="mail" name="email" placeholder="Email"> <br>
            </div>
        </div>
        <div class="form-group row">
            <label for="pwd" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
            <input type="password" class="form-control" id="pwd" name="pass" placeholder="Password"> <br>
            <input type="checkbox" onclick="myFunction()">Show Password

            <script>
        function myFunction() {
        var x = document.getElementById("pwd");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
        </script>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" name="submit" class="btn btn-primary">Log in</button>
            </div>
        </div>
        </form>
        <?php include  'C:\xampp\htdocs\Access-for-all-project\Everbody-Welcome\public\footer.php' ?>
    </body>
    </main>
</div>