<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavHome.css">  
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/overall-page.css">
<html>
  <head>
    <title>Contact Us</title>
  </head>
  <div class="flex-wrapper">
    <div id="header">
        <?php include "publicHeader.php" ?>    
    </div>

    <body>
      <div class="row">
        <div class = "onecolumn">
          <aboutUs>
            <h2 >Contact Us</h2>
          </aboutUs>
        </div>
      </div>

      <div class="seventyfive">
        <h3>To: Access For All</h3>
        <h3><textarea placeholder="Enter Your Message Here" style = "overflow:scroll;max-width:95%;" name="comment" rows="10" cols="150"></textarea></h3>
        <h3>From: <input type="text" placeholder="Enter Your Email Here">
        <button onClick="window.location.href=window.location.href">Submit</button>
      </h3>

        <div class="row">

          <div class = "twocolumn" >
            <div class="box">
              <img class = "icons" style="vertical-align:middle" src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/phone-icon.png" alt="phone icon" >
              <span style=""><h3>(+44) 7459 204578</h3></span>
            </div>
          </div>

          <div class = "twocolumn" >
            <div class="box">
              <img class = "icons" style="vertical-align:middle" src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/email-icon.jpg" alt="email logo">
              <span style=""><h3>EverybodyWelcome@gmail.com</h3></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </body>
    <?php include "footer.php" ?>
  </div>  
</html>
