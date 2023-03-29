<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This page displays the venue information including venue name, venue type and the venue's answers to the general survey.">
    <title>Venue Page</title>
    <link rel="stylesheet" href="../css/contactUs.css">  
    <style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 20px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>
<?php include '../public/publicHeader.php';?>
<div style="text-align:center">
<h2 style="margin-top:75px">Business Name</h2>
</div>

<!-- Three columns -->
<div class="row">
  <div class="column" onclick="openTab('b1');" style="background:green;">
    Venue Information
  </div>
  <div class="column" onclick="openTab('b2');" style="background:blue;">
    Last Survey Results
  </div>
  <div class="column" onclick="openTab('b3');" style="background:red;">
    Contact Venue
  </div>
</div>

<!-- Full-width columns: (hidden by default) -->
<div id="b1" class="containerTab" style="display:none;background:green">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Venue Information</h2>
  <p>
    <h3>Venue Name</h3>
    <h3 id="h4">Venue Type</h3>
    <h3 id="h4">Venue Address</h3>
    <h3 id="h4">Postcode</h3>
  </p>
</div>

<div id="b2" class="containerTab" style="display:none;background:blue">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Last Survey Results</h2>
            <hr>
            <p><strong>Question 1:</strong> What is the venue's capacity? </p>
            <p><strong>Answer:</strong> venue can hold up to 500 people. </p>
            <p><strong>Comment:</strong> </p>
            <p><strong>Proof:</strong></p>
            <hr>
            <p><strong>Question 2:</strong> Are there parking facilities?</p>
            <p><strong>Answer:</strong>Yes, there is a parking lot available for guests. </p>
            <p><strong>Comment: </strong></p>
            <p><strong>Proof:</strong></p>
            <hr>
            <p><strong>Question 3:</strong> Is the venue accessible for people with disabilities? </p>
            <p><strong>Answer:</strong>Yes, the venue is wheelchair accessible. </p>
            <p><strong>Comment: </strong></p>
            <p><strong>Proof:</strong></p>
            <hr>
            <p><strong>Question 4:</strong> What is the venue's location?</p>
            <p><strong>Answer:</strong>The venue is located in downtown, close to the subway station.</p> 
            <p><strong>Comment: </strong></p>
            <p><strong>Proof:</strong></p>
            <hr>
            <p><strong>Question 5:</strong> Does the venue provide catering services? </p>
            <p><strong>Answer:</strong>Yes, the venue has its own catering service that can provide food and drinks. 
            <p><strong>Comment: </strong> </p>
            <p><strong>Proof:</strong></p>
  </p>
</div>

<div id="b3" class="containerTab" style="display:none;background:red">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h2>Contact Venue</h2>
  <p>
  <section id="work">
      <div class="container-contact100">
        <div class="wrap-contact100">
          <form class="contact100-form validate-form">
            <span class="contact100-form-title">
            Send Venue A Message
            </span>
            <div class="wrap-input100 validate-input" data-validate="Please enter your name">
              <input class="input100" type="text" name="name" placeholder="Full Name" fdprocessedid="l1kcx6">
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
              <input class="input100" type="text" name="email" placeholder="E-mail" fdprocessedid="quig3o">
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter your phone">
              <input class="input100" type="text" name="phone" placeholder="Phone" fdprocessedid="hdtcb">
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Please enter your message">
              <textarea class="input100" name="message" placeholder="Your Message"></textarea>
              <span class="focus-input100"></span>
            </div>
              <div class="container-contact100-form-btn">
              <button class="contact100-form-btn" fdprocessedid="qwd0ra">
            <span>
            <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
            Send
            </span>
          </button>
          </div>
          </form>
        </div>
      </div>
    </section>
  </p>
</div>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>



</body>
<?php include "footer.php" ?>
</html> 