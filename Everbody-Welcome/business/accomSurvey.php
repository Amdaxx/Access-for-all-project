<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Audit Report</title>
        <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/surveyStyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	</head>
	<body>

        <div id="header">
            <?php include "businessHeader.php" ?>    
        </div>

	    <form class="survey-form" method="post" action="vendor/accomGenerate-pdf.php">		
		
        <h1><i class="far fa-list-alt"></i>Audit Report</h1>

        <div class="steps">
            <div class="step current"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div> 
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>

            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>

            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>

            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>

            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>

            <div class="step"></div>
        </div>

        <!-- page 1 -->
        <div class="step-content current" data-step="1">
	        <div class="fields">
		        <p name="q1" id="Q1">
                    Are clearly marked designated accessible parking spaces available at or near the venue?
                </p>

		        <div class="rating">
                    <input type="radio" name="accomAnswerOne" id="radio1" value="Yes">
                    <label for="radio1" onclick="showNext1();">YES</label>
                    <input type="radio" name="accomAnswerOne" id="radio2" value="No">
                    <label for="radio2" onclick="accom1stAnswer(); showNext1();">NO</label>

                    <script>
                        function accom1stAnswer() {
                        alert("To find out more about accessible parking, follow this link: https://www.dpaccreditation.org.uk/about-the-dpa/about-the-dpa");
                        }
                        function showNext1(){
                            document.getElementById("next1").style.display = "block";
                        }

                    </script>
                </div>	
            </div>


            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload1" id="accomFileToUpload1">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment1" id="accomComment1">
                <label for="accomComment1"></label>
            </div>	

            <div class="buttons" hidden id="next1">
                <a href="#" class="btn" data-set-step="2">Next</a>
            </div>
        </div>
        

        <!-- page 2 -->
        <div class="step-content" data-step="2">
            <div class="fields">
                <p name="q2" id="Q2">
                    Does the main entrance have level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerTwo" id="radio3" value="Yes">
                    <label for="radio3" onclick="showNext2();">YES</label>
                    <input type="radio" name="accomAnswerTwo" id="radio4" value="No">
                    <label for="radio4" onclick="accom2ndAnswer(); showNext2();">NO</label>
                    <script>
                        function accom2ndAnswer() {
                        alert("pop up 2");
                        }
                        function showNext2(){
                            document.getElementById("next2").style.display = "block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload2" id="accomFileToUpload2">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment2" id="accomComment2">
                <label for="accomComment2"></label>
            </div>	

            <div class="buttons" hidden id="next2">
                <a href="#" class="btn alt" data-set-step="1">Prev</a>
                <a href="#" class="btn" data-set-step="3">Next</a>
            </div>

        </div>

        <!-- page 3 -->
        <div class="step-content" data-step="3">
            <div class="fields">
                <p name="q3" id="Q3">   
                Is there an alternative entrance, with level access (without steps or raised thresholds)? Level access includes access by ramp (permanent or temporary) or lift.
                </p>

                <div class="rating">
                    <input type="radio" onclick="showNext3();" name="accomAnswerThree" id="radio5" value="Yes">
                    <label for="radio5">YES</label>
                    <input type="radio" name="accomAnswerThree" id="radio6" value="No">
                    <label for="radio6" onclick="accom3rdAnswer(); showNext3();">NO</label>
                    <script>
                        function accom3rdAnswer() {
                        alert("pop up 3");
                        }
                        function showNext3(){
                            document.getElementById("next3").style.display = "block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload3" id="accomFileToUpload3">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment3" id="accomComment3">
                <label for="accomComment3"></label>
            </div>	

            <div class="buttons" hidden id="next3">
                <a href="#" class="btn alt" data-set-step="2">Prev</a>
                <a href="#" class="btn" data-set-step="4">Next</a>
            </div>

        </div>


        <!-- page 4 -->
        <div class="step-content" data-step="4">
            <div class="fields">
                <p name="q4" id="Q4">
                Is the clear door opening width of the entrance with level access more than 75cm?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerFour" id="radio7" value="Yes">
                    <label for="radio7" onclick="showNext4();" >YES</label>
                    <input type="radio" name="accomAnswerFour" id="radio8" value="No">
                    <label for="radio8" onclick="accom4thAnswer(); showNext4();">NO</label>
                    <script>
                        function accom4thAnswer() {
                        alert("pop up 4");
                        }
                        function showNext4(){
                            document.getElementById("next4").style.display="block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload4" id="accomFileToUpload4">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment4" id="accomComment4">
                <label for="accomComment4"></label>
            </div>	

            <div class="buttons" hidden id="next4">
                <a href="#" class="btn alt" data-set-step="3">Prev</a>
                <a href="#" class="btn" data-set-step="5">Next</a>
            </div>

        </div>

        <!-- page 5 -->
        <div class="step-content" data-step="5">
            <div class="fields">
                <p name="q5" id="Q5">
                Is there level access (without steps or thresholds) from the accessible entrance to the public toilet, including access by ramp or lift and the door opening is at least 75cm wide?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerFive" id="radio9" value="Yes">
                    <label for="radio9" onclick="showNext5();">YES</label>
                    <input type="radio" name="accomAnswerFive" id="radio10" value="No">
                    <label for="radio10" onclick="accom5thAnswer(); showNext5();">NO</label>
                    <script>
                        function accom5thAnswer() {
                        alert("pop up 5");
                        }
                        function showNext5(){
                            document.getElementById("next5").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload5" id="accomFileToUpload5">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment5" id="accomComment5">
                <label for="accomComment5"></label>
            </div>	

            <div class="buttons" hidden id="next5">
                <a href="#" class="btn alt" data-set-step="4">Prev</a>
                <a href="#" class="btn" data-set-step="6">Next</a>
            </div>

        </div>

        <!-- page 6 -->
        <div class="step-content" data-step="6">
            <div class="fields">
                <p name="q6" id="Q6">
                
                Is there space for a wheelchair to at least one side of the toilet to enable the person to transfer?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerSix" id="radio11" value="Yes">
                    <label for="radio11" onclick="showNext6();">YES</label>
                    <input type="radio" name="accomAnswerSix" id="radio12" value="No">
                    <label for="radio12" onclick="accom6thAnswer(); showNext6();">NO</label>
                    <script>
                        function accom6thAnswer() {
                        alert("pop up 6");
                        }
                        function showNext6(){
                            document.getElementById("next6").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload6" id="accomFileToUpload6">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment6" id="accomComment6">
                <label for="accomComment6"></label>
            </div>	

            <div class="buttons" hidden id="next6">
                <a href="#" class="btn alt" data-set-step="5">Prev</a>
                <a href="#" class="btn" data-set-step="7">Next</a>
            </div>

        </div>

        <!-- page 7 -->
        <div class="step-content" data-step="7">
            <div class="fields">
                <p name="q7" id="Q7">
                Are there handrails next to the toilet?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerSeven" id="radio13" value="Yes">
                    <label for="radio13" onclick="showNext7();">YES</label>
                    <input type="radio" name="accomAnswerSeven" id="radio14" value="No">
                    <label for="radio14" onclick="accom7thAnswer(); showNext7();">NO</label>
                    <script>
                        function accom7thAnswer() {
                        alert("pop up 7");
                        }
                        function showNext7(){
                            document.getElementById("next7").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload7" id="accomFileToUpload7">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment7" id="accomComment7">
                <label for="accomComment7"></label>
            </div>	

            <div class="buttons" hidden id="next7">
                <a href="#" class="btn alt" data-set-step="6">Prev</a>
                <a href="#" class="btn" data-set-step="8">Next</a>
            </div>

        </div>

        <!-- page 8 -->
        <div class="step-content" data-step="8">
            <div class="fields">
                <p name="q8" id="Q8">
                Is there an emergency call system in the toilet?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerEight" id="radio15" value="Yes">
                    <label for="radio15" onclick="showNext8();">YES</label>
                    <input type="radio" name="accomAnswerEight" id="radio16" value="No">
                    <label for="radio16" onclick="accom8thAnswer(); showNext8();">NO</label>
                    <script>
                        function accom8thAnswer() {
                        alert("pop up 8");
                        }
                        function showNext8(){
                            document.getElementById("next8").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload8" id="accomFileToUpload8">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment8" id="accomComment8">
                <label for="accomComment8"></label>
            </div>	

            <div class="buttons" hidden id="next8">
                <a href="#" class="btn alt" data-set-step="7">Prev</a>
                <a href="#" class="btn" data-set-step="9">Next</a>
            </div>

        </div>

         <!-- page 9 -->
         <div class="step-content" data-step="9">
            <div class="fields">
                <p name="q9" id="Q9">
                Wheelchair accessible bedroom: Is there level access (without steps or thresholds) from the accessible entrance to the bedroom, including access by ramp or lift
                AND the route from the accessible entrance to the bedroom is at least 75cm wide, at it’s narrowest point 
                AND the door opening is at least 75cm wide
                AND the bedroom has unobstructed floor space not less than 120cm by 90cm?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerNine" id="radio17" value="Yes">
                    <label for="radio17" onclick="showNext9();">YES</label>
                    <input type="radio" name="accomAnswerNine" id="radio18" value="No">
                    <label for="radio18" onclick="accom9thAnswer(); showNext9();">NO</label>
                    <script>
                        function accom9thAnswer() {
                        alert("pop up 9");
                        }
                        function showNext9(){
                            document.getElementById("next9").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload9" id="accomFileToUpload9">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment9" id="accomComment9">
                <label for="accomComment9"></label>
            </div>	

            <div class="buttons" hidden id="next9">
                <a href="#" class="btn alt" data-set-step="8">Prev</a>
                <a href="#" class="btn" data-set-step="10">Next</a>
            </div>

        </div>

         <!-- page 10 -->
         <div class="step-content" data-step="10">
            <div class="fields">
                <p name="q10" id="Q10">
                Wheelchair accessible bathroom: Is the door opening at least 75cm wide AND
                is there unobstructed floor space not less than 120cm by 90cm?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerTen" id="radio19" value="Yes">
                    <label for="radio19" onclick="showNext10();">YES</label>
                    <input type="radio" name="accomAnswerTen" id="radio20" value="No">
                    <label for="radio20" onclick="accom10thAnswer(); showNext10();">NO</label>
                    <script>
                        function accom10thAnswer() {
                        alert("pop up 10");
                        }
                        function showNext10(){
                            document.getElementById("next10").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload10" id="accomFileToUpload10">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment10" id="accomComment10">
                <label for="accomComment10"></label>
            </div>	

            <div class="buttons" hidden id="next10">
                <a href="#" class="btn alt" data-set-step="9">Prev</a>
                <a href="#" class="btn" data-set-step="11">Next</a>
            </div>

        </div>

        <!-- page 11 -->
        <div class="step-content" data-step="11">
            <div class="fields">
                <p name="q11" id="Q11">
                Wheelchair accessible bathroom: Is there space for a wheelchair to at least one side of the toilet to enable the person to transfer?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerEleven" id="radio21" value="Yes">
                    <label for="radio21" onclick="showNext11();">YES</label>
                    <input type="radio" name="accomAnswerEleven" id="radio22" value="No">
                    <label for="radio22" onclick="accom11thAnswer(); showNext11();">NO</label>
                    <script>
                        function accom11thAnswer() {
                        alert("pop up 11");
                        }
                        function showNext11(){
                            document.getElementById("next11").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload11" id="accomFileToUpload11">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment11" id="accomComment11">
                <label for="accomComment11"></label>
            </div>	

            <div class="buttons" hidden id="next11">
                <a href="#" class="btn alt" data-set-step="10">Prev</a>
                <a href="#" class="btn" data-set-step="12">Next</a>
            </div>

        </div>

        <!-- page 12 -->
        <div class="step-content" data-step="12">
            <div class="fields">
                <p name="q12" id="Q12">
                Wheelchair accessible bathroom: Are there handrails next to the toilet?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerTwelve" id="radio23" value="Yes">
                    <label for="radio23" onclick="showNext12();">YES</label>
                    <input type="radio" name="accomAnswerTwelve" id="radio24" value="No">
                    <label for="radio24" onclick="accom12thAnswer(); showNext12();">NO</label>
                    <script>
                        function accom12thAnswer() {
                        alert("pop up 12");
                        }
                        function showNext12(){
                            document.getElementById("next12").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload12" id="accomFileToUpload12">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment12" id="accomComment12">
                <label for="accomComment12"></label>
            </div>	

            <div class="buttons" hidden id="next12">
                <a href="#" class="btn alt" data-set-step="11">Prev</a>
                <a href="#" class="btn" data-set-step="13">Next</a>
            </div>

        </div>

        <!-- page 13 -->
        <div class="step-content" data-step="13">
            <div class="fields">
                <p name="q13" id="Q13">
                Wheelchair accessible bathroom: Is there a level access wetroom shower (no raised shower tray or step-up)?  
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerThirteen" id="radio25" value="Yes">
                    <label for="radio25" onclick="showNext13();">YES</label>
                    <input type="radio" name="accomAnswerThirteen" id="radio26" value="No">
                    <label for="radio26" onclick="accom13thAnswer(); showNext13();">NO</label>
                    <script>
                        function accom13thAnswer() {
                        alert("pop up 13");
                        }
                        function showNext13(){
                            document.getElementById("next13").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload13" id="accomFileToUpload13">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment13" id="accomComment13">
                <label for="accomComment13"></label>
            </div>	

            <div class="buttons" hidden id="next13">
                <a href="#" class="btn alt" data-set-step="12">Prev</a>
                <a href="#" class="btn" data-set-step="14">Next</a>
            </div>

        </div>

        <!-- page 14 -->
        <div class="step-content" data-step="14">
            <div class="fields">
                <p name="q14" id="Q14">
                Wheelchair accessible bathroom: Is there an emergency call system in the bathroom?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerFourteen" id="radio27" value="Yes">
                    <label for="radio27" onclick="showNext14();">YES</label>
                    <input type="radio" name="accomAnswerFourteen" id="radio28" value="No">
                    <label for="radio28" onclick="accom14thAnswer(); showNext14();">NO</label>
                    <script>
                        function accom14thAnswer() {
                        alert("pop up 14");
                        }
                        function showNext14(){
                            document.getElementById("next14").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload14" id="accomFileToUpload14">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment14" id="accomComment14">
                <label for="accomComment14"></label>
            </div>	

            <div class="buttons" hidden id="next14">
                <a href="#" class="btn alt" data-set-step="13">Prev</a>
                <a href="#" class="btn" data-set-step="15">Next</a>
            </div>

        </div>

         <!-- page 15 -->
         <div class="step-content" data-step="15">
            <div class="fields">
                <p name="q15" id="Q15">
                Is there a hearing loop/audio induction loop/infrared system available to amplify sound
                AND is there clear signage positioned where any fixed loops are effective?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerFifteen" id="radio29" value="Yes">
                    <label for="radio29" onclick="showNext15();">YES</label>
                    <input type="radio" name="accomAnswerFifteen" id="radio30" value="No">
                    <label for="radio30" onclick="accom15thAnswer(); showNext15();">NO</label>
                    <script>
                        function accom15thAnswer() {
                        alert("pop up 15");
                        }
                        function showNext15(){
                            document.getElementById("next15").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload15" id="accomFileToUpload15">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment15" id="accomComment15">
                <label for="accomComment15"></label>
            </div>	

            <div class="buttons" hidden id="next15">
                <a href="#" class="btn alt" data-set-step="14">Prev</a>
                <a href="#" class="btn" data-set-step="16">Next</a>
            </div>

        </div>

        <!-- page 16 -->
        <div class="step-content" data-step="16">
            <div class="fields">
                <p name="q16" id="Q16">
                Is there a mobile hoist available or a ceiling tracked hoist in at least one accessible bedroom?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerSixteen" id="radio31" value="Yes">
                    <label for="radio31" onclick="showNext16();">YES</label>
                    <input type="radio" name="accomAnswerSixteen" id="radio32" value="No">
                    <label for="radio32" onclick="accom16thAnswer(); showNext16();">NO</label>
                    <script>
                        function accom16thAnswer() {
                        alert("pop up 16");
                        }
                        function showNext16(){
                            document.getElementById("next16").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload16" id="accomFileToUpload16">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment16" id="accomComment16">
                <label for="accomComment16"></label>
            </div>	

            <div class="buttons" hidden id="next16">
                <a href="#" class="btn alt" data-set-step="15">Prev</a>
                <a href="#" class="btn" data-set-step="17">Next</a>
            </div>

        </div>

        <!-- page 17 -->
        <div class="step-content" data-step="17">
            <div class="fields">
                <p name="q17" id="Q17">
                Is there an emergency call system with vibrating pillow pad available to alert someone with hearing loss if the fire alarm is activated?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerSeventeen" id="radio33" value="Yes">
                    <label for="radio33" onclick="showNext17();">YES</label>
                    <input type="radio" name="accomAnswerSeventeen" id="radio34" value="No">
                    <label for="radio34" onclick="accom17thAnswer(); showNext17();">NO</label>
                    <script>
                        function accom17thAnswer() {
                        alert("pop up 17");
                        }
                        function showNext17(){
                            document.getElementById("next17").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload17" id="accomFileToUpload17">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment17" id="accomComment17">
                <label for="accomComment17"></label>
            </div>	

            <div class="buttons" hidden id="next17">
                <a href="#" class="btn alt" data-set-step="16">Prev</a>
                <a href="#" class="btn" data-set-step="18">Next</a>
            </div>

        </div>

         <!-- page 18 -->
         <div class="step-content" data-step="18">
            <div class="fields">
                <p name="q18" id="Q18">
                Is there an emergency call system with flashing lights to alert someone with hearing loss if the fire alarm is activated?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerEighteen" id="radio35" value="Yes">
                    <label for="radio35" onclick="showNext18();">YES</label>
                    <input type="radio" name="accomAnswerEighteen" id="radio36" value="No">
                    <label for="radio36" onclick="accom18thAnswer(); showNext18();">NO</label>
                    <script>
                        function accom18thAnswer() {
                        alert("pop up 18");
                        }
                        function showNext18(){
                            document.getElementById("next18").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload18" id="accomFileToUpload18">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment18" id="accomComment18">
                <label for="accomComment18"></label>
            </div>	

            <div class="buttons" hidden id="next18">
                <a href="#" class="btn alt" data-set-step="17">Prev</a>
                <a href="#" class="btn" data-set-step="19">Next</a>
            </div>

        </div>

        <!-- page 19 -->
        <div class="step-content" data-step="19">
            <div class="fields">
                <p name="q19" id="Q19">
                Is there is level access (without steps or thresholds) from the accessible entrance to the restaurant, including access by ramp or lift
                AND is the route from the accessible entrance to the restaurant at least 75cm wide, at it’s narrowest point 
                AND is the door opening at least 75cm wide?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerNineteen" id="radio37" value="Yes">
                    <label for="radio37" onclick="showNext19();">YES</label>
                    <input type="radio" name="accomAnswerNineteen" id="radio38" value="No">
                    <label for="radio38" onclick="accom19thAnswer(); showNext19();">NO</label>
                    <script>
                        function accom19thAnswer() {
                        alert("pop up 19");
                        }
                        function showNext19(){
                            document.getElementById("next19").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload19" id="accomFileToUpload19">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment19" id="accomComment19">
                <label for="accomComment19"></label>
            </div>	

            <div class="buttons" hidden id="next19">
                <a href="#" class="btn alt" data-set-step="18">Prev</a>
                <a href="#" class="btn" data-set-step="20">Next</a>
            </div>

        </div>

        <!-- page 20 -->
        <div class="step-content" data-step="20">
            <div class="fields">
                <p name="q20" id="Q20">
                Can you can cater for a range of dietary requirements such as vegan, gluten free, lactose free?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerTwenty" id="radio39" value="Yes">
                    <label for="radio39" onclick="showNext20();">YES</label>
                    <input type="radio" name="accomAnswerTwenty" id="radio40" value="No">
                    <label for="radio40" onclick="accom20thAnswer(); showNext20();">NO</label>
                    <script>
                        function accom20thAnswer() {
                        alert("Pop up 20");
                        }
                        function showNext20(){
                            document.getElementById("next20").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload20" id="accomFileToUpload20">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment20" id="accomComment20">
                <label for="accomComment20"></label>
            </div>	

            <div class="buttons" hidden id="next20">
                <a href="#" class="btn alt" data-set-step="19">Prev</a>
                <a href="#" class="btn" data-set-step="21">Next</a>
            </div>

        </div>

        <!-- page 21 -->
        <div class="step-content" data-step="21">
            <div class="fields">
                <p name="q21" id="Q21">
                Are trained assistance dogs welcome?
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerTwentyOne" id="radio41" value="Yes">
                    <label for="radio41" onclick="showNext21();">YES</label>
                    <input type="radio" name="accomAnswerTwentyOne" id="radio42" value="No">
                    <label for="radio42" onclick="accom21stAnswer(); showNext21();">NO</label>
                    <script>
                        function accom21stAnswer() {
                        alert("Default YES - It would be unlawful to refuse access to a disabled person accompanied by an assistance dog except in the most exceptional circumstances");
                        }
                        function showNext21(){
                            document.getElementById("next21").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload21" id="accomFileToUpload21">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment21" id="accomComment21">
                <label for="accomComment21"></label>
            </div>	

            <div class="buttons" hidden id="next21">
                <a href="#" class="btn alt" data-set-step="20">Prev</a>
                <a href="#" class="btn" data-set-step="22">Next</a>
            </div>

        </div>

        <!-- page 22 -->
        <div class="step-content" data-step="22">
            <div class="fields">
                <p name="q22" id="Q22">
                Do you have a published Accessibility Guide - a thorough yet concise description of the accessibility of your venue/experience? If so, please provide a link in the comments section.
                </p>

                <div class="rating">
                    <input type="radio" name="accomAnswerTwentyTwo" id="radio43" value="Yes">
                    <label for="radio43" onclick="showNext22();">YES</label>
                    <input type="radio" name="accomAnswerTwentyTwo" id="radio44" value="No">
                    <label for="radio44" onclick="accom22ndAnswer(); showNext22();">NO</label>
                    <script>
                        function accom22ndAnswer() {
                        alert("pop up 22");
                        }
                        function showNext22(){
                            document.getElementById("next22").style.display="Block";
                        }
                    </script>
                </div>

            </div>

            <div class="buttons">
                Upload proof:
                <input type="file" class="btn alt" name="accomFileToUpload22" id="accomFileToUpload22">
            </div>

            <div class="fields">
                Add a comment:
                <input type="text" name="accomComment22" id="accomComment22">
                <label for="accomComment22"></label>
            </div>	

            <div class="buttons" hidden id="next22">
                <a href="#" class="btn alt" data-set-step="21">Prev</a>
                <a href="#" class="btn" data-set-step="23">Next</a>
            </div>

        </div>

        <!-- page 23 -->
        <div class="step-content" data-step="23">

            <div class="fields">
                <p>
                You can now view/download a PDF file of your audit
                </p>
                <div class="rating">
            </div>	

            <button class="btn">Generate PDF</button>

            <div class="buttons">
            <a href="#" class="btn alt" data-set-step="22">Prev</a>
            </div>
        </div>

    </form>
    <?php include "../public/footer.php" ?>                   
        
    <script>
    const setStep = step => {
        document.querySelectorAll(".step-content").forEach(element => element.style.display = "none");
        document.querySelector("[data-step='" + step + "']").style.display = "block";
        document.querySelectorAll(".steps .step").forEach((element, index) => {
            index < step-1 ? element.classList.add("complete") : element.classList.remove("complete");
            index == step-1 ? element.classList.add("current") : element.classList.remove("current");
        });
    };
    document.querySelectorAll("[data-set-step]").forEach(element => {
        element.onclick = event => {
            event.preventDefault();
            setStep(parseInt(element.dataset.setStep));
        };
    });
    <?php if (!empty($_POST)): ?>
        //steps = number of questions + 1 for the generate pdf page
    setStep(23);
    <?php endif;?>
    </script>
    </body>


</html>