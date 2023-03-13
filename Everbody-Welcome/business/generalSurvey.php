<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";


session_start();

if (!isset($_SESSION['business'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); //calling the function from session.php

$id = $_SESSION['id']; 

?>


<!DOCTYPE html>
<html>
<head>
    <title>Generic Survey</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <div id="header">
        <?php include "businessHeader.php"; ?>  
        <h2>Generic Survey</h2>
    </div>
    
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .question {
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .question label {
            display: inline-block;
            width: 70%;
            font-weight: bold;
            margin-right: 10px;
            text-align: left;
        }
        .question input[type="radio"] {
            display: inline-block;
            margin-right: 10px;
        }
        .error {
            color: red;
            font-weight: bold;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>

<body>
    <?php 
   $ques = array(
    "1) Does the venue have level access?",
     "2) Does the venue have a lift?",
      "3) Is there a hearing-loop?",
      "4) Are guide-dogs allowed?",
      "5) Is there an accessible public toilet?"
    );

    $data = array();
    $number = 1;
    if (isset($_POST['submit']))
    {
        foreach ($ques as $index => $que) {
            if (isset($_POST[$index])) {
                $response = $_POST[$index];
            } else {
                $response = '';
            }
            $data[] = array('question' => $que, 'response' => $response, 'proof' => "", 'comment' => "",);
        }   

       recordAudit($_GET['id'], $data, "2");
    }
?>
    ?>

    <div class="container">
        <form id="questionnaire-form" method="post">
            <?php
            // Loop through the questions and create the form inputs
            foreach ($ques as $index => $que) {
                echo '<div class="question">';
                echo '<label for="' . $index . '">' . $que. '</label>';
                echo '<input type="radio" name="' . $index . '" value="yes">Yes';
                echo '<input type="radio" name="' . $index . '" value="no">No';
                echo '</div>';
            }
            ?>
            <button type="submit" name="submit" id="submit-btn" onclick="submitValidation()">Submit</button>
        </form>
        <div id="error-message" class="error"></div>
    </div>
    
    
    <script>
        function submitValidation() {
            // Add validation code here
        }
    </script>
</body>
<?php include "../public/footer.php" ?>
</html>
