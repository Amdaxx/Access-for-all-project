<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">  
<link rel="stylesheet" href="../css/topNavHome.css">  
<link rel="stylesheet" href="../css/overall-page.css">
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Venue Page</title>
  </head>
  <body>
    <div class="flex-wrapper">
      <?php include "publicHeader.php" ?>  
      <div class="text-center">
        <font size="+2">
          <h2>Venue Name: Venue Type</h2>
          <img src="../pictures/worldIcon.png" alt="world icon" width="225" height="225"></img>
        </font>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <div class="col-xs-12">
            <p style="font-size: 1.5em;"><strong>Question 1:</strong> What is the venue's capacity?</p>
            <p style="font-size: 1.2em;"><strong>Answer:</strong> The venue can hold up to 500 people.</p>
            <hr>
            <p style="font-size: 1.5em;"><strong>Question 2:</strong> Are there parking facilities?</p>
            <p style="font-size: 1.2em;"><strong>Answer:</strong> Yes, there is a parking lot available for guests.</p>
            <hr>
            <p style="font-size: 1.5em;"><strong>Question 3:</strong> Is the venue accessible for people with disabilities?</p>
            <p style="font-size: 1.2em;"><strong>Answer:</strong> Yes, the venue is wheelchair accessible.</p>
            <hr>
            <p style="font-size: 1.5em;"><strong>Question 4:</strong> What is the venue's location?</p>
            <p style="font-size: 1.2em;"><strong>Answer:</strong> The venue is located in downtown, close to the subway station.</p>
            <hr>
            <p style="font-size: 1.5em;"><strong>Question 5:</strong> Does the venue provide catering services?</p>
            <p style="font-size: 1.2em;"><strong>Answer:</strong> Yes, the venue has its own catering service that can provide food and drinks.</p>
          </div>
        </div>
      </div>
      <hr>
      <?php include "footer.php" ?>
      <button class="btn btn-primary btn-lg" style="position: fixed; bottom: 20px; right: 20px;" onclick="window.location.href='../public/contactVenue.php';">Contact This Venue</button>
    </div> 
  </body>
</html>
