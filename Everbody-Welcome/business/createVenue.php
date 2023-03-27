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
if (isset($_POST['submit'])){
  createVenue($_SESSION['id'], $_POST['venueName'], $_POST['venueAddress'],  $_POST['postcode'], $_POST['city'], $_POST['typeOfVenue']);
  }

?>
  
  
  <html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">  
    <link rel="stylesheet" href="../css/topNavHome.css">
    <link rel="stylesheet" href="../css/overall-page.css">
    <title>Create Venue</title>
    <meta name="description" content="This page displays the information about a given venue and allows the user to edit and save this
    information.">
  </head>
  <div class="flex-wrapper">
    <div id="header">
      <?php include "businessHeader.php";
      ?>    
    </div>

    <script>

function validateForm() {
  var x = document.forms["centerform"]["venueName"].value;
  if (x == "" || x == null) {
    alert("Venue name must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["venueAddress"].value;
  if (x == "" || x == null) {
    alert("Venue address must be filled out");
    return false;
  }

  var x = document.forms["centerform"]["postcode"].value;
  if (x == "" || x == null) {
    alert("Postcode must be filled out");
    return false;
  }
}

</script>

    <div class="row">
      <div class = "onecolumn">
        <aboutUs>
          <h2 >Create a Venue</h2>
        </aboutUs>
      </div>
    </div>
      

    <form id = "centerform" method="post" onsubmit="return validateForm()">
      <div class="form-group row">
          <label for="vName" class="col-sm-2 col-form-label">Venue name</label>
          <div class="col-sm-6">
          <input type="text" class="form-control" id="vName" placeholder="Venue Name" name="venueName"> <br>
          </div>
      </div>
      <div class="form-group row">
          <label for="vAddress" class="col-sm-2 col-form-label">Venue address</label>
          <div class="col-sm-6">
          <input type="text" class="form-control" id="vAddress" placeholder="Venue Address" name="venueAddress"> <br>
          </div>
      </div>
      <div class="form-group row">
          <label for="vPostcode" class="col-sm-2 col-form-label">Postcode</label>
          <div class="col-sm-6">
          <input type="text" class="form-control" id="vPostcode" placeholder="Venue Postcode" name="postcode"> <br>
          </div>
      </div>

      <div class="form-group row">
          <label for="vPostcode" class="col-sm-2 col-form-label">City</label>
          <div class="col-sm-6">
          <input type="text" class="form-control" id="vCity" placeholder="Venue City" name="city"> <br>
          </div>
      </div>

        <div class="form-group row">
            <label for="typeOfVenue" class="col-sm-2 col-form-label">Type of Venue</label>
            <div class="col-sm-6">
                <select name="typeOfVenue" id="typeOfVenue">
                    <option  value="Accommodation">Accommodation</option>
                    <option  value="Experience">Experience</option>
                    <option  value="Tours">Tours</option>
                    <option  value="Events">Events</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" name ="submit" class="btn btn-primary" >Create Venue</button>
          </div>
        </div>
      </form>
    
    </body>
    <?php include "../public/footer.php" ?>
  </div>
</html>
