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

      @media screen and (max-width: 1400px) {
        .grid-container{
          display:block;
          text-align: center;
          width: 100%
        }
      }

      @media screen and (max-width: 1400px) {
        .columnones{
          display:block;
          text-align: center;
          width: 100%
        }
      }

      @media screen and (max-width: 1100px) {
        .columnones {
          display:flex;
          justify-content: center;
        }
      }

    </style>
    <title> Everybody Welcome</title>
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavHome.css"/>
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/overall-page.css"/>
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
          <input type="text" placeholder="Search.." name="search"style="width: 600px; margin-left:25% ">
          <button type="submit">Submit</button>
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
            <div class="grid-item"><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"><br>Everyone Welcome</div>
            <div class="grid-item"><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"><br>Everyone Welcome</div>
            <div class="grid-item"><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"><br>Everyone Welcome</div>
            <div class="grid-item"><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"><br>Everyone Welcome</div>
            <div class="grid-item"><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"><br>Everyone Welcome</div>
            <div class="grid-item"><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"><br>Everyone Welcome</div>
            <div class="grid-item"><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"><br>Everyone Welcome</div>
            <div class="grid-item"><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"><br>Everyone Welcome</div>
            <div class="grid-item"><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"><br>Everyone Welcome</div>
          </div>
        </div>
      </div>
    </body>
    
    <?php include "footer.php" ?>
  </div>
</html>
