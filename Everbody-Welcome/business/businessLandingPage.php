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

      
      <?php
   $res = viewVenues($_SESSION['id']);
   if($res!=NULL){
  ?>
    <table>  
      <th>Venue Name</th>
      <th>Venue Type</th>
      <th>Venue Postcode</th>
      <th>Venue Address</th>
      <th>Premium</th>
      <th>Edit Venue Details</th>
      <th>View Past Audits</th>
      <th>New Audit</th>
  
      <?php foreach ($res as $venue):?>
      <tr class = "data">
        <td width='250'><?php echo $venue['venuename']; ?></td>
        <td width='60'><?php echo $venue['type']; ?></td>
        <td  width='250'><?php echo $venue['postcode']; ?></td>
        <td  width='250'><?php echo $venue['address']; ?></td>
        <td  width='250'><?php echo $venue['premium']; ?></td>
        
        <td width='200'><div class="btn-group">
        <a href="updateVenue.php?id=<?php echo $venue['venueid']; ?>">
        <input type="button" value="Edit Venue Details"></div>
        </a>

        <td width='200'><div class="btn-group">
        <a href="previousAudits.php?venueid=<?php echo $venue['venueid']; ?>">
        <input type="button" value="Past Audits"></div>
        </a>

        <td width='200'><div class="btn-group">
        <a href="generalSurvey.php?venueid=<?php echo $venue['venueid']; ?>&number=<?php echo $venue['numberofaudits']?>">
        <input type="button" value="New Audit"></div>
        </a>
        <?php endforeach;?>
    </table>
        <?php } 
        else{
                  echo "You have no venues you can create one";
        }
        ?>

  

  </body>
  <?php include "../public/footer.php" ?>
  
</div>  
