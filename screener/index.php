<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Vitt - Screener </title>
  <meta content="" property="og:title">
  <meta content="" property="twitter:title">
  <meta name="description" content="">

  <link href="./assets/media/images/icons/favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link href="./assets/css/styles.bundle.css" rel="stylesheet" type="text/css" />
  <link href="./assets/plugins/slick/slick.css" rel="stylesheet" type="text/css" />
  <link href="./assets/plugins/aos-master/src/aos.css" rel="stylesheet" type="text/css" />
  <link href="./assets/plugins/apexcharts/apexcharts.css" rel="stylesheet" type="text/css" />
  <link href="./assets/css/pages/app.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com" rel="preconnect" >
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <?php include_once "./components/header.php";?>
  <section class="hero hero-v2">
    <div class="container crypto-graph" data-aos="fade-up" data-aos-delay="200">
      <div class="crypto-graph-carousel">

        <div class="crypto-graph-carousel__items">
          <div class="crypto-graph-item">
            <img class="crypto-graph-item__crypto-icon" src="./assets/media/images/icons/logo-btc.svg" alt="btc">
          </div>
          <div class="crypto-graph-item crypto-graph-item__graph">
            <div class="crypto-graph-item-graph__inflution crypto-graph-item-graph__inflution--bullish">
              <img src="./assets/media/images/icons/arrow-bullish.svg" alt="Up">
              <p class="fd-lg--bold">2.11%</p>
            </div>
          </div>
          <div class="crypto-graph-item crypto-graph-item--fullname">
            <p class="fb-regular crypto-graph-item__name">NIFTY 50</p>
          </div>
          <div class="crypto-graph-item crypto-graph-item--price-codename">
            <p class="fd-md crypto-graph-item__price">0.00</p>
            <!-- <p class="fb-regular crypto-graph-item__code">INR</p> -->
          </div>
        </div>

        <div class="crypto-graph-carousel__items">
          <div class="crypto-graph-item">
            <img class="crypto-graph-item__crypto-icon" src="./assets/media/images/icons/logo-eth.svg" alt="logo-eth">
          </div>
          <div class="crypto-graph-item crypto-graph-item__graph">
            <div class="crypto-graph-item-graph__inflution crypto-graph-item-graph__inflution--bearish">
              <img src="./assets/media/images/icons/arrow-bearish.svg" alt="Down">
              <p class="fd-lg--bold">1.53%</p>
            </div>
          </div>
          <div class="crypto-graph-item crypto-graph-item--fullname">
            <p class="fb-regular crypto-graph-item__name">BANK NIFTY</p>
          </div>
          <div class="crypto-graph-item crypto-graph-item--price-codename">
            <p class="fd-md crypto-graph-item__price">0.00</p>
            <!-- <p class="fb-regular crypto-graph-item__code">eth</p> -->
          </div>
        </div>

        <div class="crypto-graph-carousel__items">
          <div class="crypto-graph-item">
            <img class="crypto-graph-item__crypto-icon" src="./assets/media/images/icons/logo-usdt.svg" alt="usdt">
          </div>
          <div class="crypto-graph-item crypto-graph-item__graph">
            <div class="crypto-graph-item-graph__inflution crypto-graph-item-graph__inflution--bullish">
              <img src="./assets/media/images/icons/arrow-bullish.svg" alt="Up">
              <p class="fd-lg--bold">0.11%</p>
            </div>
          </div>
          <div class="crypto-graph-item crypto-graph-item--fullname">
            <p class="fb-regular crypto-graph-item__name">FIN NIFTY</p>
          </div>
          <div class="crypto-graph-item crypto-graph-item--price-codename">
            <p class="fd-md crypto-graph-item__price">0.00</p>
            <!-- <p class="fb-regular crypto-graph-item__code">usdt</p> -->
          </div>
        </div>

        <div class="crypto-graph-carousel__items">
          <div class="crypto-graph-item">
            <img class="crypto-graph-item__crypto-icon" src="./assets/media/images/icons/logo-usdt.svg" alt="usdt">
          </div>
          <div class="crypto-graph-item crypto-graph-item__graph">
            <div class="crypto-graph-item-graph__inflution crypto-graph-item-graph__inflution--bullish">
              <img src="./assets/media/images/icons/arrow-bullish.svg" alt="Up">
              <p class="fd-lg--bold">0.11%</p>
            </div>
          </div>  
          <div class="crypto-graph-item crypto-graph-item--fullname">
            <p class="fb-regular crypto-graph-item__name">SENSEX</p>
          </div>
          <div class="crypto-graph-item crypto-graph-item--price-codename">
            <p class="fd-md crypto-graph-item__price">0.00</p>
            <!-- <p class="fb-regular crypto-graph-item__code">bnb</p> -->
          </div>
        </div>
      </div>
      <div class="slick__pagination">
        <div class="crypto-graph-carousel__pagination slick__pagination--dots">
          <div class="crypto-graph-carousel__slick-slider-dots slick-slider-dots"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start::Global Bundle Scripts (used by all pages) -->
  <script src="./assets/js/scripts.bundle.js"></script>
  <!-- End::Global Bundle Scripts -->
  <!-- Start::Plugins (used by this page) -->
  <script src="./assets/plugins/slick/slick.min.js"></script>
  <script src="./assets/plugins/aos-master/src/aos.js"></script>
  <script src="./assets/plugins/apexcharts/apexcharts.min.js"></script>
  <!-- End::Plugins -->
  <!-- Start::Page Scripts (used by this page) -->
  <script src="./assets/js/custom/custom-select.js"></script>
  <script src="./assets/js/pages/landing-page-v2.js"></script>
  <script src="./assets/js/custom/chart.js"></script>
  <!-- End::Page Scripts -->

</body>
</html>