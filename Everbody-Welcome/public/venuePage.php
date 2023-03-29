<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This page displays the venue information including venue name, venue type and the venue's answers to the general survey.">
    <title>Venue Page</title>
    <style>
    #LatestSurveyResults {
    font-size: large;
    text-align: center; 
    padding-left: 500px;
    font-family: "Saira Semi Condensed", sans-serif;
    }
    #venueInfo {
      font-size: large;
      font-family: "Saira Semi Condensed", sans-serif;
    }
    #h4 {
      font-size: larger;
    }
    

    input {
        outline: none;
        border: none
    }

    input[type=number] {
        -moz-appearance: textfield;
        appearance: none;
        -webkit-appearance: none
    }

    input[type=number]::-webkit-outer-spin-button,input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none
    }

    textarea {
        outline: none;
        border: none
    }

    textarea:focus,input:focus {
        border-color: transparent!important
    }

    input::-webkit-input-placeholder {
        color: #bdbdd3
    }

    input:-moz-placeholder {
        color: #bdbdd3
    }

    input::-moz-placeholder {
        color: #bdbdd3
    }

    input:-ms-input-placeholder {
        color: #bdbdd3
    }

    textarea::-webkit-input-placeholder {
        color: #bdbdd3
    }

    textarea:-moz-placeholder {
        color: #bdbdd3
    }

    textarea::-moz-placeholder {
        color: #bdbdd3
    }

    textarea:-ms-input-placeholder {
        color: #bdbdd3
    }

    button {
        outline: none!important;
        border: none;
        background: 0 0
    }

    button:hover {
        cursor: pointer
    }

    iframe {
        border: none!important
    }

    .container {
        max-width: 1200px
    }

    .container-contact100 {
        width: 100%;
        min-height: 80vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        position: relative;
        background:none;
    }

    .wrap-contact100 {
        width: 550px;
        background: 0 0;
    }

    .contact100-form {
        width: 100%
    }

    .contact100-form-title {
        display: block;
        font-size: 30px;
        line-height: 1.2;
        text-align: center;
        padding: 20px;
        color: white;
        background: #f857a8;
        background: -webkit-linear-gradient(45deg, #f857a8, #ff5858);
        background: linear-gradient(45deg, #f857a8, #ff5858);
        display: block;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        margin-bottom: 16px;
        width: 100%;
        height: 100%;
        top: 0;
        left: 55%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        border-radius: 31px;
        pointer-events: none;
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .4s;
        transition: all .4s;
        font-family: "Saira Semi Condensed", sans-serif;
    }

    .wrap-input100 {
        width: 100%;
        background-color: #fff;
        border-radius: 31px;
        margin-bottom: 16px;
        position: relative;
        z-index: 1
    }

    .input100 {
        position: relative;
        display: block;
        width: 100%;
        background: #fff;
        border-radius: 31px;
        font-size: 18px;
        color: #8f8fa1;
        line-height: 1.2
    }

    input.input100 {
        height: 62px;
        padding: 0 35px
    }

    textarea.input100 {
        min-height: 169px;
        padding: 19px 35px 0
    }

    .focus-input100 {
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        border-radius: 31px;
        background-color: #fff;
        pointer-events: none;
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .4s;
        transition: all .4s
    }

    .input100:focus+.focus-input100 {
        width: calc(100% + 20px)
    }

    .container-contact100-form-btn {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 10px
    }

    .contact100-form-btn {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        min-width: 150px;
        height: 62px;
        background-color: transparent;
        border-radius: 31px;
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .4s;
        transition: all .4s;
        position: relative;
        z-index: 1
    }

    .contact100-form-btn::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        border-radius: 31px;
        pointer-events: none;
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .4s;
        transition: all .4s;
        background: #f857a8;
        background: -webkit-linear-gradient(45deg, #f857a8, #ff5858);
        background: linear-gradient(45deg, #f857a8, #ff5858);
    }

    .contact100-form-btn:hover:before {
        background: #f857a8;
        background: -webkit-linear-gradient(45deg, #f857a8, #ff5858);
        background: linear-gradient(45deg, #f857a8, #ff5858);
        width: calc(100% + 20px)
    }
    </style>
    <?php include "publicHeader.php" ?>
  </head>
  <body>
    
    <div class="container">
      
    <div id="venueInfo">
    
    <br>
    <br>
    <br>
      <h1>Venue Name</h1>
      <h4 id="h4">Venue Type</h4>
      <h4 id="h4">Postcode</h4>
    </div>
      


      <div class="row">
        
      <div id="LatestSurveyResults" style="float:right;" class="col-xs-12">
        <h2>Latest Survey Result</h2>
        <hr>
        <p><strong>Question 1:</strong> What is the venue's capacity? <strong>Answer:</strong> venue can hold up to 500 people. <strong>Comment:</strong> <strong>Proof:</strong></p>
        <hr>
        <p><strong>Question 2:</strong> Are there parking facilities? <strong>Answer:</strong>Yes, there is a parking lot available for guests. <strong>Comment: </strong> <strong>Proof:</strong></p>
        <hr>
        <p><strong>Question 3:</strong> Is the venue accessible for people with disabilities? <strong>Answer:</strong>Yes, the venue is wheelchair accessible. <strong>Comment: </strong> <strong>Proof:</strong></p>
        <hr>
        <p><strong>Question 4:</strong> What is the venue's location? <strong>Answer:</strong>The venue is located in downtown, close to the subway station. <strong>Comment: </strong> <strong>Proof:</strong></p>
        <hr>
        <p><strong>Question 5:</strong> Does the venue provide catering services? <strong>Answer:</strong>Yes, the venue has its own catering service that can provide food and drinks. <strong>Comment: </strong> <strong>Proof:</strong></p>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <section id="work">
      <div class="container-contact100">
        <div class="wrap-contact100">
          <form class="contact100-form validate-form">
            <span class="contact100-form-title">
            Send Us A Message
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
  
</div> 

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
<?php include "footer.php" ?>
</html> 