<?php
include_once("../SQL/sql.php");
$path = "../public/LandingPage.php";


session_start();

if (!isset($_SESSION['uadmin'])){
    session_unset();
    session_destroy();
    header("Location:".$path);
}
checkSession ($path); //calling the function from session.php

if (isset($_POST['submit'])){
	addQuestion($_POST['question'], $_POST['type'], $_GET['type']);
}

?>

<head>
	<title>Questions</title>
	<link rel="stylesheet" type="text/css" href="../css/questions.css">
</head>

<?php $res = viewQuestions($_GET['type']); ?>

<h1><?php echo $_GET['type'];?> Survey</h1>

<body>
  <div class="container">
    <div class="add-question">
      <h2>Add Question</h2>
      <form method="post">
        <label for="question">Question:</label>
        <input type="text" id="question" name="question" required>

        <label for="question-type">Question Type:</label>
        <select id="question-type" name="type">
          <option value="text">Text</option>
          <option value="checkbox">Checkbox</option>
          <option value="radio">Radio Button</option>
        </select>

        <button type="submit" name="submit">Add</button>
      </form>
    </div>

    <div class="question-list">
      <h2>Question List</h2>
      <ul id="questions">
		<?php foreach($res as $question): ?>
        <li class="question-card">
          <span class="question-type"><?php echo $question['type']?>:</span>
          <span class="question-text"><?php echo $question['question']?></span>
          <button class="delete-btn delete">Delete</button>
        </li>
		<?php endforeach;?>
      </ul>
    </div>
  </div>
</body>

