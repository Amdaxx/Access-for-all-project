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
      --main-color: #6c757d;
      --text-color: #ffffff;
      --background-color: #343a40;
      --box-shadow-color: rgba(0, 0, 0, 0.2);
    }

    body {
      font-family: Arial, sans-serif;
      background-color: var(--background-color);
    }

    .question,
    .answer {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 20px auto;
      width: 80%;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px var(--box-shadow-color);
    }

    .comment,
    .picture,
    .button {
      margin: 10px;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: var(--background-color);
      color: var(--text-color);
    }

    .button {
      background-color: var(--main-color);
      cursor: pointer;
    }

    a {
      color: var(--main-color);
      text-decoration: none;
      display: block;
      text-align: center;
      margin-bottom: 20px;
    }

    h1 {
      font-size: small;
      color: var(--main-color);
    }

    p {
      font-size: large;
      color: var(--text-color);
    }
  </style>
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

