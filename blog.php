<?php  
  include("./config/db.php");

  $sql = "SELECT * FROM blog_type";
  
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
  <meta name='og:url' content='https://vittapp.in'>
  <meta name='og:site_name' content='Vitt App'>
  <meta name='og:description' content=''>
  
  <title>Vitt App - Latest Blogs On Financial & Stock Market!!</title>
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
    <!-- Recent Articles Section Start -->
    <section class="articles_section row_am">
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
          <h2>Recent <span>articles</span></h2>
        </div>
        <ul class="filter_tags" data-aos="fade-up" data-aos-duration="1500">
          <li><a href="#" class="active">All</a></li>
          <li><a href="#">Mobile app</a></li>
          <li><a href="#">Android</a></li>
          <li><a href="#">iOS</a></li>
          <li><a href="#">Trending Tech</a></li>
        </ul>
        <div class="blog_listings">
          <div class="listing_block" data-aos="fade-up" data-aos-duration="1500">
            <a href="blog-detail.html" class="img">
              <img src="images/blog1.png" alt="image">
            </a>
            <div class="blog_text">
              <span class="tag">Mobile app</span>
              <h2><a href="blog-detail.html">Effective ways to monetize mobile apps for better perfomance</a></h2>
              <a href="blog-detail.html">Read more <i class="icofont-arrow-right"></i></a>
            </div>
            <div class="authore_info">
              <ul class="blog_info">
                <li>May 12, 2023</li>
                <li>5 Comments</li>
                <li>750 Views</li>
              </ul>
              <div class="avtar">
                <img src="images/authore_01.png" alt="image">
                <div class="text">
                  <h3>Willium Joy</h3>
                  <span>Copy editor</span>
                </div>
              </div>
            </div>
          </div>
          <div class="listing_block" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="img">
              <img src="images/blog2.png" alt="image">
            </a>
            <div class="blog_text">
              <span class="tag">User experience</span>
              <h2><a href="#">Why you our app, top 5 reason to choose our app</a></h2>
              <a href="#">Read more <i class="icofont-arrow-right"></i></a>
            </div>
            <div class="authore_info">
              <ul class="blog_info">
                <li>May 12, 2023</li>
                <li>5 Comments</li>
                <li>520 Views</li>
              </ul>
              <div class="avtar">
                <img src="images/authore_02.png" alt="image">
                <div class="text">
                  <h3>Philip Jose</h3>
                  <span>Tech manager</span>
                </div>
              </div>
            </div>
          </div>
          <div class="listing_block" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="img">
              <img src="images/blog_list3.png" alt="image">
            </a>
            <div class="blog_text">
              <span class="tag">Mobile app</span>
              <h2><a href="#">How to use mobile
                  application with best
                  performance lorem...</a></h2>
              <a href="#">Read more <i class="icofont-arrow-right"></i></a>
            </div>
            <div class="authore_info">
              <ul class="blog_info">
                <li>May 12, 2023</li>
                <li>5 Comments</li>
                <li>333 Views</li>
              </ul>
              <div class="avtar">
                <img src="images/authore_01.png" alt="image">
                <div class="text">
                  <h3>Willium Joy</h3>
                  <span>Copy editor</span>
                </div>
              </div>
            </div>
          </div>
          <div class="listing_block" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="img">
              <img src="images/blog_list4.png" alt="image">
            </a>
            <div class="blog_text">
              <span class="tag">User experience</span>
              <h2><a href="#">Why you our app, top 5 reason to choose our app</a></h2>
              <a href="#">Read more <i class="icofont-arrow-right"></i></a>
            </div>
            <div class="authore_info">
              <ul class="blog_info">
                <li>May 12, 2023</li>
                <li>5 Comments</li>
                <li>421 Views</li>
              </ul>
              <div class="avtar">
                <img src="images/authore_02.png" alt="image">
                <div class="text">
                  <h3>Philip Jose</h3>
                  <span>Tech manager</span>
                </div>
              </div>
            </div>
          </div>
          <div class="listing_block" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="img">
              <img src="images/blog1.png" alt="image">
            </a>
            <div class="blog_text">
              <span class="tag">Mobile app</span>
              <h2><a href="#">Effective ways to monetize mobile apps for better perfomance</a></h2>
              <a href="#">Read more <i class="icofont-arrow-right"></i></a>
            </div>
            <div class="authore_info">
              <ul class="blog_info">
                <li>May 12, 2023</li>
                <li>5 Comments</li>
                <li>750 Views</li>
              </ul>
              <div class="avtar">
                <img src="images/authore_01.png" alt="image">
                <div class="text">
                  <h3>Philip Jose</h3>
                  <span>Tech manager</span>
                </div>
              </div>
            </div>
          </div>
          <div class="listing_block" data-aos="fade-up" data-aos-duration="1500">
            <a href="#" class="img">
              <img src="images/blog2.png" alt="image">
            </a>
            <div class="blog_text">
              <span class="tag">User experience</span>
              <h2><a href="#">Why you our app, top 5 reason to choose our app</a></h2>
              <a href="#">Read more <i class="icofont-arrow-right"></i></a>
            </div>
            <div class="authore_info">
              <ul class="blog_info">
                <li>May 12, 2023</li>
                <li>5 Comments</li>
                <li>520 Views</li>
              </ul>
              <div class="avtar">
                <img src="images/authore_02.png" alt="image">
                <div class="text">
                  <h3>Philip Jose</h3>
                  <span>Tech manager</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pagination -->
        <div class="pagination_block" data-aos="fade-in" data-aos-duration="1500">
          <ul>
            <li><a href="#" class="prev"><i class="icofont-arrow-left"></i> Prev</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#" class="next">Next <i class="icofont-arrow-right"></i></a></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Recent Articles Section End -->

    <!-- Our Resource Section Start -->
    <section class="our_resource">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
              <span class="title_badge">Explore Vitt Blogs</span>
              <h2>Latest <span>blog post</span></h2>
              <p>Explore In-depth Articles, Expert Insights, Market Trends, Technical Analysis and Proven Investment Strategies to Stay Ahead in the Financial World.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mail_block white_text" data-aos="fade-up" data-aos-duration="1500">
              <div class="dotes_blue"><img src="images/blue_dotes.png" alt="image"></div>
              <div class="text">
                <span class="icon"><img src="images/email_icon.png" alt="image"></span>
                <h3>Join our mailing list</h3>
                <p>Be the first to recieve all latest post in your inbox</p>
                <form>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <button class="btn"><i class="icofont-paper-plane"></i></button>
                  </div>
                  <p class="note">By clicking send link you agree to receive message.</p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


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