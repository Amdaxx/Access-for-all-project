<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">  

<header>
  <link rel="stylesheet" href="style.css">  
    <div class="topnav">
      <a href="landingPage.php">Home</a>
      <a href="adminPage.php">Admin Page</a>
    </div>
  </header>

<body>
    <img src="Everybody-Welcome-logo.png" alt="logo" class="center">
<form>
<div class="form-group row">
    <label for="cName" class="col-sm-2 col-form-label">Company Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="cName" placeholder="Company Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="mail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="mail" placeholder="Email">
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