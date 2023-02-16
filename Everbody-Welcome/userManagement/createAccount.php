<?php
require_once('../SQL/sql.php');

if (isset($_POST['submit'])){
    createUser($_POST['email'], $_POST['password'],  $_POST['companyName'], $_POST['phone'], $_POST['postcode'], $_POST['address']);
    }
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavhome.css">


<script>
function validateForm() {
  var x = document.forms["centerform"]["companyName"].value;
  if (x == "" || x == null) {
    alert("Company name must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["email"].value;
  if (x == "" || x == null) {
    alert("Company address must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["address"].value;
  if (x == "" || x == null) {
    alert("Company address must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["postcode"].value;
  if (x == "" || x == null) {
    alert("Postcode must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["phone"].value;
  if (x == "" || x == null) {
    alert("Company phone number must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["password"].value;
  if (x == "" || x == null) {
    alert("Password must be filled out");
    return false;
  }
}
</script>

<div id="header">
  <?php include "../public/publicHeader.php" ?>     
</div>
<body>
    <form style = "padding-top: 50px;" id = "centerform" method="post" onsubmit="return validateForm()">
    <div class="form-group row">
    <label for="cName" class="col-sm-2 col-form-label">Company Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="cName" placeholder="Company Name" name="companyName"> <br>
    </div>
  </div>
  <div class="form-group row">
    <label for="mail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="mail" placeholder="Email" name="email"> <br>
    </div>
  </div>


  <div class="form-group row">
    <label for="addr" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="addr" placeholder="Address" name="address"> <br>
    </div>
  </div>

  <div class="form-group row">
    <label for="pstcde" class="col-sm-2 col-form-label">PostCode</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="pstcde" placeholder="PostCode" name="postcode"> <br>
    </div>
  </div>
  <div class="form-group row">
  <label for="num" class="col-sm-2 col-form-label">Contact Number</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="num" placeholder="Contact Number" name="phone"> <br>
    </div>
  </div>
  <div class="form-group row">
    <label for="pwd" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="password"> <br>
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
      <button type="submit" name ="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
</body>
<?php include  '../public/footer.php' ?>