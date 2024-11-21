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
    <title>Heatmap - Get Top Gainers & Losers, Market Overview | Piickr</title>
    <!-- icofont-css-link -->
    <link rel="stylesheet" href="css/icofont.min.css">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css" />
    <!-- Favicon -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <!-- Highcharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/heatmap.js"></script>
    <script src="https://code.highcharts.com/modules/treemap.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <style>
      .main-container {
      max-width: calc( 100vw - 50px );
      margin: 30px auto;
      }
      .hero_one{
      position: absolute;
      z-index: -1;
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
      <div class="row justify-content-center" style="text-align: center;width:100%;margin-top: 50px;gap: 20px; align-items: center;">
        <h3 style="font-size: 25px;color: #4285f4;">✨ Heat Map ✨</h3>
      </div>
      <div style="height: 50px;"></div>
      <div class="row">
        <div class="col-md-2">
          <select onchange="onMonthChange(this)" class="form-select" id="monthDropdown" aria-label="Default select example" style="width: ;">
          </select>
        </div>
        <div class="col-md-5">
        </div>
        <div class="col-md-4">
        </div>
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
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>  
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <!-- Highcharts Script -->
    <script>
      // API Endpoint
      const apiEndpoint = 'https://api.vittapp.in/fetch_proxy.php?query=indice_stocks&name=NIFTY 50'; // Replace with your API URL
      
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
              text: 'Nifty Energy',
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
  </body>
</html>
