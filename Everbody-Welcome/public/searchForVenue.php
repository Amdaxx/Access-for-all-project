<?php
require_once('../SQL/sql.php');
?>
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
            <h4 class="w3-bar-item">Filter by Venue Type:</h4>
            <form method="post">
          <label for="item">Select an item:</label>
          <select name="item" id="item">
              <option value="item1">Accomodation</option>
              <option value="item2">Experience</option>
              <option value="item3">Tours</option>
              <option value="item3">Events</option>
            </select>
     <br>
     <h4 class="w3-bar-item">Filter by Postcode Type:</h4>
     <input type="text">
     <h4 class="w3-bar-item">Filter by City:</h4>
     <select name="item" id="item">
              <option value="City1">City1</option>
              <option value="City2">City2</option>
              <option value="City3">City3</option>
              <option value="City4">City4</option>
            </select>
    <button type="submit">Submit</button>
  </form>
        
            <input type="text" class="form-control" id="pstcode" name="PostCode" placeholder="PostCode" style="width: 100px"> <br>
          </div>
        </div>

        <?php $res = displayAllVenues(); ?>
        <div class = "columnones"style = "width:85%">
          <div class="grid-container" >
            <?php foreach ($res as $venue): ?>
            <div class="grid-item"><img src="../pictures/dummyPictures/venue1.jpg" alt="Logo" width="100" height="50" onclick="window.location.href='../public/venuePage.php';"><br><?php echo $venue['venuename'] ?></div>
          <?php endforeach;?>
          </div>
        </div>
      </div>
    </body>
    
    <?php include "footer.php" ?>
  </div>
</html>
