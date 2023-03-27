<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";


session_start();

if (!isset($_SESSION['uadmin'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); //calling the function from session.php

$id = $_SESSION['id']; 
?>

<head>
<title>Admin Landing Page</title>
<h1>Admin Page</h1>
<meta name="description" content="This page displays the options available to the admin - view questions, add question, delete question.">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 

<link rel="stylesheet" href="../css/overall-page.css">
<link rel="stylesheet" href="../css/table.css">
</head>

<div class="flex-wrapper">
  <div id="header">
      
        
  </div>

  <body style = "background-color:cdc7c7">
    
      
        <div class="button-background">
          <btn-group>
            <button><a href="viewVenues.php">View Questions</a></button>
            <button><a href="createVenue.php">Add Question</a></button>
            <button><a href="updateBusinessDetails.php">Delete Question</a></button>
          </btn-group>
        </div>    
  </div>

  <?php $res = viewBusiness();
  ?>
  <div class="table-container">
  <table class="table">
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Phone</th>
        <th>Postcode</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($res as $business):?>
      <tr>
        <td><?php echo $business['companyName']?></td>
        <td><?php echo $business['phone']?></td>
        <td><?php echo $business['postcode']?></td>
        <td><?php echo $business['address']?></td>
        <td>VIEW</td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

  </body>
  
</div>  