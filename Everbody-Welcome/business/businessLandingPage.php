<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">
</head>

<body style = "background-color:cdc7c7">

  <div id="header">
    <?php include "businessHeader.php";
     $res = displayBusinessDetails($_SESSION['id']);
    ?>  
  </div>

  <div class = "row">
    <div class="twocolumn">
      <div class="button-background">
        <btn-group>
          <button><a href="viewVenues.php">View Venues</a></button>
          <button><a href="createVenue.php">Create New Venue</a></button>
          <button><a href="updateBusinessDetails.php">Edit Company Information</a></button>
        </btn-group>
      </div>
    </div>

    
    <div class="twocolumn" >
      <div class ="company-info">
        <h1><b>Company Information</b></h1>
        <p><u>Company Name: </u> </p>
        <?php echo $res[0]; ?>
        <p><u>Email: </u></p>
        <?php  echo $res[4]?>
        <p><u>Address: </u></p>
        <?php echo $res[1]; ?>
        <p><u>Post Code: </u></p>
        <?php echo $res[2]; ?>
        <p><u>Contact Number: </u></p>
        <?php echo $res[3]; ?>
        <p><u>Venues Added: </u></p>       
        <?php echo $res[5]; ?>
      </div> 
    </div> 
  </div>

  <?php include "../public/footer.php" ?>

</body>