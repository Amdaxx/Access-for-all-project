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
    <link rel="stylesheet" href="../css/style.css">  
    <link rel="stylesheet" href="../css/topNavHome.css">
    <link rel="stylesheet" href="../css/overall-page.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            color: #333;
        }
        #header {
            background-color: #fff;
            padding: 20px;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        h2 {
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h3 {
            margin-top: 0;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #eee;
        }
        .btn {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 4px;
        }
        .btn:hover {
            background-color: #0069d9;
            border-color: #0062cc;
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
        
