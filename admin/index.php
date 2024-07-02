<?php
  include('config/db.php');
  include('config/auth.php');

  if (!isset($_SESSION["user_logged_in"]) || $_SESSION["user_logged_in"] !== true) {
      // Redirect to the login page if not logged in
      $customPath = "/admin/login.php";
      $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]".$customPath;
      header("Location: $actual_link");
  }else{
    $sql = "SELECT COUNT(*) AS total_categories FROM categories;";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $total_cat = $data["total_categories"];

    $sql = "SELECT COUNT(*) AS total_spec FROM specifications;";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $total_spec = $data["total_spec"];
    
    $sql = "SELECT COUNT(*) AS total_product FROM product;";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $total_product = $data["total_product"];

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
    <link rel="icon" href="./assets/images/drawing.svg">
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
            <?php if($_SESSION['is_superadmin'] ):?> 
              <div class="row">
                <div class="col">
                  <h2 class="mb-2 page-title">Revenue Board</h2>
                </div>
              </div>
              <br/>
              <div class="row items-align-baseline">
                <div class="col-md-12 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body mb-n3">
                      <div class="row items-align-baseline h-100">
                        <div class="col-md-6 my-3">
                          <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">Company's Profit</strong></p>
                          <h3>₹ 0/-</h3>
                          <p class="text-muted">Company's Profit <br/> * Since Last Year</p>
                        </div>
                        <div class="col-md-6 my-4 text-center">
                          <div lass="chart-box mx-4">
                            <div id="radialbarWidget"></div>
                          </div>
                        </div>
                        <div class="col-md-6 border-top py-3">
                          <p class="mb-1"><strong class="text-muted">Cost</strong></p>
                          <h4 class="mb-0">0</h4>
                          <p class="small text-muted mb-0"><span>0% Last week</span></p>
                        </div> <!-- .col -->
                        <div class="col-md-6 border-top py-3">
                          <p class="mb-1"><strong class="text-muted">Revenue</strong></p>
                          <h4 class="mb-0">0</h4>
                          <p class="small text-muted mb-0"><span>-0% Last week</span></p>
                        </div> <!-- .col -->
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-12 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="chart-widget mb-2">
                        <div id="radialbar"></div>
                      </div>
                      <div class="row items-align-center">
                        <div class="col-4 text-center">
                          <p class="text-muted mb-1">Cost</p>
                          <h6 class="mb-1">₹ 0</h6>
                          <p class="text-muted mb-0">+0%</p>
                        </div>
                        <div class="col-4 text-center">
                          <p class="text-muted mb-1">Revenue</p>
                          <h6 class="mb-1">₹ 0</h6>
                          <p class="text-muted mb-0">+0%</p>
                        </div>
                        <div class="col-4 text-center">
                          <p class="text-muted mb-1">Earning</p>
                          <h6 class="mb-1">₹ 0</h6>
                          <p class="text-muted mb-0">+0%</p>
                        </div>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-12 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="d-flex mt-3 mb-4">
                        <div class="flex-fill pt-2">
                          <p class="mb-0 text-muted">Total</p>
                          <h4 class="mb-0">0</h4>
                          <span class="small text-muted">+0%</span>
                        </div>
                        <div class="flex-fill chart-box mt-n2">
                          <div id="barChartWidget"></div>
                        </div>
                      </div> <!-- .d-flex -->
                      <div class="row border-top">
                        <div class="col-md-6 pt-4">
                          <h6 class="mb-0">0 <span class="small text-muted">+0%</span></h6>
                          <p class="mb-0 text-muted">Cost</p>
                        </div>
                        <div class="col-md-6 pt-4">
                          <h6 class="mb-0">0 <span class="small text-muted">-0%</span></h6>
                          <p class="mb-0 text-muted">Revenue</p>
                        </div>
                      </div> <!-- .row -->
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col-md -->
              </div> <!-- .row -->
            <?php endif;?>

              <br/>
            <?php if($_SESSION['is_superadmin'] ):?>
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
                            <span class="h2 mb-4"><?php echo $total_product;?></span>
                            <p class="small text-muted mb-0">Total Products</p>
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
                            <span class="h2 mb-0"><?php echo $total_cat;?></span>
                            <p class="small text-muted mb-0">Total Categories</p>
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
                            <span class="h2 mb-0"><?php echo $total_spec;?></span>
                            <p class="small text-muted mb-0">Total Specifications</p>
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
              <?php endif;?>
              <?php if(!$_SESSION['is_superadmin'] ):?>
              <div class="row">
                <div class="col">
                  <h2 class="mb-2 page-title">Dashboard</h2>
                </div>
              </div>
              <br/>
              <div class="row">
                  <div class="col-md-3 mb-4">
                    <div class="card shadow">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <span class="h2 mb-4"><?php echo $total_product;?></span>
                            <p class="small text-muted mb-0">Total Products</p>
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
                            <span class="h2 mb-0"><?php echo $total_cat;?></span>
                            <p class="small text-muted mb-0">Total Categories</p>
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
                            <span class="h2 mb-0"><?php echo $total_spec;?></span>
                            <p class="small text-muted mb-0">Total Specifications</p>
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
                            <span class="h2 mb-0"><?php echo $total_spec;?></span>
                            <p class="small text-muted mb-0">Total Brands</p>
                            <span class="badge badge-pill badge-warning"><span class="fe fe-16 fe-bar-chart-2 text-muted mb-0" style="color: black !important;"></span></span>
                          </div>
                          <div class="col-auto">
                            <span class="fe fe-32 fe-layers text-muted mb-0"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- end section -->
              <?php endif;?>
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