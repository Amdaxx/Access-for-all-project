<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/businessHomepage.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/venueTableStyle.css">
<link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/overall-page.css">

<style>

  table {
    top:20px;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  .data:hover {background-color: coral;}
</style>
</head>

<div class="flex-wrapper">

  <div id="header">
    <?php include "businessHeader.php";?>    
  </div>

  <body>
    <div style="overflow-x:auto;   top: 20px;position: relative;">
      <table class="center" border='1' style='border-collapse:collapse'>
        <th>Audit Number</th>
        <th>Audit Name</th>
        <th>Date Submitted</th>
        <th>View Audit</th>
      </tr>
      <tr class = "data">
        <td>1</td>
        <td>Accommodation Audit</td>
        <td>17/02/2023</td>
        <td><input type="button" value="View Audit" onclick="window.location.href='../business/viewAudits.php';"></td>
      </tr>
    </table>
  </div>
</body>

<?php include "../public/footer.php" ?>

</div>