<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/venueTableStyle.css">

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: coral;}
</style>
</head>

<body style = "background-color:cdc7c7">
  <div id="header">
    <?php include "businessHeader.php" ?>    
  </div>

  <table class="center" border='1' style='border-collapse:collapse'>
    <tr>
      <th>Venue Type</th>
      <th>Venue Address</th>
      <th>Venue Postcode</th>
      <th>Edit Venue Details</th>
      <th>Update Audit</th>
      <th>New Audit</th>
    </tr>

    <tr>
      <td width='250'>FILLER1</td>
      <td width='60'>FILLER2</td>
      <td  width='250'>FILLER3</td>
      <td width='200'><div class="btn-group"><input type="button" value="Edit Venue Details"></div></td>
      <td width='250'><input type="button" value="Update Audit"></td>
      <td width='250'><input type="button" value="New Audit"></td>
    </tr>

    <tr>
      <td width='250'>FILLER</td>
      <td width='60'>FILLER</td>
      <td  width='250'>FILLER</td>
      <td width='200'>FILLER</td>
      <td width='250'>FILLER</td>
      <td width='250'>FILLER</td>
    </tr>

  </table>

  <?php 
    
   $res = viewVenues($_SESSION['id']);
   foreach ($res as $venue) {
    echo $venue['venuename'] . '<br />';
    }
    ?>
</body>