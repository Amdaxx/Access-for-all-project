

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">

<body style = "background-color:cdc7c7">

  <div id="header">
    <?php include "businessHeader.php";
     $res = displayBusinessDetails($_SESSION['id']);
     
    ?>    
  </div>

  <div class="twocolumn">
    <div class="button-background">
      <btn-group>
        <button><a href="survey.php">New Audit</a></button>
        <button><a href="survey.php">Edit Audit</a></button>
        <button><a href="updateBusinessDetails.php">Edit Company Information</a></button>
      </btn-group>
    </div>
  </div>

  <div class = "row">
    <div class="twocolumn">
      <h1 class = "counter-text">Company Information</h1>
      <p class="text"><u>Company Name: </u> </p>
      <?php echo $res[0]; ?>
      <p class="text"><u>Email: </u></p>
      <?php  echo $res[4]?>
      <p class="text"><u>Address: </u></p>
      <?php echo $res[1]; ?>
      <p class="text"><u>Post Code: </u></p>
      <?php echo $res[2]; ?>
      <p class="text"><u>Contact Number: </u></p>
      <?php echo $res[3]; ?>
      <p class="text"><u>Venues Added: </u></p>       
      <?php echo $res[5]; ?>
    </div> 
  </div>

  <?php include "../public/footer.php" ?>

</body>