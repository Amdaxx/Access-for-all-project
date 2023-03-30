<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";


session_start();

if (!isset($_SESSION['business'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); 

$id = $_SESSION['id']; 

if (isset($_POST['delete'])){
	deleteVenue($_POST['venueid']);
}
?>

<head>
<title>Business Landing Page</title>
<meta name="description" content="This page displays information about the user's account such as company name and email. Also,
on this page there are links to the venues pages (view venues and create new venue) as well as a link to edit company information.">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 

<link rel="stylesheet" href="../css/table.css">

</head>




<div class="flex-wrapper">
  <div id="header">
      <?php include "../business/businessHeader.php";
      $res = displayBusinessDetails($_SESSION['id']);
      ?>  
  </div>

  <body style = "min-height:100vh;background-color:#ddd">

  <div class = "homeButtons"> 
    <a href="createVenue.php"><button class="btnss">Add Venues</button></a>
    <a href="updateBusinessDetails.php"><button class="btnss">Edit Company Info</button></a>
  </div>
      
      <?php
   $res = viewVenues($_SESSION['id']);
   if($res!=NULL){
  ?>

<div class="table-container">
  <table class="table">
    <thead>
      <tr>
        <th>Venue Name</th>
        <th>Venue Type</th>
        <th>Postcode</th>
        <th>Address</th>
        <th>Premium</th>
        <th>Action</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php foreach ($res as $venue):?>
    <tbody>
      <tr>
      <td width='250'><?php echo $venue['venuename']; ?></td>
      <td width='250'><?php echo $venue['type']; ?></td>
      <td width='250'><?php echo $venue['postcode']; ?></td>
      <td width='250'><?php echo $venue['address']; ?></td>
      <td width='250'><?php echo $venue['premium']; ?></td>
      <td width='200'><div class="btn-group">

        <a href="updateVenue.php?id=<?php echo $venue['venueid']; ?>">
        <input style = "color:black" type="button" value="Edit Venue Details"></div>
        </a>
    
        <td width='200'><div class="btn-group">
        <a href="generalSurvey.php?venueid=<?php echo $venue['venueid']; ?>&number=<?php echo $venue['numberofaudits']?>">
        <input style = "color:black" type="button" value="Take General Audit"></div>
        </a>

        <?php if($venue['premium']=="NO"):?>
        <td width='200'><div class="btn-group">
        <a href="index.php?venueid=<?php echo $venue['venueid']; ?>">
        <input style = "color:black" type="button" value="Go Premium"></div>
        </a>
        <?php endif; ?>

        <?php if($venue['premium']=="YES"):?>
        <td width='200'><div class="btn-group">
        <a href="advancedSurvey.php?venueid=<?php echo $venue['venueid']; ?>">
        <input style = "color:black" type="button" value="Take Advanced Audit"></div>
        </a>
        <?php endif; ?>

        <td width='200'><div class="btn-group">
        <a href="previousAudits.php?venueid=<?php echo $venue['venueid']; ?>">
        <input style = "color:black" type="button" value="Past Audits"></div>
        </a>

        <form method="POST">
        <td width='200'>
        <div class="btn-group">
        <a href="businessLandingPage.php"> 
        <button class="option" name="delete" style = "color:black">Delete</button>
        </div>
        </a>
        
        </form>

      </tr>
    </tbody>
    <?php endforeach;?>
  </table>
</div>
        <?php } 
        else{
                  echo "You have no venues you can create one";
        }
        ?>

  

  </body>
</div>  
<?php include "../public/footer.php" ?>
