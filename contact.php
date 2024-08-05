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
  <meta name='og:url' content='https://vittapp.in/contact.php'>
  <meta name='og:site_name' content='Vitt App'>
  <meta name='og:description' content=''>
  
  <title>Vitt App - Contact Us</title>
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

    <!-- Contact Us Section Start -->
    <section class="contact_section">
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
          <span class="title_badge">Contact us</span>
          <h2>Any query ? <span>let's talk</span></h2>
          <p>Have questions or need assistance? <br/>Reach out to us for comprehensive support and detailed inquiries about our services and features.</p>
        </div>
        <ul class="contact_listing">
          <li data-aos="fade-up" data-aos-duration="1500">
            <span class="icon">
              <img src="images/mail_icon.png" alt="image">
            </span>
            <span class="lable">Email us</span>
            <a href="mailto:example@gmail.com">support@vittapp.in</a>
          </li>
          <li data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
            <span class="icon">
              <img src="images/phone_icon.png" alt="image">
            </span>
            <span class="lable">Call us</span>
            <a href="tel:1234567899">+91 92223-07880</a>
          </li>
          <li data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <span class="icon">
              <img src="images/location_icon.png" alt="image">
            </span>
            <span class="lable">Our location</span>
            <a target="_blank" href="https://www.google.com/maps">Open Google Maps</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- Contact Us Section End -->
    <!-- Contact Form Section Start -->
    <section class="contact_form white_text row_am" data-aos="fade-in" data-aos-duration="1500">
      <div class="contact_inner">
        <div class="container">
          <div class="dotes_blue"><img src="images/blue_dotes.png" alt="image"></div>
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <span class="title_badge">Message us</span>
            <h2>Drop a message us</h2>
            <p>Fill up form below, our team will get back soon</p>
          </div>
          <form data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name *" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email *" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Company Name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <select class="form-control">
                    <option value="">Country</option>
                    <option value="">India</option>
                    <option value="">USA</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Website">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Comments"></textarea>
                </div>
              </div>
              <div class="col-md-8">
                <div class="coustome_checkbox">
                  <label for="term_checkbox">
                    <input type="checkbox" id="term_checkbox">
                    <span class="checkmark"></span>
                    I agree to receive emails, newsletters and promotional messages
                  </label>
                </div>
              </div>
              <div class="col-md-4 text-right">
                <div class="btn_block">
                  <button class="btn puprple_btn ml-0">Submit</button>
                  <div class="btn_bottom"></div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Contact Form Section End -->


    <!-- Our Resource Section End -->
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
    $("#typed").typed({
      strings: ["Type Writing Text", "Auto Type Text", "Add any text you like here."],
      typeSpeed: 100,
      startDelay: 0,
      backSpeed: 60,
      backDelay: 2000,
      loop: true,
      cursorChar: "|",
      contentType: 'html'
    });

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