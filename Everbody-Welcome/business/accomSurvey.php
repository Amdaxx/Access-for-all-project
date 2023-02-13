<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Accommodation Survey Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/surveyStyle.css">
	</head>
	<body>

		<form class="survey-form" method="post" action="vendor/accomGenerate-pdf.php">		
		
        <h1><i class="far fa-list-alt"></i>Accommodation Survey Form</h1>

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
        </div>

        <div class="step-content current" data-step="1">
	        <div class="fields">
		        <p name="q1" id="Q1">
                    Are clearly marked designated accessible parking spaces available at or near the venue?
                </p>

		        <div class="rating">
                    <input type="radio" name="accomAnswerOne" id="radio1" value="Yes">
                    <label for="radio1">YES</label>
                    <input type="radio" name="accomAnswerOne" id="radio2" value="No">
                    <label for="radio2" onclick="accom1stAnswer()">NO</label>
                    <script>
                        function accom1stAnswer() {
                        alert("pop up 1");
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

            <div class="buttons">
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
                    <label for="radio3">YES</label>
                    <input type="radio" name="accomAnswerTwo" id="radio4" value="No">
                    <label for="radio4" onclick="accom2ndAnswer()">NO</label>
                    <script>
                        function accom2ndAnswer() {
                        alert("pop up 2");
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

            <div class="buttons">
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
                    <input type="radio" name="accomAnswerThree" id="radio5" value="Yes">
                    <label for="radio5">YES</label>
                    <input type="radio" name="accomAnswerThree" id="radio6" value="No">
                    <label for="radio6" onclick="accom3rdAnswer()">NO</label>
                    <script>
                        function accom3rdAnswer() {
                        alert("pop up 3");
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

            <div class="buttons">
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
                    <label for="radio7">YES</label>
                    <input type="radio" name="accomAnswerFour" id="radio8" value="No">
                    <label for="radio8" onclick="accom4thAnswer()">NO</label>
                    <script>
                        function accom4thAnswer() {
                        alert("pop up 4");
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

            <div class="buttons">
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
                    <label for="radio9">YES</label>
                    <input type="radio" name="accomAnswerFive" id="radio10" value="No">
                    <label for="radio10" onclick="accom5thAnswer()">NO</label>
                    <script>
                        function accom5thAnswer() {
                        alert("pop up 5");
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

            <div class="buttons">
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
                    <label for="radio11">YES</label>
                    <input type="radio" name="accomAnswerSix" id="radio12" value="No">
                    <label for="radio12" onclick="accom6thAnswer()">NO</label>
                    <script>
                        function accom6thAnswer() {
                        alert("pop up 6");
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

            <div class="buttons">
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
                    <label for="radio13">YES</label>
                    <input type="radio" name="accomAnswerSeven" id="radio14" value="No">
                    <label for="radio14" onclick="accom7thAnswer()">NO</label>
                    <script>
                        function accom7thAnswer() {
                        alert("pop up 7");
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

            <div class="buttons">
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
                    <label for="radio15">YES</label>
                    <input type="radio" name="accomAnswerEight" id="radio16" value="No">
                    <label for="radio16" onclick="accom8thAnswer()">NO</label>
                    <script>
                        function accom8thAnswer() {
                        alert("pop up 8");
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

            <div class="buttons">
                <a href="#" class="btn alt" data-set-step="7">Prev</a>
                <a href="#" class="btn" data-set-step="9">Next</a>
            </div>

        </div>

        <!-- page 9 (should actually be page 23 with all accom questions included) -->
        <div class="step-content" data-step="9">

            <div class="fields">
                <p>
                You can now view/download a PDF file of your audit
                </p>
                <div class="rating">
            </div>	

            <button class="btn">Generate PDF</button>

            <div class="buttons">
            <a href="#" class="btn alt" data-set-step="8">Prev</a>
            </div>
        </div>

    </form>

        
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
    setStep(9);
    <?php endif; ?>
    </script>

    </body>
</html>