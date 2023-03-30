<?php
require_once('../SQL/sql.php');

$res = displayAllVenues();

if (isset($_POST['category']) || isset($_POST['city'])) {
  $selected_category = $_POST['category'];
  $selected_city = $_POST['city'];
  $res = filterVenues($selected_category, $selected_city);
}


?>
<html>
  <head>
    <link rel="stylesheet" href="../css/searchForVenue.css"/>
  </head>

  <div class = "flex-wrapper">

    <body>

      <div class="page">

        <div class="sidebar">
          <h2 class="sidebar__title">Venues (354)</h2>
          <form action="process_form.php" method="post" id="form">
  <div class="sidebar__category">
    <div class="sidebar__heading">Type <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
      <polyline points="18 15 12 9 6 15"></polyline>
    </svg></div>
    <div class="sidebar__options">
      <label class="check">
        <input type="radio" class="check__input" name="category" value="accommodation">
        <span class="check__checkbox">
          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 6.5L9 17.5L4 12.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </span>
        <p class="check__text">Accomodation</p>
      </label>
      <label class="check">
        <input type="radio" class="check__input" name="category" value="tours">
        <span class="check__checkbox">
          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 6.5L9 17.5L4 12.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </span>
        <p class="check__text">Tours</p>
      </label>
      <label class="check">
        <input type="radio" class="check__input" name="category" value="experience">
        <span class="check__checkbox">
          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 6.5L9 17.5L4 12.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </span>
        <p class="check__text">Experience</p>
      </label>
      <label class="check">
        <input type="radio" class="check__input" name="category" value="events">
        <span class="check__checkbox">
          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20 6.5L9 17.5L4 12.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </span>
        <p class="check__text">Events</p>
      </label>
    </div>
  </div>
</form>

<script>
  $(document).ready(function() {
    $('input[type=radio]').change(function() {
      var category = $(this).val();

      $.ajax({
        url: "process_form.php",
        type: "post",
        data: {category: category},
        success: function(response) {
          // process the response from the server
        }
      });
    });
  });
</script>




          <div class="sidebar__category">
            <div class="sidebar__heading">Location<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
              <polyline points="18 15 12 9 6 15"></polyline>
              </svg></div>
            <div class="sidebar__options">
              <label class="check">
                <input type="checkbox" class="check__input" checked>
                <span class="check__checkbox">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <p class="check__text">Birmingham</p>
              </label>
              <label class="check">
                <input type="checkbox" class="check__input" checked>
                <span class="check__checkbox">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <p class="check__text">Manchester</p>
              </label>
              <label class="check">
                <input type="checkbox" class="check__input" checked>
                <span class="check__checkbox">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <p class="check__text">Newcastle</p>
              </label>
              <label class="check">
                <input type="checkbox" class="check__input" checked>
                <span class="check__checkbox">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <p class="check__text">Liverpool</p>
              </label>
              <label class="check">
                <input type="checkbox" class="check__input" checked>
                <span class="check__checkbox">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6.5L9 17.5L4 12.5" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <p class="check__text">London</p>
              </label>
            </div>
          </div>
        </div>
        

        <div class="main">
          <h2 class="main__title">Plants (354)</h2>
            <div class="filters">
                <div class="input-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here..." />
                <button class="button">Search</button>
            </div>
        </div>


          <div class="items">
            <?php foreach ($res as $venue): ?>
              <div class="item">
                <div class="item__position">
                  <img src="../pictures/dummyPictures/venue1.jpg" alt="building" class="item__image item__image--hue"  onclick="window.location.href='../public/venuePage.php';">
                </div>
                <div class="item__detail">
                  <p><?php echo $venue['venuename'] ?></p>
                </div>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </body>
</html>



