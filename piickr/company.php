<?php
  include('config/db.php');

  if(isset($_GET['symbol'])){
    $sym = $_GET['symbol'];

    $sql = "SELECT * FROM scripts WHERE ticker_symbol = '$sym'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $p = $result->fetch_assoc();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='keywords' content=''>
  <meta name='description' content=''>

  <meta name='og:title' content='Piickr - Stock Screener!!'>
  <meta name='og:image' content='images/logo.png'>
  <meta name='og:url' content='https://piickr.vittapp.in'>
  <meta name='og:site_name' content=''>
  <meta name='og:description' content=''>

  <title><?= $p["company_name"]?> - Get Stock Price, Analysis, Financials & Key Insights | Piickr</title>
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css" />  <!-- Favicon -->
  <!--  -->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  
  <!-- Marqueefy CSS -->
  <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@marqueefy/marqueefy@1.0.3/dist/css/marqueefy.min.css" 
      integrity="sha384-wADgvhAqbORDLWCl6LHRmwaldDxcsCZJ9EfC4tyLmlqRSrxK8SQSmUprPJYdtCZb" 
      crossorigin="anonymous">
  <script
      type="text/javascript"
      src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"
    ></script>

  <style>
    body{
        overflow-x: hidden !important;
    }
    #chartOutsideContainer{
        padding: 10px;
        border:1px solid black;
        border-radius: 10px;
    }
    #chartContainer {
      width: calc(100% - 10px);
      height: 580px;
      border-radius: 8px;
      background-color: #ffffff;
    }
    .stock-info {
      display: flex;
      align-items: center;
      margin-top: 20px;
    }
    .stock-logo {
      font-size: 40px;
      font-weight: bold;
      border-radius: 50%;
      background-color: #ddd;
      margin-right: 20px;
      min-width: 50px;
      width: 100px;
      border: 2px solid #4285f4;
      text-align: center;
    }
    .stock-name {
      font-size: 24px;
      font-weight: bold;
    }
    .stock-price {
      font-size: 20px;
      color: #333;
      margin-top: 0px;
      font-weight: 600;
    }

    .main-container {
        max-width: calc( 100vw - 50px );
        margin: 30px auto;
    }
    .calculator-container {
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .section {
        padding: 0px;
        border-radius: 8px;
        margin-bottom: 20px;
        background-color: #fff;
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
        color: #000;
    }
    .metrics {
      display: flex;
      flex-wrap: wrap;
      justify-content: normal;
      margin-top: 20px;
      width: 100%;
      background-color: #f8f9fa;
      padding: 15px;
      border-radius: 5px;
      gap: 15px;
    }
    .metrics div {
      text-align: center;
    }

    .custom-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  }

  .custom-table thead th {
    background-color: #f9fafc;
    color: #333;
    font-weight: bold;
    border-bottom: 2px solid #ddd;
    padding: 12px;
    text-align: left;
  }

  .custom-table tbody tr {
    border-bottom: 1px solid #f0f0f0;
  }

  .custom-table tbody tr:last-child {
    border-bottom: none;
  }

  .custom-table tbody td {
    padding: 12px;
    color: #555;
  }

  .custom-table tbody td:first-child {
    color: #888;
  }

  /* Hover effect for rows */
  .custom-table tbody tr:hover {
    background-color: #f7faff;
  }
  #ohlcTooltip {
      font-family: Arial, sans-serif;
      font-size: 14px;
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
    .negative {
        font-size: 18px;
        color: #dc3545;
    }
    .positive {
        font-size: 18px;
        color: #28a745;
    }
    .positive:before{
        content: "+";
    }
    .negative:before{
        content: "-";
    }
    /* ########################  SLIDER ########################  */
    .progress-range-container {
        width: 100%;
        margin: 25px auto;
        text-align: center;
    }
    /* Label styling */
    .labels {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
    }
    .range-slider {
        -webkit-appearance: none;
        width: 100%;
        height: 6px;
        background: transparent;
        cursor: pointer;
        outline: none;
        opacity: 1;
        transition: opacity 0.2s;
        border: none;
    }
    .range-slider:hover {
        opacity: 1;
    }
    /* Progress Bar */
    .progress-bar-container {
        position: relative;
        height: 6px;
        background-color: #ddd;
        border-radius: 4px;
        overflow: hidden;
    }
    .progress-bar-fill {
        position: absolute;
        height: 100%;
        background-color: #28a745;
        width: 0%;
        transition: width 0.2s;
    }
    /* Triangle Handle */
    .range-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #4285f4;
        cursor: pointer;
    }
    .range-slider::-moz-range-thumb {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #4285f4;
        cursor: pointer;
    }
    /* Value Display */
    .value-display {
        margin-top: 10px;
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    .loading-icon {
        font-size: 1.2em;
        position: absolute;
        left: 48%;
        top: 48%;
        text-align: center;
        padding: 20px;
        z-index: 10;
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
  <div class="hero_one">
    <img class="hero__pattern-bg" src="images/piickr-background-2.svg" alt="Background Pattern Hero">
  </div>
  
  <div class="main-container">
        <div class="row search-widget justify-content-center">
        <div class="col-md-5">
            <div class="input-group mb-0">
                <input style="height:50px" id="stockSearchInput" type="text" class="form-control" placeholder="Search for companies and stocks to analyze" aria-label="Stock Search" aria-describedby="button-addon2">
            </div>
        </div>
    </div>
    <div class="row search-results-widget justify-content-center">
        <div class="col-md-5">
            <div class="result-list" style="display:none">
                
            </div>
        </div>
    </div>
        <br/>
        <div class="row">
            <div class="col-md-8">
                <div class="calculator-container">                    
                    <!-- Input Section -->
                    <div class="section">
                        <div style="display:flex;flex-wrap: wrap; gap:20px;margin-top: 20px;"> 
                            <h6>Sector: <span id="sector" style="padding-left:15px; padding-right: 15px; padding-top:5px; padding-bottom:5px;background:#e4e4e4;border-radius: 20px;"></span></h6>
                            <h6>NSE Code: <span id="nsecode" style="padding-left:15px; padding-right: 15px; padding-top:5px; padding-bottom:5px;background:#e4e4e4;border-radius: 20px;"><?= $sym?></span></h6>
                            <h6>BSE Code: <span id="bsecode" style="padding-left:15px; padding-right: 15px; padding-top:5px; padding-bottom:5px;background:#e4e4e4;border-radius: 20px;"></span></h6>

                        </div>
                        <div class="stock-info">
                            <img class="stock-logo" onerror="this.onerror=null; this.src='images/ni.png'" src="https://s3tv-symbol.dhan.co/symbols/<?= $sym ?>.svg"/>
                            <div>
                                <div class="stock-name">
                                  <?= $p["company_name"]?>
                                </div>
                                <span id="counter" style="font-size: 22px;">0.00</span>                            
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="chartOutsideContainer">
                                    <div style="display: flex;gap: 10px; justify-content: normal; align-items: center; position: absolute;z-index: 10;">
                                        <button id="toggleChartType" class="btn btn-sm btn-dark">
                                            <img height="25" src="images/line.png"/>
                                        </button>
                                        <div id="ohlcTooltip"></div>
                                    </div>
                                    <div id="chartContainer">
                                        
                                        <div id="loadingIcon" class="loading-icon"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>

                        <div class="progress-range-container">
                            <!-- Labels for Today's Low and High -->
                            <div class="labels">
                                <div>
                                  <p style="font-weight: normal;margin:0 !important;">Today's Low</p>
                                  <p>0.00</p>
                                </div>
                                <div>
                                  <p style="font-weight: normal;margin:0 !important;">Today's High</p>
                                  <p>0.00</p>                                  
                                </div>
                            </div>
                            <div class="progress-bar-container">
                                <div class="progress-bar-fill" id="progressBar"></div>
                            </div>
                            <input type="range" min="0" max="100" value="50" class="range-slider" id="rangeSlider">
                            
                        </div>

                        <div class="progress-range-container">
                            <!-- Labels for Today's Low and High -->
                            <div class="labels">
                                <div>
                                  <p style="font-weight: normal; margin:0 !important;">52 Week Low</p>
                                  <p id="52weeklow" style="font-size:16px">0.00</p>                                  
                                </div>
                                <div>
                                  <p style="font-weight: normal; margin:0 !important;">52 Week High</p>
                                  <p id="52weekhigh" style="font-size:16px">0.00</p>
                                </div>
                            </div>
                            <div class="progress-bar-container">
                                <div class="progress-bar-fill" id="progressBar"></div>
                            </div>
                            <input type="range" min="0" max="100" value="50" class="range-slider" id="rangeSlider">
                            
                        </div>


                        <div class="row">
                          <div class="col-md-12" style="margin-bottom: 20px;"><h3><img alt="image" src="images/fundamental.png" style="height: 60px;width: 60px; padding: 10px;" /> Fundamentals Analysis</h3></div>
                        <div class="col-md-6">
                          <table class="table custom-table">
                            <thead>
                              <tr>
                                <th>Metric</th>
                                <th>Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Market Cap</td>
                                <td id="mcap"><strong>0</strong> Cr</td>
                              </tr>
                              <tr>
                                <td>Book Value</td>
                                <td id="bookvalue"><strong>0.00</strong></td>
                              </tr>
                              <tr>
                                <td>PE Ratio</td>
                                <td id="pe"><strong>0.00</strong></td>
                              </tr>
                              <tr>
                                <td>PE for Sector</td>
                                <td id="pes"><strong>0.00</strong></td>
                              </tr>
                              <tr>
                                <td>ROE</td>
                                <td id="roe"><strong>0.00 %</strong></td>
                              </tr>
                              <tr>
                                <td>Dividend Yield</td>
                                <td id="div"><strong>0.00 %</strong></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <div class="col-md-6">
                          <table class="table custom-table">
                            <thead>
                              <tr>
                                <th>Metric</th>
                                <th>Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Open</td>
                                <td id="open"><strong>0.00</strong></td>
                              </tr>
                              <tr>
                                <td>52 Week High</td>
                                <td id="high"><strong>0.00</strong></td>
                              </tr>
                              <tr>
                                <td>52 Week Low</td>
                                <td id="low"><strong>0.00</strong></td>
                              </tr>
                              <tr>
                                <td>PB Ratio</td>
                                <td id="pb"><strong>0.00</strong></td>
                              </tr>
                              <tr>
                                <td>ROCE</td>
                                <td id="roce"><strong>0.00 %</strong></td>
                              </tr>
                              <tr>
                                <td>EPS</td>
                                <td id="eps"><strong>0.00</strong></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>                       
                    </div>
                    
                </div>

            </div>
            
            <!-- Right Column - More Calculators -->
            <div class="col-md-4">
                <div class="more-calculators">
                    <h3 style="color:#4285f4"><img alt="image" src="images/technical.png" style="height: 50px;width: 50px; padding: 10px;" /> Quick Lookup</h3>
                    <div class="row">
                        <div class="col-md-12">
                          <table class="table custom-table">
                            <thead>
                              <tr>
                                <th>Change</th>
                                <th>Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1 Week Change</td>
                                <td id="1week" style="display:flex; justify-content: space-between;"><strong>0.00%</strong></td>
                              </tr>
                              <tr>
                                <td>1 Month Change</td>
                                <td id="1month" style="display:flex; justify-content: space-between;"><strong>0.00%</strong></td>
                              </tr>
                              <tr>
                                <td>3 Month Change</td>
                                <td id="3month" style="display:flex; justify-content: space-between;"><strong>0.00%</strong></td>
                              </tr>
                              <tr>
                                <td>6 Month Change</td>
                                <td id="6month" style="display:flex; justify-content: space-between;"><strong>0.00%</strong></td>
                              </tr>
                              <tr>
                                <td>9 Month Change</td>
                                <td id="9month" style="display:flex; justify-content: space-between;"><strong>0.00%</strong></td>
                              </tr>
                              <tr>
                                <td>1 Year Change</td>
                                <td id="1year" style="display:flex; justify-content: space-between;"><strong>0.00%</strong></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <br/>
                    <h3 style="color:#4285f4"><img alt="image" src="images/technical.png" style="height: 50px;width: 50px; padding: 10px;" /> Technical Analysis</h3>
                    <div class="row">
                        <div class="col-md-12">
                          <table class="table custom-table">
                            <thead>
                              <tr>
                                <th>Indicator</th>
                                <th>Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>RSI (14)</td>
                                <td id="rsi-14"><strong>0.00</strong></td>
                              </tr>
                              <tr>
                                <td>ATR (14)</td>
                                <td><strong>0.00</strong></td>
                              </tr>
                              <tr>
                                <td>MACD (12,26)</td>
                                <td><strong>0.00</strong></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <br/>
                </div>
            </div>
        </div>
        <br/>
        <div class="col-md-8">
            
        </div>
    </div>



  <div class="page_wrapper" style="">
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

  <!-- Marqueefy JS -->
  <script src="https://cdn.jsdelivr.net/npm/@marqueefy/marqueefy@1.0.3/dist/js/marqueefy.min.js" 
        integrity="sha384-GkNdpzZA0aigYQs7bhB94ikrs1rxyzcoGZqE/KBxsvvsQPERiMHw4vrDlCgDewnu" 
        crossorigin="anonymous"></script>

  <script>
    let debounceTimer;
    let closingPrice = 0.0;
    let ppchange = 0.0;
    let pchange = 0.0;


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
            stockLink.target = '_self'; // Open link in a new tab

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
    // Wait for the library to load, then use CountUp

    //
    function formatNumberIndianInteger(num) {
        const integerPart = num.split(".")[0]; // Only take the integer part
        const lastThreeDigits = integerPart.slice(-3);
        const otherDigits = integerPart.slice(0, -3);
        const formattedOtherDigits = otherDigits.replace(/\B(?=(\d{2})+(?!\d))/g, ",");
        const formattedNumber = otherDigits ? formattedOtherDigits + "," + lastThreeDigits : lastThreeDigits;
        return formattedNumber;
    }

    function formatNumberIndian(num) {
        const [integerPart, decimalPart] = num.split(".");
        const lastThreeDigits = integerPart.slice(-3);
        const otherDigits = integerPart.slice(0, -3);
        const formattedOtherDigits = otherDigits.replace(/\B(?=(\d{2})+(?!\d))/g, ",");
        const formattedNumber = otherDigits ? formattedOtherDigits + "," + lastThreeDigits : lastThreeDigits;

        // Limit decimal part to 2 digits, or return just the integer part if no decimals
        const limitedDecimalPart = decimalPart ? decimalPart.slice(0, 2) : null;

        return limitedDecimalPart ? `${formattedNumber}.${limitedDecimalPart}` : formattedNumber;
    }

    // Fetch data from API
    async function fetchStockFundamental() {
        try {
            const response = await fetch(`https://api.vittapp.in/fetch_proxy.php?query=fundamentals&symbol=<?= $sym?>`); // Replace with your API URL
            const fundamental = await response.json();
            // Transform data to Lightweight Charts format
            return fundamental;
        } catch (error) {
            console.error("Error fetching data:", error);
            return [];
        }
    }



    // Fetch data from API
    async function fetchChartData() {
        try {
            let now = Math.floor(Date.now() / 1000) + 19800;
            const response = await fetch(`https://api.vittapp.in/fetch_proxy.php?query=price&symbol=<?= $sym?>-EQ&interval=1&from=0&to=${now}&period=I`); // Replace with your API URL
            const rawData = await response.json();
            // Transform data to Lightweight Charts format
            const candlestickData = rawData.t.map((time, index) => {
                return {
                    time: time, // UNIX timestamp
                    open: rawData.o[index],
                    high: rawData.h[index],
                    low: rawData.l[index],
                    close: rawData.c[index]
                };
            });

            return candlestickData;
        } catch (error) {
            console.error("Error fetching data:", error);
            return [];
        }
    }

    // Function to transform candlestick data for line chart
    function generateLineData(candlestickData) {
        return candlestickData.map(d => ({
            time: d.time,
            value: d.close
        }));
    }

    // Initialize chart
    const chartContainer = document.getElementById('chartContainer');
    const chart = LightweightCharts.createChart(chartContainer, {
        layout: {
            background: {
                color: "#ffffff"
            },
            textColor: '#333'
        },
        grid: {
            vertLines: {
                color: '#eee'
            },
            horzLines: {
                color: '#eee'
            }
        },
        priceScale: {
            borderColor: '#eee',
            priceVisible: true,
            position: 'left'
        },
        timeScale: {
            borderColor: '#eee',
            timeVisible: true
        },
    });

    const background = document.createElement('div');
    // place below the chart
    background.style.zIndex = 1;
    background.style.position = 'absolute';
    // set size and position to match container
    background.style.inset = '0px';
    background.style.backgroundImage = `url("data:image/png;base64,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")`;
    background.style.backgroundRepeat = 'no-repeat';
    background.style.backgroundPosition = 'center';
    background.style.opacity = '0.5';
    chartContainer.appendChild(background)


    let currentChartType = 'candlestick';
    let candlestickSeries;
    let lineSeries;

    var status = false;

    async function fetchMarketStatus() {
        const apiUrl = `https://api.vittapp.in/fetch_proxy.php?query=marketstatus`;

        try {
            // fetch data 
            const response = await fetch(apiUrl);
            const data = await response.json();
            
            // 
            if (data["marketState"][0]["marketStatus"] == "Open") {
                status= true;
            } else {
                status= false;
            }

        } catch (error) {
            console.error('Error fetching market status:', error);
        }
    }

    fetchMarketStatus();

    // Load initial chart data
    async function loadCandlestickData() {
        const candlestickData = await fetchChartData();
        document.getElementById("loadingIcon").style.display = "none";

        // Add candlestick series to the chart
        candlestickSeries = chart.addCandlestickSeries({
            upColor: '#4caf50',
            downColor: '#f44336',
            borderUpColor: '#4caf50',
            borderDownColor: '#f44336',
            wickUpColor: '#4caf50',
            wickDownColor: '#f44336'
        });

        candlestickSeries.setData(candlestickData);
        if(status == true){
            document.getElementById("counter").innerHTML = `₹${formatNumberIndian(candlestickData[candlestickData.length-1]["close"].toFixed(2))} <span class="${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2) >= 0 ? 'positive': 'negative'}">${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2)} (${(((candlestickData[candlestickData.length-1]["close"] - closingPrice)/closingPrice)*100).toFixed(2)}%)</span>`;
        }else{
            document.getElementById("counter").innerHTML = `₹${formatNumberIndian(candlestickData[candlestickData.length-1]["close"].toFixed(2))} <span class="${ pchange >= 0? 'positive': 'negative'}">${pchange.toFixed(2)} (${ppchange.toFixed(2)}%)</span>`;
        }

        // Add hover event listener to show OHLC tooltip
        chart.subscribeCrosshairMove((param) => {
            const ohlcTooltip = document.getElementById('ohlcTooltip');
            if (!param || !param.seriesData || param.seriesData.size === 0) {
                ohlcTooltip.innerText = '';
                return;
            }

            const data = param.seriesData.get(candlestickSeries);
            if (data) {
                ohlcTooltip.innerText = `O: ${data.open.toFixed(2)} | H: ${data.high.toFixed(2)} | L: ${data.low.toFixed(2)} | C: ${data.close.toFixed(2)}`;
            }
        });
    }
    // Function to fetch and update candlestick data
    async function updateCandlestickData() {

        const candlestickData = await fetchChartData();

        // Check if candlestick series exists before updating
        if (candlestickSeries) {
            candlestickSeries.setData(candlestickData);
            if(status == 'true'){
                document.getElementById("counter").innerHTML = `₹${formatNumberIndian(candlestickData[candlestickData.length-1]["close"].toFixed(2))} <span class="${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2) >= 0? 'positive': 'negative'}">${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2)} (${(((candlestickData[candlestickData.length-1]["close"] - closingPrice)/closingPrice)*100).toFixed(2)}%)</span>`;                
            }

        } else {
            candlestickSeries = chart.addCandlestickSeries({
                upColor: '#4caf50',
                downColor: '#f44336',
                borderUpColor: '#4caf50',
                borderDownColor: '#f44336',
                wickUpColor: '#4caf50',
                wickDownColor: '#f44336'
            });
            candlestickSeries.setData(candlestickData);

            document.getElementById("counter").innerHTML = `₹${formatNumberIndian(candlestickData[candlestickData.length-1]["close"].toFixed(2))} <span class="${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2) > 0? 'positive': 'negative'}">${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2)} (${(((candlestickData[candlestickData.length-1]["close"] - closingPrice)/closingPrice)*100).toFixed(2)}%)</span>`;

        }
    }
    // Load initial data and set up periodic updates
    async function initializeChart() {
        await loadCandlestickData(); // Initial load
        // 
        setInterval(updateCandlestickData, 10000);
    }

    // Call initializeChart to set up the chart with initial data and start auto-updates
    initializeChart();

    // Toggle chart type
    document.getElementById('toggleChartType').addEventListener('click', async () => {
        if (currentChartType === 'candlestick') {
            chart.removeSeries(candlestickSeries);
            const candlestickData = await fetchChartData();
            const lineData = generateLineData(candlestickData);

            lineSeries = chart.addLineSeries({
                color: '#4285f4',
                lineWidth: 210
            });
            lineSeries.setData(lineData);
            currentChartType = 'line';

            document.getElementById('toggleChartType').children[0].src = 'images/candle.png';
        } else {
            chart.removeSeries(lineSeries);
            await loadCandlestickData();
            currentChartType = 'candlestick';
            document.getElementById('toggleChartType').children[0].src = 'images/line.png';
        }
    });


    // Responsive chart
    window.addEventListener('resize', () => {
        chart.resize(chartContainer.clientWidth, chartContainer.clientHeight);
    });

    document.addEventListener("DOMContentLoaded", async function(event) {
        document.getElementById("tv-attr-logo").innerHTML = "<img width=80 src='images/logo.png'>"
        document.getElementById("tv-attr-logo").href = "https://piickr.vittapp.in"
        document.getElementById("tv-attr-logo").title = "Chart By Piickr API'S"

        let info = await fetchStockFundamental();

        closingPrice = info["data"][0]["Close"];
        ppchange = info["data"][0]["PPerchange"];
        pchange = info["data"][0]["Pchange"];

        if (info) {
            // document.getElementById("counter").innerHTML=`<strong>₹0.00</strong>`;
            const data = info["data"] && info["data"][0];

            if (data) {
                document.getElementById("52weekhigh").innerHTML = data["High1Yr"] ? `${formatNumberIndian(data["High1Yr"].toString())}` : "N/A";
                document.getElementById("52weeklow").innerHTML = data["Low1Yr"] ? `${formatNumberIndian(data["Low1Yr"].toString())}` : "N/A";
                //
                document.getElementById("mcap").innerHTML = data["Mcap"] ? `<strong>${formatNumberIndianInteger(data["Mcap"].toString())} Cr</strong>` : "N/A";
                document.getElementById("bookvalue").innerHTML = data["BookValue"] ? `<strong>${formatNumberIndian(data["BookValue"].toString())}</strong>` : "N/A";
                document.getElementById("pe").innerHTML = data["Pe"] ? `<strong>${formatNumberIndian(data["Pe"].toString())}</strong>` : "N/A";
                document.getElementById("pes").innerHTML = data["Ind_Pe"] ? `<strong>${formatNumberIndian(data["Ind_Pe"].toString())}</strong>` : "N/A";
                document.getElementById("roe").innerHTML = data["Roe"] ? `<strong>${formatNumberIndian(data["Roe"].toString())} %</strong>` : "N/A";
                document.getElementById("div").innerHTML = data["DivYeild"] ? `<strong>${formatNumberIndian(data["DivYeild"].toString())} %</strong>` : "N/A";
                // 
                document.getElementById("high").innerHTML = data["High1Yr"] ? `<strong>${formatNumberIndian(data["High1Yr"].toString())}</strong>` : "N/A";
                document.getElementById("low").innerHTML = data["Low1Yr"] ? `<strong>${formatNumberIndian(data["Low1Yr"].toString())}</strong>` : "N/A";
                document.getElementById("open").innerHTML = data["Open"] ? `<strong>${formatNumberIndian(data["Open"].toString())}</strong>` : "N/A";
                document.getElementById("pb").innerHTML = data["Pb"] ? `<strong>${formatNumberIndian(data["Pb"].toString())}</strong>` : "N/A";
                document.getElementById("roce").innerHTML = data["ROCE"] ? `<strong>${formatNumberIndian(data["ROCE"].toString())} %</strong>` : "N/A";
                document.getElementById("eps").innerHTML = data["Eps"] ? `<strong>${formatNumberIndian(data["Eps"].toString())}</strong>` : "N/A";


                var week = parseFloat(data["PricePerchng1week"].toString());
                var month = parseFloat(data["PricePerchng1mon"].toString());
                var tmonth = parseFloat(data["PricePerchng3mon"].toString());
                var smonth = parseFloat(data["PricePerchng6mon"].toString());
                var nmonth = parseFloat(data["PricePerchng9mon"].toString());
                var year = parseFloat(data["PricePerchng1year"].toString());


                document.getElementById("1week").innerHTML = data["PricePerchng1week"] ? `${ week >= 0 ? `<strong style="color:#06d6a0">${formatNumberIndian(week.toString())} %</strong> <img src="images/up.png" height="18">` : `<strong style="color: red">${formatNumberIndian(week.toString())} %</strong> <img src="images/down.png" height="18">`}` : "N/A";
                document.getElementById("1month").innerHTML = data["PricePerchng1mon"] ? `${ month >= 0 ? `<strong style="color:#06d6a0">${formatNumberIndian(month.toString())} %</strong> <img src="images/up.png" height="18">` : `<strong style="color: red">${formatNumberIndian(month.toString())} %</strong> <img src="images/down.png" height="18">`}` : "N/A";
                document.getElementById("3month").innerHTML = data["PricePerchng3mon"] ? `${ tmonth >= 0 ? `<strong style="color:#06d6a0">${formatNumberIndian(tmonth.toString())} %</strong> <img src="images/up.png" height="18">` : `<strong style="color: red">${formatNumberIndian(tmonth.toString())} %</strong> <img src="images/down.png" height="18">`}` : "N/A";
                document.getElementById("6month").innerHTML = data["PricePerchng6mon"] ? `${ smonth >= 0 ? `<strong style="color:#06d6a0">${formatNumberIndian(smonth.toString())} %</strong> <img src="images/up.png" height="18">` : `<strong style="color: red">${formatNumberIndian(smonth.toString())} %</strong> <img src="images/down.png" height="18">`}` : "N/A";
                document.getElementById("9month").innerHTML = data["PricePerchng9mon"] ? `${ nmonth >= 0 ? `<strong style="color:#06d6a0">${formatNumberIndian(nmonth.toString())} %</strong> <img src="images/up.png" height="18">` : `<strong style="color: red">${formatNumberIndian(nmonth.toString())} %</strong> <img src="images/down.png" height="18">`}` : "N/A";
                document.getElementById("1year").innerHTML = data["PricePerchng1year"] ? `${ year >= 0 ? `<strong style="color:#06d6a0">${formatNumberIndian(year.toString())} %</strong> <img src="images/up.png" height="18">` : `<strong style="color: red">${formatNumberIndian(year.toString())} %</strong> <img src="images/down.png" height="18">`}` : "N/A";


                document.getElementById("rsi-14").innerHTML = data["DayRSI14CurrentCandle"] ? `<strong>${formatNumberIndian(data["DayRSI14CurrentCandle"].toString())} %</strong>` : "N/A";

            } else {
                console.warn("Data is not available.");
            }
        }
    });
  </script>
</body>
</html>