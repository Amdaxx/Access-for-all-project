<!DOCTYPE html>
<html>
<head>
    <title>General Questionnaire</title>
    <h2>General Questionnaire</h2>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .question {
            margin-bottom: 10px;
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
                    'question' => 'Does the venue have level access?',
                    'name' => 'like_cats'
                ),
                array(
                    'question' => 'Does the venue have a lift?',
                    'name' => 'like_dogs'
                ),
                array(
                    'question' => 'Is there a hearing-loop?',
                    'name' => 'like_birds'
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
            <button type="submit" id="submit-btn">Submit</button>
        </form>
        <div id="error-message" class="error"></div>
    </div>
</body>
</html>