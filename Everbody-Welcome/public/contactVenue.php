<!DOCTYPE html>
<html>
<head>
  <title>Contact Venue</title>
  <meta name="description" content="This page contains two entry boxes, one to enter a message and the other to enter their email,
  in order to allow users to contact each venue.">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">  
  <link rel="stylesheet" href="../css/topNavHome.css">  
  <link rel="stylesheet" href="../css/overall-page.css">
</head>
<body>
  <div class="flex-wrapper">
    <div id="header">
        <?php include "publicHeader.php" ?>    
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Contact Venue</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3>To: Venue Name</h3>
          <textarea placeholder="Enter Your Message Here" name="comment" rows="10" class="form-control"></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="form-group">
              <label for="email">From:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Your Email Here">
            </div>
            <button type="submit" class="btn btn-default">Send</button>
          </form>
        </div>
      </div>
    </div>

    <?php include "footer.php" ?>
  </div>  
</body>
</html>
