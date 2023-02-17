<?php

require __DIR__ . "/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

//Question 1
$a1 = $_POST["accomAnswerOne"];
$commentOne = $_POST["accomComment1"];

//Question 2
$a2 = $_POST["accomAnswerTwo"];
$commentTwo = $_POST["accomComment2"];

//Question 3
$a3 = $_POST["accomAnswerThree"];
$commentThree = $_POST["accomComment3"];

//Question 4
$a4 = $_POST["accomAnswerFour"];
$commentFour = $_POST["accomComment4"];

//Question 5
$a5 = $_POST["accomAnswerFive"];
$commentFive = $_POST["accomComment5"];


$html = "<head>
        <style>
        h1   {color:black;}
        p    {color: red;}
        </style>
        <h1>Accomodation Survey Results</h1>
        </head>

        <body background-color: grey>
        <table border='1' style='border-collapse:collapse'>
                    <tr>
                        <th>Questions</th>
                        <th>Yes/No</th>
                        <th>Proof</th>
                        <th>Comments</th>
                    </tr>
                    <tr>
                        <td width='250'>Are clearly marked designated accessible parking spaces available at or near the venue?</td>
                        <td width='60'>$a1</td>
                        <td width='250'></td>
                        <td width='200'>$commentOne</td>
                    </tr>
                    <tr>
                        <td width='250'>Does the main entrance have level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.</td>
                        <td width='60'>$a2</td>
                        <td width='250'></td>
                        <td width='200'>$commentTwo</td>
                    </tr>
                    <tr>
                        <td width='250'>Is there an alternative entrance, with level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.</td>
                        <td width='60'>$a3</td>
                        <td width='250'></td>
                        <td width='200'>$commentThree</td>
                    </tr>
                    <tr>
                        <td width='250'>Is the clear door opening width of the entrance with level access more than 75cm?</td>
                        <td width='60'>$a4</td>
                        <td width='250'></td>
                        <td width='200'>$commentFour</td>
                    </tr>
                    <tr>
                        <td width='250'>Is there level access (without steps or thresholds) from the accessible entrance to the public toilet, including access by ramp or lift and the door opening is at least 75cm wide?</td>
                        <td width='60'>$a5</td>
                        <td width='250'></td>
                        <td width='200'>$commentFive</td>
                    </tr>
                </table>
        </body>
        "; //body

$options = new Options;
$options->setChroot(__DIR__);

$dompfd = new Dompdf($options);

$dompfd->setPaper("A4", "landscape");

$dompfd->load_html("$html");

//generate pdf
$dompfd->render();

//adding info about the document 
$dompfd->addInfo("Title", "An Example PDF");

//send pdf to browser - pass values here to name the pdf - attachment with value of 0 allows user to view pdf rather than having to download it
$dompfd->stream("example.pdf", ["Attachment" => 0]);

//change 1 to 0 after Attachment if we want to just view pdf
