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
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../business/businessHeader.php";?>
  <title>Business Landing Page</title>
  <meta name="description" content="This page displays information about the user's account such as company name and email. Also, on this page there are links to the venues pages (view venues and create new venue) as well as a link to edit company information.">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/businessHomepage.css">
  <link rel="stylesheet" href="../css/table.css">

  <style>
    :root {
      --main-color: #008080;
      --text-color: #333333;
      --background-color: #f5f5f5;
      --input-bg-color: #ffffff;
      --input-border-color: #cccccc;
      --button-hover-color: #006666;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: var(--background-color);
      margin: 0;
      padding: 0;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      gap: 20px;
      padding: 20px;
    }

    .question,
    .answer {
      background-color: var(--input-bg-color);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 18px;
      color: var(--main-color);
      margin-bottom: 15px;
    }

    p {
      font-size: 16px;
      color: var(--text-color);
      margin-bottom: 10px;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    label {
      font-size: 14px;
      color: var(--text-color);
      cursor: pointer;
    }

    textarea {
      display: block;
      width: 100%;
      padding: 10px;
      border: 1px solid var(--input-border-color);
      border-radius: 5px;
      background-color: var(--input-bg-color);
      color: var(--text-color);
      resize: vertical;
      margin-bottom: 15px;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: var(--main-color);
      color: #ffffff;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .button:hover {
      background-color: var(--button-hover-color);
    }
  </style>
</head>
<body>
  <?php
    echo "<form class='answer' method='post' enctype='multipart/form-data'>";
    echo "<div class='grid-container'>";

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
      echo "<textarea class='comment' name='comment_" . $index . "' rows='4'></textarea>";
      echo "</div>";
    }
    
    echo "</div>"; // Close the grid container
    echo "<div style='text-align: center; padding: 20px;'>";
    echo "<button type='submit' class='button' name='submit'>Submit</button>";
    echo "</div>";
    echo "</form>";
    ?>
</body>
<?php include "../public/footer.php" ?>
</html>