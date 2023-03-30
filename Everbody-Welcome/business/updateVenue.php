<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";


session_start();

if (!isset($_SESSION['business'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); //calling the function from session.php

$id = $_SESSION['id']; 

?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/forms.css">  
    <title>Update Venue</title>
  </head>
  <div class="flex-wrapper">
    <div id="header">
      <?php include "businessHeader.php";
      if (isset($_POST['submit'])){
        updateVenue($_GET['id'], $_POST['name'], $_POST['post'],  $_POST['address'], $_POST['type']);
      }
      
      $res = viewVenues2($_GET['id']);
      $venueName;
      $venueAddress;
      $venuePostcode;
      $venueType;
     
      foreach ($res as $venue){
      $venueName = $venue['venuename'];
      $venueAddress = $venue['address'];
      $venuePostcode = $venue['postcode'];
      $venueType = $venue['type'];
      
      }
      ?>    
    </div>
    <body>
      <div class="login-container" style = "min-height:100%">

        <div id="formz">
          <form id = "centerform" method="post" onsubmit="return validateForm()" style="margin-top:auto;margin-bottom:auto;">
            <div class="form-group row">
                <label for="vName" class="col-sm-5 col-form-label">Venue name</label>
                <div class="col-sm-8"style="width: 57.66666667%;">
                <input type="text" class="form-control" name="name" id="vName" value="<?php echo $venueName; ?>"> <br>
                </div>
            </div>
            <div class="form-group row">
                <label for="vAddress" class="col-sm-5 col-form-label">Venue address</label>
                <div class="col-sm-8"style="width: 57.66666667%;">
                <input type="text" class="form-control" name="address" id="vAddress" value="<?php echo $venueAddress; ?>"> <br>
                </div>
            </div>
            <div class="form-group row">
                <label for="vPostcode" class="col-sm-5 col-form-label">Postcode</label>
                <div class="col-sm-8"style="width: 57.66666667%;">
                <input type="text" name="post" class="form-control" id="vPostcode" value="<?php echo $venuePostcode; ?>"> <br>
                </div>
            </div>
            <div class="form-group row">
                <label for="typeOfVenue" class="col-sm-5 col-form-label">Type of Venue</label>
                <div class="col-sm-8"style="width: 57.66666667%;">
                    <select name="type" id="typeOfVenue">
                        <option value="Accommodation">Accommodation</option>
                        <option value="Experience">Experience</option>
                        <option value="Tours">Tours</option>
                        <option value="Events">Events</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" name ="submit" class="btn btn-primary">Update Venue</button>
            </div>
            </div>
          </form>
        </div>  
      </div>  
    </body>
    <?php include "../public/footer.php" ?>
  </div>  
</html>