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
      height: 500px;
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
      width: 100px;
      height: 100px;
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
        padding: 20px;
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
                                    <div style="display: flex;gap: 10px; justify-content: normal; align-items: center;">
                                        <button id="toggleChartType" class="btn btn-sm btn-dark">
                                            <img height="25" src="images/line.png"/>
                                        </button>
                                        <div id="ohlcTooltip"></div>

                                    </div>
                                    <div id="chartContainer"></div>
                                </div>
                            </div>
                        </div>
                        <br/>
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
                                <th>Metric</th>
                                <th>Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1 Week Gain</td>
                                <td><strong>0.00%</strong></td>
                              </tr>
                              <tr>
                                <td>1 Month Gain</td>
                                <td><strong>0.00%</strong></td>
                              </tr>
                              <tr>
                                <td>1 Year Gain</td>
                                <td><strong>0.00%</strong></td>
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
            let now = Math.floor(Date.now()/1000) + 19800;
            const response = await fetch(`https://api.vittapp.in/fetch_proxy.php?query=price&symbol=<?= $sym?>-EQ&interval=1&from=0&to=${now}&period=I`); // Replace with your API URL
            const rawData = await response.json();
            // Transform data to Lightweight Charts format
            const candlestickData = rawData.t.map((time, index) => {
                return {
                    time: time,               // UNIX timestamp
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
        return candlestickData.map(d => ({ time: d.time, value: d.close }));
    }

    // Initialize chart
    const chartContainer = document.getElementById('chartContainer');
    const chart = LightweightCharts.createChart(chartContainer, {
        layout: { background: { color: "#ffffff" }, textColor: '#333' },
        grid: { vertLines: { color: '#eee' }, horzLines: { color: '#eee' } },
        priceScale: { borderColor: '#eee', priceVisible: true, position: 'left' },
        timeScale: { borderColor: '#eee', timeVisible: true },
    });

    let currentChartType = 'candlestick';
    let candlestickSeries;
    let lineSeries;

    // Load initial chart data
    async function loadCandlestickData() {
        const candlestickData = await fetchChartData();

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
        document.getElementById("counter").innerHTML=`₹${formatNumberIndian(candlestickData[candlestickData.length-1]["close"].toFixed(2))} <span class="${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2) > 0? 'positive': 'negative'}">${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2)} (${(((candlestickData[candlestickData.length-1]["close"] - closingPrice)/closingPrice)*100).toFixed(2)}%)</span>`;

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
            document.getElementById("counter").innerHTML=`₹${formatNumberIndian(candlestickData[candlestickData.length-1]["close"].toFixed(2))} <span class="${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2) > 0? 'positive': 'negative'}">${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2)} (${(((candlestickData[candlestickData.length-1]["close"] - closingPrice)/closingPrice)*100).toFixed(2)}%)</span>`;

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
            document.getElementById("counter").innerHTML=`₹${formatNumberIndian(candlestickData[candlestickData.length-1]["close"].toFixed(2))} <span class="${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2) > 0? 'positive': 'negative'}">${(candlestickData[candlestickData.length-1]["close"].toFixed(2) - closingPrice).toFixed(2)} (${(((candlestickData[candlestickData.length-1]["close"] - closingPrice)/closingPrice)*100).toFixed(2)}%)</span>`;
        }
    }
    // Load initial data and set up periodic updates
    async function initializeChart() {
        await loadCandlestickData(); // Initial load

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
                lineWidth: 2
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
      let info = await fetchStockFundamental();
      closingPrice = info["data"][0]["Close"];

      if(info){
        document.getElementById("counter").innerHTML=`<strong>₹0.00</strong>`;

        document.getElementById("mcap").innerHTML=`<strong>${formatNumberIndianInteger((info["data"][0]["Mcap"]).toString())} Cr</strong>`;        
        document.getElementById("bookvalue").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["BookValue"]).toString())}</strong>`;        
        document.getElementById("pe").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["Pe"]).toString())}</strong>`;        
        document.getElementById("pes").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["Ind_Pe"]).toString())}</strong>`;        
        document.getElementById("roe").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["Roe"]).toString())} %</strong>`;        
        document.getElementById("div").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["DivYeild"]).toString())} %</strong>`;        

          
        document.getElementById("high").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["High1Yr"]).toString())}</strong>`;        
        document.getElementById("low").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["Low1Yr"]).toString())}</strong>`;        
        document.getElementById("open").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["Open"]).toString())}</strong>`;        
        document.getElementById("pb").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["Pb"]).toString())}</strong>`;        
        document.getElementById("roce").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["ROCE"]).toString())} %</strong>`;        
        document.getElementById("eps").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["Eps"]).toString())}</strong>`;        
      


        document.getElementById("rsi-14").innerHTML=`<strong>${formatNumberIndian((info["data"][0]["DayRSI14CurrentCandle"]).toString())}</strong>`;

      }
    });
    
  </script>
</body>
</html>