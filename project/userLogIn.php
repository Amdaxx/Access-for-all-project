<?php
//require_once("checkLogin.php");
$nameErr = $pwderr = $invalidMesg = "";
if (isset($_POST['submit'])) {
    if ($_POST["userName"]=="") {
        $nameErr = "Username is required";
    } 
    if ($_POST["password"]==null) {
        $pwderr = "Password is required";
    }
    if($_POST['usrname'] != null && $_POST["password"] !=null)
    {
        //$array_user = verifyUser();
        if ($array_user != null) {
            session_start();
            
            $_SESSION['userID'] = $array_user[0]['UserName'];
            header(""); 
            exit();
        }
        else{
            $invalidMesg = "Invalid username and password!";
        }
    }
}




?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">  
<link rel="stylesheet" href="topNavhome.css">


    <div id="header">
      <ul>
        <li><a href="userLogin.php">Log In</a></li>
        <button2 onclick="window.location.href='landingPage.php';" type= "button" ><img src="Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"></img></button2>
        <li style="float:right"><a class="active" href="createAccount.php">Create Account</a></li>
      </ul>    
    </div>
  <body>
    <br><br><br>
    <img src="Everybody-Welcome-logo.png" alt="logo" class="logo">
        <form id = "centerform">
        <div class="form-group row">
            <label for="mail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
            <input type="email" class="form-control" id="mail" placeholder="Email"> <br>
            </div>
        </div>
        <div class="form-group row">
            <label for="pwd" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
            <input type="password" class="form-control" id="pwd" placeholder="Password"> <br>
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
            <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </div>
        </form>
</body>
    </main>
</div>