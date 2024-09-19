<?php
  include('config/db.php');
  include('config/auth.php');

  if (!isset($_SESSION["user_logged_in"]) || $_SESSION["user_logged_in"] !== true) {
      // Redirect to the login page if not logged in
      $customPath = "/admin/login.php";
      $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]".$customPath;
      header("Location: $actual_link");
  }else{
      
  }
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = $_POST['name'];
    $message = $_POST['description'];

    $sql = "INSERT INTO notification (title, message) VALUES('$name','$message')";

    if($conn->query($sql) === TRUE){
      header("Location: ./instant_push.php");
    }else{
      header("Location: ./instant_push.php");
    }
  }

  if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/images/favicon.png">
    <title>Vitt App - Create A Instant Push Notification</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <link rel="stylesheet" href="css/select2.css">
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/uppy.min.css">
    <link rel="stylesheet" href="css/jquery.steps.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/quill.snow.css">
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
  <body class="vertical  light  ">
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
      <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></button>
    </div>
    <div class="wrapper">
      <?php include "./components/sidebar.php";?>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            <h2 class="page-title">Create Push Notification</h2>
            <p class="lead text-muted">Helps, you create a push notificiation.</p>
            <div class="row">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">CREATE PUSH NOTIFICATION</strong>
                    </div>
                    <?php
                      if (isset($_GET['success']) && $_GET['success'] == 1) {
                        echo '<div class="alert alert-success" style="text-align:center" role="alert">
                                <strong>Success! </strong> Created Successfully.
                              </div>';
                      }elseif(isset($_GET['success']) && $_GET['success'] == 0){
                        echo '<div class="alert alert-danger" style="text-align:center" role="alert">
                                <strong>Error !!</strong>
                              </div>';
                      }
                    ?>
                    <div class="card-body">
                      <form class="form" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Notification Title: </label>
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">               
                            <input name="name" type="text" class="form-control" id="inputPassword4" placeholder="Title">
                          </div>
                          
                          <div class="form-group col-md-6">
                            <label for="desc">Message: </label>
                            <textarea id="desc" name="description" class="form-control" placeholder="Take A Note Here" style="height:150px"></textarea>
                          </div> <!-- form-group -->
                        </div>
                        <br/> 
                        <!-- <div class="form-row justify-content-center">
                          <div class="form-group col-md-12">                            
                            <br/>
                            <h4 style="text-align:center;">** IMAGE PREVIEW **</h4>
                            <p style="text-align:center;" class="lead text-muted">DIMENSION OF 370x270 ONLY</p>
                            <div id="imageSection" style="display:flex;justify-content: center;gap: 10px;"></div>
                          </div>
                        </div> -->
                        <br/>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
          <div class="row">
            <div class="col-md-12">
              <p class="mt-5 mb-3 text-muted">© <script>document.write(new Date().getFullYear());</script>, Developed & Managed by Vhiron Technologies.</p>
            </div>
          </div> <!-- end section -->
        </div> <!-- .container-fluid -->        
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/d3.min.js"></script>
    <script src="js/topojson.min.js"></script>
    <script src="js/datamaps.all.min.js"></script>
    <script src="js/datamaps-zoomto.js"></script>
    <script src="js/datamaps.custom.js"></script>
    <script src="js/Chart.min.js"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="js/gauge.min.js"></script>
    <script src="js/jquery.sparkline.min.js"></script>
    <script src="js/apexcharts.min.js"></script>
    <script src="js/apexcharts.custom.js"></script>
    <script src='js/jquery.mask.min.js'></script>
    <script src='js/select2.min.js'></script>
    <script src='js/jquery.steps.min.js'></script>
    <script src='js/jquery.validate.min.js'></script>
    <script src='js/jquery.timepicker.js'></script>
    <script src='js/dropzone.min.js'></script>
    <script src='js/uppy.min.js'></script>
    <script src='js/quill.min.js'></script>
    
    
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');

      // Display selected images before submitting the form
      const imageSection = document.getElementById('imageSection');
      const inputImages = document.getElementById('customFilex');

      inputImages.addEventListener('change', (event) => {
        imageSection.innerHTML = ''; // Clear previous previews

        for (const file of event.target.files) {
          const img = document.createElement('img');
          img.src = URL.createObjectURL(file);
          img.className = 'img-fluid';
          img.style.borderRadius = "10px";
          img.style.border = "1px solid grey"
          imageSection.appendChild(img);
        }
      });
    </script>
  </body>
</html>