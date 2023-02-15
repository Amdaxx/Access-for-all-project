

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">

<body style = "background-color:cdc7c7">
  <div id="header">
    <?php include "businessHeader.php";
     $res = displayBusinessDetails($_SESSION['id']);
     echo $res[0]['companyName'];
     
    ?>    
  </div>
  <div class="button-background">
    <btn-group>

      <button><a href="survey.php">New Audit</a></button>
      <button>Edit Audit</button>
      <button><a href="updateBusinessDetails.php">Edit Company Information</a></button>
    </btn-group>
  </div>
<div>
  <div class = "background-counter">
    <h1 class = "counter-text">Company Information</h1>
    <br><br>
    <p class="text"><u><hr>Company Name: </u> </p><br>
    <p class="text"><u><hr>Email: </u></p><br>
    <p class="text"><u><hr>Address: </u></p><br>
    <p class="text"><u><hr>Post Code: </u></p><br>
    <p class="text"><u><hr>Contact Number: </u></p><br>
    <p class="text"><u><hr>Venues Added: </u></p><br>    
  </div>
</div>
  <?php include "../public/footer.php" ?>
  </body>