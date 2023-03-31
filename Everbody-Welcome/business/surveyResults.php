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
    <div id="header">
        <?php include "businessHeader.php"; ?>  
        <h2>Survey Results</h2>
    </div>
    
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .result {
            margin-top: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .result span {
            width: 70%;
            text-align: left;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>Results:</h3>
        <?php
        echo "<table class=\"table\">
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
                if($_GET['type']=="General Survey"){
                    $data = getGeneralSurveyResult($_GET['venueid'], $_GET['number']);        
                }
                if($_GET['type']=="Advanced Survey"){
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
            <a href=\"previousAudits.php?venueid=" . $_GET['venueid'] . "\" class=\"btn btn-primary\">View Your Audits</a>";
        ?>
    </div>

    <?php include "../public/footer.php" ?>
</body>
</html>
