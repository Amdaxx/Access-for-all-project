<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Payment Cancel</title>
<meta charset="utf-8">

<!-- Stylesheet file -->

<!-- Uncomment when added -->
<!--<link href="css/style.css" rel="stylesheet"> -->
<header id="nav-wrapper">
    <nav id="nav">
      <div class="nav left">
        <span class="gradient skew"><h1 class="logo un-skew"><img src="../pictures/logo.png"></h1></span>
        <button id="menu" class="btn-nav"><span class="fas fa-bars"></span></button>
      </div>
    </nav>
</header>



</head>
<body>
<div class="container">
    <div class="status">
        <h1 class="error">Your transaction was canceled!</h1>
    </div>
    <a href="index.php" class="btn-link">Back to Product Page</a>
</div>
</body>

<style>
    #nav-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000; /* optional - this determines the stacking order of the element */
}


</style>
</html>
<?php include "../public/footer.php" ?>