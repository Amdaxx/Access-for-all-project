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
      <table class="center" border='1' style='border-collapse:collapse'>
      <tr>
        <th>Question No.</th>
        <th>Question</th>
        <th>Yes/No</th>
        <th>Proof</th>
        <th>Comments</th>
      </tr> 
      <tr>
        <td width='200'><?php echo '1'; ?></td>
        <td width='200'><?php echo 'Are clearly marked designated accessible parking spaces available at or near the venue?'; ?></td>
        <td width='40'><?php echo 'A1'; ?></td>
        <td  width='200'><?php echo 'Proof1'; ?></td>
        <td  width='200'><?php echo 'Comment1'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '2'; ?></td>
        <td width='250'><?php echo 'Does the main entrance have level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.'; ?></td>
        <td width='40'><?php echo 'A2'; ?></td>
        <td  width='200'><?php echo 'Proof2'; ?></td>
        <td  width='200'><?php echo 'Comment2'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '3'; ?></td>
        <td width='250'><?php echo 'Is there an alternative entrance, with level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.'; ?></td>
        <td width='40'><?php echo 'A3'; ?></td>
        <td  width='200'><?php echo 'Proof3'; ?></td>
        <td  width='200'><?php echo 'Comment3'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '4'; ?></td>
        <td width='250'><?php echo 'Is the clear door opening width of the entrance with level access more than 75cm?'; ?></td>
        <td width='40'><?php echo 'A4'; ?></td>
        <td  width='200'><?php echo 'Proof4'; ?></td>
        <td  width='200'><?php echo 'Comment4'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '5'; ?></td>
        <td width='250'><?php echo 'Is there level access (without steps or thresholds) from the accessible entrance to the public toilet, including access by ramp or lift and the door opening is at least 75cm wide?'; ?></td>
        <td width='40'><?php echo 'A5'; ?></td>
        <td  width='200'><?php echo 'Proof5'; ?></td>
        <td  width='200'><?php echo 'Comment5'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '6'; ?></td>
        <td width='250'><?php echo 'Is there space for a wheelchair to at least one side of the toilet to enable the person to transfer?'; ?></td>
        <td width='40'><?php echo 'A6'; ?></td>
        <td  width='200'><?php echo 'Proof6'; ?></td>
        <td  width='200'><?php echo 'Comment6'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '7'; ?></td>
        <td width='250'><?php echo 'Are there handrails next to the toilet?'; ?></td>
        <td width='40'><?php echo 'A7'; ?></td>
        <td  width='200'><?php echo 'Proof7'; ?></td>
        <td  width='200'><?php echo 'Comment7'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '8'; ?></td>
        <td width='250'><?php echo 'Is there an emergency call system in the toilet?'; ?></td>
        <td width='40'><?php echo 'A8'; ?></td>
        <td  width='200'><?php echo 'Proof8'; ?></td>
        <td  width='200'><?php echo 'Comment8'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '9'; ?></td>
        <td width='250'><?php echo 'Wheelchair accessible bedroom: Is there level access (without steps or thresholds) from the accessible entrance to the bedroom, including access by ramp or lift
                        AND the route from the accessible entrance to the bedroom is at least 75cm wide, at it’s narrowest point 
                        AND the door opening is at least 75cm wide
                        AND the bedroom has unobstructed floor space not less than 120cm by 90cm?'; ?></td>
        <td width='40'><?php echo 'A9'; ?></td>
        <td  width='200'><?php echo 'Proof9'; ?></td>
        <td  width='200'><?php echo 'Comment9'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '10'; ?></td>
        <td width='250'><?php echo 'Wheelchair accessible bathroom: Is the door opening at least 75cm wide AND
                        is there unobstructed floor space not less than 120cm by 90cm?'; ?></td>
        <td width='40'><?php echo 'A10'; ?></td>
        <td  width='200'><?php echo 'Proof10'; ?></td>
        <td  width='200'><?php echo 'Comment10'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '11'; ?></td>
        <td width='250'><?php echo 'Wheelchair accessible bathroom: Is there space for a wheelchair to at least one side of the toilet to enable the person to transfer?'; ?></td>
        <td width='40'><?php echo 'A11'; ?></td>
        <td  width='200'><?php echo 'Proof11'; ?></td>
        <td  width='200'><?php echo 'Comment11'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '12'; ?></td>
        <td width='250'><?php echo 'Wheelchair accessible bathroom: Are there handrails next to the toilet?'; ?></td>
        <td width='40'><?php echo 'A12'; ?></td>
        <td  width='200'><?php echo 'Proof12'; ?></td>
        <td  width='200'><?php echo 'Comment12'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '13'; ?></td>
        <td width='250'><?php echo 'Wheelchair accessible bathroom: Is there a level access wetroom shower (no raised shower tray or step-up)?'; ?></td>
        <td width='40'><?php echo 'A13'; ?></td>
        <td  width='200'><?php echo 'Proof13'; ?></td>
        <td  width='200'><?php echo 'Comment13'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '14'; ?></td>
        <td width='250'><?php echo 'Wheelchair accessible bathroom: Is there an emergency call system in the bathroom?'; ?></td>
        <td width='40'><?php echo 'A14'; ?></td>
        <td  width='200'><?php echo 'Proof14'; ?></td>
        <td  width='200'><?php echo 'Comment14'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '15'; ?></td>
        <td width='250'><?php echo 'Is there a hearing loop/audio induction loop/infrared system available to amplify sound
                        AND is there clear signage positioned where any fixed loops are effective?'; ?></td>
        <td width='40'><?php echo 'A15'; ?></td>
        <td  width='200'><?php echo 'Proof15'; ?></td>
        <td  width='200'><?php echo 'Comment15'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '16'; ?></td>
        <td width='250'><?php echo 'Is there a mobile hoist available or a ceiling tracked hoist in at least one accessible bedroom?'; ?></td>
        <td width='40'><?php echo 'A16'; ?></td>
        <td  width='200'><?php echo 'Proof16'; ?></td>
        <td  width='200'><?php echo 'Comment16'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '17'; ?></td>
        <td width='250'><?php echo 'Is there an emergency call system with vibrating pillow pad available to alert someone with hearing loss if the fire alarm is activated?'; ?></td>
        <td width='40'><?php echo 'A17'; ?></td>
        <td  width='200'><?php echo 'Proof17'; ?></td>
        <td  width='200'><?php echo 'Comment17'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '18'; ?></td>
        <td width='250'><?php echo 'Is there an emergency call system with flashing lights to alert someone with hearing loss if the fire alarm is activated?'; ?></td>
        <td width='40'><?php echo 'A18'; ?></td>
        <td  width='200'><?php echo 'Proof18'; ?></td>
        <td  width='200'><?php echo 'Comment18'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '19'; ?></td>
        <td width='250'><?php echo 'Is there level access (without steps or thresholds) from the accessible entrance to the restaurant, including access by ramp or lift
                        AND is the route from the accessible entrance to the restaurant at least 75cm wide, at it’s narrowest point 
                        AND is the door opening at least 75cm wide?'; ?></td>
        <td width='40'><?php echo 'A19'; ?></td>
        <td  width='200'><?php echo 'Proof19'; ?></td>
        <td  width='200'><?php echo 'Comment19'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '20'; ?></td>
        <td width='250'><?php echo 'Can you can cater for a range of dietary requirements such as vegan, gluten free, lactose free?'; ?></td>
        <td width='40'><?php echo 'A20'; ?></td>
        <td  width='200'><?php echo 'Proof20'; ?></td>
        <td  width='200'><?php echo 'Comment20'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '21'; ?></td>
        <td width='250'><?php echo 'Are trained assistance dogs welcome?'; ?></td>
        <td width='40'><?php echo 'A21'; ?></td>
        <td  width='200'><?php echo 'Proof21'; ?></td>
        <td  width='200'><?php echo 'Comment21'; ?></td>
      </tr>
      <tr>
        <td width='200'><?php echo '22'; ?></td>
        <td width='250'><?php echo 'Do you have a published Accessibility Guide - a thorough yet concise description of the accessibility of your venue/experience? If so, please provide a link in the comments section.'; ?></td>
        <td width='40'><?php echo 'A22'; ?></td>
        <td  width='200'><?php echo 'Proof22'; ?></td>
        <td  width='200'><?php echo 'Comment22'; ?></td>
      </tr>
      </table>
    </div>


  </body>

  <?php include "../public/footer.php" ?>

</div>
