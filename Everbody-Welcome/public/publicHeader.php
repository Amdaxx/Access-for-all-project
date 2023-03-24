<style>
  .cf:before,
  .cf:after {
      content: " ";
      display: table;
  }

  .cf:after {
      clear: both;
  }

  .cf {
      *zoom: 1;
  }

  .menu,
  .submenu {
  margin: 0;
  padding: 0;
  list-style: none;
  }

  .menu {   
  margin: 10px auto;
  width: fit-content;
  color: #696969;
  }

  .menu > li {
  background: #696969;
  float: left;
  position: relative;
  transform: skewX(25deg);
  }

  .menu a {
  display: block;
  text-transform: uppercase;
  text-decoration: none;
  font-family: Arial, Helvetica;
  font-size: 14px;
  }  

  .menu li:hover {
  }  

  .menu > li > a {
  transform: skewX(-25deg);
  padding: 1em 2em;
  }

  /* Dropdown */
  .submenu {
  position: absolute;
  width: 200px;
  left: 50%; margin-left: -100px;
  transform: skewX(-25deg);
  transform-origin: left top;
  }

  .submenu li {
  background-color: #696969;
  position: relative;
  overflow: hidden;  
  }      

  .submenu > li > a {
  padding: 1em 2em;   
  }

  .submenu > li::after {
  content: '';
  position: absolute;
  top: -125%;
  height: 100%;
  width: 100%;   
  box-shadow: 0 0 50px rgba(0, 0, 0, .9);   
  }  

  .submenu > li:nth-child(odd){
  transform: skewX(-25deg) translateX(0);
  }

  .submenu > li:nth-child(odd) > a {
  transform: skewX(25deg);
  }

  .submenu > li:nth-child(odd)::after {
  right: -50%;
  transform: skewX(-25deg) rotate(3deg);
  }    

  .submenu > li:nth-child(even){
  transform: skewX(25deg) translateX(0);
  }

  .submenu > li:nth-child(even) > a {
  transform: skewX(-25deg);
  }

  .submenu > li:nth-child(even)::after {
  left: -50%;
  transform: skewX(25deg) rotate(3deg);
  }

  /* Show dropdown */
  .submenu,
  .submenu li {
  opacity: 0;
  visibility: hidden;   
  }

  .submenu li {
  transition: .2s ease transform;
  }

  .menu > li:hover .submenu,
  .menu > li:hover .submenu li {
  opacity: 1;
  visibility: visible;
  }  

  .menu > li:hover .submenu li:nth-child(even){
  transform: skewX(25deg) translateX(15px);   
  }

  .menu > li:hover .submenu li:nth-child(odd){
  transform: skewX(-25deg) translateX(-15px);   
  }
</style>

<ul class="menu cf">
  <li><a href="../public/landingPage.php">Home</a></li>
  <li><a href="../public/searchForVenue.php">Search For Venue</a>

  <li><a href="../public/landingPage.php">More Information</a>
    <ul class="submenu">
      <li><a href="../public/ourServices.php">Our Services</a></li>
      <li><a href="../public/contactUs.php">Contact us</a></li>
    </ul>
  </li>

  <li><a href="../public/landingPage.php">Other</a>
    <ul class="submenu">
      <li><a href="../public/meetTheTeam.php">Meet The Team</a></li>
      <li><a href="https://www.disabilityrightsuk.org/">Start a Charity</a></li>
      <li><a href="https://www.disabilityrightsuk.org/">Disabled Charities</a></li>
      <li><a href="https://www.mcdonalds.com/gb/en-gb/menu.html">Company Policies</a></li>
    </ul>
  </li>
 
  <li><a href="../userManagement/userLogIn.php">Business</a>
    <ul class="submenu">
      <li><a href="../userManagement/userLogIn.php">Log In</a></li>
      <li><a href="../userManagement/createAccount.php">Create Account</a></li>
    </ul>
  </li>
</ul>

