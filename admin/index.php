<?php
  include('config/db.php');
  include('config/auth.php');

  if (!isset($_SESSION["user_logged_in"]) || $_SESSION["user_logged_in"] !== true) {
      // Redirect to the login page if not logged in
      $customPath = "/admin/login.php";
      $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]".$customPath;
      header("Location: $actual_link");
  }else{
    $sql = "SELECT COUNT(*) AS total_mes FROM mes_index;";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $total_mes = $data["total_mes"];

    $sql = "SELECT COUNT(*) AS total_sec FROM sectorial_index;";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $total_sec = $data["total_sec"];

    $sql = "SELECT COUNT(*) AS total_ind FROM industry_index;";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $total_ind = $data["total_ind"];
    
    $sql = "SELECT COUNT(*) AS total_bid FROM basic_industry_index;";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $total_bid = $data["total_bid"];

    $sql = "SELECT COUNT(*) AS total_admins FROM admins;";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $total_admins = $data["total_admins"];
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
    <title>Vitt - Admin Panel</title>
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
    <script>
         if (!window.location.pathname.endsWith('/') && !window.location.pathname.endsWith('.php')) {
            // Redirect to the same URL with a trailing slash
            window.location.href = window.location.pathname + '/' + window.location.search + window.location.hash;
         }
    </script>
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
  <body class="vertical light">
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
              <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title">Welcome, <?php echo $_SESSION['name'];?>!</h2>
                </div>
              </div>
              <br/>
              <div class="row">
                <div class="col">
                  <h2 class="mb-2 page-title">Admin Dashboard</h2>
                </div>
              </div>
              <br/>
              <div class="row">
                  <div class="col-md-3 mb-4">
                    <div class="card shadow">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <span class="h2 mb-4"><?php echo $total_company;?></span>
                            <p class="small text-muted mb-0">Total Company</p>
                            <span class="badge badge-pill badge-success"><span class="fe fe-16 fe-bar-chart-2 text-muted mb-0" style="color: black !important;"></span></span>
                          </div>
                          <div class="col-auto">
                            <span class="fe fe-32 fe-shopping-bag text-muted mb-0"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4">
                    <div class="card shadow">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <span class="h2 mb-0"><?php echo $total_mes;?></span>
                            <p class="small text-muted mb-0">Total M.E.S Industries</p>
                            <span class="badge badge-pill badge-warning"><span class="fe fe-16 fe-bar-chart-2 text-muted mb-0" style="color: black !important;"></span></span>
                          </div>
                          <div class="col-auto">
                            <span class="fe fe-32 fe-layers text-muted mb-0"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4">
                    <div class="card shadow">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <span class="h2 mb-0"><?php echo $total_sec;?></span>
                            <p class="small text-muted mb-0">Total Sectorial Industries</p>
                            <span class="badge badge-pill badge-success"><span class="fe fe-16 fe-bar-chart text-muted mb-0" style="color: black !important;"></span></span>
                          </div>
                          <div class="col-auto">
                            <span class="fe fe-32 fe-clipboard text-muted mb-0"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4">
                    <div class="card shadow">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <span class="h2 mb-0"><?php echo $total_ind;?></span>
                            <p class="small text-muted mb-0">Total Industries</p>
                            <span class="badge badge-pill badge-success"><span class="fe fe-16 fe-bar-chart text-muted mb-0" style="color: black !important;"></span></span>
                          </div>
                          <div class="col-auto">
                            <span class="fe fe-32 fe-clipboard text-muted mb-0"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4">
                    <div class="card shadow">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <span class="h2 mb-0"><?php echo $total_bid;?></span>
                            <p class="small text-muted mb-0">Total Basic Industries</p>
                            <span class="badge badge-pill badge-warning"><span class="fe fe-16 fe-bar-chart-2 text-muted mb-0" style="color: black !important;"></span></span>
                          </div>
                          <div class="col-auto">
                            <span class="fe fe-32 fe-layers text-muted mb-0"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4">
                    <div class="card shadow">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <span class="h2 mb-0"><?php echo $total_admins;?></span>
                            <p class="small text-muted mb-0">Admins</p>
                            <span class="badge badge-pill badge-warning"><span class="fe fe-16 fe-bar-chart text-muted mb-0" style="color: black !important;"></span></span>
                          </div>
                          <div class="col-auto">
                            <span class="fe fe-32 fe-users text-muted mb-0"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- end section -->
              
                <div class="row">
                  <div class="col-md-12">
                    <p class="mt-5 mb-3 text-muted">© <script>document.write(new Date().getFullYear());</script>, Developed & Managed by Vhiron Technologies.</p>
                  </div>
                </div> <!-- end section -->
              <br/>
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
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
    <script>
      var radialbarWidgetChart, radialbarWidgetOptions = {
        series: [0],
        chart: {
            height: 120,
            type: "radialBar"
        },
        theme: {
            mode: colors.chartTheme
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: "70%"
                },
                track: {
                    background: colors.borderColor
                },
                dataLabels: {
                    show: !0,
                    name: {
                        fontSize: "0.875rem",
                        fontWeight: 400,
                        offsetY: -10,
                        show: !1,
                        color: colors.mutedColor,
                        fontFamily: base.defaultFontFamily
                    },
                    value: {
                        formatter: function(e) {
                            return parseInt(e)
                        },
                        fontSize: "1.53125rem",
                        fontWeight: 700,
                        fontFamily: base.defaultFontFamily,
                        offsetY: 10,
                        show: !0,
                        color: colors.headingColor
                    },
                    total: {
                        show: !1,
                        fontSize: "0.875rem",
                        fontWeight: 400,
                        offsetY: -10,
                        label: "Percent",
                        color: colors.mutedColor,
                        fontFamily: base.defaultFontFamily
                    }
                }
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                shade: "light",
                type: "diagonal2",
                shadeIntensity: .2,
                gradientFromColors: [extend.primaryColorLighter],
                gradientToColors: [base.primaryColor],
                inverseColors: !0,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [20, 100]
            }
        },
        stroke: {
            lineCap: "round"
        }
    },
    radialbarWidget = document.querySelector("#radialbarWidget");
    radialbarWidget && (radialbarWidgetChart = new ApexCharts(radialbarWidget, radialbarWidgetOptions)).render(); 

    //
    var radialbarChart, radialbarOptions = {
        series: [0],
        chart: {
            height: 200,
            type: "radialBar"
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: "75%"
                },
                track: {
                    background: colors.borderColor
                },
                dataLabels: {
                    show: !0,
                    name: {
                        fontSize: "0.875rem",
                        fontWeight: 400,
                        offsetY: -10,
                        show: !0,
                        color: colors.mutedColor,
                        fontFamily: base.defaultFontFamily
                    },
                    value: {
                        formatter: function(e) {
                            return parseInt(e)
                        },
                        color: colors.headingColor,
                        fontSize: "1.53125rem",
                        fontWeight: 700,
                        fontFamily: base.defaultFontFamily,
                        offsetY: 5,
                        show: !0
                    },
                    total: {
                        show: !0,
                        fontSize: "0.875rem",
                        fontWeight: 400,
                        offsetY: -10,
                        label: "Percent",
                        color: colors.mutedColor,
                        fontFamily: base.defaultFontFamily
                    }
                }
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                shade: "light",
                type: "diagonal2",
                shadeIntensity: .2,
                gradientFromColors: [extend.primaryColorLighter],
                gradientToColors: [extend.primaryColorDark],
                inverseColors: !0,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [20, 100]
            }
        },
        stroke: {
            lineCap: "round"
        },
        labels: ["CPU"]
    },
    radialbar = document.querySelector("#radialbar");
    radialbar && (radialbarChart = new ApexCharts(radialbar, radialbarOptions)).render(); 
    </script>
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
    </script>
  </body>
</html>