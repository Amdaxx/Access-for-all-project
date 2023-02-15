

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">

<body style = "background-color:cdc7c7">
  <div id="header">
    <?php include "businessHeader.php" ?>    
  </div>
  <div class="button-background">
    <btn-group>
      <button><a href="createVenue.php">Create New Venue</a></button>
      <button><a href="viewVenues.php">View Venues</a></button>
      <button><a href="updateBusinessDetails.php">Edit Company Information</a></button>
    </btn-group>
  </div>
<div>
  <div class = "background-counter"><h1 class = "counter-text">Days since last audit</h1></div>
  <div class="internal-shape"></div>
</div>
  <?php include "../public/footer.php" ?>
  </body>