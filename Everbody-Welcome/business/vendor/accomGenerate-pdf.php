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

$html = '<h1>Accomodation Survey Results</h1>'; //title
$html .= "<table border='1' style='border-collapse:collapse'>
            <tr>
                <th>Question1</th>
                <th>Yes/No</th>
                <th>Proof</th>
                <th>Comments</th>
            </tr>
            <tr>
                <td width='250'></td>
                <td width='60'>$a1</td>
                <td width='250'></td>
                <td width='200'>$commentOne</td>
            </tr>
            <tr>
                <td></td>
                <td>$a2</td>
                <td></td>
                <td>$commentTwo</td>
                </tr>
        </table>
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