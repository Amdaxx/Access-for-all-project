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
$auditNumber = $_GET['number'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Survey Results</title>
    <meta name="description" content="This page displays the results from the user's responses to the general survey.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
       body {
  font-family: 'Helvetica Neue', sans-serif;
  font-size: 16px;
  color: #333;
  background-color: #f7f7f7;
}

h2 {
  font-size: 36px;
  font-weight: bold;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 40px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h3 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 40px;
  background-color: #fff;
  border: 1px solid #ddd;
}

th,
td {
  padding: 12px;
  border: 1px solid #ddd;
}

th {
  background-color: #f7f7f7;
  font-weight: bold;
}

td {
  font-size: 18px;
}

.btn {
  display: inline-block;
  padding: 12px 20px;
  border: none;
  background-color: #007bff;
  color: #fff;
  font-size: 18px;
  border-radius: 4px;
  margin-top: 20px;
  cursor: pointer;
}

.btn:hover {
  background-color: #0069d9;
}
    </style>
</head>

<body>

    <div id="header">
        <?php include "businessHeader.php"; ?>  
        <h2>Survey Results</h2>
    </div>

    <div class="container">
        <h3>Results:</h3>
        <?php
        echo "<table>
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Response</th>";
                        if ($_GET['type'] == "premium") {
                            echo "<th>Comment</th>";
                        }
                echo "</tr>
                </thead>
                <tbody>";
                $data;
                if($_GET['type']=="general"){
                    $data = getGeneralSurveyResult($_GET['venueid'], $_GET['number']);        
                }
                if($_GET['type']=="premium"){
                    $data = getAdvancedSurveyResult($_GET['venueid'], $_GET['number']);        
                }
                foreach ($data as $d) {
                    echo "<tr>
                            <td>" . $d['question'] . "</td>
                            <td>" . $d['answer'] . "</td>";
                    if ($_GET['type'] == "premium") {
                        echo "<td>" . $d['comment'] . "</td>";
                    }
                    echo "</tr>";
                }
        echo "</tbody>
            </table>
            <a href=\"previousAudits.php?venueid=" . $_GET['venueid'] . "\" class=\"btn\">View Your Audits</a>";
            ?>
        </div>
        
        <?php include "../public/footer.php" ?>
        
