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

$res = viewQuestions("premium");
$questions = array_column($res, "question");
$venueid = $_GET['venueid'];
$number = intval(getNumberOfAudits($venueid)) + 1;

if (isset($_POST['submit'])) {
  $data = array();

  foreach ($questions as $index => $question) {
      $response = isset($_POST['answer_' . $index]) ? $_POST['answer_' . $index] : '';
      $comment = isset($_POST['comment_' . $index]) ? $_POST['comment_' . $index] : '';

      $data[] = array('question' => $question, 'response' => $response, 'comment' => $comment);
  }

  recordAdvancedSurvey($venueid, $data, $number);
}


?>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
  }

  .question {
    margin: 20px auto; /* Center the question horizontally */
    width: 80%; /* Reduce the width of the question */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px gray;
    background-color: white;
  }

  .answer {
    margin: 20px auto; /* Center the answer horizontally */
    width: 80%; /* Reduce the width of the answer */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px gray;
    background-color: white;
  }

  .comment {
    margin: 10px;
    padding: 10px;
    border-radius: 5px;
    border: none;
    background-color: #f0f0f0;
  }

  .picture {
    margin: 10px;
    padding: 10px;
    border-radius: 5px;
    border: none;
    background-color: #f0f0f0;
  }

  .button {
    margin: 10px;
    padding: 10px;
    border-radius: 5px;
    border: none;
    background-color: #ff9900;
    color: white;
    cursor: pointer;
  }

  a {
    color: #ff9900;
    text-decoration: none;
    display: block; /* Make the link a block element */
    text-align: center; /* Center the text */
    margin-bottom: 20px; /* Add some space below the link */
  }

h1 {
font-size: small; /* Make the question number smaller */
color: #ff9900; /* Add some color to the question number */
}

p {
font-size: large; /* Make the question bigger */
color: #333333; /* Add some color to the question */
}

</style>

<script>
function storeAnswer(index, answer) {
  localStorage.setItem("answer_" + index, answer);
}

function storeComment(index, comment) {
  localStorage.setItem("comment_" + index, comment);
}

function submitAnswers() {
  const questionsCount = <?php echo count($questions); ?>;
  const venueId = <?php echo $venueid; ?>;
  const form = document.createElement("form");
  form.method = "POST";
  form.action = "?venueid=" + venueId;

  for (let i = 0; i < questionsCount; i++) {
    const answerInput = document.createElement("input");
    answerInput.type = "hidden";
    answerInput.name = "answer_" + i;
    answerInput.value = localStorage.getItem("answer_" + i) || "";
    form.appendChild(answerInput);

    const commentInput = document.createElement("input");
    commentInput.type = "hidden";
    commentInput.name = "comment_" + i;
    commentInput.value = localStorage.getItem("comment_" + i) || "";
    form.appendChild(commentInput);
  }

  document.body.appendChild(form);
  form.submit();
}
</script>

</head>
<body>
<?php
echo "<form class='answer' method='post' enctype='multipart/form-data'>";

for ($index = 0; $index < count($questions); $index++) {
  echo "<div class='question'>";
  echo "<h1>Question " . ($index + 1) . "</h1>";
  echo "<p>" . $questions[$index] . "</p>";

  echo "<p>Answer:</p>";
  echo "<input type='radio' id='yes_" . $index . "' name='answer_" . $index . "' value='yes'>";
  echo "<label for='yes_" . $index . "'>Yes</label><br>";

  echo "<input type='radio' id='no_" . $index . "' name='answer_" . $index . "' value='no'>";
  echo "<label for='no_" . $index . "'>No</label><br>";

  echo "<p>Comment:</p>";
  echo "<textarea class='comment' name='comment_" . $index . "' rows='4' cols='50'></textarea><br>";
  echo "</div>";
}

echo "<input class='button' type='submit' name='submit' value='Submit'>";
echo "</form>";
?>
</body>
</html>
