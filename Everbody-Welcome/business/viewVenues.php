<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">

<body style = "background-color:cdc7c7">
  <div id="header">
    <?php include "businessHeader.php" ?>    
  </div>

  <?php 
    
   $res = viewVenues($_SESSION['id']);
   foreach ($res as $venue) {
    echo $venue['venuename'] . '<br />';
}
    ?>