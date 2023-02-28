<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Audit Report</title>
        <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/surveyStyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/Access-for-all-project/Everbody-Welcome/css/overall-page.css">
	</head>
    <div class="flex-wrapper">
        <div id="header">
            <?php include "businessHeader.php";
            $_GET['type'];
            $_GET['id'];
            ?>    
        </div>
        <body>
            <form class="survey-form" method="post" action="vendor/accomGenerate-pdf.php"  style="margin-top:20px">		
            
            <h1><i class="far fa-list-alt"></i><?php echo $_GET['type'] ?> Audit</h1>

            <div class="steps">
                <div class="step current"></div>
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
                        <input type="radio" class="popuptext" name="accomAnswerOne" id="radio1" value="Yes">
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
                            alert("To find out more about level access, follow this link: https://www.lawinsider.com/dictionary/level-access#:~:text=Level%20access%20means%20step%20free,can%20board%20a%20train%20unassisted");
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
                            alert("To find out more about alternative entrances, follow this link: https://www.euansguide.com/campaigns/make-an-accessible-entrance/");
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
                            alert("If you would like to know more about");
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
                        <p>
                        You can now view/download a PDF file of your audit
                        </p>
                        <div class="rating">
                    </div>	

                    <button class="btn">Generate PDF</button>

                    <div class="buttons">
                    <a href="#" class="btn alt" data-set-step="5">Prev</a>
                    </div>
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
        setStep(6);
        <?php endif;?>
        </script>
    </body>
</html>