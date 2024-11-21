<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='keywords' content=''>
    <meta name='description' content=''>
    <meta name='og:title' content='Piickr - Stock Screener & Market Analysis Tool By Vitt'>
    <meta name='og:image' content='images/vitt.png'>
    <meta name='og:url' content='https://vittapp.in'>
    <meta name='og:site_name' content='Vitt App'>
    <meta name='og:description' content=''>
    <title>Piickr - Stock Screener & Market Analysis Tool By Vitt</title>
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
    <!-- Custom Style For Home Page -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Marqueefy CSS -->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@marqueefy/marqueefy@1.0.3/dist/css/marqueefy.min.css" 
      integrity="sha384-wADgvhAqbORDLWCl6LHRmwaldDxcsCZJ9EfC4tyLmlqRSrxK8SQSmUprPJYdtCZb" 
      crossorigin="anonymous">
    <style>
    </style>
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div id="loader"></div>
    </div>
    <div class="marqueefy" tabindex="0" data-mq-speed="50" style="width:100%; background: #fff; border-radius: 0px; border-bottom: 1px dashed grey;">
      <div class="content" id="stockContent">
        <!-- Dynamic Addition -->
      </div>
    </div>
    <?php include("./components/header.php");?>
    <div class="page_wrapper">
      <div class="hero_one">
        <img class="hero__pattern-bg" src="images/piickr-background-2.svg" alt="Background Pattern Hero">
      </div>
      <div class="row justify-content-center" style="margin-top: 50px;gap: 10px; align-items: center;">
        <h3 style="font-size: 20px;">Indian </h3>
        <canvas id="canvas2" width="90" height="90"></canvas>
        <h3 style="font-size: 20px;">Indices</h3>
      </div>
      <div class="row indices-container" style="margin-top: 50px;">
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY 50" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">NIFTY 50</h5>
                  <img src="images/exclamation.png" class="trend_indicator" style="height:15px; width: 15px;">
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="indice1">0.00</p>
                  <span class="price">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY BANK" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">NIFTY BANK</h5>
                  <img src="images/exclamation.png" class="trend_indicator" style="height:15px; width: 15px;">
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="indice2">0.00</p>
                  <span class="price">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY REALTY" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">NIFTY REALTY</h5>
                  <img src="images/exclamation.png" class="trend_indicator" style="height:15px; width: 15px;">
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="indice3">0.00</p>
                  <span class="price">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY IT" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">NIFTY IT</h5>
                  <img src="images/exclamation.png" class="trend_indicator" style="height:15px; width: 15px;">
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="indice4">0.00</p>
                  <span class="price">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- Repeat the same structure for other cards with unique links -->
      </div>
      <!-- Additional row -->
      <div class="row indices-container" style="margin-top: 30px;">
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY METAL" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">NIFTY METAL</h5>
                  <img src="images/exclamation.png" class="trend_indicator" style="height:15px; width: 15px;">
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="indice5">0.00</p>
                  <span class="price">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY ENERGY" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">NIFTY ENERGY</h5>
                  <img src="images/exclamation.png" class="trend_indicator" style="height:15px; width: 15px;">
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="indice6">0.00</p>
                  <span class="price">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY INFRA" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">NIFTY INFRA</h5>
                  <img src="images/exclamation.png" class="trend_indicator" style="height:15px; width: 15px;">
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="indice7">0.00</p>
                  <span class="price">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY FMCG" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">NIFTY FMCG</h5>
                  <img src="images/exclamation.png" class="trend_indicator" style="height:15px; width: 15px;">
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="indice8">0.00</p>
                  <span class="price">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- Repeat for other cards with their respective links -->
      </div>
      <div class="row justify-content-center" style="margin-top: 50px;gap: 10px; align-items: center;">
        <h3 style="font-size: 20px;">Global</h3>
        <canvas id="canvas" width="100" height="100"></canvas>
        <h3 style="font-size: 20px;">Indices</h3>
      </div>
      <div class="row indices-container" >
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY 50" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">GIFT NIFTY</h5>
                  <img src="images/exclamation.png" id="gift_nifty" style="height:15px; width: 15px;">
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="xindx">0.00</p>
                  <span class="xprice">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY 50" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">DOW JONES IND</h5>
                  <img src="images/exclamation.png" class="global" style="height:15px; width: 15px;">                  
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="xindx2">0.00</p>
                  <span class="xprice">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY 50" class="card-link">
            <div class="card custom-card">
              <div class="card-body" >
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">NIKKEI</h5>
                  <img src="images/exclamation.png" class="global" style="height:15px; width: 15px;">                  
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="xindx3">0.00</p>
                  <span class="xprice">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="indice.php?name=NIFTY 50" class="card-link">
            <div class="card custom-card">
              <div class="card-body">
                <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px; justify-content: space-between;">
                  <h5 class="card-title" style="text-align: left;">Hang Seng</h5>
                  <img src="images/exclamation.png" class="global" style="height:15px; width: 15px;">                  
                </div>
                <div style="display:flex;align-items: center;gap: 10px;">
                  <p class="card-subtitle" style="margin:0" id="xindx4">0.00</p>
                  <span class="xprice">0.00 (0.00%)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row justify-content-center" style="flex-direction: column;align-items: center;margin-top: 150px;">
        <h3 style="font-size: 25px;">Stock Screener for Indian Stocks</h3>
        <h5 style="font-size: 18px; margin-top:10px">Get high-value insights for your analysis with our Piickr stock market screener.</h5>
      </div>
      <div class="row search-widget justify-content-center">
        <div class="col-md-5">
          <div class="input-group mb-0">
            <input style="height:50px" id="stockSearchInput" type="text" class="form-control" placeholder="Search for companies and stocks to analyze" aria-label="Stock Search" aria-describedby="button-addon2">
          </div>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-top: 0px;gap: 10px; align-items: center;">
        <div class="cardx">
          <div class="loader">
            <p>Search for </p>
            <div class="words">
              <span class="word">TCS</span>
              <span class="word">MAZDOCK</span>
              <span class="word">BEML</span>
              <span class="word">TATAMOTORS</span>
              <span class="word">HINDALCO</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row search-results-widget justify-content-center">
        <div class="col-md-5">
          <div class="result-list" style="display:none">
          </div>
        </div>
      </div>
      <div class="hero_two">
        <img class="hero__pattern-bg" src="images/piickr-background.png" alt="Background Pattern Hero">
      </div>
      <section class="how_it_section white_text" >
        <div class="how_it_inner" data-aos="fade-in" data-aos-duration="1500" style="background: transparent;">
          <div class="dotes_blue"><img src="images/blue_dotes.png" alt="image"></div>
          <div class="container">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
              <span class="title_badge" style="background: none; color:black; font-weight: bold;">Market <img src="images/bull-market.png" style="height:100px;width: 100px;" /> Gainers</span>
            </div>
            <div class="main-container" data-aos="fade-up" data-aos-duration="800">
              <div class="row">
                <div class="col-md-4">
                  <div class="c-container">
                    <!-- Input Section -->
                    <div class="section">
                      <div class="card card-top-gainers p-0" style="border:none">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <div class="header-section datex">***</div>
                          <button class="view-all-btn">View all →</button>
                        </div>
                        <h5 class="font-weight-bold">Large Cap</h5>
                        <div id="loadingIcon1" class="loading-icon"></div>
                        <!-- Container for dynamically added stock items -->
                        <div id="LargeGainers">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="c-container">
                    <!-- Input Section -->
                    <div class="section">
                      <div class="card card-top-gainers p-0" style="border:none">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <div class="header-section datex">***</div>
                          <button class="view-all-btn">View all →</button>
                        </div>
                        <h5 class="font-weight-bold">Mid Cap</h5>
                        <div id="loadingIcon2" class="loading-icon"></div>
                        <!-- Container for dynamically added stock items -->
                        <div id="MidGainers">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="c-container">
                    <!-- Input Section -->
                    <div class="section">
                      <div class="card card-top-gainers p-0" style="border:none">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <div class="header-section datex">***</div>
                          <button class="view-all-btn">View all →</button>
                        </div>
                        <h5 class="font-weight-bold">Small Cap</h5>
                        <div id="loadingIcon3" class="loading-icon"></div>
                        <!-- Container for dynamically added stock items -->
                        <div id="SmallGainers">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="height:70px"></div>
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
              <span class="title_badge" style="background: none; color:black; font-weight: bold;" >Market <img src="images/bear-market.png" style="height:100px;width: 100px;" /> Losers</span>
            </div>
            <div class="main-container" data-aos="fade-up" data-aos-duration="800">
              <div class="row">
                <div class="col-md-4">
                  <div class="c-container">
                    <!-- Input Section -->
                    <div class="section">
                      <div class="card card-top-gainers p-0" style="border:none">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <div class="header-section datex">***</div>
                          <button class="view-all-btn">View all →</button>
                        </div>
                        <h5 class="font-weight-bold">Large Cap</h5>
                        <div id="loadingIcon4" class="loading-icon"></div>
                        <!-- Container for dynamically added stock items -->
                        <div id="LargeLosers">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="c-container">
                    <!-- Input Section -->
                    <div class="section">
                      <div class="card card-top-gainers p-0" style="border:none">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <div class="header-section datex">***</div>
                          <button class="view-all-btn">View all →</button>
                        </div>
                        <h5 class="font-weight-bold">Mid Cap</h5>
                        <div id="loadingIcon5" class="loading-icon"></div>
                        <!-- Container for dynamically added stock items -->
                        <div id="MidLosers">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="c-container">
                    <!-- Input Section -->
                    <div class="section">
                      <div class="card card-top-gainers p-0" style="border:none">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <div class="header-section datex">***</div>
                          <button class="view-all-btn">View all →</button>
                        </div>
                        <h5 class="font-weight-bold">Small Cap</h5>
                        <div id="loadingIcon6" class="loading-icon"></div>
                        <!-- Container for dynamically added stock items -->
                        <div id="SmallLosers">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="row justify-content-center" style="margin-top: 0px;gap: 10px; align-items: center;">
        <h3 style="font-size: 20px;">Market</h3>
        <canvas id="canvas3" width="150" height="150"></canvas>
        <h3 style="font-size: 20px;">Statistics</h3>
      </div>

      <div class="section_our_solution">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="our_solution_category">
              <div class="solution_cards_box">
                <div class="solution_card">
                  <div class="hover_color_bubble"></div>
                  <div class="so_top_icon">
                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <g>
                          <g>
                            <g>
                              <path d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z" fill="#fae19e" />
                            </g>
                            <g>
                              <g>
                                <g>
                                  <g>
                                    <g>
                                      <path d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z" fill="#fff9e9" />
                                    </g>
                                    <path d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z" fill="#fff4d6" />
                                  </g>
                                </g>
                              </g>
                              <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z" fill="#ffeec2" />
                            </g>
                          </g>
                          <g>
                            <path d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z" fill="#fed23a" />
                            <path d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z" fill="#54b1ff" />
                            <path d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z" fill="#fdf385" />
                            <path d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z" fill="#faee6e" />
                            <path d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z" fill="#54b1ff" />
                            <g>
                              <path d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z" fill="#3da7ff" />
                            </g>
                          </g>
                        </g>
                        <g fill="#060606">
                          <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                          <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                          <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                          <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                          <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                          <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                          <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="solu_title">
                    <h3>FII / DII Activity</h3>
                  </div>
                  <div class="solu_description">
                    <p>
                      showcasing daily inflows and outflows in the stock market to understand institutional participation trends.
                    </p>
                    <a href="./fii-dii.php"><button type="button" class="read_more_btn">View</button></a>
                  </div>
                </div>
                <div class="solution_card">
                  <div class="hover_color_bubble"></div>
                  <div class="so_top_icon">
                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <g>
                          <g>
                            <g>
                              <path d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z" fill="#fae19e" />
                            </g>
                            <g>
                              <g>
                                <g>
                                  <g>
                                    <g>
                                      <path d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z" fill="#fff9e9" />
                                    </g>
                                    <path d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z" fill="#fff4d6" />
                                  </g>
                                </g>
                              </g>
                              <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z" fill="#ffeec2" />
                            </g>
                          </g>
                          <g>
                            <path d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z" fill="#fed23a" />
                            <path d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z" fill="#54b1ff" />
                            <path d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z" fill="#fdf385" />
                            <path d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z" fill="#faee6e" />
                            <path d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z" fill="#54b1ff" />
                            <g>
                              <path d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z" fill="#3da7ff" />
                            </g>
                          </g>
                        </g>
                        <g fill="#060606">
                          <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                          <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                          <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                          <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                          <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                          <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                          <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="solu_title">
                    <h3>Indice HeatMaps</h3>
                  </div>
                  <div class="solu_description">
                    <p>
                      A dynamic visual representation of stock indices, using color gradients to display performance trends across sectors.
                    </p>
                    <a href="./heatmap.php"><button type="button" class="read_more_btn">View</button></a>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="solution_cards_box sol_card_top_3">
                <div class="solution_card">
                  <div class="hover_color_bubble"></div>
                  <div class="so_top_icon">
                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <g>
                          <g>
                            <g>
                              <path d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z" fill="#fae19e" />
                            </g>
                            <g>
                              <g>
                                <g>
                                  <g>
                                    <g>
                                      <path d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z" fill="#fff9e9" />
                                    </g>
                                    <path d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z" fill="#fff4d6" />
                                  </g>
                                </g>
                              </g>
                              <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z" fill="#ffeec2" />
                            </g>
                          </g>
                          <g>
                            <path d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z" fill="#fed23a" />
                            <path d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z" fill="#54b1ff" />
                            <path d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z" fill="#fdf385" />
                            <path d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z" fill="#faee6e" />
                            <path d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z" fill="#54b1ff" />
                            <g>
                              <path d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z" fill="#3da7ff" />
                            </g>
                          </g>
                        </g>
                        <g fill="#060606">
                          <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                          <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                          <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                          <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                          <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                          <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                          <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="solu_title">
                    <h3>IPO's</h3>
                  </div>
                  <div class="solu_description">
                    <p>
                      A dedicated section providing key details about upcoming, ongoing, and recently concluded Initial Public Offerings (IPOs).
                    </p>
                    <a href=""><button type="button" class="read_more_btn">View</button>
                  </div>
                </div>
                <div class="solution_card">
                  <div class="hover_color_bubble"></div>
                  <div class="so_top_icon">
                    <svg id="Layer_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <g>
                          <g>
                            <g>
                              <path d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z" fill="#fae19e" />
                            </g>
                            <g>
                              <g>
                                <g>
                                  <g>
                                    <g>
                                      <path d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z" fill="#fff9e9" />
                                    </g>
                                    <path d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z" fill="#fff4d6" />
                                  </g>
                                </g>
                              </g>
                              <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z" fill="#ffeec2" />
                            </g>
                          </g>
                          <g>
                            <path d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z" fill="#fed23a" />
                            <path d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z" fill="#54b1ff" />
                            <path d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z" fill="#fdf385" />
                            <path d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z" fill="#faee6e" />
                            <path d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z" fill="#54b1ff" />
                            <g>
                              <path d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z" fill="#3da7ff" />
                            </g>
                          </g>
                        </g>
                        <g fill="#060606">
                          <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                          <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                          <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                          <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                          <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                          <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                          <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="solu_title">
                    <h3>Trending Intraday</h3>
                  </div>
                  <div class="solu_description">
                    <p>
                      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                    <a href="./ipo.php"><button type="button" class="read_more_btn">View</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row justify-content-center" style="margin-top: 0px;gap: 10px; align-items: center;">
        <h3 style="font-size: 20px;">Trending</h3>
        <canvas id="canvas3" width="150" height="150"></canvas>
        <h3 style="font-size: 20px;">News</h3>
      </div> -->
      <!-- https://lottie.host/4db68bbd-31f6-4cd8-84eb-189de081159a/IGmMCqhzpt.lottie -->
      <script type="module">
        import { DotLottie } from "https://cdn.jsdelivr.net/npm/@lottiefiles/dotlottie-web/+esm";
        
        new DotLottie({
          autoplay: true,
          loop: true,
          canvas: document.getElementById("canvas"),
          src: "https://lottie.host/9c33dd1a-a499-4897-90bb-de046747e5a8/qYIWUGv69b.lottie", // or .json file
        });
        
              new DotLottie({
          autoplay: true,
          loop: true,
          canvas: document.getElementById("canvas2"),
          src: "https://lottie.host/8de79dbf-c4ea-4bcd-b52e-f611fdf9f9b1/dUZpUA2NIA.lottie", // or .json file
        });
        
        new DotLottie({
          autoplay: true,
          loop: true,
          canvas: document.getElementById("canvas3"),
          src: "https://lottie.host/2c7e3156-f53f-49a7-8ffe-11fe87ba9c55/L8DkKwFQcr.lottie", // or .json file
        });
        
      </script>
      <!-- go top button -->
      <div class="go_top" id="Gotop" style="z-index: 100;">
        <span><i class="icofont-arrow-up"></i></span>
      </div>
    </div>
    <div style="height:50px"></div>
    <?php include("./components/footer.php");?>
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
    <!-- lightweight chart library -->
    <script src="js/lightweight-charts.js"></script>
    <!-- Marqueefy JS -->
    <script src="https://cdn.jsdelivr.net/npm/@marqueefy/marqueefy@1.0.3/dist/js/marqueefy.min.js" 
      integrity="sha384-GkNdpzZA0aigYQs7bhB94ikrs1rxyzcoGZqE/KBxsvvsQPERiMHw4vrDlCgDewnu" 
      crossorigin="anonymous"></script>
    <script>
      var status = true;
      // Pre-fetch previous indices data
      let indice_prev = [];
      const indexNamesToCheck = ["NIFTY 50", "NIFTY BANK", "NIFTY REALTY", "NIFTY IT", "NIFTY METAL", "NIFTY ENERGY", "NIFTY INFRA", "NIFTY FMCG"];
      
      fetch('https://api.vittapp.in/fetch_proxy.php?query=indices_all')
          .then(res => res.json())
          .then(data => {
              indice_prev = data.data.filter(item => indexNamesToCheck.includes(item.indexName));
              indice_prev.sort((a, b) => 
                  indexNamesToCheck.indexOf(a.indexName) - indexNamesToCheck.indexOf(b.indexName)
              );
          });
      
      // Initialize marquee once on load
      window.addEventListener('load', () => {
          const marqueefyWithImages = document.querySelector('#marqueefy-with-image');
          new marqueefy.Marqueefy(marqueefyWithImages);
      });
      
      setInterval(fetchIndicesData, 10000); // Update indices data every 10 seconds
      
      setInterval(fetchGlobal, 10000);

      async function fetchGlobal(){
        const indicesSym = ['DJI','NIKKEI','HANGSENG'];
        try {
            // Fetch all indices data in parallel
            const indicesPromises = indicesSym.map(code => 
                fetch(`https://api.vittapp.in/fetch_proxy.php?query=global&symbol=${code}`).then(res => res.json())
            );
            const indicesData = await Promise.all(indicesPromises);
            indicesData.forEach((ind, idx) => {
                // console.log(ind)
                const currentPrice = parseFloat(ind[0].Quotes[0].LastPrice.toFixed(2));
                const change = parseFloat(ind[0].Quotes[0].ChangeAbsolute.toFixed(2))
                const percentDiff = parseFloat(ind[0].Quotes[0].ChangePercent.toFixed(2))

                document.getElementById(`xindx${idx+2}`).innerHTML = `${formatNumberIndian(currentPrice)}`
                document.getElementsByClassName(`xprice`)[idx+1].innerHTML = `${change} (${percentDiff}%)`
                document.getElementsByClassName(`xprice`)[idx+1].classList.add(change >= 0 ? "green" : "red");
                

                if(change >= 0){
                    document.getElementsByClassName("global")[idx].src="images/up.png"
                }else{
                    document.getElementsByClassName("global")[idx].src="images/down.png"
                }
            });            
        } catch (error) {
            console.error('Fetch indices data error:', error);
        }
      }


      // Format number in Indian format
      function formatNumberIndian(num) {
          const [integerPart, decimalPart] = num.toString().split(".");
          const lastThree = integerPart.slice(-3);
          const otherDigits = integerPart.slice(0, -3).replace(/\B(?=(\d{2})+(?!\d))/g, ",");
          const formattedNumber = otherDigits ? `${otherDigits},${lastThree}` : lastThree;
          return decimalPart ? `${formattedNumber}.${decimalPart.slice(0, 2)}` : formattedNumber;
      }
      
      // Update marquee with new stock data
      function updateMarquee(stockData) {
          const stockContent = document.getElementById('stockContent');
          stockContent.innerHTML = ''; // Clear previous content
      
          stockData.forEach(stock => {
              const item = document.createElement('span');
              item.className = 'item';
              item.style.display = 'inline-flex';
              item.style.color = "black"
      
              // Stock logo
              const logo = document.createElement('img');
              logo.src = `https://s3tv-symbol.dhan.co/symbols/${stock.symbol}.svg`;
              logo.onerror = "this.onerror=null; this.src='images/ni.png'";
              logo.style.width = '30px';
              logo.style.borderRadius = '50%';
              item.appendChild(logo);
      
              // Stock name and change percentage
              const text = document.createElement('span');
              text.innerHTML = ` ${stock.symbol} <span style='color: ${stock.change >= 0 ? '#06d6a0' : 'red'} ; font-weight: 500'>${stock.change >= 0 ? '+' : ''}${stock.percent.toFixed(2)}%</span> `;
              item.appendChild(text);
      
              // Up or down indicator
              const indicator = document.createElement('img');
              indicator.src = stock.change > 0 ? 'images/up.png' : 'images/down.png';
              indicator.style.width = '15px';
              item.appendChild(indicator);
      
              stockContent.appendChild(item);
          });
      }
      
      // Fetch and update stock data for gainers and losers
      async function fetchStockData() {
          try {
              const gainersResponse = await fetch('https://portal.tradebrains.in/api/index/NIFTY/movers/gainers?page=1&per_page=10&by=percent&ascending=false');
              const losersResponse = await fetch('https://portal.tradebrains.in/api/index/NIFTY/movers/losers?page=1&per_page=10&by=percent&ascending=true');
              
              if (!gainersResponse.ok || !losersResponse.ok) throw new Error('Network response was not ok');
      
              const gainersData = await gainersResponse.json();
              const losersData = await losersResponse.json();
      
              const combinedData = [...gainersData.results, ...losersData.results].sort((a, b) => a.comp_name.localeCompare(b.comp_name));
              updateMarquee(combinedData);
          } catch (error) {
              console.error('Fetch stock data error:', error);
          }
      }
      
      // Fetch and update indices data
      async function fetchIndicesData() {
          if(status == 'true'){
              const now = Math.floor(Date.now() / 1000) + 19800;
              const indicesCodes = ['26000', '26009', '26052', '26008', '26062', '26054', '26019', '26055'];
              const indicesElements = [...document.querySelectorAll("#indice1, #indice2, #indice3, #indice4, #indice5, #indice6, #indice7, #indice8")];
              const priceElements = [...document.querySelectorAll(".price")];
      
              const alter_indice = [ 0, 3, 10, 2, 39, 19, 9, 11 ];
              try {
                  // Fetch all indices data in parallel
                  const indicesPromises = indicesCodes.map(code => 
                      fetch(`https://api.vittapp.in/fetch_proxy.php?query=indices&code=${code}&to=${now}&from=${now-now}`).then(res => res.json())
                  );
                  const indicesData = await Promise.all(indicesPromises);
      
                  indicesData.forEach((ind, idx) => {
                      const currentPrice = parseFloat(ind.c[ind.c.length - 1].toFixed(2));
                      indicesElements[idx].innerHTML = formatNumberIndian(currentPrice);
      
                      const prevClose = parseFloat(indice_prev[idx]?.previousClose.replace(/,/g, ''));
                      const diff = (currentPrice - prevClose).toFixed(2);
                      const percentDiff = Math.abs(((diff / prevClose) * 100)).toFixed(2);
      
                      priceElements[idx].innerHTML = `${diff} (${percentDiff}%)`;
                      if(diff >= 0 ){
                          priceElements[idx].classList.remove("red");
                          priceElements[idx].classList.add("green");
      
                      }else{
                          priceElements[idx].classList.remove("green");
                          priceElements[idx].classList.add("red");
                      }
      
                      if(diff >= 0){
                          document.getElementsByClassName("trend_indicator")[idx].src="images/up.png"
                      }else{
                          document.getElementsByClassName("trend_indicator")[idx].src="images/down.png"
                      }
                  });
              } catch (error) {
                  console.error('Fetch indices data error:', error);
              }
          }
      }
      
      // Initial data fetch
      fetchIndicesData();
      // 
      fetchStockData();
      //
      fetchGlobal();
    </script>  
    <script>
      var date = "";
      setInterval(fetchMarketStatus, 10000);

      async function fetchMarketStatus(){
          const apiUrl = `https://api.vittapp.in/fetch_proxy.php?query=marketstatus`;
          
          try {
              const dateElements = [...document.querySelectorAll(".datex")];
              // fetch data 
              const response = await fetch(apiUrl);
              const data = await response.json();
              // 
              var diff = parseFloat(data.giftnifty["DAYCHANGE"]);
              var percentDiff = parseFloat(data.giftnifty["PERCHANGE"])
              // 
              document.getElementById("xindx").innerHTML = `${formatNumberIndian(data.giftnifty["LASTPRICE"])}`
              document.getElementsByClassName("xprice")[0].innerHTML = `${data.giftnifty["DAYCHANGE"]} (${percentDiff}%)`
              document.getElementsByClassName("xprice")[0].classList.add(diff >= 0 ? "green" : "red");

              if(diff >= 0){
                  document.getElementById("gift_nifty").src="images/up.png"
              }else{
                  document.getElementById("gift_nifty").src="images/down.png"
              }

              //
              date = data["marketState"][0]["tradeDate"];
              dateElements.forEach((ind, idx) => {
                  ind.innerHTML = date.split(" ")[0];
              });
      
              if(data["marketState"][0]["marketStatus"] == "Open"){
                  status = true
      
                  var elements = document.getElementsByClassName("indicator");
      
                  for(var i=0; i< elements.length; i++){
                      elements[i].style.backgroundColor = '#06d6a0';
                  }
      
      
              }else{
                  status = false
      
                  var elements = document.getElementsByClassName("indicator");
      
                  for(var i=0; i< elements.length; i++){
                      elements[i].style.backgroundColor = 'red';
                  }
              }
      
          } catch (error) {
              console.error('Error fetching market status:', error);
          }
      }
      
      // 
      async function fetchGainersLarge(){
          const apiUrl = `https://portal.tradebrains.in/api/index/NIFTY/movers/gainers?page=1&per_page=4&by=percent&ascending=false`;
      
          try {
              // fetch data 
              const response = await fetch(apiUrl);
              const data = await response.json();
              
              if(data.results){
                  document.getElementById("loadingIcon1").style.display = "none";
                  data.results.forEach((stock)=>{
                      const stockItem = document.createElement("div");
                      stockItem.classList.add("stock-item", "d-flex", "align-items-center", "mb-2");
      
                      stockItem.innerHTML = `
                      <a href="./company.php?symbol=${stock.symbol}" target="_blank" class="d-flex align-items-center" style="width: 100%;">
                          <img src="https://s3tv-symbol.dhan.co/symbols/${stock.symbol}.svg"  onerror="this.onerror=null; this.src='images/ni.png'" alt="${stock.short_name} Logo" class="stock-logo">
                          <div class="flex-grow-1">
                              <div class="stock-name">${stock.short_name}</div>
                              <div class="stock-symbol">${stock.symbol}</div>
                          </div>
                          <div class="text-right">
                              <div class="stock-price">₹${formatNumberIndian(stock.close)}</div>
                              <div class="stock-change ${stock.change >=0 ? "positive" : "negative"}">${stock.change.toFixed(2)} (${stock.percent.toFixed(2)}%)</div>
                          </div>
                      </a>
                      `;
      
                      document.getElementById("LargeGainers").appendChild(stockItem);                    
                  });
              }
      
          } catch (error) {
              console.error('Error fetching market status:', error);
          }
      }
      
      fetchGainersLarge()
      
      
      // 
      async function fetchGainersMid(){
          const apiUrl = `https://portal.tradebrains.in/api/index/NIFTYMIDCAP/movers/gainers?page=1&per_page=4&by=percent&ascending=false`;
      
          try {
              // fetch data 
              const response = await fetch(apiUrl);
              const data = await response.json();
              
              if(data.results){
                  document.getElementById("loadingIcon2").style.display = "none";
                  data.results.forEach((stock)=>{
                      const stockItem = document.createElement("div");
                      stockItem.classList.add("stock-item", "d-flex", "align-items-center", "mb-2");
      
                      stockItem.innerHTML = `
                      <a href="./company.php?symbol=${stock.symbol}" target="_blank" class="d-flex align-items-center" style="width: 100%;">
                          <img src="https://s3tv-symbol.dhan.co/symbols/${stock.symbol}.svg"  onerror="this.onerror=null; this.src='images/ni.png'" alt="${stock.short_name} Logo" class="stock-logo">
                          <div class="flex-grow-1">
                              <div class="stock-name">${stock.short_name}</div>
                              <div class="stock-symbol">${stock.symbol}</div>
                          </div>
                          <div class="text-right">
                              <div class="stock-price">₹${formatNumberIndian(stock.close)}</div>
                              <div class="stock-change ${stock.change >=0 ? "positive" : "negative"}">${stock.change.toFixed(2)} (${stock.percent.toFixed(2)}%)</div>
                          </div>
                      </a>
                      `;
      
                      document.getElementById("MidGainers").appendChild(stockItem);                    
                  });
              }
      
          } catch (error) {
              console.error('Error fetching market status:', error);
          }
      }
      
      fetchGainersMid()
      // 
      async function fetchGainersSmall(){
          const apiUrl = `https://portal.tradebrains.in/api/index/NIFTYSMALLCAP250/movers/gainers?page=1&per_page=4&by=percent&ascending=false`;
      
          try {
              // fetch data 
              const response = await fetch(apiUrl);
              const data = await response.json();
              
              if(data.results){
                  document.getElementById("loadingIcon3").style.display = "none";
                  data.results.forEach((stock)=>{
                      const stockItem = document.createElement("div");
                      stockItem.classList.add("stock-item", "d-flex", "align-items-center", "mb-2");
      
                      stockItem.innerHTML = `
                      <a href="./company.php?symbol=${stock.symbol}" target="_blank" class="d-flex align-items-center" style="width: 100%;">
                          <img src="https://s3tv-symbol.dhan.co/symbols/${stock.symbol}.svg"  onerror="this.onerror=null; this.src='images/ni.png'" alt="${stock.short_name} Logo" class="stock-logo">
                          <div class="flex-grow-1">
                              <div class="stock-name">${stock.short_name}</div>
                              <div class="stock-symbol">${stock.symbol}</div>
                          </div>
                          <div class="text-right">
                              <div class="stock-price">₹${formatNumberIndian(stock.close)}</div>
                              <div class="stock-change ${stock.change >=0 ? "positive" : "negative"}">${stock.change.toFixed(2)} (${stock.percent.toFixed(2)}%)</div>
                          </div>
                      </a>
                      `;
                      document.getElementById("SmallGainers").appendChild(stockItem);                    
                  });
              }
      
          } catch (error) {
              console.error('Error fetching market status:', error);
          }
      }
      fetchGainersSmall()
      
      // 
      async function fetchLosersLarge(){
          const apiUrl = `https://portal.tradebrains.in/api/index/NIFTY/movers/losers?page=1&per_page=4&by=percent&ascending=true`;
      
          try {
              // fetch data 
              const response = await fetch(apiUrl);
              const data = await response.json();
              
              if(data.results){
                  document.getElementById("loadingIcon4").style.display = "none";
                  data.results.forEach((stock)=>{
                      const stockItem = document.createElement("div");
                      stockItem.classList.add("stock-item", "d-flex", "align-items-center", "mb-2");
      
                      stockItem.innerHTML = `
                      <a href="./company.php?symbol=${stock.symbol}" target="_blank" class="d-flex align-items-center" style="width: 100%;">
                          <img src="https://s3tv-symbol.dhan.co/symbols/${stock.symbol}.svg" onerror="this.onerror=null; this.src='images/ni.png'" alt="${stock.short_name} Logo" class="stock-logo">
                          <div class="flex-grow-1">
                              <div class="stock-name">${stock.short_name}</div>
                              <div class="stock-symbol">${stock.symbol}</div>
                          </div>
                          <div class="text-right">
                              <div class="stock-price">₹${formatNumberIndian(stock.close)}</div>
                              <div class="stock-change ${stock.change >=0 ? "positive" : "negative"}">${stock.change.toFixed(2)} (${stock.percent.toFixed(2)}%)</div>
                          </div>
                      </a>
                      `;
      
                      document.getElementById("LargeLosers").appendChild(stockItem);                    
                  });
              }
      
          } catch (error) {
              console.error('Error fetching market status:', error);
          }
      }
      fetchLosersLarge()
      
      // 
      async function fetchLosersMid(){
          const apiUrl = `https://portal.tradebrains.in/api/index/NIFTYMIDCAP/movers/losers?page=1&per_page=4&by=percent&ascending=true`;
      
          try {
              // fetch data 
              const response = await fetch(apiUrl);
              const data = await response.json();
              
              if(data.results){
                  document.getElementById("loadingIcon5").style.display = "none";
                  data.results.forEach((stock)=>{
                      const stockItem = document.createElement("div");
                      stockItem.classList.add("stock-item", "d-flex", "align-items-center", "mb-2");
      
                      stockItem.innerHTML = `
                      <a href="./company.php?symbol=${stock.symbol}" target="_blank" class="d-flex align-items-center" style="width: 100%;">
                          <img src="https://s3tv-symbol.dhan.co/symbols/${stock.symbol}.svg" onerror="this.onerror=null; this.src='images/ni.png'" alt="${stock.short_name}" class="stock-logo">
                          <div class="flex-grow-1">
                              <div class="stock-name">${stock.short_name}</div>
                              <div class="stock-symbol">${stock.symbol}</div>
                          </div>
                          <div class="text-right">
                              <div class="stock-price">₹${formatNumberIndian(stock.close)}</div>
                              <div class="stock-change ${stock.change >=0 ? "positive" : "negative"}">${stock.change.toFixed(2)} (${stock.percent.toFixed(2)}%)</div>
                          </div>
                      </a>
                      `;
      
                      document.getElementById("MidLosers").appendChild(stockItem);                    
                  });
              }
      
          } catch (error) {
              console.error('Error fetching market status:', error);
          }
      }
      fetchLosersMid()
      // 
      async function fetchLosersSmall(){
          const apiUrl = `https://portal.tradebrains.in/api/index/NIFTYSMALLCAP250/movers/losers?page=1&per_page=4&by=percent&ascending=true`;
      
          try {
              // fetch data 
              const response = await fetch(apiUrl);
              const data = await response.json();
              
              if(data.results){
                  document.getElementById("loadingIcon6").style.display = "none";
                  data.results.forEach((stock)=>{
                      const stockItem = document.createElement("div");
                      stockItem.classList.add("stock-item", "d-flex", "align-items-center", "mb-2");
      
                      stockItem.innerHTML = `
                      <a href="./company.php?symbol=${stock.symbol}" target="_blank" class="d-flex align-items-center" style="width: 100%;">
                          <img src="https://s3tv-symbol.dhan.co/symbols/${stock.symbol}.svg" onerror="this.onerror=null; this.src='images/ni.png'" alt="${stock.symbol}" class="stock-logo">
                          <div class="flex-grow-1">
                              <div class="stock-name">${stock.short_name}</div>
                              <div class="stock-symbol">${stock.symbol}</div>
                          </div>
                          <div class="text-right">
                              <div class="stock-price">₹${formatNumberIndian(stock.close)}</div>
                              <div class="stock-change ${stock.change >=0 ? "positive" : "negative"}">${stock.change.toFixed(2)} (${stock.percent.toFixed(2)}%)</div>
                          </div>
                      </a>
                      `;
      
                      document.getElementById("SmallLosers").appendChild(stockItem);                    
                  });
              }
      
          } catch (error) {
              console.error('Error fetching market status:', error);
          }
      }
      fetchLosersSmall()
      
      
      
      fetchMarketStatus()
      
    </script>
    <!--  -->
    <script>
      let debounceTimer;
      
      // Mock function to simulate fetching data from an API
      async function fetchStockData(searchQuery) {
          if (!searchQuery) {
              clearResults(); // Clear results if the input is empty
              return;
          }
      
          const apiUrl = `https://api.vittapp.in/fcompany.php?search=${searchQuery}`;
      
          try {
              const response = await fetch(apiUrl);
              const data = await response.json();
      
              displaySearchResults(data);
          } catch (error) {
              console.error('Error fetching stock data:', error);
              displayErrorMessage();
          }
      }
      
      // Debounce function to limit the frequency of API calls
      function debounceFetchData(callback, delay) {
          clearTimeout(debounceTimer);
          debounceTimer = setTimeout(callback, delay);
      }
      
      // Event listener for the search input (without search button)
      document.getElementById('stockSearchInput').addEventListener('input', (event) => {
          const searchQuery = event.target.value.trim();
          
          // Debounce API calls to avoid too many requests while typing
          debounceFetchData(() => fetchStockData(searchQuery), 300);
      });
      
      // Function to display the search results
      function displaySearchResults(stocks) {
      const resultList = document.querySelector('.result-list');
      resultList.style.display = "block"
      resultList.innerHTML = ''; // Clear previous results
      
      if (stocks.length === 0) {
          resultList.innerHTML = '<p>No results found for your search.</p>';
          return;
      }
      
      // Loop through the stocks array and create HTML elements for each result
      stocks.forEach(stock => {
          const resultItem = document.createElement('div');
          resultItem.classList.add('result-item');
      
          // Create a link element and set its href to the stock URL
          const stockLink = document.createElement('a');
          stockLink.href = `./company.php?symbol=${stock.symbol}`; // Replace with your actual URL pattern
          stockLink.target = '_blank'; // Open link in a new tab
      
          const stockName = document.createElement('h6');
          stockName.classList.add('result-title');
          stockName.textContent = stock.name;
      
          const stockDetails = document.createElement('p');
          stockDetails.classList.add('result-subtitle');
          stockDetails.innerHTML = `
              NSE: ${stock.symbol}
          `;
      
          // Append stockName and stockDetails to the link
          stockLink.appendChild(stockName);
          stockLink.appendChild(stockDetails);
      
          // Append the link to the result item
          resultItem.appendChild(stockLink);
      
          // Append the result item to the result list
          resultList.appendChild(resultItem);
      });
      }
      
      // Function to clear results when input is empty
      function clearResults() {
          const resultList = document.querySelector('.result-list');
          resultList.style.display = "none"
          resultList.innerHTML = '<p>Please enter a stock name to search.</p>';
      }
      
      // Function to display an error message
      function displayErrorMessage() {
          const resultList = document.querySelector('.result-list');
          resultList.innerHTML = '<p>Error fetching stock data. Please try again later.</p>';
      }
    </script>
  </body>
</html>
