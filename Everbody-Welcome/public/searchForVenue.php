<html>
  <head>
    <style>
      .rows{
        width:100%;
      }


      .columnones{
        float: left;
      }

      .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        background-color: #696969;
        padding: 10px;
      }

      .grid-item {
        background-color:cdc7c7;
        border: 3px solid #696969;
        padding: 20px;
        font-size: 30px;
        text-align: center;
      }
      .sidebar {
        padding:10px;
        margin-left: 20px;
        width: 200px;
        background-color:cdc7c7;
        border-color: #696969;
        border-width: 13px;
        border-style: solid;
      }

      @media screen and (max-width: 1000px) {
        .grid-container{
          display:block;
          text-align: center;
          width: 100%;
          margin-left:auto;
          margin-right:auto;
        }
      }

      @media screen and (max-width: 1400px) {
        .columnones{
          display: contents;
          padding-bottom: 20px;
        }
      }

      @media screen and (max-width: 1400px) {
        .sidebar{
          margin-left:auto;
          margin-right:auto;
          margin-bottom:20px;
        }
      }

      @media screen and (max-width: 1000px) {
        .SearchBar{
          display:block;
          margin-bottom:10px;
          margin-left:auto;
          margin-right:auto;
        }
      }
      .SearchBar{
          display:block;
          margin-bottom:10px;
          margin-left:auto;
          margin-right:auto;
        }


    </style>
    <title> Everybody Welcome</title>
    <link rel="stylesheet" href="../css/topNavHome.css"/>
    <link rel="stylesheet" href="../css/overall-page.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
  </head>

  <div class = "flex-wrapper">
    <div id="header">
      <?php include "publicHeader.php" ?>    
    </div>

    <body style = "background-color:cdc7c7">

      <div>
        <p style = "font-size:40 ; color:black; width: 100%;text-align: center"><b>Search for a Venue</b></p>
      </div>
      
      <div class="SearchBar">
        <form action="/action_page.php">
          <input type="text" placeholder="Search For A Venue By Name" name="search"style="width: 350px; height:35px;text-align: center; font-size:18px">
          <button style="height:30px ;font-size:18px" type="submit" >Search</button>
        </form>
      </div>

      <div class = "rows">
        <div class = "columnones" style = "width:15%">
          <div class="sidebar">
            <h2 class="w3-bar-item">Filter Search</h2>
            <h4 class="w3-bar-item">Venue Type:</h4>
            <input type="checkbox" id="vType" name="VenueType" value="vType">
            <label for="vehicle1"> Accommodation</label><br>

            <input type="checkbox" id="vType" name="VenueType" value="vType">
            <label for="vehicle1"> Experience</label><br>

            <input type="checkbox" id="vType" name="VenueType" value="vType">
            <label for="vehicle1"> Tours</label><br>

            <input type="checkbox" id="vType" name="VenueType" value="vType">
            <label for="vehicle1"> Events</label><br>


            <input type="text" class="form-control" id="pstcode" name="PostCode" placeholder="PostCode" style="width: 100px"> <br>
            <input type="text" class="form-control" id="Distance" name="Distance" placeholder="Distance" style="width: 100px"> <br>
          </div>
        </div>

        <div class = "columnones"style = "width:85%">
          <div class="grid-container" >
            <div class="grid-item"><img src="../pictures/dummyPictures/venue1.jpg" alt="Logo" width="100" height="50" onclick="window.location.href='../public/venuePage.php';"><br>Donnigton Parkhouse</div>
            <div class="grid-item"><img src="../pictures/dummyPictures/venue2.jpg" alt="Logo" width="100" height="50"><br>City Hall</div>
            <div class="grid-item"><img src="../pictures/dummyPictures/venue3.jpg" alt="Logo" width="100" height="50"><br>American Embassy</div>
            <div class="grid-item"><img src="../pictures/dummyPictures/venue4.jpg" alt="Logo" width="100" height="50"><br>Village Hall</div>
            <div class="grid-item"><img src="../pictures/dummyPictures/venue5.jpg" alt="Logo" width="100" height="50"><br>Twycross School</div>
            <div class="grid-item"><img src="../pictures/dummyPictures/venue6.jpg" alt="Logo" width="100" height="50"><br>Chester Zoo</div>
            <div class="grid-item"><img src="../pictures/dummyPictures/venue7.jpg" alt="Logo" width="100" height="50"><br>Wembley Premier Inn</div>
            <div class="grid-item"><img src="../pictures/dummyPictures/venue8.jpg" alt="Logo" width="100" height="50"><br>Camp Nou</div>
            <div class="grid-item"><img src="../pictures/dummyPictures/venue9.jpg" alt="Logo" width="100" height="50"><br>Ponds Forge</div>
          </div>
        </div>
      </div>
    </body>
    
    <?php include "footer.php" ?>
  </div>
</html>
