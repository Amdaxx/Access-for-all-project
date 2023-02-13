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
        </div>

        <div class="step-content current" data-step="1">
	        <div class="fields">
		        <p name="q1" id="Q1" value="Are clearly marked designated accessible parking spaces available at or near the venue?">
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
                <p name="Q2" id="Q2">
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
                <p name="Q3" id="Q3">
                You can now view/download a PDF file of your audit
                </p>
                <div class="rating">
            </div>	

            <button class="btn">Generate PDF</button>

            <div class="buttons">
            <a href="#" class="btn alt" data-set-step="2">Prev</a>
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
    setStep(4);
    <?php endif; ?>
    </script>

    </body>
</html>