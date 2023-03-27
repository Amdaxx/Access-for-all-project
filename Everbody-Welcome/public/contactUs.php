<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <meta name="description" content="This page displays the contact information for EverybodyWelcome as well as two entry boxes
  to allow the user to enter their message to send and their email address to send the message from.">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">  
  <link rel="stylesheet" href="../css/topNavHome.css">  
  <link rel="stylesheet" href="../css/overall-page.css">
</head>
<body>
  <div class="flex-wrapper">
    <div id="header">
        <?php include "publicHeader.php" ?>    
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Contact Us</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3>To: Everybody Welcome</h3>
          <form method="post" action="contactForm.php">
            <textarea placeholder="Enter Your Message Here" name="comment" rows="10" class="form-control"></textarea>
            <div class="form-group">
              <label for="email">From:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Here">
            </div>
            <button type="submit" name="submit" class="btn btn-default">Send</button>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class = "twocolumn" >
              <div class="box">
                <img class = "icons" style="vertical-align:middle" src="../pictures/phone-icon.png" alt="phone icon" >
                <span><h3>(+44) 7459 204578</h3></span>
              </div>
            </div>

            <div class = "twocolumn" >
              <div class="box">
                <img class = "icons" style="vertical-align:middle" src="../pictures/email-icon.jpg" alt="email logo">
                <span><h3>EverybodyWelcome@gmail.com</h3></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</body>
<?php
