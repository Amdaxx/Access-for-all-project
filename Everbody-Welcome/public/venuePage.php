<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This page displays the venue information including venue name, venue type and the venue's answers to the general survey.">
    <title>Venue Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">  
    <link rel="stylesheet" href="../css/topNavHome.css">  
    <link rel="stylesheet" href="../css/overall-page.css">
  </head>
  <body>
    <?php include "publicHeader.php" ?>
    <div class="container">
      <div class="text-center">
        <h2>Venue Name: Venue Type</h2>
        <img src="../pictures/worldIcon.png" alt="world icon" width="225" height="225">
      </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="col-xs-12">
            <hr>
            <p><strong>Question 1:</strong> What is the venue's capacity?</p>
            <p>The venue can hold up to 500 people.</p>
            <hr>
            <p><strong>Question 2:</strong> Are there parking facilities?</p>
            <p>Yes, there is a parking lot available for guests.</p>
            <hr>
            <p><strong>Question 3:</strong> Is the venue accessible for people with disabilities?</p>
            <p>Yes, the venue is wheelchair accessible.</p>
            <hr>
            <p><strong>Question 4:</strong> What is the venue's location?</p>
            <p>The venue is located in downtown, close to the subway station.</p>
            <hr>
            <p><strong>Question 5:</strong> Does the venue provide catering services?</p>
            <p>Yes, the venue has its own catering service that can provide food and drinks.</p>
          </div>
        </div>
      </div>

      <div class="text-center">
        <button class="btn btn-primary" onclick="window.location.href='../public/contactVenue.php';">Contact This Venue</button>
      </div>

      
    </div> 

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
  <?php include "footer.php" ?>
</html>
