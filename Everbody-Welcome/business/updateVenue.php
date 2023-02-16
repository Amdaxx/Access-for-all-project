<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavHome.css">  
    <title>Update Venue</title>
  </head>

  <body>
     <div id="header">
      <?php include "businessHeader.php" ?>    
    </div>

    <div class="row">
      <div class = "onecolumn">
        <aboutUs>
          <h2>Update a Venue</h2>
        </aboutUs>
      </div>
    </div>

    <div class="seventyfive">
      <form id = "centerform" onsubmit="return validateForm()">
        <div class="form-group row">
            <label for="vName" class="col-sm-2 col-form-label">Venue name</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="vName" placeholder="Venue Name"> <br>
            </div>
        </div>
        <div class="form-group row">
            <label for="vAddress" class="col-sm-2 col-form-label">Venue address</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="vAddress" placeholder="Venue Address"> <br>
            </div>
        </div>
        <div class="form-group row">
            <label for="vPostcode" class="col-sm-2 col-form-label">Postcode</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="vPostcode" placeholder="Venue Postcode"> <br>
            </div>
        </div>
        <div class="form-group row">
            <label for="typeOfVenue" class="col-sm-2 col-form-label">Type of Venue</label>
            <div class="col-sm-6">
                <select name="typeOfVenue" id="typeOfVenue">
                    <option value="Accommodation">Accommodation</option>
                    <option value="Airbnb">Airbnb</option>
                    <option value="Experience">Experience</option>
                    <option value="Tours">Tours</option>
                    <option value="Events">Events</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" name ="submit" class="btn btn-primary">Create Venue</button>
        </div>
      </div>
      </form>
    </div>
  </body>
  <?php include "../public/footer.php" ?>
</html>
