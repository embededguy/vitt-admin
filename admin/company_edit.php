<?php 
  include('config/db.php');
  if (!isset($_SESSION["user_logged_in"]) || $_SESSION["user_logged_in"] !== true) {
    // Redirect to the login page if not logged in
    $customPath = "/login.php";
    $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]".$customPath;
    header("Location: $actual_link");
  
  }else{
    $id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : 0;
    if($id){
      $sql = "SELECT * FROM scripts WHERE id = '$id'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
      }

      $path = $product['imgpath'];
      $bid  = $product['fkbasicindustryid'];

      $sql = "SELECT * FROM basic_industry_index WHERE status = 1";
      $result = $conn->query($sql); 
      if ($result->num_rows > 0) {
        // Fetch ALL USERS 
        $category = [];
        while ($row = $result->fetch_assoc()) {
          $category[] = $row;
        }
      } else {
        $category = [];
      }
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
              <h2 class="page-title">Company Details Edit</h2>
              <p class="lead text-muted">Helps, you edit a company details.</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">ADD COMPANY DETAILS</strong>
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
                    <form id="uploadForm" action="./controller/process_company_edit.php" method="POST" enctype="multipart/form-data">
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="customFilex">Upload Images: </label>
                          <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="customFilex" accept="image/*">
                            <label class="custom-file-label" for="customFilex">Choose file</label>
                          </div>
                        </div>
                      </div>
                      <br/>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <h4 style="text-align:center;">Company Logo</h4>
                          <p style="text-align:center;" class="lead text-muted">Min Quality 200x200 (ONLY SQUARE IMAGES)</p>
                        </div>
                      </div>
                      <div id="imageSection" style="display:flex;justify-content: center;gap: 10px;">
                          <?php if(! empty($path)):?>
                            <?php if(empty($_SERVER['HTTPS'])):?>
                                <img src="<?php echo htmlspecialchars("../.".$path); ?>" alt="Image" width="200">
                            <?php else:?>
                                <img src="https://vittapp.in/<?php echo htmlspecialchars($path); ?>" alt="Image" width="200">
                            <?php endif;?>
                          <?php endif;?>
                      </div>
                      
                      <br/>
                      <br/>                   
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Company Name: </label>
                          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                          <input type="hidden" name="id" value="<?php echo $id;?>">
                          <input name="name" type="text" class="form-control" id="inputPassword4" placeholder="Name" value="<?= $product['company_name']?>" >
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputPassword4">Ticker Symbol: </label>
                          <input name="symbol" type="text" class="form-control" id="inputPassword4" placeholder="Ticker Symbol" value="<?= $product['ticker_symbol']?>">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputPassword4">Script Code: </label>
                          <input name="script_code" type="text" class="form-control" id="inputPassword4" placeholder="Code" value="<?= $product['script_code']?>">
                        </div>

                        <div class="form-group col-md-4">
                          <label for="parentCategory">Select Basic Industry: </label>
                          <select class="form-control" name="basic_industry" id="parentCategory" required>
                            <option value="0" selected> -- Select Industry -- </option>
                              <?php
                                foreach ($category as $spec) {
                                  $id = $spec['id'];
                                  $name = $spec['name'];
                                  $selected = ($id == $bid) ? "selected":"";  
                                  echo "<option value='$id' $selected>$name</option>";
                                }
                              ?>
                          </select>
                        </div> <!-- form-group -->
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="custom-money">Shares Listed (Cr.): </label>
                          <input class="form-control" id="issuedShares" type="text" name="issued_shares" placeholder="No Of Shares Listed" value="<?= $product['issued_shares']?>">
                        </div>      
                        <div class="form-group col-md-3">
                          <label for="sku">Latest Trading Price (LTP): </label>
                          <input name="ltp" type="text" class="form-control" id="ltp" placeholder="LTP" value="<?= $product['ltp']?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="sku">Market Cap (Cr.): </label>
                          <input name="mcap" type="text" class="form-control" id="marketCap" placeholder="Market Cap" value="<?= $product['mcap']?>" >
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="custom-money">52 Week High Price: </label>
                          <input class="form-control" type="text" name="52weekhigh" placeholder="52 Week High" value="<?= $product['52_week_high']?>">
                        </div>      
                        <div class="form-group col-md-3">
                          <label for="custom-money">52 Week Low Price: </label>
                          <input class="form-control" type="text" name="52weeklow" placeholder="52 Week Low" value="<?= $product['52_week_low']?>">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="custom-money">Previous Close: </label>
                          <input class="form-control" type="text" name="previous_close" placeholder="Previous Close" value="<?= $product['prev_close']?>">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="custom-money">ROE (Return On Equity): </label>
                          <input class="form-control" type="text" name="roe" placeholder="ROE" value="<?= $product['roe']?>">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="custom-money">Debt to Equity: </label>
                          <input class="form-control" type="text" name="debttoequity" placeholder="Depth to Equity"  value="<?= $product['debttoequity']?>" required>
                        </div>      
                        <div class="form-group col-md-3">
                          <label for="custom-money">Dividend Yield (%): </label>
                          <input class="form-control" type="text" name="d_yield" placeholder="Dividend Yield" value="<?= $product['div_yield']?>">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="custom-money">Tick Size: </label>
                          <input class="form-control" type="text" name="tick_size" placeholder="Tick Size" value="<?= $product['ticker_size']?>">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="custom-money">Book Value: </label>
                          <input class="form-control" type="text" name="book_value" placeholder="Book Value" value="<?= $product['book_value']?>">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="custom-money">Face Value: </label>
                          <input class="form-control" type="text" name="face_value" placeholder="Face Value" value="<?= $product['face_value']?>" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="custom-money">Industry P/E: </label>
                          <input class="form-control" type="text" name="ipe" placeholder="Industry P/E" value="<?= $product['ipe']?>" required>
                        </div>      
                        <div class="form-group col-md-3">
                          <label for="custom-money">P/E Ratio(TTM): </label>
                          <input class="form-control" type="text" name="pe" placeholder="P/E" value="<?= $product['pe_ratio']?>" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="custom-money">Earning Per Share: </label>
                          <input class="form-control" type="text" name="eps" placeholder="EPS" value="<?= $product['eps']?>" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="custom-money">P/B Ratio: </label>
                          <input class="form-control" type="text" name="pb" placeholder="P/B" value="<?= $product['pb_ratio']?>" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="custom-money">Segment: </label>
                          <input class="form-control" type="text" name="segment" placeholder="SEG" value="<?= $product['segment']?>" required>
                        </div>
                      </div>
                      <br/>
                      <button type="submit" class="btn btn-primary">Submit Query</button>
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
    
    <script>
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