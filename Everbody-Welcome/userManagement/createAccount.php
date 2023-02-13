<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavhome.css">

<header>
    <div id="header">
      <ul>
        <li><a href="http://localhost/Access-for-all-project/Everbody-Welcome/userManagement/userLogin.php">Log In</a></li>
        <button2 onclick="window.location.href='http://localhost/Access-for-all-project/Everbody-Welcome/public/landingPage.php';" type= "button" ><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"></img></button2>
        <li style="float:right"><a class="active" href="http://localhost/Access-for-all-project/Everbody-Welcome/userManagement/createAccount.php">Create Account</a></li>
      </ul>    
    </div>
  </header>

<body>
    <img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="logo" class="logo">
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
    <label for="addr" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="addr" placeholder="Address"> <br>
    </div>
  </div>

  <div class="form-group row">
    <label for="pstcde" class="col-sm-2 col-form-label">PostCode</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="pstcde" placeholder="PostCode"> <br>
    </div>
  </div>
  <div class="form-group row">
  <label for="num" class="col-sm-2 col-form-label">Contact Number</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="num" placeholder="Contact Number"> <br>
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
include 'C:\xampp\htdocs\Access-for-all-project\Everbody-Welcome\public\footer.php'
?>