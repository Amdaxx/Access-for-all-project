

<html>
  <head>
    <title> Everybody Welcome</title>
    <meta name="description" content="This page displays pictures for each member of the Everybody Welcome team and some information
    about each team member.">
    <link rel="stylesheet" href="../css/topNavHome.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/overall-page.css">
  </head>
  <div class="flex-wrapper">
    <div id="header">
      <?php include "publicHeader.php" ?>    
    </div>

    <body style = "background-color:cdc7c7">
      <div class="row">
          <div class = "onecolumn">
              <h3 ><b>Meet The Team</b></h3>

          </div>
          </div>
          <div class="row">
          <div class="column">
              <div class="card">
              <img  src="../pictures/jane.jpg" alt="Jane" style="width:300px; height: 400px ">
              <h2>Jane Doe</h2>
              <p class="title">CEO &amp; Founder</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>example@example.com</p>
              <p><button class="button">Contact</button></p>
              </div>
          </div>

          <div class="column">
              <div class="card">
              <img src="../pictures/charlie.jpg" alt="Charlie" style="width:300px; height: 400px">
              <h2>Mike Ross</h2>
              <p class="title">Art Director</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>example@example.com</p>
              <p><button class="button">Contact</button></p>
              </div>
          </div>

          <div class="column">
              <div class="card">
              <img src="../pictures/mo.jpg" alt="Mo" style="width:300px; height: 400px">
              <h2>John Doe</h2>
              <p class="title">Designer</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>example@example.com</p>
              <p><button class="button">Contact</button></p>
              </div>
          </div>
      </div>
    </body>
    <?php include "footer.php" ?>
  <div> 
</html>
