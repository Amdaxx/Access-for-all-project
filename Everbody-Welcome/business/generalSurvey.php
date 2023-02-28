<!DOCTYPE html>
<html>
<head>
    <title>Generic Survey</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <div id="header">
    <?php include "businessHeader.php";
    ?>  

    <h2>Generic Survey</h2>

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
        <form id="questionnaire-form" method="post">
            <?php
            // Define the questions as an array
            $questions = array(
                array(
                    'question' => '1) Does the venue have level access?',
                    'name' => 'q1'
                ),
                array(
                    'question' => '2) Does the venue have a lift?',
                    'name' => 'q2'
                ),
                array(
                    'question' => '3) Is there a hearing-loop?',
                    'name' => 'q3'
                ),
                array(
                  'question' => '4) Are guide-dogs allowed?',
                  'name' => 'q4'
                ),
                array(
                  'question' => '5) Is there an accessible public toilet?',
                  'name' => 'q5'
                )
            );

            // Loop through the questions and create the form inputs
            foreach ($questions as $question) {
                echo '<div class="question">';
                echo '<label for="' . $question['name'] . '">' . $question['question'] . '</label>';
                echo '<input type="radio" name="' . $question['name'] . '" value="yes">Yes';
                echo '<input type="radio" name="' . $question['name'] . '" value="no">No';
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