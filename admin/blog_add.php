<!-- CHECKED & MARKED AS COMPLETED -- Loader Added -->
<?php
  include('config/db.php');
  include('config/auth.php');
  
  if (!isset($_SESSION["user_logged_in"]) || $_SESSION["user_logged_in"] !== true) {
      // Redirect to the login page if not logged in
      $customPath = "/login.php";
      $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]".$customPath;
      header("Location: $actual_link");
  }else{
    $sql = "SELECT * FROM blog_type WHERE status = 1";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
      // Fetch ALL USERS
      $type = [];
      while ($row = $result->fetch_assoc()) {
        $type[] = $row;
      }
    } else {
      $type = [];
    }
  }
  //
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
      }.ql-editor{
          min-height: 200px;
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
            <h2 class="page-title">Create New Blog</h2>
            <p class="lead text-muted">Helps, you add a new blog.</p>

              <div class="row">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">CREATE BLOG</strong>
                    </div>
                    <?php
                      if (isset($_GET['success']) && $_GET['success'] == 1) {
                        echo '<div class="alert alert-success" style="text-align:center" role="alert">
                                <strong>Success!</strong> Letter Type added successfully.
                              </div>';
                      }elseif(isset($_GET['success']) && $_GET['success'] == 0){
                        echo '<div class="alert alert-danger" style="text-align:center" role="alert">
                                <strong>Error !!</strong>
                              </div>';
                      }
                    ?>
                    <form action="./controller/process_blog_add.php" method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="custom-money">Blog Title: </label>
                              <input class="form-control" id="ttl" type="text" name="title" placeholder="Title">
                              <input type="hidden" name="content" id="ccx" value=""> 
                          </div> 
                          <div class="col-md-3">
                              <label for="blogtype">Select Blog Type</label>
                              <select class="form-control select2" name="blogtype" id="blogtype" required>
                                  <option value="XX" selected> -- Select Type -- </option>
                                  <?php
                                      foreach ($type as $spec) {
                                          $id = $spec['id'];
                                          $name = $spec['name'];
                                          echo "<option value='$id' >$name</option>";
                                      }
                                  ?>
                              </select>
                          </div>
                          <div class="col-md-3">
                          <label for="customFilex">Upload Images: </label>
                          <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="customFilex" accept="image/*">
                            <label class="custom-file-label" for="customFilex">Choose file</label>
                          </div>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-12">
                          <h4 style="text-align:center;">Blog Main Image</h4>
                          <p style="text-align:center;" class="lead text-muted">Min Quality 1000x664</p>
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
                        <div class="row mb-4">
                          <div class="col-md-12">
                            <div class="card shadow">
                              <div class="card-body">
                                <h5 class="card-title">Blog Editor</h5>
                                <p>Pages type scale includes a range of contrasting styles that support the needs of your product and its content.</p>
                                <!-- Create the editor container -->
                                <div id="editor" style="">

                                </div>
                              </div>
                            </div>
                          </div>
                        </div> <!-- end section -->
                        <div class="form-row">
                          <div class="col-md-12" >
                            <button type="submit" class="btn btn-primary mb-2">Submit</button><br/>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div> <!-- end section -->
              
              <div class="row">
                <div class="col-md-12">
                  <p class="mt-5 mb-3 text-muted">© <script>document.write(new Date().getFullYear());</script>, Developed & Managed by Vhiron Technologies.</p>
                </div>
              </div> <!-- end section -->
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
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });

      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'DD/MM/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
            [{
                'font': []
            }],
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{
                    'header': 1
                },
                {
                    'header': 2
                }
            ],
            [{
                    'list': 'ordered'
                },
                {
                    'list': 'bullet'
                }
            ],
            [{
                    'script': 'sub'
                },
                {
                    'script': 'super'
                }
            ],
            [{
                    'indent': '-1'
                },
                {
                    'indent': '+1'
                }
            ], // outdent/indent
            [{
                'direction': 'rtl'
            }], // text direction
            [{
                    'color': []
                },
                {
                    'background': []
                }
            ], // dropdown with defaults from theme
            [{
                'align': []
            }],
            ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });

        quill.on('text-change', function() {
            var quillData = quill.root.innerHTML;
            document.getElementById('ccx').value = quillData;
        });

      }

      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
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
    <script src="js/apps.js"></script>
  </body>
</html>