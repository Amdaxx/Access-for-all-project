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
<<<<<<< Updated upstream

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">  
<link rel="stylesheet" href="topNavhome.css">


 <div id="header">
      <ul>
        <li style = " font-size: 40px">Log In As: </li>
        <li><a href="userLogin.php">Business</a></li>
        <li><a href="userLogin.php">Site Admin</a></li>
        <li style="float:right"><a class="active" href="createAccount.php">Create Account</a></li>
      </ul>    
    </div>
  <head><h2> Business Login</h2></head>

  <body>
    <img src="Everybody-Welcome-logo.png" alt="logo" class="logo">
        <form>
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
=======
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">  
<div class="container pb-5">
    <main role="main" class="pb-3">
        <h2>Login</h2><br>
        <div class="row">
            <div class="col-6">
                <form>
                <div class="form-group col-md-6">
                        <label class="control-label labelFont">User Name</label>
                        <input class="form-control" type="text" name = "username">
                        <span class="text-danger"><?php echo $nameErr; ?></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label labelFont">Password</label>
                        <input class="form-control" type="password" name = "password">
                        <span class="text-danger"><?php echo $pwderr; ?></span>
                    </div>

                    <div class="form-group col-md-4">
                        <input class="btn btn-primary" type="submit" value="Login" name ="submit">
                    </div>
                </form>
>>>>>>> Stashed changes
            </div>
        </div>
        </form>
</body>
    </main>
</div>