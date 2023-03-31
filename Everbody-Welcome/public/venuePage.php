<?php require_once('../SQL/sql.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Three Tabs Page</title>
	
    <style>
* {
  font-family: "Saira Semi Condensed", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-align: center;
}

.container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.card {
  width: 100%;
  padding: 2em 1.5em;
  background: linear-gradient(#ffffff 50%, #f857a8 50%);
  background-size: 100% 200%;
  background-position: 0 2.5%;
  border-radius: 25px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
}

.tabs {
  display: flex;
  flex-direction: column;
  width: 100%;
  background-color: #ccc;
}

.tab {
  background-color: #ccc;
  color: #333;
  padding: 10px 20px;
  border-radius: 5px 0 0 5px;
  cursor: pointer;
  margin-bottom: 10px;
  text-align: center;
  transition: all 0.3s ease-in-out;
}

.tab.active {
  background-color: #333;
  color: #fff;
}

.tab:hover {
  background-color: #666;
  color: #fff;
}

.tab-content-container {
  display: flex;
  flex-direction: column;
  width: 100%;
  padding: 20px;
}

.tab-content {
  background-color: #ccc;
  color: #333;
  padding: 20px;
  display: none;
  border-radius: 0 5px 5px 0;
}

.tab-content.active {
  display: block;
}

.email-form label {
  display: block;
  margin-bottom: 10px;
}

.email-form input[type="email"],
.email-form input[type="text"],
.email-form textarea {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  font-size: 16px;
  line-height: 1.5;
}

.email-form button[type="submit"] {
  display: block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

.email-form button[type="submit"]:hover {
  background-color: #666;
}

@media screen and (min-width: 768px) {
  .container {
    flex-direction: row;
  }

  .tabs {
    width: 200px;
  }

  .tab-content-container {
    width: calc(100% - 200px);
  }
}
</style>
</head>
<body>
<?php include "publicHeader.php";
$res = getVenueDetails($_GET['venueid']);
$numberofaudits = getNumberOfAudits($_GET['venueid']);
$survey = getSurveys($_GET['venueid'], $numberofaudits);
$type = $survey['type'];
$results;
if($type=="Advanced Survey"){
	$results = getAdvancedSurveyResult($_GET['venueid'], $numberofaudits);
}
else
{
	$results = getGeneralSurveyResult($_GET['venueid'], $numberofaudits);
}
?>
<div style="text-align:center">

</div>
<div class="container">
		<div class="tabs">
			<div class="tab active" data-tab="tab1">Venue Information</div>
			<div class="tab" data-tab="tab2">Venue Survey</div>
			<div class="ta;b" data-tab="tab3">Contact The Venue</div>
		</div>
		<div class="tab-content-container">
			<div class="tab-content active" data-tab="tab1">
                <div class="card">
                    <h2><?php echo $res['venuename'];?></h2>
                    <hr>
                    <h4 id="h4">Venue Type</h4>
                    <p><?php echo $res['type'];?></p>
                    <hr>
                    <h4 id="h4">Venue Address</h4>
                    <p><?php echo $res['address'];?></p>
                    <hr>
                    <h4 id="h4">Postcode</h4>
                    <p><?php echo $res['postcode'];?></p>
					<h4 id="h4">City</h4>
                    <p><?php echo $res['city'];?></p>
                </div>
			</div>
			<div class="tab-content" data-tab="tab2">
                <div class="card">
                    <h2>Last Survey Results</h2>
					<?php foreach($results as $ques):?>
                    <p><strong>Question:</strong> <?php echo $ques['question']?> </p>
                    <p><strong>Answer:</strong> <?php echo $ques['answer']?> </p>
                    <p><strong>Comment:</strong><?php echo $ques['comment']?> </p>
                    <hr>
					<?php endforeach;?>
                </div>
			</div>
			<div class="tab-content" data-tab="tab3">
            <form class="email-form">
                
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="10" required></textarea>
                <button type="submit">Send Email</button>
				    </form>
			</div>
		</div>
	</div>
	<script src="script.js"></script>
    <script>
        const tabs = document.querySelectorAll('.tab');
const tabContents = document.querySelectorAll('.tab-content');

tabs.forEach(tab => {
	tab.addEventListener('click', () => {
		const tabName = tab.dataset.tab;
		selectTab(tabName);
	});
});

function selectTab(tabName) {
	tabs.forEach(tab => {
		if (tab.dataset.tab === tabName) {
			tab.classList.add('active');
		} else {
			tab.classList.remove('active');
		}
	});
	tabContents.forEach(tabContent => {
		if (tabContent.dataset.tab === tabName) {
			tabContent.classList.add('active');
		} else {
			tabContent.classList.remove('active');
		}
	});
}
</script>
</body>
<footer>
<?php require ("footer.php") ?>
</footer>
</html>