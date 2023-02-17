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
    border: 1px solid #696969;
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
    <div style="overflow-x:auto;margin-top:20px;">
      <table class="center" border='1' style='border-collapse:collapse'>
      <th>Question No.</th>
      <th>Question</th>
      <th>Yes/No</th>
      <th>Proof</th>
      <th>Comments</th>
      <tr class = "data">
        <td width='200'><?php echo '1'; ?></td>
        <td width='200'><?php echo 'Are clearly marked designated accessible parking spaces available at or near the venue?'; ?></td>
        <td width='40'><?php echo 'A1'; ?></td>
        <td  width='200'><?php echo 'Proof1'; ?></td>
        <td  width='200'><?php echo 'Comment1'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '2'; ?></td>
        <td width='250'><?php echo 'Does the main entrance have level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.'; ?></td>
        <td width='40'><?php echo 'A2'; ?></td>
        <td  width='200'><?php echo 'Proof2'; ?></td>
        <td  width='200'><?php echo 'Comment2'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '3'; ?></td>
        <td width='250'><?php echo 'Is there an alternative entrance, with level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.'; ?></td>
        <td width='40'><?php echo 'A3'; ?></td>
        <td  width='200'><?php echo 'Proof3'; ?></td>
        <td  width='200'><?php echo 'Comment3'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '4'; ?></td>
        <td width='250'><?php echo 'Is the clear door opening width of the entrance with level access more than 75cm?'; ?></td>
        <td width='40'><?php echo 'A4'; ?></td>
        <td  width='200'><?php echo 'Proof4'; ?></td>
        <td  width='200'><?php echo 'Comment4'; ?></td>
      </tr>
      <tr class = "data">
        <td width='200'><?php echo '5'; ?></td>
        <td width='250'><?php echo 'Is there level access (without steps or thresholds) from the accessible entrance to the public toilet, including access by ramp or lift and the door opening is at least 75cm wide?'; ?></td>
        <td width='40'><?php echo 'A5'; ?></td>
        <td  width='200'><?php echo 'Proof5'; ?></td>
        <td  width='200'><?php echo 'Comment5'; ?></td>
      </tr>
      </table>
    </div>


  </body>

  <?php include "../public/footer.php" ?>

</div>
