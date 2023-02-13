<html>
  <head>
    <title> Everybody Welcome</title>
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavHome.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
  </head>

  <body style = "background-color:cdc7c7">
    <div id="header">
      <ul>
        <li><a href="http://localhost/Access-for-all-project/Everbody-Welcome/userManagement/userLogin.php">Log In</a></li>
        <button2 onclick="window.location.href='http://localhost/Access-for-all-project/Everbody-Welcome/public/landingPage.php';" type= "button" ><img src="http://localhost/Access-for-all-project/Everbody-Welcome/pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"></img></button2>
        <li style="float:right"><a class="active" href="http://localhost/Access-for-all-project/Everbody-Welcome/userManagement/createAccount.php">Create Account</a></li>
      </ul>    
    </div>
   
    <div>
      <p style = "font-size:40 ; color:black; width: 100%;text-align: center"><b>Search for a Venue</b></p>
    </div>
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h2 class="w3-bar-item">Filter Search</h2>
  <h4 class="w3-bar-item">Venue Type</h4>
  <input type="checkbox" id="vType" name="VenueType" value="vType">
  <label for="vehicle1"> Accommodation</label><br>
</div>
<input type="checkbox" id="vType" name="VenueType" value="vType">
  <label for="vehicle1"> Experience</label><br>
</div>
<input type="checkbox" id="vType" name="VenueType" value="vType">
  <label for="vehicle1"> Tours</label><br>
</div>
<input type="checkbox" id="vType" name="VenueType" value="vType">
  <label for="vehicle1"> Events</label><br>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
<div style="margin-left:25%">



  </body>


</html>
