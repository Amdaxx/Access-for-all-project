<html>
  <head>
    <title> Everybody Welcome</title>
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavHome.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
  </head>

  <body style = "background-color:cdc7c7">
    <div id="header">
      <?php include "publicHeader.php" ?>    
    </div>
   
    <div>
      <p style = "font-size:40 ;  width: 100%;text-align: center"><b>Everybody Welcome</b></p>
    </div>


    <div class="row">
      <div class = "onecolumn">
        <aboutUs>
          <h3><b>About Us</b></h3>
          <p style= "font-size:22px">
            Professional access consultancy, training, auditing and design appraisal
            services to clients large and small across all sectors. People are at the heart of 
            everything we do because people make change happen. Working in partnership, we enable people to 
            create places, services and experiences which are accessible and inclusive for all.
            
          </p>
        </aboutUs>
      </div>
    </div>


    <div class="row">
      <div class="column">
        <div class="card">
<<<<<<< HEAD
          <h3>Search For Venue</h3>
          <button1 onclick="window.location.href='http://localhost/Access-for-all-project/Everbody-Welcome/public/searchForVenue.php';" type= "button" ><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/worldIcon.png" alt="world icon" width="225" height="225"></img></button1>
=======
          <h3><b>Search For Venue</b></h3>
          <button1 onclick="window.location.href='searchForVenue.php';" type= "button" ><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/worldIcon.png" alt="world icon" width="225" height="225"></img></button1>
>>>>>>> 7f5ccb9c76a03b1486936d708a9059ec344200df
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h3><b>Our Services</b></h3>
          <button1 onclick="window.location.href='ourServices.php';" type= "button" ><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/peopleIcon.png" alt="people icon" width="225" height="225"></img></button1>
        </div>
      </div>
      
      <div class="column">
        <div class="card">
          <h3><b>Contact Us</b></h3>
          <button1 onclick="window.location.href='contactUs.php';" type= "button" ><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/contactUsIcon.png" alt="contact us icon" width="225" height="225"></img></button1>
        </div>
      </div>
    </div>
    <?php include "footer.php" ?>
  </body>


</html>
