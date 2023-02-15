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

//Question 6
$a6 = $_POST["accomAnswerSix"];
$commentSix = $_POST["accomComment6"];

//Question 7
$a7 = $_POST["accomAnswerSeven"];
$commentSeven = $_POST["accomComment7"];

//Question 8
$a8 = $_POST["accomAnswerEight"];
$commentEight = $_POST["accomComment8"];

//Question 9
$a9 = $_POST["accomAnswerNine"];
$commentNine = $_POST["accomComment9"];

//Question 10
$a10 = $_POST["accomAnswerTen"];
$commentTen = $_POST["accomComment10"];

//Question 11
$a11 = $_POST["accomAnswerEleven"];
$commentEleven = $_POST["accomComment11"];

//Question 12
$a12 = $_POST["accomAnswerTwelve"];
$commentTwelve = $_POST["accomComment12"];

//Question 13
$a13 = $_POST["accomAnswerThirteen"];
$commentThirteen = $_POST["accomComment13"];

//Question 14
$a14 = $_POST["accomAnswerFourteen"];
$commentFourteen = $_POST["accomComment14"];

//Question 15
$a15 = $_POST["accomAnswerFifteen"];
$commentFifteen = $_POST["accomComment15"];

//Question 16
$a16 = $_POST["accomAnswerSixteen"];
$commentSixteen = $_POST["accomComment16"];

//Question 17
$a17 = $_POST["accomAnswerSeventeen"];
$commentSeventeen = $_POST["accomComment17"];

//Question 18
$a18 = $_POST["accomAnswerEighteen"];
$commentEighteen = $_POST["accomComment18"];

//Question 19
$a19 = $_POST["accomAnswerNineteen"];
$commentNineteen = $_POST["accomComment19"];

//Question 20
$a20 = $_POST["accomAnswerTwenty"];
$commentTwenty = $_POST["accomComment20"];

//Question 21
$a21 = $_POST["accomAnswerTwentyOne"];
$commentTwentyOne = $_POST["accomComment21"];

//Question 22
$a22 = $_POST["accomAnswerTwentyTwo"];
$commentTwentyTwo = $_POST["accomComment22"];


$html = '<h1>Accomodation Survey Results</h1>'; //title
$html .= "
<table border='1' style='border-collapse:collapse'>
            <tr>
                <th>Questions</th>
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
            <td width='250'></td>
            <td width='60'>$a2</td>
            <td width='250'></td>
            <td width='200'>$commentTwo</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a3</td>
            <td width='250'></td>
            <td width='200'>$commentThree</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a4</td>
            <td width='250'></td>
            <td width='200'>$commentFour</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a5</td>
            <td width='250'></td>
            <td width='200'>$commentFive</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a6</td>
            <td width='250'></td>
            <td width='200'>$commentSix</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a7</td>
            <td width='250'></td>
            <td width='200'>$commentSeven</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a8</td>
            <td width='250'></td>
            <td width='200'>$commentEight</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a9</td>
            <td width='250'></td>
            <td width='200'>$commentNine</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a10</td>
            <td width='250'></td>
            <td width='200'>$commentTen</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a11</td>
            <td width='250'></td>
            <td width='200'>$commentEleven</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a12</td>
            <td width='250'></td>
            <td width='200'>$commentTwelve</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a13</td>
            <td width='250'></td>
            <td width='200'>$commentThirteen</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a14</td>
            <td width='250'></td>
            <td width='200'>$commentFourteen</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a15</td>
            <td width='250'></td>
            <td width='200'>$commentFifteen</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a16</td>
            <td width='250'></td>
            <td width='200'>$commentSixteen</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a17</td>
            <td width='250'></td>
            <td width='200'>$commentSeventeen</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a18</td>
            <td width='250'></td>
            <td width='200'>$commentEighteen</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a19</td>
            <td width='250'></td>
            <td width='200'>$commentNineteen</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a20</td>
            <td width='250'></td>
            <td width='200'>$commentTwenty</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a21</td>
            <td width='250'></td>
            <td width='200'>$commentTwentyOne</td>
            </tr>
            <tr>
            <td width='250'></td>
            <td width='60'>$a22</td>
            <td width='250'></td>
            <td width='200'>$commentTwentyTwo</td>
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