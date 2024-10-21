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

    <title>Vitt App - SIP Calculator | Systematic Investment Plan Calculator Online</title>
    <!-- icofont-css-link -->
    <link rel="stylesheet" href="../css/icofont.min.css">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="../css/aos.css">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KK3VGJNM');
  </script>
  <!-- End Google Tag Manager -->
    <!-- Bootstrap CSS -->
    <!-- noUiSlider CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
       .main-container {
            max-width: 1200px;
            margin: 30px auto;
        }
        .calculator-container {
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .section {
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: #f0f8f7;
        }
        .section-header {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #06d6a0;
        }
        #sipChart {
            max-width: 100%;
            max-height: 250px;
        }
        /* Customizing the slider */
        .noUi-connect {
            background: #06d6a0 !important;
        }
        .noUi-horizontal .noUi-handle {
            background-color: #06d6a0;
            border: none;
            box-shadow: none;
        }
        .slider-label {
            font-size: 1.1rem;
            margin-top: 10px;
        }
        .more-calculators {
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        .more-calculators h3 {
            font-size: 1.5rem;
            color: #06d6a0;
        }
        .calculator-list {
            list-style: none;
            padding-left: 10px;
        }
        .calculator-list li {
            padding-left: 10px;
            list-style-type: "➤";
            margin-bottom: 10px;
        }
        .calculator-list a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }
        .calculator-list a:hover {
            color: #0056b3;
        }
        /* Input styles */
        .input-box {
            width: 100%;
            padding: 5px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-top: 10px;
            font-size: 1rem;
        }
        .calc-title {
          font-size: 20px;
          font-weight: 700;
          margin-bottom: 20px;
          color: #2d3e50;
          text-align: left;
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Header Start -->
    <header>
      <!-- container start -->
      <div class="container">
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="index.php">
            <img src="../images/logo.png" alt="Vitt Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
              <span class="toggle-wrap">
                <span class="toggle-bar"></span>
              </span>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item has_dropdown">
                <a class="nav-link" href="../index.php">Screener</a>
              </li>
              <li class="nav-item has_dropdown">
                <a class="nav-link" href="../index.php">Home</a>
              </li>
              <li class="nav-item has_dropdown">
                <a class="nav-link" href="../pricing.php">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../blog.php">Blog</a>
              </li>
              <li class="nav-item has_dropdown">
                <a class="nav-link" href="../calculators.php">Calculator</a>
                <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                <div class="sub_menu">
                  <ul>
                    <li><a href="index.html" style="font-family: inherit;">SIP Calculator</a></li>
                    <li><a href="index.html">Lumpsum Calculator</a></li>
                    <li><a href="index.html">MF Calculator</a></li> 
                    <li><a href="index.html">EMI Calculator</a></li>
                    <li><a href="index.html">Compound Intrest</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../about.php">About us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="../contact.php">Contact us</a>
              </li>
              <li class="nav-item">
                <div class="btn_block">
                  <a class="nav-link dark_btn" href="contact.php">Download</a>
                  <div class="btn_bottom"></div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <!-- navigation end -->
      </div>
      <!-- container end -->
    </header>


    <div class="main-container">
        <h1 class="calc-title">Home > Calculators > SIP Calclator</h1>
        <br/>
        <div class="row">
            <!-- Left Column - SIP Calculator -->
            <div class="col-md-8">
                <div class="calculator-container">
                    <h2 class="text-center mb-4" style="color: #06d6a0;font-weight: bold;">SIP Calculator</h2>
                    
                    <!-- Input Section -->
                    <div class="section">
                        <h3 class="section-header">Investment Details</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Monthly Investment Slider -->
                                <label for="investment-slider" class="form-label slider-label">Monthly Investment</label>
                                <div id="investment-slider"></div>
                                <input type="text" id="investment-input" class="input-box" value="₹ 25,000" hidden>
                            </div>
                            <div class="col-md-6">
                                <!-- Return Rate Slider -->
                                <label for="return-slider" class="form-label slider-label">Expected Return Rate (p.a.)</label>
                                <div id="return-slider"></div>
                                <input type="text" id="return-input" class="input-box" value="12%" hidden>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <!-- Time Period Slider -->
                                <label for="time-slider" class="form-label slider-label">Time Period</label>
                                <div id="time-slider"></div>
                                <input type="text" id="time-input" class="input-box" value="10 Years" hidden>
                            </div>
                        </div>
                    </div>

                    <!-- Result Section -->
                    <div class="section">
                        <h3 class="section-header">Results</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <canvas id="sipChart" width="300" height="300"></canvas>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <p><strong>Invested Amount:</strong> ₹ <span id="invested-amount"></span></p>
                                    <p><strong>Estimated Returns:</strong> ₹ <span id="returns-amount"></span></p>
                                    <p><strong>Total Value:</strong> ₹ <span id="total-value"></span></p>
                                    <button class="btn btn-primary mt-3" style="background-color: #06d6a0; border: none;">INVEST NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - More Calculators -->
            <div class="col-md-4">
                <div class="more-calculators">
                    <h3>More Calculators</h3>
                    <br/>
                    <ul class="calculator-list">
                        <li><a href="#"> Lumpsum Calculator</a></li>
                        <li><a href="#"> SWP Calculator</a></li>
                        <li><a href="#"> Mutual Fund Returns Calculator</a></li>
                        <li><a href="#"> PPF Calculator</a></li>
                        <li><a href="#"> EPF Calculator</a></li>
                        <li><a href="#"> FD Calculator</a></li>
                        <li><a href="#"> EMI Calculator</a></li>
                        <li><a href="#"> Simple Interest Calculator</a></li>
                        <li><a href="#"> Compound Interest Calculator</a></li>
                        <li><a href="#"> CAGR Calculator</a></li>
                        <li><a href="#"> Brokerage Calculator</a></li>
                        <li><a href="#"> Inflation Calculator</a></li>
                        <li><a href="#"> Margin Calculator</a></li>
                      </ul>
                </div>
            </div>
        </div>
        <br/>
        <div class="col-md-8">
        <h3 style="font-size: 25px;">➤ SIP Calculator – Systematic Investment Plan Calculator</h2>
        <br/>
        <p>Prospective investors can think that SIPs and mutual funds are the same. However, SIPs are merely a method of investing in mutual funds, the other method being a lump sum. A SIP calculator is a tool that helps you determine the returns you can avail when parking your funds in such investment tools. Systematic Investment Plan or SIP is a process of investing a fixed sum of money in mutual funds at regular intervals. SIPs usually allow you to invest weekly, quarterly, or monthly. </p>       
        </div>
    </div>

    <div class="page_wrapper">
        <!-- Footer-Section start -->
        <footer class="white_text" data-aos="fade-in" data-aos-duration="1500">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="logo_side">
                  <div class="logo">
                    <a href="#">
                      <img src="../images/ft_logo.png" alt="Vitt Footer Logo">
                    </a>
                  </div>
                  <div class="news_letter">
                    <h3>Subscribe newsletter</h3>
                    <p>Be the first to recieve all latest post in your inbox</p>
                    <form>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button class="btn"><i class="icofont-paper-plane"></i></button>
                      </div>
                      <p class="note">By clicking send link you agree to receive message.</p>
                    </form>
                  </div>
                  <ul class="contact_info">
                    <li><a href="mailto:support@vittapp.in">support@vitapp.in</a></li>
                    <li><a href="tel: ">+91 92223-07880</a></li>
                  </ul>
                  <ul class="social_media">
                    <li><a href="https://instagram.com/vittapp.in"><i class="icofont-instagram"></i></a></li>
                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                    <li><a href="https://youtube.com/@vittapp"><i class="icofont-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="download_side">
                  <h3>Download app</h3>
                  <ul class="app_btn">
                    <li>
                      <a href="#">
                        <img class="blue_img" src="../images/googleplay.png" alt="image">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img class="blue_img" src="../images/appstorebtn.png" alt="image">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="footer_bottom">
            <div class="container">
              <div class="ft_inner">
                <div class="copy_text">
                  <p><span style="color:orange">#</span> Made with ❤️ in India | © <script>document.write(new Date().getFullYear());</script>, Developed & Managed by <a href="https://vhiron.com" target="blank">Vhiron Technologies</a>.</p>
                </div>
                <ul class="links">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About us</a></li>
                  <li><a href="pricing.php">Pricing</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="contact.php">Contact us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <br/>
          <div class="container">
            <div class="row">
              <h6 style="color: white;"><span>Most Popular on Vitt </span></h6>
            </div>
            <br/>
            <div class="row" style="gap:10px">
              <p style="color: white;"><span style="color:#06d6a0;font-weight: 700;">MARKET INDICES : </span></p>
              <ul class="indic" style="margin: 0; display:flex;flex-wrap: wrap;flex-direction: row !important; align-items: normal; gap: 5px;">
                <li><a href="">NIFTY 50</a></li>
                <li><a href="">NIFTY 100</a></li>
                <li><a href="">NIFTY MIDCAP 100</a></li>
                <li><a href="">NIFTY BANK</a></li>
                <li><a href="">NIFTY NEXT 50</a></li>
                <li><a href="">BSE SENSEX</a></li>
                <li><a href="">NIFTY METAL</a></li>
                <li><a href="">NIFTY IT</a></li>
                <li><a href="">NIFTY AUTO</a></li>
              </ul>
            </div>
            <br/>
            <div class="row" style="gap:10px">
              <p style="color: white;"><span style="color:#06d6a0;font-weight: 700;">OUR TOOLS :</span></p>
              <ul class="indic" style="margin: 0; display:flex;flex-wrap: wrap;flex-direction: row !important; align-items: normal; gap: 5px;">
                <li><a href="sip-calculator.php">SIP CALCULATOR</a></li>
                <li><a href="sip-calculator.php">EMI CALCULATOR</a></li>
                <li><a href="sip-calculator.php">MF CALCULATOR</a></li>
                <li><a href="sip-calculator.php">FD CALCULATOR</a></li>
                <li><a href="sip-calculator.php">PPF CALCULATOR</a></li>
                <li><a href="sip-calculator.php">EMI CALCULATOR</a></li>
                <li><a href="sip-calculator.php">COMPOUND INTEREST</a></li>
                <li><a href="sip-calculator.php">BROKERAGE CALCULATOR</a></li>
                <li><a href="sip-calculator.php">MARGIN CALCULATOR</a></li>
              </ul>
            </div>
          </div>
        </footer>
        <!-- Footer-Section end -->
        <!-- go top button -->
        <div class="go_top" id="Gotop">
          <span><i class="icofont-arrow-up"></i></span>
        </div>
    </div>

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
    <script src="../js/jquery.js"></script>
    <!-- owl-js-Link -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- bootstrap-js-Link -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- aos-js-Link -->
    <script src="../js/aos.js"></script>
    <!-- Typed Js Cdn -->
    <script src='../js/typed.min.js'></script>
    <!-- main-js-Link -->
    <script src="../js/main.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- noUiSlider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"></script>
    <script>
        // SIP Calculation Function
        function calculateSIP(monthlyInvestment, returnRate, timePeriod) {
            const months = timePeriod * 12;
            const interestRate = returnRate / 100 / 12;
            const futureValue = monthlyInvestment * ((Math.pow(1 + interestRate, months) - 1) / interestRate) * (1 + interestRate);
            const investedAmount = monthlyInvestment * months;
            const returns = futureValue - investedAmount;
            return { futureValue, investedAmount, returns };
        }

        // Format number in Indian style
        function formatNumberInIndianStyle(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        // Parse formatted input values (removing commas and non-numeric characters)
        function parseFormattedNumber(value) {
            return parseFloat(value.replace(/[^\d.-]/g, ""));
        }

        // Initialize Sliders
        const investmentSlider = document.getElementById('investment-slider');
        const returnSlider = document.getElementById('return-slider');
        const timeSlider = document.getElementById('time-slider');

        noUiSlider.create(investmentSlider, {
            start: 500,
            range: { min: 500, max: 100000 },
            step: 500,
            tooltips: true,
        });

        noUiSlider.create(returnSlider, {
            start: 12,
            range: { min: 1, max: 50 },
            step: 0.5,
            tooltips: true,
        });

        noUiSlider.create(timeSlider, {
            start: 10,
            range: { min: 1, max: 30 },
            step: 1,
            tooltips: true,
        });

        // Update Chart
        const ctx = document.getElementById('sipChart').getContext('2d');
        const sipChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Invested Amount', 'Estimated Returns'],
                datasets: [{
                    data: [0, 0],
                    backgroundColor: ['#06d6a0', '#4A90E2'],
                    hoverOffset: 4
                }]
            }
        });

        // Function to update SIP values and chart
        function updateSIP() {
            const monthlyInvestment = parseFormattedNumber(document.getElementById('investment-input').value);
            const returnRate = parseFormattedNumber(document.getElementById('return-input').value);
            const timePeriod = parseFormattedNumber(document.getElementById('time-input').value);

            const { futureValue, investedAmount, returns } = calculateSIP(monthlyInvestment, returnRate, timePeriod);

            document.getElementById('invested-amount').textContent = formatNumberInIndianStyle(investedAmount.toFixed(2));
            document.getElementById('returns-amount').textContent = formatNumberInIndianStyle(returns.toFixed(2));
            document.getElementById('total-value').textContent = formatNumberInIndianStyle(futureValue.toFixed(2));

            // Update chart
            sipChart.data.datasets[0].data = [investedAmount, returns];
            sipChart.update();
        }

        // Update sliders when typing in the input fields
        document.getElementById('investment-input').addEventListener('input', function () {
            const value = parseFormattedNumber(this.value);
            investmentSlider.noUiSlider.set(value);
        });
        
        document.getElementById('return-input').addEventListener('input', function () {
            const value = parseFormattedNumber(this.value);
            returnSlider.noUiSlider.set(value);
        });
        
        document.getElementById('time-input').addEventListener('input', function () {
            const value = parseFormattedNumber(this.value);
            timeSlider.noUiSlider.set(value);
        });

        // Update inputs when sliders change
        investmentSlider.noUiSlider.on('update', function (values) {
            document.getElementById('investment-input').value = `₹ ${formatNumberInIndianStyle(parseFloat(values[0]))}`;
            updateSIP();
        });

        returnSlider.noUiSlider.on('update', function (values) {
            document.getElementById('return-input').value = `${parseFloat(values[0])}%`;
            updateSIP();
        });

        timeSlider.noUiSlider.on('update', function (values) {
            document.getElementById('time-input').value = `${parseFloat(values[0])} Years`;
            updateSIP();
        });

        // Initialize values
        updateSIP();
    </script>
</body>
</html>
