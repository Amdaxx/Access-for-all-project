<link rel="stylesheet" href="../css/businessHeader.css">
<div id="header">
  <ul>
    <button3 onclick="window.location.href='../business/businessLandingPage.php';" type= "button" >
      <li><img src="../pictures/Everybody-Welcome-logo.png" alt="Logo" width="100" height="50"></li>
      <li style="font-size: 40px;"><?php echo $_SESSION['name']?></li>
    </button3>
    <li class="sign-out"><a class="active" href="../public/landingPage.php">Sign Out</a></li>
  </ul>    
</div>