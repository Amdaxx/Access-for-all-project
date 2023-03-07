<!DOCTYPE html>
<html>
<head>
    <title>Survey Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/style.css">  
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/topNavHome.css">
    <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/overall-page.css">
    <div id="header">
        <?php 
        include "businessHeader.php"; ?>  
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
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Survey Results</title>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
        </head>
        <body>
        <div class=\"container\">
            <h2>Survey Results</h2>
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Question</th>
                    <th>Response</th>
                </tr>
                </thead>
                <tbody>";
        foreach ($data as $d) {
            echo "<tr>
                    <td>" . $d['question'] . "</td>
                    <td>" . $d['response'] . "</td>
                </tr>";
        }
        echo "</tbody>
            </table>
            <a href=\"generalSurvey.php\" class=\"btn btn-primary\">Back to survey</a>
        </div>
        </body>
        </html>";
        ?>
    </div>
</body>

    <?php include "../public/footer.php" ?>
</html>