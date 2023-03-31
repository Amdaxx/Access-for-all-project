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



$res = viewQuestions("general");
$ques = array_column($res, "question");

 $data = array();
 $number = intval(getNumberOfAudits($_GET['venueid'])) + 1;
 
 if (isset($_POST['submit']) && !isset($_POST['processed'])) {
     $_POST['processed'] = true;
 
     foreach ($ques as $index => $que) {
         if (isset($_POST[$index])) {
             $response = $_POST[$index];
         } else {
             $response = '';
         }
         $data[] = array('question' => $que, 'response' => $response);
     }
     recordGeneralSurvey($_GET['venueid'], $data, $number);
 }
?>
<head>
    <title>Modern Survey</title>
    <meta name="description" content="This page displays a short list of accessibility questions about the venue and prompts the user to answer them - yes or no.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .question {
            margin-bottom: 30px;
        }
        .question label {
            font-weight: bold;
            margin-right: 10px;
            text-align: left;
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
    <?php include "businessHeader.php"; ?>  
    <div class="container">
        <h2 class="mb-4">Modern Survey</h2>
        <form id="questionnaire-form" method="post">
            <?php
            // Loop through the questions and create the form inputs
            foreach ($ques as $index => $que) {
                echo '<div class="question form-group">';
                echo '<label for="' . $index . '">' . $que . '</label><br>';
                echo '<div class="form-check form-check-inline">';
                echo '<input class="form-check-input" type="radio" name="' . $index . '" id="' . $index . 'yes" value="yes">';
                echo '<label class="form-check-label" for="' . $index . 'yes">Yes</label>';
                echo '</div>';
                echo '<div class="form-check form-check-inline">';
                echo '<input class="form-check-input" type="radio" name="' . $index . '" id="' . $index . 'no" value="no">';
                echo '<label class="form-check-label" for="' . $index . 'no">No</label>';
                echo '</div>';
                echo '</div>';
            }
            ?>
            <button type="submit" name="submit" id="submit-btn" onclick="submitValidation()" class="btn btn-primary">Submit</button>
        </form>
        <div id="error-message" class="error"></div>
    </div>
    <script>
        function submitValidation() {
        }
    </script>
</body>
<?php include "../public/footer.php" ?>