<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='keywords' content=''>
  <meta name='description' content=''>

  <meta name='og:title' content='Vitt App - Your Finance Partner!!'>
  <meta name='og:image' content='images/vitt.png'>
  <meta name='og:url' content='https://vittapp.in/about.php'>
  <meta name='og:site_name' content='Vitt App'>
  <meta name='og:description' content=''>
  
  <title>Vitt App - Pricing</title>
  <!-- icofont-css-link -->
  <link rel="stylesheet" href="css/icofont.min.css">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="css/aos.css">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body>
  <!-- Preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>
  <?php include("./components/header.php");?>


  <div class="page_wrapper">
    <!-- Pricing Section Start -->
    <section class="pricing_page_block">
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
          <span class="title_badge">Explore Piickr API</span>
          <h2>Start Trading & Analytics
with <span>Piickr APIs</span></h2>
          <p></p>
        </div>
        
      </div>
    </section>
    <br/>
    <section class="how_it_section white_text">
      <div class="how_it_inner" data-aos="fade-in" data-aos-duration="1500">
        <div class="dotes_blue"><img src="images/blue_dotes.png" alt="image"></div>
        <div class="container">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
            <span class="title_badge">Quick & easy</span>
            <h2>Pricing, Speed & Thrills</h2>
          </div>
          <div class="row">
            <div class="col-md-4">
              
            </div>
            
            
          </div>
          <div class="text-center">
            <div class="btn_block">
              <a href="contact.html" class="btn puprple_btn ml-0">Get started now</a>
              <div class="btn_bottom"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing Section End -->    
    <!-- FOOTER -->
    <?php include("./components/footer.php");?>
    <!-- go top button -->
    <div class="go_top" id="Gotop">
      <span><i class="icofont-arrow-up"></i></span>
    </div>
  </div>
  <!-- Jquery-js-Link -->
  <script src="js/jquery.js"></script>
  <!-- owl-js-Link -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- bootstrap-js-Link -->
  <script src="js/bootstrap.min.js"></script>
  <!-- aos-js-Link -->
  <script src="js/aos.js"></script>
  <!-- Typed Js Cdn -->
  <script src='js/typed.min.js'></script>
  <!-- main-js-Link -->
  <script src="js/main.js"></script>

  <script>
    // Fixed Discount Dish JS
    $(document).ready(function () {
      let cardBlock = document.querySelectorAll('.task_block');
      let topStyle = 120;

      cardBlock.forEach((card) => {
        card.style.top = `${topStyle}px`;
        topStyle += 30;
      })
    });
    // Scroll Down Window 
    $(document).ready(function () {
      // Attach a click event handler to the button
      $('#scrollButton').click(function () {
        // Scroll down smoothly 200 pixels from the current position
        $('html, body').animate({ scrollTop: $(window).scrollTop() + 600 }, 800); // Adjust the speed (800ms) as needed
      });
    });

  </script>
</body>
</html>