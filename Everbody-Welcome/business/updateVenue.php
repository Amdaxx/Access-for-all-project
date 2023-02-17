<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavHome.css">  
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/overall-page.css">
    <title>Update Venue</title>
  </head>

  <div class="flex-wrapper">

    <div id="header">
      <?php include "businessHeader.php" ?>    
    </div>

    <body style="margin-top:20px">
      <form id = "centerform" onsubmit="return validateForm()">
        <div class="form-group row">
            <label for="vName" class="col-sm-2 col-form-label">Venue name</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="vName" value="Venue Name"> <br>
            </div>
        </div>
        <div class="form-group row">
            <label for="vAddress" class="col-sm-2 col-form-label">Venue address</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="vAddress" value="Venue Address"> <br>
            </div>
        </div>
        <div class="form-group row">
            <label for="vPostcode" class="col-sm-2 col-form-label">Postcode</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="vPostcode" value="Venue Postcode"> <br>
            </div>
        </div>
        <div class="form-group row">
            <label for="typeOfVenue" class="col-sm-2 col-form-label">Type of Venue</label>
            <div class="col-sm-6">
                <select name="typeOfVenue" id="typeOfVenue">
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
    </body>
    <?php include "../public/footer.php" ?>
  </div>  
</html>
