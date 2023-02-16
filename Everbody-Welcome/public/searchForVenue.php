<html>
  <head>
  <style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #696969;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

</style>
    <title> Everybody Welcome</title>
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavHome.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
  </head>

  <body style = "background-color:cdc7c7">
  <div id="header">
    <?php include "publicHeader.php" ?>    
  </div>

    <div>
      <p style = "font-size:40 ; color:black; width: 100%;text-align: center"><b>Search for a Venue</b></p>
    </div>
    <div class="SearchBar">
  
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search"style="width: 600px; margin-left:25% ">
      <button type="submit">Submit</button>
        </div>
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
        </div>
<div style="margin-left:25%">
<div class="button-background">
   
  </div>
    <div class="grid-container">
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

  </body>
  <?php include "footer.php" ?>

</html>
