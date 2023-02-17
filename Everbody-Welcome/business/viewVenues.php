<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/venueTableStyle.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/overall-page.css">

<style>

  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:hover {background-color: coral;}
  
</style>
</head>

<div class="flex-wrapper">

  <div id="header">
    <?php include "businessHeader.php";?>    
  </div>

  <body>
    <div style="overflow-x:auto;">
      <table class="center" border='1' style='border-collapse:collapse;margin-top:10px;'>
        <tr class = "header">
          <th>Venue Name</th>
          <th>Venue Type</th>
          <th>Venue Postcode</th>
          <th>Venue Address</th>
          <th>Edit Venue Details</th>
          <th>View Past Audits</th>
          <th>New Audit</th>
        </tr>

        <?php 
        $res = viewVenues($_SESSION['id']);
        foreach ($res as $venue):
        ?>
        <tr class = "data">
          <td width='250'><?php echo $venue['venuename']; ?></td>
          <td width='60'><?php echo $venue['type']; ?></td>
          <td  width='250'><?php echo $venue['postcode']; ?></td>
          <td  width='250'><?php echo $venue['address']; ?></td>
          
          <td width='200'><div class="btn-group">
          <a href="updateVenue.php?id=<?php echo $venue['venueid']; ?>">
          <input type="button" value="Edit Venue Details"></div>
          </a>

          <td width='200'><div class="btn-group">
          <a href="previousAudits.php?id=<?php echo $venue['venueid']; ?>">
          <input type="button" value="Past Audits"></div>
          </a>

          <td width='200'><div class="btn-group">
          <a href="survey.php?id=<?php echo $venue['venueid']; ?>&type=<?php echo $venue['type']?>">
          <input type="button" value="Past Audits"></div>
          </a>
          
          <?php endforeach;?>
      </table>
    </div>
  </body>

  <?php include "../public/footer.php" ?>

</div>
