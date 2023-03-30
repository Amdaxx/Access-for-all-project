<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";
include '../public/adminHeader.php';


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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
<style>
    .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 80vh;
  }
  </style>
  <link rel="stylesheet" href="../css/table.css">
</head>

<div class="flex-wrapper">

  <body style = "background-color:ddd">
  <div class="container">
    <h1>Admin Portal<h1>
    <div class = "adminButtons"> 
      <a href="adminViewQuestions.php?type=general"><button class="admin">Update General Survey</button></a>
      <a href="adminViewQuestions.php?type=premium"><button class="admin">Update Premium Survey</button></a>
    </div>

    <?php  $res = viewBusiness();
    ?>

    <div class="table-container" style="align-items: center;border-width:7px;border-color:linear-gradient(45deg, #f857a8, #ff5858);">
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
        <?php foreach($res as $business):?>
          <tbody>
          <tr>
          <td><?php echo $business['companyName']?></td>
            <td><?php echo $business['phone']?></td>
            <td><?php echo $business['postcode']?></td>
            <td><?php echo $business['address']?></td>
            <td>VIEW</td>

          </tr>
        </tbody>
        <?php endforeach;?>
      </table>
        </div>

    

    </div>
  </div>
  </body>
  

<?php include '../public/footer.php';?>


</div>
