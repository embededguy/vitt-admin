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
    <title>FII DII Data - Get Buy Sell Activity in Cash Market | Piickr</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css"/>
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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <style>
      body{
      overflow-x: hidden !important;
      }
      .main-container {
        max-width: calc( 100vw - 50px );
        margin: 30px auto;
      }
      .hero_one{
        position: absolute;
        z-index: -1;
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
      
      #net_dii:after{
        content: " Cr";
      }
      
      #net_fii:after{
        content: " Cr";
      }

      #net:after{
        content: " Cr";
      }
      .negative:before{
        content: "-";
      }
      .tscroll {
        min-width: 100%;
        overflow-x: scroll;
        margin: 0px;
        border: 1px solid #4285f4;
        border-radius: 10px;
        padding: 0px;
        font-size: 15px;
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
        <h3 style="font-size: 25px;color: #4285f4;">✨ FII⧸DII Trading Activities ✨</h3>
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
        <div class="row ">
          <div class="col-md-4">
            <h6>◾ FII/FPI Net Buy/Sell: <span id="net_fii" class=""></span></h6>
          </div>
          <div class="col-md-4">
            <h6>◾ DII Net Buy/Sell: <span id="net_dii" class=""></span></h6>
          </div>
          <div class="col-md-4">
            <h6>◾ Net Buy/Sell: <span id="net" class=""></span></h6>
          </div>
        </div>
        <div style="height:50px"></div>
        <div id="fiiDiiChart"></div>
      </div>
      <div class="tscroll row justify-content-center">
        <table id="data" class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">FII Buy Cash (Cr)</th>
              <th scope="col">FII Sell Cash (Cr)</th>
              <th scope="col">FII Net Cash (Cr)</th>
              <th scope="col">DII BUY Cash (Cr)</th>
              <th scope="col">DII Sell Cash (Cr)</th>
              <th scope="col">DII Net Cash (Cr)</th>
              <th scope="col">Net Cash (Cr)</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
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

    <script>
      let net_fii = 0.0;
      let net_dii = 0.0;
      let net = 0.0;
      //
      function getThirtyDaysBehind() {
        const currentDate = new Date(); // Get today's date
        currentDate.setDate(currentDate.getDate() - 30); // Subtract 30 days
        
        // Format the date in DD-MM-YYYY format
        const day = String(currentDate.getDate()).padStart(2, '0'); // Add leading zero if needed
        const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Months are 0-indexed
        const year = currentDate.getFullYear();
      
        return `${day}-${month}-${year}`; // Return formatted date
      }
      // 
      function getCurrentDate() {
        const currentDate = new Date(); // Get today's date
        
        // Format the date in DD-MM-YYYY format
        const day = String(currentDate.getDate()).padStart(2, '0'); // Add leading zero if needed
        const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Months are 0-indexed
        const year = currentDate.getFullYear();
      
        return `${day}-${month}-${year}`; // Return formatted date
      }
      
      //
      function onMonthChange(element){
        
        if(element.value != 0){
          fetchData2(getMonthStartAndEnd(element.value))
        }else{
          fetchData()
        }

      }
      
      function getMonthStartAndEnd(monthYear) {
        // Parse the input string
        const [monthName, year] = monthYear.split(" ");
        const monthIndex = new Date(`${monthName} 1, ${year}`).getMonth(); // Convert month name to index
      
        // Get the start and end dates of the month
        const startDate = new Date(year, monthIndex, 1); // First day of the month
        const endDate = new Date(year, monthIndex + 1, 0); // Last day of the month
      
        // Format the dates in DD-MM-YYYY format
        const formatDate = (date) => {
          const day = String(date.getDate()).padStart(2, "0");
          const month = String(date.getMonth() + 1).padStart(2, "0");
          const year = date.getFullYear();
          return `${day}-${month}-${year}`;
        };
      
        return {
          start: formatDate(startDate),
          end: formatDate(endDate),
        };
      }
      
      // 
      function generateMonthDropdown() {
        const monthNames = [
          "January", "February", "March", "April", "May", "June", 
          "July", "August", "September", "October", "November", "December"
        ];
      
        const currentDate = new Date();
        const currentMonth = currentDate.getMonth(); // 0 = January, 11 = December
        const currentYear = currentDate.getFullYear();
      
        let options = [];
        let endMonth = 3; // April is index 3 in monthNames (for the current year 2024)
        
        // Create a list of months from current month to April of the same year
        for (let i = currentMonth; i >= endMonth; i--) {
          let month = monthNames[i];
          options.push(`<option value="${month} ${currentYear}">▪️ ${month} ${currentYear}</option>`);
        }
      
        // Populate the dropdown with options
        const dropdown = document.querySelector('.form-select');
        dropdown.innerHTML = '<option value="0" selected>▪️ Last One Month</option>' + options.join('');
      }      
      
      function formatNumberIndian(num) {
          // Handle negative numbers
          const isNegative = num < 0;
          num = Math.abs(num);
      
          const [integerPart, decimalPart] = num.toString().split(".");
          const lastThreeDigits = integerPart.slice(-3);
          const otherDigits = integerPart.slice(0, -3);
      
          // Only add commas if the remaining digits are more than 0
          const formattedOtherDigits = otherDigits ? otherDigits.replace(/\B(?=(\d{2})+(?!\d))/g, ",") : "";
      
          const formattedNumber = formattedOtherDigits ? formattedOtherDigits + "," + lastThreeDigits : lastThreeDigits;
      
          // Limit decimal part to 2 digits, or return just the integer part if no decimals
          const limitedDecimalPart = decimalPart ? decimalPart.slice(0, 2) : null;
      
          // Reattach negative sign if the number was negative
          const result = limitedDecimalPart ? `${formattedNumber}.${limitedDecimalPart}` : formattedNumber;
          return isNegative ? `-${result}` : result;
      }
      // 
      $(document).ready(function() { 
        generateMonthDropdown()
      });
      // 
      async function fetchData() {
        net_fii = 0.0;
        net_dii = 0.0;
        net = 0.0;
        try {
          // Replace this URL with your API endpoint
          const response = await fetch(`https://api.vittapp.in/fetch_proxy.php?query=fii-dii&startdate=${getThirtyDaysBehind()}&enddate=${getCurrentDate()}`);
          const result = await response.json();
        
          if (result.code !== 0) {
            throw new Error('Failed to fetch data');
          }
        
          const data = result.data;
          const fiiData = data["FII/FPI"];
          const diiData = data.DII;
        
          // Populate Highcharts
          const dates = fiiData.map(item => item.date).reverse();
          const fiiNet = fiiData.map(item => item.net).reverse();
          const diiNet = diiData.map(item => item.net).reverse();
        
          Highcharts.chart('fiiDiiChart', {
            chart: {
              type: 'column'
            },
            title: {
              text: ''
            },
            xAxis: {
              categories: dates,
              crosshair: true
            },
            yAxis: [
              {
                title: {
                  text: 'Cash Flow (Cr)'
                }
              }
            ],
            tooltip: {
              shared: true,
              backgroundColor: 'rgba(0, 0, 0, 0.8)',
              style: {
                color: '#fff'
              }
            },
            legend: {
              itemStyle: {
                color: '#333',
                fontWeight: 'bold'
              }
            },
            series: [
              {
                name: 'FII Net',
                data: fiiNet,
                color: '#4285f4'
              },
              {
                name: 'DII Net',
                data: diiNet,
                color: '#f39c12'
              }
            ]
          });
        
          // Populate Table
          const tableBody = document.querySelector('#data tbody');
          tableBody.innerHTML = ''; // Clear existing data
        
          fiiData.forEach((fiiItem, index) => {
            const diiItem = diiData[index];
            net_fii = net_fii + fiiItem.net
            net_dii = net_dii + diiItem.net
            net = net_fii + net_dii
            const row = `
              <tr>
                <td>${fiiItem.date}</td>
                <td>${formatNumberIndian(fiiItem.buy.toFixed(2))}</td>
                <td>${formatNumberIndian(fiiItem.sell.toFixed(2))}</td>
                <td>${formatNumberIndian(fiiItem.net.toFixed(2))}</td>
                <td>${formatNumberIndian(diiItem.buy.toFixed(2))}</td>
                <td>${formatNumberIndian(diiItem.sell.toFixed(2))}</td>
                <td>${formatNumberIndian(diiItem.net.toFixed(2))}</td>
                <td>${(parseFloat(fiiItem.net.toFixed(2)) + parseFloat(diiItem.net.toFixed(2))).toFixed(2)}</td>
              </tr>
            `;
            tableBody.insertAdjacentHTML('beforeend', row);
            if(net_dii > 0){
              document.getElementById("net_dii").classList.remove("negative");
              document.getElementById("net_dii").classList.add("positive");
            }else{
              document.getElementById("net_dii").classList.remove("positive");
              document.getElementById("net_dii").classList.add("negative");

            }
            if(net_fii > 0){
              document.getElementById("net_fii").classList.remove("negative");
              document.getElementById("net_fii").classList.add("positive");
            }else{
              document.getElementById("net_fii").classList.remove("positive");
              document.getElementById("net_fii").classList.add("negative");
            }
            if(net > 0){
              document.getElementById("net").classList.remove("negative");
              document.getElementById("net").classList.add("positive");
            }else{
              document.getElementById("net").classList.remove("positive");
              document.getElementById("net").classList.add("negative");
            }

            document.getElementById("net_fii").innerHTML = formatNumberIndian(net_fii.toFixed(2))
            document.getElementById("net_dii").innerHTML = formatNumberIndian(net_dii.toFixed(2))
            document.getElementById("net").innerHTML = formatNumberIndian(net.toFixed(2))

          });

        } catch (error) {
          console.error('Error fetching data:', error);
        } 
      }
      

      async function fetchData2(obj) {
        net_fii = 0.0;
        net_dii = 0.0;
        net = 0.0;
        try {
          // Replace this URL with your API endpoint
          const response = await fetch(`https://api.vittapp.in/fetch_proxy.php?query=fii-dii&startdate=${obj.start}&enddate=${obj.end}`);
          const result = await response.json();
        
          if (result.code !== 0) {
            throw new Error('Failed to fetch data');
          }
        
          const data = result.data;
          const fiiData = data["FII/FPI"];
          const diiData = data.DII;
        
          // Populate Highcharts
          const dates = fiiData.map(item => item.date).reverse();
          const fiiNet = fiiData.map(item => item.net).reverse();
          const diiNet = diiData.map(item => item.net).reverse();
        
          Highcharts.chart('fiiDiiChart', {
            chart: {
              type: 'column'
            },
            title: {
              text: ''
            },
            xAxis: {
              categories: dates,
              crosshair: true
            },
            yAxis: [
              {
                title: {
                  text: 'Cash Flow (Cr)'
                }
              }
            ],
            tooltip: {
              shared: true,
              backgroundColor: 'rgba(0, 0, 0, 0.8)',
              style: {
                color: '#fff'
              }
            },
            legend: {
              itemStyle: {
                color: '#333',
                fontWeight: 'bold'
              }
            },
            series: [
              {
                name: 'FII Net',
                data: fiiNet,
                color: '#4285f4'
              },
              {
                name: 'DII Net',
                data: diiNet,
                color: '#f39c12'
              }
            ]
          });
        
          // Populate Table
          const tableBody = document.querySelector('#data tbody');
          tableBody.innerHTML = ''; // Clear existing data
        
          fiiData.forEach((fiiItem, index) => {
            const diiItem = diiData[index];
            net_fii = net_fii + fiiItem.net
            net_dii = net_dii + diiItem.net  
            net = net_fii + net_dii
    
            const row = `
              <tr>
                <td>${fiiItem.date}</td>
                <td>${formatNumberIndian(fiiItem.buy.toFixed(2))}</td>
                <td>${formatNumberIndian(fiiItem.sell.toFixed(2))}</td>
                <td>${formatNumberIndian(fiiItem.net.toFixed(2))}</td>
                <td>${formatNumberIndian(diiItem.buy.toFixed(2))}</td>
                <td>${formatNumberIndian(diiItem.sell.toFixed(2))}</td>
                <td>${formatNumberIndian(diiItem.net.toFixed(2))}</td>
                <td>${(parseFloat(fiiItem.net.toFixed(2)) + parseFloat(diiItem.net.toFixed(2))).toFixed(2)}</td>
              </tr>
            `;
            tableBody.insertAdjacentHTML('beforeend', row);
                        if(net_dii > 0){
              document.getElementById("net_dii").classList.remove("negative");
              document.getElementById("net_dii").classList.add("positive");
            }else{
              document.getElementById("net_dii").classList.remove("positive");
              document.getElementById("net_dii").classList.add("negative");

            }
            if(net_fii > 0){
              document.getElementById("net_fii").classList.remove("negative");
              document.getElementById("net_fii").classList.add("positive");
            }else{
              document.getElementById("net_fii").classList.remove("positive");
              document.getElementById("net_fii").classList.add("negative");
            }
            if(net > 0){
              document.getElementById("net").classList.remove("negative");
              document.getElementById("net").classList.add("positive");
            }else{
              document.getElementById("net").classList.remove("positive");
              document.getElementById("net").classList.add("negative");
            }

            document.getElementById("net_fii").innerHTML = formatNumberIndian(net_fii.toFixed(2))
            document.getElementById("net_dii").innerHTML = formatNumberIndian(net_dii.toFixed(2))
            document.getElementById("net").innerHTML = formatNumberIndian(net.toFixed(2))


          });
        } catch (error) {
          console.error('Error fetching data:', error);
        } 
      }
      // Call the fetch function on page load
      fetchData();
      
    </script>


  </body>
</html>
