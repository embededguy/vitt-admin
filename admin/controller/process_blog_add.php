<?php
    echo var_dump($_POST);

    $blog_title = $_POST['title'];
    $lowercase_title = strtolower($blog_title);
    $sanitized_title = preg_replace('/[^a-z0-9]+/', '-', $lowercase_title);
    $sanitized_title = trim($sanitized_title, '-');
    
    $filename = $sanitized_title . '.php';
    
    $desc = $_POST['content'];

    $directory = './blog/';
    
    // 6. Create the full file path
    $file_path = $directory . $filename;

    if (!file_exists($file_path)) {

        $file = fopen('../.' . $file_path, 'w');
        
        $default_content = "
          <!DOCTYPE html>
            <html lang='en'>
            <head>
              <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <title>$blog_title</title>
              <!-- icofont-css-link -->
              <link rel='stylesheet' href='../css/icofont.min.css'>
              <!-- Owl-Carosal-Style-link -->
              <link rel='stylesheet' href='../css/owl.carousel.min.css'>
              <!-- Bootstrap-Style-link -->
              <link rel='stylesheet' href='../css/bootstrap.min.css'>
              <!-- Aos-Style-link -->
              <link rel='stylesheet' href='../css/aos.css'>
              <!-- Coustome-Style-link -->
              <link rel='stylesheet' href='../css/style.css'>
              <!-- Responsive-Style-link -->
              <link rel='stylesheet' href='../css/responsive.css'>
              <!-- Favicon -->
              <link rel='shortcut icon' href='../images/favicon.png' type='image/x-icon'>
            </head>
            
            <body>
              <!-- Preloader -->
              <div id='preloader'>
                <div id='loader'></div>
              </div>
            
              <!-- Header Start -->
              <?php include('../components/header.php')?>
            
              <!-- Page-wrapper-Start -->
              <div class='page_wrapper'>
                <!-- Blog Detail Section Start -->
                <section class='blog_detail_section'>
                  <div class='container container-sm'>
                    $desc
                  </div>
                </section>
                <!-- Blog Detail Section End -->
                
                <!-- Footer-Section start -->
                <?php include('../components/footer.php');?>
                <!-- Footer-Section end -->
            
                <!-- go top button -->
                <div class='go_top' id='Gotop'>
                  <span><i class='icofont-arrow-up'></i></span>
                </div>
            
              </div>
              <!-- Page-wrapper-End -->
              <!-- Jquery-js-Link -->
              <script src='../js/jquery.js'></script>
              <!-- owl-js-Link -->
              <script src='../js/owl.carousel.min.js'></script>
              <!-- bootstrap-js-Link -->
              <script src='../js/bootstrap.min.js'></script>
              <!-- aos-js-Link -->
              <script src='../js/aos.js'></script>
              <!-- main-js-Link -->
              <script src='../js/main.js'></script>
            </body>
            </html>
        ";
        
        fwrite($file, $default_content);
        fclose($file);
    }

?>
