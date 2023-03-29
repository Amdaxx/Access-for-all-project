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

$res = viewQuestions("premium");
$questions = array_column($res, "question");
$venueid = $_GET['venueid'];
$number = intval(getNumberOfAudits($venueid)) + 1;

if (isset($_POST['submit']) && !isset($_POST['processed'])) {
  $_POST['processed'] = true;
  $data = array();
  foreach ($questions as $index => $question) {
      if (isset($_POST[$index])) {
          $response = $_POST[$index];
      } else {
          $response = '';
      }
      $comment = (isset($_POST['comment'])) ? $_POST['comment'] : '';
      $fileNameNew = "";
      //save proof
      //$proof = (isset($_FILES['proof'])) ? $_FILES['proof'] : '';
     $proof = "";
    //send data array
      $data[] = array('question' => $question, 'response' => $response, 'comment' => $comment, 'proof' => $fileNameNew);
  }

  recordAdvancedSurvey($venueid,$data, $number);
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
</head>
<body>
<?php
// Define the questions array
   
// Get the current question index from the URL or set it to zero
if (isset($_GET["index"])) {
$index = $_GET["index"];
} else {
$index = 0;
}

// Check if the index is valid or not
if ($index >= 0 && $index < count($questions)) {
// Start the form to answer the questions
echo "<form class='answer' method='post' enctype='multipart/form-data'>";

// Display the current question
echo "<div class='question'>";
echo "<h1>Question " . ($index + 1) . "</h1>";
echo "<p>" . $questions[$index] . "</p>";
echo "</div>";

// Hidden input to pass the question index to the next page
echo "<input type='hidden' name='index' value='$index'>";

// Radio buttons to choose yes or no
echo "<p>Answer:</p>";
echo "<input type='radio' id='yes' name='answer' value='yes'>";
echo "<label for='yes'>Yes</label><br>";

echo "<input type='radio' id='no' name='answer' value='no'>";
echo "<label for='no'>No</label><br>";

// Textarea to write a comment
echo "<p>Comment:</p>";
echo "<textarea class='comment' name='comment' rows='4' cols='50'></textarea><br>";

// File input to upload a picture
echo "<p>Picture:</p>";
echo "<input class='picture' type='file' name='picture'><br>";

// Display the submit button only at the last question
if ($index == count($questions) - 1) {
echo "<input class='button' type='submit' value='Submit'>";
}

// Display a link to the next question if it exists
if ($index < count($questions) - 1) {
  echo "<a href='?index=" . ($index + 1) . "&venueid=" . $venueid . "'>Next question</a>";
}

// End the form
echo "</form>";
} else {
// Display a message if the index is invalid
echo "<p>Invalid question index.</p>";
}
?>
</body>
</html>