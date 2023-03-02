<!DOCTYPE html>
<html>
<head>
    <title>Audit Report</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/surveyStyle.css">
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/overall-page.css">
    <div id="header">
    <?php include "businessHeader.php";
    ?>  

    <h1><i class="far fa-list-alt"></i><?php //echo $_GET['type'] ?> Audit</h1>
    
    </div>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .question {
            margin-bottom: 30px;
        }
        .question label {
            display: inline-block;
            width: 70%;
            font-weight: bold;
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
    
    <div class="container">
        <div class="steps">
            <div class="step current"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div> 
            <div class="step"></div>
            <div class="step"></div>
        </div>
        <form id="questionnaire-form" method="post">
            <?php
            // Define the questions as an array
            $questions = array(
                array(
                    'question' => '1)  Are clearly marked designated accessible parking spaces available at or near the venue?',
                    'name' => 'q1'
                ),
                array(
                    'question' => '2) Does the main entrance have level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.',
                    'name' => 'q2'
                ),
                array(
                    'question' => '3) Is there an alternative entrance, with level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.',
                    'name' => 'q3'
                ),
                array(
                  'question' => '4) Is the clear door opening width of the entrance with level access more than 75cm?',
                  'name' => 'q4'
                ),
                array(
                  'question' => '5) Is there level access (without steps or thresholds) from the accessible entrance to the public toilet, including access by ramp or lift and the door opening is at least 75cm wide?',
                  'name' => 'q5'
                )
            );
            $step = 0;
            // Loop through the questions and create the form inputs
            foreach ($questions as $question) {
                $step+=1;
                echo '<div class="step-content current" data-step="'.$step .'">';
                echo '<label for="' . $question['name'] . '">' . $question['question'] . '</label>';
                echo '<input type="radio" name="' . $question['name'] . '" value="yes">Yes';
                echo '<input type="radio" name="' . $question['name'] . '" value="no">No';
                //echo '</div>';
                echo'<div class="buttons">
                    Upload proof:
                    <input type="file" class="btn alt" name="accomFileToUpload1" id="accomFileToUpload1">
                </div>

                <div class="fields">
                    Add a comment:
                    <input type="text" name="accomComment1" id="accomComment1">
                    <label for="accomComment1"></label>
                </div>';	
                echo '</div>';
            }
            ?>
            <button type="submit" id="submit-btn" onclick="submitValidation">Submit</button>
        </form>
        <div id="error-message" class="error"></div>
    </div>
</body>
<?php include "../public/footer.php" ?>
</html>