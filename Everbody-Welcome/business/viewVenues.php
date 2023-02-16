<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/venueTableStyle.css">

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

<body style = "background-color:cdc7c7">
  <div id="header">
    <?php include "businessHeader.php";?>    
  </div>
  <div style="overflow-x:auto;">
  <table class="center" border='1' style='border-collapse:collapse'>
    <tr>
      <th>Venue Name</th>
      <th>Venue Type</th>
      <th>Venue Postcode</th>
      <th>Venue Address</th>
      <th>Edit Venue Details</th>
      <th>Update Audit</th>
      <th>New Audit</th>
    </tr>

    <?php 
     $res = viewVenues($_SESSION['id']);
     foreach ($res as $venue):
    ?>
    <tr>
      <td width='250'><?php echo $venue['venuename']; ?></td>
      <td width='60'><?php echo $venue['type']; ?></td>
      <td  width='250'><?php echo $venue['postcode']; ?></td>
      <td  width='250'><?php echo $venue['address']; ?></td>
      <td width='200'><div class="btn-group"><input type="button" value="Edit Venue Details"></div></td>
      <td width='250'><input type="button" value="Update Audit"></td>
      <td width='250'><input type="button" value="New Audit"></td>
    </tr>
      <?php endforeach;?>
  </table>
  </div>
</body>
<?php include "../public/footer.php" ?>