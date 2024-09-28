<?php 
  include('config/db.php');
  if (!isset($_SESSION["user_logged_in"]) || $_SESSION["user_logged_in"] !== true) {
    // Redirect to the login page if not logged in
    $customPath = "/login.php";
    $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]".$customPath;
    header("Location: $actual_link");
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'csv_data' field exists
    if (isset($_POST['csv_data'])) {
        // Retrieve the CSV data
        $csvData = $_POST['csv_data'];
        $rows = explode("\n", $csvData);
        $parsedData = [];

        foreach ($rows as $row) {
            $columns = explode('|', $row);

            if (isset($columns[1]) && strpos($columns[1], '-EQ') !== false) {
                $parsedData[] = [
                    'code' => $columns[0],  // Assuming first column is company code
                    'symbol' => str_replace('-EQ', '', $columns[1]),  // Assuming second column is company symbol
                    'name' => $columns[2] ?? '' // Assuming third column is company name (optional)
                ];
            }
        }

        $insertCount = 0;
        echo var_dump($parsedData);
        foreach ($parsedData as $company) {
            $companyCode = mysqli_real_escape_string($conn, $company['code']);
            $companySymbol = mysqli_real_escape_string($conn, $company['symbol']);
            $companyName = mysqli_real_escape_string($conn, $company['name']);

            // Check if company symbol exists
            $checkQuery = "SELECT script_code FROM scripts WHERE ticker_symbol = '$companySymbol'";
            $result = mysqli_query($conn, $checkQuery);

            if ($result && mysqli_num_rows($result) > 0) {
                // If symbol exists, check if scriptcode is empty or filled
                $row = mysqli_fetch_assoc($result);
                if (empty($row['scriptcode']) || $row['scriptcode'] == "0") {
                    // Update scriptcode if empty
                    $updateQuery = "UPDATE scripts SET script_code = '$companyCode' WHERE ticker_symbol = '$companySymbol'";
                    if (mysqli_query($conn, $updateQuery)) {
                        $insertCount++;
                    }
                }
            } 
            else {
                // Insert a new company if the symbol doesn't exist
                $newName = ucwords($companyName);
                $insertQuery = "INSERT INTO scripts (company_name, ticker_symbol, script_code,ticker_size) VALUES ('$newName', '$companySymbol', '$companyCode','0.05')";
                if (mysqli_query($conn, $insertQuery)) {
                    $insertCount++;
                }
            }
        }

        // Redirect to the form with a success or error message
        // if ($insertCount > 0) {
        //     header("Location: ../add_company.php?success=1");
        // } else {
        //     header("Location: ../add_company.php?success=0");
        // }
    }
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
    <style>
      .image-item {
        margin: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 20px;
      }
      .image-item button{
        width: 100px;
      }
      .image-item img{

        border: 1px solid grey;
        border-radius: 10px;
      }
      .gallery{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 50px;

      }
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
              <h2 class="page-title">Company Mapper</h2>
              <p class="lead text-muted">Helps, you add a new companies in csv format.</p>
            <div class="row">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">ADD COMPANIES</strong>
                    </div>
                    <?php
                      if (isset($_GET['success']) && $_GET['success'] == 1) {
                        echo '<div class="alert alert-success" style="text-align:center" role="alert">
                                <strong>Success!</strong>Company added successfully.
                              </div>';
                      }elseif(isset($_GET['success']) && $_GET['success'] == 0){
                        echo '<div class="alert alert-danger" style="text-align:center" role="alert">
                                <strong>Error!</strong>
                              </div>';
                      }
                    ?>
                    <div class="card-body">
                    <form id="uploadForm" action="" method="POST">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea name="csv_data" id="s-data" class="form-control" style="height:150px" placeholder="Enter CSV Data Of Companies"></textarea>
                        </div>
                      </div>
                      
                      <br/>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <h5>Total Companies: <span id="t_comp"></span></h5>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary" onclick="dataParse(event)">Map</button>
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
    <script>
        function dataParse(event){
          // event.preventDefault();
          var data = document.getElementById("s-data").value;
          const rows = data.split('\n');
          const parsedData = rows.map(row => row.split('|'));
          const filteredData = parsedData.filter(row => row[1].includes('-EQ'));
          // document.getElementById("t_comp").innerHTML = filteredData.length;
        }
    </script>
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
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'DD-MM-YYYY'
        }
      });
      $('.input-money').mask("##,#0,000",
      {
        reverse: true
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
    </script>
  </body>
</html>