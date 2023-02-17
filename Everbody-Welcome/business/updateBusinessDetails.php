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
    $_SESSION['name'] = $_POST['cname'];
    updateBusinessDetails($_SESSION['id'], $_POST['cname'], $_POST['post'],  $_POST['address'], $_POST['phone']);
  }
  ?>    
</div>



<body>
    <img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="logo" class="logo">
<form id = "centerform" method="post" >
  <div class="form-group row">
      <label for="cName" class="col-sm-2 col-form-label">Company Name </label>
      <div class="col-sm-6">
        <input type="text" name="cname" class="form-control" id="cName" value="<?php echo $res[0];?>"> <br>
      </div>
    </div>
    <div class="form-group row">
      <label for="mail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="mail" value="<?php echo $res[4];?>"> <br>
      </div>
    </div>
    <div class="form-group row">
      <label for="addr" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-6">
        <input type="text" name="address" class="form-control" id="addr" value="<?php echo $res[2];?>"> <br>
      </div>
    </div>

    <div class="form-group row">
      <label for="pstcde" class="col-sm-2 col-form-label">Postcode</label>
      <div class="col-sm-6">
        <input type="text" name="post"  class="form-control" id="pstcde" value="<?php echo $res[1];?>"> <br>
      </div>
    </div>
    
    <div class="form-group row">
    <label for="num" class="col-sm-2 col-form-label">Contact Number</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="phone" id="num" value="<?php echo $res[3];?>"> <br>
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
