

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">

<body style = "background-color:cdc7c7">
  <div id="header">
    <?php include "businessHeader.php";
     $res = displayBusinessDetails($_SESSION['id']);
     
    ?>    
  </div>
  <div class="button-background">
    <btn-group>

      <button><a href="survey.php">New Audit</a></button>
      <button>Edit Audit</button>
      <button><a href="updateBusinessDetails.php">Edit Company Information</a></button>
    </btn-group>
  </div>
  <div class="col-3 col-s-12">
    <div class="background-counter">
    <h1 class = "counter-text">Company Information</h1>
    <br><br>
    <p class="text"><u>Company Name: </u> </p>
    <br>
    <?php echo $res[0]; ?>
    <hr>
    <p class="text"><u>Email: </u></p>
    <br>
    <?php  echo $res[4]?>
    <hr>
    <p class="text"><u>Address: </u></p>
    <br>
    <?php echo $res[1]; ?>
    <hr>
    <p class="text"><u>Post Code: </u></p>
    <br>
    <?php echo $res[2]; ?>
    <hr>
    <p class="text"><u>Contact Number: </u></p>
    <br>
    <?php echo $res[3]; ?>
    <hr>
    <p class="text"><u>Venues Added: </u></p>
    <br>    
    <?php echo $res[5]; ?>
  </div>
</div>
  <?php include "../public/footer.php" ?>
  </body>