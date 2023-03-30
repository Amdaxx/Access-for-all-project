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
if (isset($_POST['delete'])){
	deleteQuestion($_POST['question'], $_POST['type'], $_GET['type']);
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
      <form method="POST">
        <label for="question">Question:</label>
        <input type="text" id="question" name="question" required>

        <label for="question-type">Question Type:</label>
        <select id="question-type" name="type">
          <option value="Physical Disability">Physical Disability</option>
          <option value="Vision Impairment">Vision Impairment</option>
          <option value="Deaf">Deaf</option>
          <option value="Other">Other</option>
        </select>

        <button type="submit" name="submit">Add</button>
      </form>
    </div>

    <div class="question-list">
      <h2>Question List</h2>
      <form method="POST">
  <ul id="questions">
    <?php foreach($res as $question): ?>
      <li class="question-card">
        <span class="question-type"><?php echo $question['type']; ?>:</span>
        <span class="question-text"><?php echo $question['question']; ?></span>
        <input type="hidden" name="type" value="<?php echo $question['type']; ?>">
        <input type="hidden" name="question" value="<?php echo $question['question']; ?>">
        <button class="delete-btn delete" type="delete" name="delete">Delete</button>
      </li>
    <?php endforeach;?>
  </ul>
</form>

    </div>
  </div>
</body>

