<?php 
  include('config/db.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/images/favicon.png">
    <title>Vitt - Your Financial Partner!!</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
    <style>
      .loading-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; /* Ensure it's above other content */
      }
    </style>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // Hide the loading screen
        var loadingScreen = document.getElementById("loadingScreen");
        loadingScreen.style.display = "none";
      });

    </script>
  </head>
  <body class="light ">
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
      <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></button>
    </div>
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="./controller/process_login.php">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.php">
            <img src="./assets/images/Vitt.png" width="50%" />
          </a>
          <br/>
          <br/>
          <br/>
          <h1 class="h4 mb-3">Login</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Stay logged in </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <p class="mt-5 mb-3 text-muted">© VITT <script>document.write(new Date().getFullYear());</script>, Developed & Managed by Vhiron Technologies.</p>
        </form>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    
    <script>
      const socket = new WebSocket('wss://ws.finnhub.io?token=cpu138hr01qj8qq0v490cpu138hr01qj8qq0v49g');

      socket.addEventListener('open', function (event) {
          socket.send(JSON.stringify({'type':'subscribe', 'symbol': ''}))
      });
      socket.addEventListener('message', function (event) {
          console.log('Message from server ', event.data);
      });

      // Unsubscribe
       var unsubscribe = function(symbol) {
          socket.send(JSON.stringify({'type':'unsubscribe','symbol': symbol}))
      }
    </script>
  </body>
</html>
</body>
</html>
