<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="description" content="This page provides a descriptio of the website and links to other website sections.">
    <title> Everybody Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/topNavHome.css"/>
    <link rel="stylesheet" href="../css/overall-page.css">
  </head>
  <div class="flex-wrapper">
    <div id="header">
        <?php include "publicHeader.php" ?>    
      </div>

    <body style = "background-color:cdc7c7">
    
      <div>
        <p style = "font-size:40 ;  width: 100%;text-align: center"><b>Everybody Welcome</b></p>
      </div>

      <div class="row">
        <div class = "onecolumn">
          <aboutUs>
            <h3><b>About Us</b></h3>
            <p style= "font-size:22px">
            There are one billion people in the world with additional access needs, including over 14 million disabled
            people in the U.K.
            <br>
            93% will search for access information about your venue before they visit and, if they can't find what they
            are looking for, 41% will take their business elsewhere meaning that you could be missing out on valuable
            custom just for the sake of providing relevant information*.
            <br>
            But what information should you provide? How should you provide it, when should you promote it and
            where?
            <br>
            Everybody Welcome is the easy way to share your accessibility information and welcome the world.
            So what are you waiting for?
            <br>
            <button4 style="cursor:pointer" onclick="window.location.href='../userManagement/createAccount.php';" type= "button"><b>Start creating your listing now!</b> <button4>
            </p>
          </aboutUs>
        </div>
      </div>


      <div class="row">
        <div class="column">
          <div class="card">
            <h3><b>Search For Venue</b></h3>
            <button1 onclick="window.location.href='searchForVenue.php';" type= "button" ><img src="../pictures/worldIcon.png" alt="world icon" width="225" height="225"></img></button1>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <h3><b>More Information</b></h3>
            <button1 onclick="window.location.href='ourServices.php';" type= "button" ><img src="../pictures/peopleIcon.png" alt="people icon" width="225" height="225"></img></button1>
          </div>
        </div>
        
        <div class="column">
          <div class="card">
            <h3><b>Contact Us</b></h3>
            <button1 onclick="window.location.href='contactUs.php';" type= "button" ><img src="../pictures/contactUsIcon.png" alt="contact us icon" width="225" height="225"></img></button1>
          </div>
        </div>
      </div>

    </body>
    
    <?php include "footer.php" ?>
  </div>
</html>
