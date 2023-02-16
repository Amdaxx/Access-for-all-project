<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavhome.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/overall-page.css">
</head>

<div id="header">
  <?php include "businessHeader.php";
  $res = displayBusinessDetails($_SESSION['id']);
  if (isset($_POST['submit'])){
    updateBusinessDetails($_SESSION['id'], $_POST['cname'], $_POST['post'],  $_POST['address'], $_POST['phone']);
    $_SESSION['name'] = $_POST['cname'];
  
  }
  ?>    
</div>

<script>
function validateForm() {
  var x = document.forms["centerform"]["cname"].value;
  if (x == "" || x == null) {
    alert("Company name must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["address"].value;
  if (x == "" || x == null) {
    alert("Company address must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["post"].value;
  if (x == "" || x == null) {
    alert("Postcode must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["phone"].value;
  if (x == "" || x == null) {
    alert("Company phone number must be filled out");
    return false;
  }
}

</script>

<body>
    <img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="logo" class="logo">
<form id = "centerform" method="post" onsubmit="return validateForm()">
<div class="form-group row">
    <label for="cName" class="col-sm-2 col-form-label">Company Name </label>
    <div class="col-sm-6">
      <input type="text" name="cname" class="form-control" id="cName" placeholder="<?php echo $res[0];?>"> <br>
    </div>
  </div>
  <div class="form-group row">
    <label for="mail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" name = "mail" class="form-control" id="mail" placeholder="<?php echo $res[4];?>"> <br>
    </div>
  </div>
  <div class="form-group row">
    <label for="addr" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-6">
      <input type="text" name="address" class="form-control" id="addr" placeholder="<?php echo $res[2];?>"> <br>
    </div>
  </div>

  <body>
      <img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="logo" class="logo">
  <form id = "centerform" method="post">
  <div class="form-group row">
      <label for="cName" class="col-sm-2 col-form-label">Company Name </label>
      <div class="col-sm-6">
        <input type="text" name="cname" class="form-control" id="cName" placeholder="<?php echo $res[0];?>"> <br>
      </div>
    </div>
    <div class="form-group row">
      <label for="mail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="mail" placeholder="<?php echo $res[4];?>"> <br>
      </div>
    </div>
    <div class="form-group row">
      <label for="addr" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-6">
        <input type="text" name="address" class="form-control" id="addr" placeholder="<?php echo $res[2];?>"> <br>
      </div>
    </div>

    <div class="form-group row">
      <label for="pstcde" class="col-sm-2 col-form-label">PostCode</label>
      <div class="col-sm-6">
        <input type="text" name="post" class="form-control" id="pstcde" placeholder="<?php echo $res[1];?>"> <br>
      </div>
    </div>
    
    <div class="form-group row">
    <label for="num" class="col-sm-2 col-form-label">Contact Number</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="phone" id="num" placeholder="<?php echo $res[3];?>"> <br>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
      <button type="submit" name ="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </form>
  </body>

  <?php include "../public/footer.php"?>
  
</div>  
