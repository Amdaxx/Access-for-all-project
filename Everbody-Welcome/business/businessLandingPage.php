<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";


session_start();

if (!isset($_SESSION['business'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); //calling the function from session.php

$id = $_SESSION['id']; 
?>

<head>
<title>Business Landing Page</title>
<meta name="description" content="This page displays information about the user's account such as company name and email. Also,
on this page there are links to the venues pages (view venues and create new venue) as well as a link to edit company information.">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="../css/businessHomepage.css">
<link rel="stylesheet" href="../css/overall-page.css">
</head>




<div class="flex-wrapper">
  <div id="header">
      <?php include "businessHeader.php";
      $res = displayBusinessDetails($_SESSION['id']);
      ?>  
  </div>

  <body style = "background-color:cdc7c7">

  <div class="homeButtons"> 
    <button class="btn btn-primary btn-lg"><a href="venueVenues.php">View Venues</a></button>
    <button class="btn btn-primary btn-lg"><a href="updateBusinessDetails.php">Edit Company Info</a></button>
    <button class="btn btn-primary btn-lg"><a href="#">Add New Venue</a></button>
</div>

<?php
$res = viewVenues($_SESSION['id']);
if($res!=NULL){
?>
    <table class="table table-striped table-bordered">  
        <thead>
            <tr>
                <th>Venue Name</th>
                <th>Venue Type</th>
                <th>Venue Postcode</th>
                <th>Venue Address</th>
                <th>Premium</th>
                <th>Edit Venue Details</th>
                <th>View Past Audits</th>
                <th>New Audit</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($res as $venue):?>
            <tr>
                <td><?php echo $venue['venuename']; ?></td>
                <td><?php echo $venue['type']; ?></td>
                <td><?php echo $venue['postcode']; ?></td>
                <td><?php echo $venue['address']; ?></td>
                <td><?php echo $venue['premium']; ?></td>
                <td><a href="updateVenue.php?id=<?php echo $venue['venueid']; ?>" class="btn btn-info">Edit</a></td>
                <td><a href="previousAudits.php?venueid=<?php echo $venue['venueid']; ?>" class="btn btn-info">View</a></td>
                <td><a href="generalSurvey.php?venueid=<?php echo $venue['venueid']; ?>&number=<?php echo $venue['numberofaudits']?>" class="btn btn-success">New</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
<?php } 
else{
    echo "<p>You have no venues, you can create one</p>";
}
?>

  

  </body>
  <?php include "../public/footer.php" ?>
  
</div>  
