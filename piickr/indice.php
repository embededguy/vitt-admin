<?php
  include('config/db.php');

  if(isset($_GET['name'])){
    $sym = $_GET['name'];

    // $sql = "SELECT * FROM scripts WHERE ticker_symbol = '$sym'";
    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     $p = $result->fetch_assoc();
    // }
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

  <meta name='og:title' content='Piickr - '>
  <meta name='og:image' content='images/logo.png'>
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
  <!-- Highcharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/heatmap.js"></script>
    <script src="https://code.highcharts.com/modules/treemap.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>  

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
      height: 600px;
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
                            <img class="stock-logo" onerror="this.onerror=null; this.src='images/ni.png'" src="https://vittapp.in/<?= $p['imagepath']?>"/>
                            <div>
                                <div class="stock-name">
                                  <?= $name?>
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
                      </div>                       
                    </div>
                </div>
            </div>
            
            <!-- Right Column - More Calculators -->
            <div class="col-md-4">
                <div class="more-calculators">
                    <h3 style="color:#4285f4"><img alt="image" src="images/technical.png" style="height: 50px;width: 50px; padding: 10px;" />Explore Other Indices</h3>
                    
                    <br/>                    
                </div>
            </div>
        </div>
        <br/>
        <div class="row justify-content-center" style="text-align: center;width:100%;margin-top: 50px;gap: 20px; align-items: center;">
        <h3 style="font-size: 25px;color: #4285f4;">✨ Heat Map ✨</h3>
      </div>
      
      <div style="height: 50px;"></div>
      <div class="card p-4 mb-4">
        <!-- Heatmap Chart -->
        <figure class="highcharts-figure">
          <div id="container" style="height: 80vh;"></div>
        </figure>
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
      // API Endpoint
      const apiEndpoint = 'https://api.vittapp.in/fetch_proxy.php?query=indice_stocks&name=<?= $sym?>'; // Replace with your API URL
      
      function getColor(value) {
        if (value <= -3) return "#b71c1c";  // Deep Red for -3 or less
        if (value > -3 && value <= -2) return "#d32f2f";  // Red for -2
        if (value > -2 && value <= -1) return "#ef5350";  // Light Red for -1
        if (value > -1 && value < 0) return "#ffcccb";    // Very Light Red for 0
        if (value === 0) return "#c6c3c3";               // Neutral for 0 (white/gray)
        if (value > 0 && value <= 1) return "#c8e6c9";   // Very Light Green for 1
        if (value > 1 && value <= 2) return "#81c784";   // Light Green for 2
        if (value > 2 && value <= 3) return "#4caf50";   // Green for 3
        if (value > 3) return "#00904a";                // Deep Green for more than 3
        return "#ffffff"; // Fallback color
      }
      
      // Fetch data from API and populate the heatmap
      async function fetchStockData() {
        try {
          const response = await fetch(apiEndpoint);
          const jsonData = await response.json();
      
          // Extract the stock data array
          const stockData = jsonData.data;
      
          // Process data into Highcharts format
          const heatmapData = stockData.map((stock, index) => ({
            id: `id_${index}`,
            name: stock.symbol, // Stock symbol
            value: parseFloat(stock.mVal), // Market Value
            color: getColor(parseFloat(stock.iislPercChange)), // Green for positive change, red for negative
            custom: {
              price: parseFloat(stock.ltP), // Last Traded Price
              change: parseFloat(stock.iislPercChange), // Percentage change
              img: `https://s3tv-symbol.dhan.co/symbols/${stock.symbol}.svg`,
            },
          }));
      
          // Initialize Highcharts heatmap with the fetched data
          Highcharts.chart('container', {
            chart: {
              type: 'treemap',
              layoutAlgorithm: 'squarified',
              backgroundColor: '#ffffff',
            },
      
            title: {
              text: '<?= $sym?>',
              style: {
                fontSize: '20px',
                color: '#555',
                marginBottom: "25px"
              },
            },
      
            colorAxis: {
              dataClasses: [
                { from: -3, to: -2, color: '#d32f2f', name: '-3 to -2' },
                { from: -2, to: -1, color: '#ef5350', name: '-2 to -1' },
                { from: -1, to: 0, color: '#ffcccb', name: '-1 to 0' },
                { from: 0, to: 1, color: '#c8e6c9', name: '0 to 1' },
                { from: 1, to: 2, color: '#81c784', name: '1 to 2' },
                { from: 2, to: 3, color: '#4caf50', name: '2 to 3' },
                { from: 3, color: '#2e7d32', name: '3 and above' }
              ]
            },
      
            tooltip: {
              useHTML: true,
              formatter: function () {
                return `<b>${this.point.name}</b><br>
                        Price: ₹${this.point.custom.price.toFixed(2)}<br>
                        Market Cap: ₹${this.point.value.toFixed(2)} Cr<br>
                        Change: ${this.point.custom.change.toFixed(2)}%`;
              },
              backgroundColor: '#ffffff',
              borderColor: '#ccc',
              borderRadius: 5,
              zIndex:10,
              style: {
                color: '#333',
                fontSize: '14px',
              },
            },
      
            series: [{
              type: 'treemap',
              data: heatmapData,
              layoutAlgorithm: 'squarified',
              clip: false,
              dataLabels: {
                enabled: true,
                useHTML: true,
                formatter: function () {
                  const { width, height } = this.point.shapeArgs; // Get tile dimensions
                  const tileSize = Math.min(width, height); // Use the smaller dimension for scaling
                  const fontSize = Math.max(tileSize / 9, 10); // Adjust font size (minimum 10px)
                  const imgSize = Math.max(tileSize / 3, 20); // Adjust image size (minimum 20px)
                  const hideName = tileSize < 50; // Hide name if tile is too small
      
                  const name = this.point.name;
                  const change = this.point.custom.change.toFixed(2);
                  const src = this.point.custom.img;
      
                  return `
                    <div style="text-align:center;display:flex;flex-direction:column;align-items:center;gap:5px;">
                      <img src="${src}" style="width:${imgSize}px;height:${imgSize}px;border-radius:50%;" />
                      ${!hideName ? `<span style="font-size:${fontSize}px;font-weight:bold;">${name}</span>` : ''}
                      <span style="font-size:${fontSize * 0.8}px;color:#fff;">${change}%</span>
                    </div>`;
                },
                style: {
                  textOutline: 'none',
                  color: '#fff',
                },
              },
            }],
          });
        } catch (error) {
          console.error('Error fetching stock data:', error);
        }
      }
      
      // Fetch and render the heatmap
      fetchStockData();
  </script>

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
  </script>

  <script>

  </script>
</body>
</html>