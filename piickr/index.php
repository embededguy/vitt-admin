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
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  
  <!-- Marqueefy CSS -->
  <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@marqueefy/marqueefy@1.0.3/dist/css/marqueefy.min.css" 
      integrity="sha384-wADgvhAqbORDLWCl6LHRmwaldDxcsCZJ9EfC4tyLmlqRSrxK8SQSmUprPJYdtCZb" 
      crossorigin="anonymous">

  <style>
    body{
        overflow-x: hidden !important;
    }
    .indices-container{
      margin: 40px 20px;
    }
    .custom-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-left: 5px solid #4285f4 !important; /* Theme color */
    }

    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .card-body {
        text-align: center;
        padding: 20px;
    }

    .card-icon img {
        width: 50px;
        height: 50px;
        margin-bottom: 15px;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
    }

    .card-subtitle {
        font-size: 16px;
        color: #6c757d;
        margin-bottom: 15px;
    }

    .price {
        font-size: 16px;
        font-weight: bold;
        display: block;
    }

    .price.red {
        color: crimson;
    }

    .price.green {
      color: #06d6a0;
    }

    .xprice {
        font-size: 16px;
        font-weight: bold;
        display: block;
    }

    .xprice.red {
        color: crimson;
    }

    .xprice.green {
      color: #06d6a0;
    }

    .content{
/*      display: flex !important;*/
      align-items: center;
      gap: 20px;
    }

    .content .item{
/*      display: flex;*/
      align-items: center;
      gap: 10px;
      color: white;
    }
    
    @media (max-width: 768px) {
      .custom-card {
          margin-bottom: 20px;
      }
    }

    #chart{
      height: 100%;
    }

    .search-widget {
        margin-top: 30px;
    }

    .input-group .form-control {
        border-radius: 50px;
        border: 2px solid #4285f4; /* Theme color for border */
        padding-left: 20px;
        padding-right: 20px;
        font-size: 16px;
        padding-top: 10px;
        padding-bottom: 10px ;
    }

    .input-group .form-control:focus {
        box-shadow: 0 0 10px rgba(66, 133, 244, 0.5); /* Subtle focus glow effect with theme color */
        border-color: #4285f4;
    }

    .input-group .btn-primary {
        background-color: #4285f4; /* Theme color */
        border-color: #4285f4;
        border-radius: 50px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .input-group .btn-primary:hover {
        background-color: #357ae8; /* Darker shade of theme color */
        border-color: #357ae8;
    }

    .input-group .form-control::placeholder {
        color: #6c757d;
    }

    .hero_one{
      position: absolute;
      z-index: -1;
    }
    .hero_two{
      position: absolute;
      right: 0;
      z-index: -1;
    }
    /**/
    .search-results-widget {
        margin-top: 0px;
    }

    .results-heading {
        font-size: 20px;
        color: #333;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .result-list {
        border: 1px solid #e6e6e6;
        border-radius: 10px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        max-height: 400px;
        overflow-y: scroll;
        position: absolute;
        z-index: 999;
        width: calc( 100% - 30px);
    }

    .result-item {
        padding: 10px 0;
        border-bottom: 1px solid #e6e6e6;
    }

    .result-item:last-child {
        border-bottom: none;
    }

    .result-title {
        font-size: 18px;
        font-weight: bold;
        color: #4285f4; /* Theme color for result title */
        margin-bottom: 5px;
    }

    .result-subtitle {
        font-size: 16px;
        color: #6c757d;
    }

    .price-change {
        font-weight: bold;
    }

    .price-change.green {
        color: green;
    }

    .price-change.red {
        color: red;
    }

    @media (max-width: 768px) {
        .result-item {
            padding: 10px 0;
        }

        .result-title {
            font-size: 16px;
        }

        .result-subtitle {
            font-size: 14px;
        }
    }
    .c-container {
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .main-container {
        max-width: calc( 100vw - 50px );
        margin: 30px auto;
    }
    .section {
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        background-color: #fff;
    }

     .market-widget {
        width: 100%;
        max-width: 600px;
        margin: 20px auto;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .market-header {
        background-color: #4285f4;
        color: white;
        padding: 15px;
        text-align: center;
        font-size: 1.2em;
    }
    .market-item {
        padding: 10px 15px;
        border-bottom: 1px solid #ddd;
    }
    .market-item:last-child {
        border-bottom: none;
    }
    .market-status.open {
        color: green;
    }
    .market-status.closed {
        color: red;
    }


    .card-top-gainers {
        border-radius: 12px;
    }
        .header-section {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .view-all-btn {
            font-size: 0.8rem;
            color: #007bff;
            background-color: #f8f9fa;
            border: none;
            border-radius: 15px;
            padding: 4px 8px;
        }
        .stock-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-top: 1px solid #f1f1f1;
        }
        .stock-item:first-child {
            border-top: none;
        }
        .stock-logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 1rem;
        }
        .stock-name {
            font-weight: bold;
        }
        .stock-symbol {
            font-size: 0.8rem;
            color: #6c757d;
        }
        .stock-price {
            font-weight: bold;
            text-align: right;
        }
        .stock-change {
            font-size: 0.8rem;
        }
        .negative {
            color: #dc3545;
        }
        .positive {
            color: #28a745;
        }
        .section{
            padding: 0 !important;
            margin: 0 !important;
        }
        
        .status-icon {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
        }
        .status-open {
            background-color: #06d6a0; /* Green for open */
            animation: wave 1.5s infinite;
        }
        .status-close {
            background-color: #dc3545; /* Red for closed */
        }
        @keyframes wave {
            0% { transform: scale(1); }
            50% { transform: scale(1.3); }
            100% { transform: scale(1); }
        }



    .container-x {
      position: relative;
      width: 20px;
      height: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Indicator styling */
    .indicator {
      width: 4px;
      height: 4px;
      background-color: #06d6a0;
      border-radius: 50%;
      position: absolute;
      animation: ripple 1.5s linear infinite;
    }

    /* Delayed animations */
    .delay1 {
      animation-delay: 0.3s;
    }

    .delay2 {
      animation-delay: 0.6s;
    }

    /* Ripple animation keyframes */
    @keyframes ripple {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      25% {
        transform: scale(2);
        opacity: 0.75;
      }
      50% {
        transform: scale(4);
        opacity: 0.5;
      }
      75% {
        transform: scale(6);
        opacity: 0.25;
      }
      100% {
        transform: scale(8);
        opacity: 0;
      }
    }


    .cardx {
      /* color used to softly clip top and bottom of the .words container */
      --bg-color: transparent;
      background-color: var(--bg-color);
      padding: 1rem 2rem;
      border-radius: 1.25rem;
    }
.loader {
  color: rgb(124, 124, 124);
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 20px;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  height: 40px;
  padding: 5px 5px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-radius: 8px;
}

.words {
  overflow: hidden;
  position: relative;
}
.words::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    var(--bg-color) 10%,
    transparent 30%,
    transparent 70%,
    var(--bg-color) 90%
  );
  z-index: 20;
}

.word {
  display: block;
  height: 100%;
  padding-left: 6px;
  color: #4285f4;
  animation: spin_4991 4s infinite;
}

@keyframes spin_4991 {
  10% {
    -webkit-transform: translateY(-102%);
    transform: translateY(-102%);
  }

  25% {
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
  }

  35% {
    -webkit-transform: translateY(-202%);
    transform: translateY(-202%);
  }

  50% {
    -webkit-transform: translateY(-200%);
    transform: translateY(-200%);
  }

  60% {
    -webkit-transform: translateY(-302%);
    transform: translateY(-302%);
  }

  75% {
    -webkit-transform: translateY(-300%);
    transform: translateY(-300%);
  }

  85% {
    -webkit-transform: translateY(-402%);
    transform: translateY(-402%);
  }

  100% {
    -webkit-transform: translateY(-400%);
    transform: translateY(-400%);
  }
}


    .loading-icon {
        font-size: 1.2em;
        text-align: center;
        padding: 20px;
    }

    /* Add animation for a simple loading spinner */
    .loading-icon::after {
        content: "";
        display: inline-block;
        width: 24px;
        height: 24px;
        border: 3px solid #4285f4; /* Match theme color */
        border-top: 3px solid transparent;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

  </style>

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>

  <?php include("./components/header.php");?>
  
  <div class="page_wrapper">

    <div class="hero_one">
      <img class="hero__pattern-bg" src="images/piickr-background-2.svg" alt="Background Pattern Hero">
    </div>
    
    <div class="marqueefy" tabindex="0" data-mq-speed="50" style="width:100%; background: #000; border-radius: 0px;">
        <div class="content" id="stockContent">
            <!-- Dynamic Addition -->
        </div>
    </div>
    
    
    
    <div class="row indices-container" >
        <div class="col-md-3">
            <a href="indice.php?name=NIFTY 50" class="card-link">
                <div class="card custom-card">
                    <div class="card-body">
                        <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px;">
                            <h5 class="card-title" style="text-align: left;">GIFT NIFTY</h5>
                            <div class="container-x" >
                              <div class="indicator" id="giftstatus"></div>
                              <div class="indicator delay1"></div>
                              <div class="indicator delay2"></div>
                              <div class="indicator"></div>
                              <div class="indicator delay1"></div>
                              <div class="indicator delay2"></div>
                            </div>
                        </div>
                        <div style="display:flex;align-items: center;gap: 10px;">                  
                            <p class="card-subtitle" style="margin:0" id="xindx">0.00</p>                  
                            <span class="xprice">0.00 (0.00%)</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                
    </div>

    <div class="row justify-content-center" style="margin-top: 50px;gap: 20px; align-items: center;">
        <h3 style="font-size: 25px;">Indices Performance</h3>
        <div class="container-x">
            <div class="indicator" id="niftystatus"></div>
            <div class="indicator delay1"></div>
            <div class="indicator delay2"></div>
            <div class="indicator"></div>
            <div class="indicator delay1"></div>
            <div class="indicator delay2"></div>
        </div>
    </div>

    <div class="row indices-container" style="margin-top: 50px;">
        <div class="col-md-3">
            <a href="indice.php?name=NIFTY 50" class="card-link">
                <div class="card custom-card">
                    <div class="card-body">
                        <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px;">
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
                        <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px;">
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
                        <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px;">
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
                        <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px;">
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
    <div class="row indices-container" style="margin-top: 40px;">
        <div class="col-md-3">
            <a href="indice.php?name=NIFTY METAL" class="card-link">
                <div class="card custom-card">
                    <div class="card-body">
                        <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px;">
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
                        <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px;">
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
                        <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px;">
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
                        <div style="display:flex;flex-wrap: wrap; align-items: baseline; gap: 20px;">
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



    <div class="row justify-content-center" style="margin-top: 150px;">
      <h3 style="font-size: 25px;">Stock Screener for Indian Stocks</h3>
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
    
    <!-- go top button -->
    <div class="go_top" id="Gotop">
      <span><i class="icofont-arrow-up"></i></span>
    </div>
  </div>


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
    // Pre-fetch previous indices data
    let indice_prev = [];
    fetch('https://api.vittapp.in/fetch_proxy.php?query=indices_all')
        .then(res => res.json())
        .then(data => { indice_prev = data.data; });

    // Initialize marquee once on load
    window.addEventListener('load', () => {
        const marqueefyWithImages = document.querySelector('#marqueefy-with-image');
        new marqueefy.Marqueefy(marqueefyWithImages);
    });

    setInterval(fetchIndicesData, 10000); // Update indices data every 10 seconds

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

            // Stock logo
            const logo = document.createElement('img');
            logo.src = 'images/ni.png';
            logo.style.width = '30px';
            logo.style.borderRadius = '50%';
            item.appendChild(logo);

            // Stock name and change percentage
            const text = document.createElement('span');
            text.innerText = ` ${stock.symbol} ${stock.change > 0 ? '+' : ''}${stock.percent.toFixed(2)}% `;
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
            const losersResponse = await fetch('https://portal.tradebrains.in/api/index/NIFTY/movers/losers?page=1&per_page=10&by=percent&ascending=false');
            
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
        const now = Math.floor(Date.now() / 1000) + 19800;
        const indicesCodes = ['26000', '26009', '26052', '26008', '26062', '26054', '26019', '26055'];
        const indicesElements = [...document.querySelectorAll("#indice1, #indice2, #indice3, #indice4, #indice5, #indice6, #indice7, #indice8")];
        const priceElements = [...document.querySelectorAll(".price")];
        const alter_indice = [ 0, 3, 10, 2, 39, 19, 9, 11 ];
        try {
            // Fetch all indices data in parallel
            const indicesPromises = indicesCodes.map(code => 
                fetch(`https://api.vittapp.in/fetch_proxy.php?query=indices&code=${code}&to=${now}&from=0`).then(res => res.json())
            );
            const indicesData = await Promise.all(indicesPromises);

            indicesData.forEach((ind, idx) => {
                const currentPrice = parseFloat(ind.c[ind.c.length - 1].toFixed(2));
                indicesElements[idx].innerHTML = formatNumberIndian(currentPrice);

                const prevClose = parseFloat(indice_prev[alter_indice[idx]]?.previousClose.replace(/,/g, ''));
                const diff = (currentPrice - prevClose).toFixed(2);
                const percentDiff = Math.abs(((diff / prevClose) * 100)).toFixed(2);

                console.log(diff)
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

    // Initial data fetch
    fetchIndicesData();
    // 
    fetchStockData();

  </script>  
  
  <script>
    var date = "";

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
            //
            date = data["marketState"][0]["tradeDate"];
            dateElements.forEach((ind, idx) => {
                ind.innerHTML = date.split(" ")[0];
            });

            if(data["marketState"][0]["marketStatus"] == "Open"){

            }else{

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
        stockLink.href = `http://localhost:8000/piickr/company.php?symbol=${stock.symbol}`; // Replace with your actual URL pattern
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