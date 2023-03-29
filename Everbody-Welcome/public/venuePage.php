<!DOCTYPE html>
<html>
<head>
	<title>Three Tabs Page</title>
	
    <style>

 * {
	
	padding: 0;
	box-sizing: border-box;
  	font-family: "Saira Semi Condensed", sans-serif;
	
}

footer {
  position: absolute;
  bottom: 0px;
  width: 100%;
  
  
  
}
p{
	font-size: 14px;
}
h2{
	font-size: 30px;
}
h4{
	font-size: 20px;
}
.container {
	display: flex;
	flex-direction: column;
	align-items: center;
	font-family: "Saira Semi Condensed", sans-serif;
	
}

.tabs {
	display: flex;
	width: 100%;
}

.tab {
	background-color: #ccc;
	color: #333;
	padding: 10px 20px;
	border-radius: 5px 5px 0 0;
	cursor: pointer;
	margin-right: 10px;
	flex: 1;
	text-align: center;
}

.tab.active {
	background-color: #333;
	color: #fff;
}

.tab-content-container {
	display: flex;
	flex-direction: column;
	width: 100%;
}

.tab-content {
	background-color: #ccc;
	color: #333;
	padding: 20px;
	display: none;
	border-radius: 0 0 5px 5px;
}

.tab-content.active {
	display: block;
}
.card {
    width: 100%;
    height: 100%;
    padding: 2em 1.5em;
    background: linear-gradient(#ffffff 50%, #f857a8 50%);
    background-size: 100% 200%;
    background-position: 0 2.5%;
    border-radius: 25px;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
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
</style>
</head>
<body>
<?php include "publicHeader.php" ?>
<div style="text-align:center">
<h2 style="margin-top:100px">Business Name</h2>
</div>
<div class="container">
		<div class="tabs">
			<div class="tab active" data-tab="tab1">Venue Information</div>
			<div class="tab" data-tab="tab2">Venue Survey</div>
			<div class="tab" data-tab="tab3">Contact The Venue</div>
		</div>
		<div class="tab-content-container">
			<div class="tab-content active" data-tab="tab1">
                <div class="card">
                    <h4 id="h4">Venue Type</h4>
                    <p>Venue type goes here.</p>
                    <hr>
                    <h4 id="h4">Venue Address</h4>
                    <p>Venue Address goes here.</p>
                    <hr>
                    <h4 id="h4">Postcode</h4>
                    <p>Venue postcode goes here.</p>
                </div>
			</div>
			<div class="tab-content" data-tab="tab2">
                <div class="card">
                    <h2>Last Survey Results</h2>
                    <p><strong>Question 1:</strong> What is the venue's capacity? </p>
                    <p><strong>Answer:</strong> venue can hold up to 500 people. </p>
                    <p><strong>Comment:</strong> </p>
                    <hr>
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