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
  <title>Vitt App - Financial Planning Calculator | Calculate Your Investment Online</title>
  
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

  <!-- Custom Stylish CSS for Calculator Page -->
  <style>
    .calc-card {
      width: 260px;
      background: linear-gradient(145deg, #ffffff, #f0f0f0);
      border-radius: 15px;
      box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
      padding: 30px;
      text-align: center;
      transition: all 0.4s ease;
      border: none;
      cursor: pointer;
      height: 300px; /* Set a fixed height for consistency */
      display: flex;
      flex-direction: column;
      justify-content: space-between; /* Ensures content is spaced evenly */
    }

    .calc-title {
      font-size: 42px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #2d3e50;
      text-align: center;
    }
    .calc-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 0 15px;
    }
    .calc-card:hover {
      transform: translateY(-8px);
      box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.15);
      background: linear-gradient(145deg, #e4f0f5, #f0f7fa);
    }
    .calc-card img {
      width: 70px;
      margin-bottom: 20px;
      transition: transform 0.3s ease;
      margin: 10px auto;
    }
    .calc-card:hover img {
      transform: scale(1.1);
    }
    .calc-card h3 {
      font-size: 22px;
      margin-bottom: 15px;
      color: #34495e;
      font-weight: 600;
    }
    .calc-card p {
      font-size: 16px;
      color: #7b8a97;
      margin-bottom: 10px;
    }

    /* Anchor Tag Styling */
    .calc-card-link {
      text-decoration: none;
      color: inherit;
      display: inline-block;
    }
    /* Responsive Design */
    @media (max-width: 768px) {
      .calc-card {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <!-- Preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>
  <!-- Header -->
  <?php include("./components/header.php");?>
  
  <!-- Page Content -->
  <div style="height: 50px;"></div>
  <div class="container">
    <h1 class="calc-title">Tools > Calculators</h1>
    <p style="text-align:center;margin-bottom: 40px;">Discover a range of intuitive financial calculators designed to simplify your investment decisions and help you achieve your financial goals.</p>
    
    <div class="calc-grid">
      <a href="calculators/sip-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/sip.png" alt="SIP Calculator">
          <h3>SIP</h3>
          <p>Calculate how much you need to save or how much you will accumulate with your SIP.</p>
        </div>
      </a>

      <a href="calculators/lumpsum-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/lumpsum.png" alt="Lumpsum Calculator">
          <h3>Lumpsum</h3>
          <p>Calculate returns for lumpsum investments to achieve your financial goals.</p>
        </div>
      </a>

      <a href="calculators/swp-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/swp.png" alt="SWP Calculator">
          <h3>SWP</h3>
          <p>Calculate your final amount with Systematic Withdrawal Plans (SWP).</p>
        </div>
      </a>

      <a href="calculators/mf-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/mf.png" alt="MF Calculator">
          <h3>MF</h3>
          <p>Calculate the returns on your mutual fund investments.</p>
        </div>
      </a>

      <a href="calculators/ppf-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/ppf.png" alt="PPF Calculator">
          <h3>PPF</h3>
          <p>Calculate your returns on Public Provident Fund (PPF).</p>
        </div>
      </a>

      <a href="calculators/epf-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/epf.png" alt="EPF Calculator">
          <h3>EPF</h3>
          <p>Calculate returns for your Employee’s Provident Fund (EPF).</p>
        </div>
      </a>

      <a href="calculators/fd-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/fd.png" alt="FD Calculator">
          <h3>FD</h3>
          <p>Check returns on your fixed deposits (FDs) without any hassle.</p>
        </div>
      </a>

      <a href="calculators/emi-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/emi.png" alt="EMI Calculator">
          <h3>EMI</h3>
          <p>Calculate EMI on your loans – home loan, car loan or personal loan.</p>
        </div>
      </a>

      <a href="calculators/simple-interest-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/interest.png" alt="Simple Intrest Calculator">
          <h3>Simple Interest</h3>
          <p>Calculate simple interest on your loans and saving schemes investments.</p>
        </div>
      </a>

      <a href="calculators/compound-interest-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/cinterest.png" alt="Compound Intrest Calculator">
          <h3>Compound Int</h3>
          <p>Calculate Compound Interest with ease</p>
        </div>
      </a>

      <a href="calculators/cagr-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/cagr.png" alt="CAGR Calculator">
          <h3>CAGR</h3>
          <p>The simplest compound annual growth rate calculator.</p>
        </div>
      </a>

      <a href="calculators/brokerage-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/broker.png" alt="Brokerage Calculator">
          <h3>Brokerage</h3>
          <p>Calculate brokerage and other charges for your stock orders.</p>
        </div>
      </a>

      <a href="calculators/inflation-calculator.php" class="calc-card-link">
        <div class="calc-card">
          <img src="images/inflation.png" alt="Inflation Calculator">
          <h3>Inflation</h3>
          <p>Determine how much your money will be worth in the future.</p>
        </div>
      </a>

    </div>
  </div>
  
  <!-- Go to Top Button -->
 <div class="go_top" id="Gotop">
      <span><i class="icofont-arrow-up"></i></span>
    </div>

  <!-- Footer -->
  <?php include("./components/footer.php");?>
  <script>
    // Scroll Down Window 
    $(document).ready(function () {
      // Attach a click event handler to the button
      $('#scrollButton').click(function () {
        // Scroll down smoothly 200 pixels from the current position
        $('html, body').animate({ scrollTop: $(window).scrollTop() + 600 }, 800); // Adjust the speed (800ms) as needed
      });
    });
  </script>
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

</body>
</html>
