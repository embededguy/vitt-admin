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
              <p class="lead text-muted">Helps, you edit you a company details.</p>
            <div class="row">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">EDIT PRODUCT DETAILS</strong>
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
                    <form id="uploadForm" action="./controller/process_add_product.php" method="POST">
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="customFilex">Upload Images: </label>
                          <div class="custom-file">
                            <input name="image[]" type="file" class="custom-file-input" id="customFilex" accept="image/*" multiple required>
                            <label class="custom-file-label" for="customFilex">Choose files</label>
                          </div>
                        </div>
                      </div>
                      <br/>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <h4 style="text-align:center;">Company Logo</h4>
                          <p style="text-align:center;" class="lead text-muted">More Image can be added by again clicking the Upload Button.<br/>Min Quality 200x200 (ONLY SQUARE IMAGES)</p>
                        </div>
                      </div>
                      <div class="gallery" id="imageGallery"></div>
                      <br/>
                      <br/>                   
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Company Name: </label>
                          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                          <input type="hidden" id="sdesc" name="sdesc" value="">
                          <input type="hidden" id="ldesc" name="ldesc" value="">               
                          <input value="<?= $product['company_name']?>" name="name" type="text" class="form-control" id="inputPassword4" placeholder="Name">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Ticker Symbol: </label>
                          <input value="<?= $product['ticker_symbol']?>" name="symbol" type="text" class="form-control" id="inputPassword4" placeholder="Ticker Symbol">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="parentCategory">Select Basic Industry: </label>
                          <select name="brand" class="form-control" name="basic_industry" id="parentCategory" required>
                            <option value="0" selected> -- Select Industry -- </option>
                              <?php
                                foreach ($category as $spec) {
                                  $id = $spec['id'];
                                  $name = $spec['name'];
                                  echo "<option value='$id'>$name</option>";
                                }
                              ?>
                          </select>
                        </div> <!-- form-group -->
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="custom-money">Shares Listed: </label>
                          <input value="<?= $product['issued_shares']?>" class="form-control" id="issuedShares" type="text" name="issued_shares" placeholder="No Of Shares Listed">
                        </div>      
                        <div class="form-group col-md-3">
                          <label for="sku">Latest Trading Price (LTP): </label>
                          <input value="<?= $product['ltp']?>" name="ltp" type="text" class="form-control" id="ltp" placeholder="LTP">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="sku">Market Cap (Cr.): </label>
                          <input name="sku" type="text" class="form-control" id="marketCap" placeholder="Market Cap" disabled>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="custom-money">52 Week High Price: </label>
                          <input value="<?= $product['52_week_high']?>" class="form-control" id="mrp" type="text" name="52weekhigh" placeholder="52 Week High">
                        </div>      
                        <div class="form-group col-md-3">
                          <label for="custom-money">52 Week Low Price: </label>
                          <input value="<?= $product['52_week_low']?>" class="form-control" id="price" type="text" name="52weeklow" placeholder="52 Week Low">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="custom-money">Previous Close: </label>
                          <input value="<?= $product['prev_close']?>" class="form-control" id="price" type="text" name="previous_close" placeholder="Previous Close">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="custom-money">ROE (Return On Equity): </label>
                          <input value="<?= $product['roe']?>" class="form-control input-money" id="price" type="text" name="roe" placeholder="ROE">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="custom-money">Debt to Equity: </label>
                          <input class="form-control" id="mrp" type="text" name="d2e" placeholder="No Of Shares Listed">
                        </div>      
                        <div class="form-group col-md-3">
                          <label for="custom-money">Dividend Yield (%): </label>
                          <input class="form-control" id="price" type="text" name="d_yield" placeholder="Dividend Yield">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="custom-money">Tick Size: </label>
                          <input class="form-control" id="price" type="text" name="tick_size" placeholder="Tick Size">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="custom-money">Book Value: </label>
                          <input class="form-control" id="price" type="text" name="tick_size" placeholder="Book Value">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="custom-money">Face Value: </label>
                          <input class="form-control" id="price" type="text" name="tick_size" placeholder="Face Value">
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

      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
    
    <script>
      let images = [];

      function previewImages() {
          const fileInput = document.getElementById('customFilex');
          const imageGallery = document.getElementById('imageGallery');

          if (fileInput.files && fileInput.files.length > 0) {
              for (let i = 0; i < fileInput.files.length; i++) {
                  const reader = new FileReader();
                  reader.onload = function(e) {
                      const imgContainer = document.createElement('div');
                      imgContainer.classList.add('image-item');
                      imgContainer.setAttribute('data-index', images.length); // Set index as the current length of images array

                      const img = document.createElement('img');
                      img.src = e.target.result;
                      img.style.width = "200px"
                      imgContainer.appendChild(img);
                      imageGallery.appendChild(imgContainer);

                      images.push(e.target.result);

                      const deleteBtn = document.createElement('button');
                      deleteBtn.innerHTML = 'Delete';
                      deleteBtn.type = 'button';
                      deleteBtn.className = 'btn btn-danger';                    
                      deleteBtn.addEventListener('click', function() {
                          deleteImage(imgContainer);
                      });
                      imgContainer.appendChild(deleteBtn);
                  }
                  reader.readAsDataURL(fileInput.files[i]);
              }
          }
      }

      function deleteImage(imgContainer) {
          const index = parseInt(imgContainer.getAttribute('data-index')); // Get index from custom attribute
          const imageGallery = document.getElementById('imageGallery');
          imageGallery.removeChild(imgContainer);
          images.splice(index, 1);
          refreshIndices(); // Refresh indices after deletion
      }

      // Function to refresh the data-index attributes after deletion
      function refreshIndices() {
          const imageItems = document.querySelectorAll('.image-item');
          imageItems.forEach((item, index) => {
              item.setAttribute('data-index', index);
          });
      }

      // Function to append image data URLs to the form before submission
      function appendImagesToForm(event) {
          const form = document.getElementById('uploadForm');
          images.forEach((imageData, index) => {
              const input = document.createElement('input');
              input.type = 'hidden';
              input.name = `images[${index}]`;
              input.value = imageData;
              form.appendChild(input);
          });
      }

      /////////
      // let images = [];

      // function previewImages() {
      //     const fileInput = document.getElementById('customFilex');
      //     const imageGallery = document.getElementById('imageGallery');

      //     if (fileInput.files && fileInput.files.length > 0) {
      //         for (let i = 0; i < fileInput.files.length; i++) {
      //             const reader = new FileReader();
      //             reader.onload = function(e) {
      //                 const imgContainer = document.createElement('div');
      //                 imgContainer.classList.add('image-item');
      //                 imgContainer.setAttribute('data-index', images.length); // Set index as the current length of images array

      //                 const img = document.createElement('img');
      //                 img.src = e.target.result;
      //                 img.style.width = "200px"
      //                 imgContainer.appendChild(img);
      //                 imageGallery.appendChild(imgContainer);

      //                 images.push(e.target.result);

      //                 const deleteBtn = document.createElement('button');
      //                 deleteBtn.innerHTML = 'Delete';
      //                 deleteBtn.className = 'btn btn-danger';
      //                 deleteBtn.addEventListener('click', function() {
      //                     deleteImage(imgContainer);
      //                 });
      //                 imgContainer.appendChild(deleteBtn);
      //             }
      //             reader.readAsDataURL(fileInput.files[i]);
      //         }
      //     }
      // }

      // function deleteImage(imgContainer) {
      //     const index = parseInt(imgContainer.getAttribute('data-index')); // Get index from custom attribute
      //     const imageGallery = document.getElementById('imageGallery');
      //     imageGallery.removeChild(imgContainer);
      //     images.splice(index, 1);
      //     refreshIndices(); // Refresh indices after deletion
      // }

      // // Function to refresh the data-index attributes after deletion
      // function refreshIndices() {
      //     const imageItems = document.querySelectorAll('.image-item');
      //     imageItems.forEach((item, index) => {
      //         item.setAttribute('data-index', index);
      //     });
      // }
      document.getElementById('uploadForm').addEventListener('submit', appendImagesToForm);
      document.getElementById('customFilex').addEventListener('change', previewImages);
      document.getElementById('issuedShares').addEventListener('input', calculateMarketCap);
      document.getElementById('ltp').addEventListener('input', calculateMarketCap);

      function calculateMarketCap() {
          const shares = parseFloat(document.getElementById('issuedShares').value.replace(/,/g, '')) || 0;
          const ltp = parseFloat(document.getElementById('ltp').value.replace(/,/g, '')) || 0;
          const marketCap = (shares * ltp).toFixed(2);

          document.getElementById('marketCap').value = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      }
      calculateMarketCap();
    </script>
  </body>
</html>