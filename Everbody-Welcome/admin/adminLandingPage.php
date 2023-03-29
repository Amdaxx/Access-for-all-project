<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";
include '../public/publicHeader.php';


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
<meta name="description" content="This page displays the options available to the admin - view questions, add question, delete question.">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E 


<link rel="stylesheet" href="../css/table.css">
</head>

<div class="flex-wrapper">

  <body style = "background-color:cdc7c7">

  <div class = "adminButtons"> 
    <a href="adminViewQuestions.php?type=general"><button class="btn btn-primary btn-md">Update General Survey</button></a>
    <a href="adminViewQuestions.php?type=premium"><button class="btn btn-primary btn-md">Update Premium Survey</button></a>
  </div>

  <?php  $res = viewBusiness();
  ?>
  
  <div class="table-container">
  <table class="Admintable">
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
  <?php include '../public/footer.php';?>

</div>

  </body>

</div>
