<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="../css/contactUs.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script>src="../public/homepage.js"</script>
</head>

<body>
  <?php include '../public/publicHeader.php';?>
  <main>
    <section id="home">
      <?php include '../public/searchForVenue.php';?>
    </section>
    <section id="about">
      <?php include '../public/ourServices.php';?>
    </section>
    <section id="work">
    <body>
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
    <section id="contact">
      <?php include '../public/meetTheTeam.php';?>
    </section>
  </main>
    <?php include '../public/footer.php';?>
</body>

</html>