<?php
require_once("checkLogin.php");
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
        $array_user = verifyUser();
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
<div class="container pb-5">
    <main role="main" class="pb-3">
        <h2>User Login</h2><br>
        <div class="row">
            <div class="col-6">
                <form method="post">
                <div class="form-group col-md-6">
                        <label class="control-label labelFont">User Name</label>
                        <input class="form-control" type="text" name = "usrname">
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
            </div>
        </div>
    </main>
</div>