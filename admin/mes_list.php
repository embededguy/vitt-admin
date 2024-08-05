<?php
  include('config/db.php');
  
  if (!isset($_SESSION["user_logged_in"]) || $_SESSION["user_logged_in"] !== true) {
      // Redirect to the login page if not logged in
      $customPath = "/login.php";
      $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]".$customPath;
      header("Location: $actual_link");
  }else{
    $sql = "SELECT * FROM mes_index";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
      // Fetch ALL USERS
      $spec = [];
      while ($row = $result->fetch_assoc()) {
        $spec[] = $row;
      }
    } else {
      $spec = [];
    }

    $conn->close();
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
    <title>Vitt - All Macro Economic Sectors</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
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
  <body class="vertical  light">
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
              <h2 class="mb-2 page-title">All Macro Economic Sectors</h2>
              <p class="card-text">Helps, you view all Macro Economic Sectors + Activate / Deactivate + Edit</p>
              <div class="row my-4">

                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">
                      <?php if($_SESSION['is_superadmin']):?>
                        <button class="btn btn-success mb-2" style="color: white; margin-bottom: 10px;" onclick="exportToExcel()">Export to Excel</button>
                      <?php endif;?>
                      <br/>
                      <br/>
                      <!-- table -->
                      <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Created At</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($spec as $user) : ?>
                            <tr>
                              <td><?php echo $user['id']; ?></td>
                              <td><?php echo $user['createdAt']; ?></td>
                              <td><?php echo $user['code']; ?></td>
                              <td><?php echo $user['name']; ?></td>
                              <td>
                                <?php if($user['status'] == '1'):?>
                                  <button class="btn btn-sm btn-success" href="">Active</button>
                                <?php else:?>
                                  <button class="btn btn-sm btn-danger" href="">Deactive</button>
                                <?php endif;?>
                              </td>
                              <td>
                                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="./mes_edit.php?id=<?php echo $user['id'];?>">Edit</a>
                                  <?php if($user['status'] == '1'):?>
                                    <a class="dropdown-item" href="./mes_deactivate.php?id=<?php echo $user['id'];?>">Deactivate</a>
                                  <?php else:?>
                                    <a class="dropdown-item" href="./mes_activate.php?id=<?php echo $user['id'];?>">Activate</a>
                                  <?php endif;?>
                                </div>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> <!-- simple table -->
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
    <script src='js/jquery.dataTables.min.js'></script>
    <script src='js/dataTables.bootstrap4.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>    
    <script>
      function exportToExcel() {
          // Fetch table data
          var table = document.getElementById('dataTable-1');
          var rows = table.querySelectorAll('tr');

          // Prepare data array
          var data = [];

          // Exclude columns you don't want to export
          var excludedColumns = ['Action'];

          rows.forEach(function(row) {
              var rowData = [];
              row.querySelectorAll('td').forEach(function(cell, index) {
                  var columnHeader = table.querySelector('th:nth-child(' + (index + 1) + ')').innerText.trim();
                  if (!excludedColumns.includes(columnHeader)) {
                      var cellText = cell.innerText.trim();
                      rowData.push(cellText);
                  }
              });
              data.push(rowData);
          });

          // Create workbook and worksheet
          var wb = XLSX.utils.book_new();
          var ws = XLSX.utils.aoa_to_sheet(data);

          // Add column names as header
          var headerNames = Array.from(table.querySelectorAll('th')).map(th => th.innerText.trim());
          var filteredHeaderNames = headerNames.filter(header => !excludedColumns.includes(header));
          XLSX.utils.sheet_add_aoa(ws, [filteredHeaderNames], { origin: 'A1' });

          // Add worksheet to workbook
          XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');

          // Save workbook as Excel file
          XLSX.writeFile(wb, 'data.xlsx');
      }
      $(document).ready(function() {
          $('#dataTable-1').DataTable({
              autoWidth: true,
              lengthMenu: [
                  [16, 32, 64, -1],
                  [16, 32, 64, "All"]
              ],
          });

          if ($('.datetimes').length) {
              $('.datetimes').daterangepicker({
                  startDate: moment().startOf('hour'),
                  endDate: moment().startOf('hour').add(32, 'hour'),
                  locale: {
                      format: 'DD-MM-YYYY'
                  }
              });
          }
      });
    </script>
    <script src="js/apps.js"></script>
    
  </body>
</html>