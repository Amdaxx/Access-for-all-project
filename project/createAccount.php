<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">  
<link rel="stylesheet" href="topNavhome.css">

<header>
    <div id="header">
      <ul>
        <li style = " font-size: 40px">Log In As: </li>
        <li><a href="userLogin.php">Business</a></li>
        <li><a href="userLogin.php">Site Admin</a></li>
        <li style="float:right"><a class="active" href="createAccount.php">Create Account</a></li>
      </ul>    
    </div>
  </header>

<body>
    <img src="Everybody-Welcome-logo.png" alt="logo" class="logo">
<form id = "centerform" >
<div class="form-group row">
    <label for="cName" class="col-sm-2 col-form-label">Company Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="cName" placeholder="Company Name"> <br>
    </div>
  </div>
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
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
</body>
<?php
include 'footer.php'
?>