<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		echo var_dump($_POST);
		if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        	// Handle invalid CSRF token 
        	die("CSRF token validation failed.");
    	}

    	// ID 
    	$id = htmlspecialchars($_POST['id']);
    	// Company Name 
    	$company_name = htmlspecialchars($_POST['name']);
    	// Symbol
    	$symbol = htmlspecialchars($_POST['symbol']);
    	// Script Code
    	$script_code = htmlspecialchars($_POST['script_code']);
    	// Basic Industry
    	$basic_industry = htmlspecialchars($_POST['basic_industry']);
    	// Outstanding shares
    	$oshares = htmlspecialchars($_POST['issued_shares']);
 		// Latest Trading Price
    	$ltp = htmlspecialchars($_POST['ltp']);
    	// Market Cap
    	$mcap = htmlspecialchars($_POST['mcap']);
    	// 1 Year High
    	$high = htmlspecialchars($_POST['52weekhigh']);
    	// 1 Year Low
    	$low = htmlspecialchars($_POST['52weeklow']);
    	// Previous Close
    	$prev_close = htmlspecialchars($_POST['previous_close']);
    	// Return On Equity
    	$roe = htmlspecialchars($_POST['roe']);
    	// Debt To Equity 
    	$debttoequity = htmlspecialchars($_POST['debttoequity']);
    	// Dividend Yield
    	$d_yield = htmlspecialchars($_POST['d_yield']);
    	// Tick Size
    	$tick_size = htmlspecialchars($_POST['tick_size']);
    	// Book Value
    	$book_value = htmlspecialchars($_POST['book_value']);
    	// Face Value
    	$face_value = htmlspecialchars($_POST['face_value']);
    	// Industry P/E
    	$ipe = htmlspecialchars($_POST['ipe']);
    	// P/E 
    	$pe = htmlspecialchars($_POST['pe']);
    	// Earning Per Share
    	$eps = htmlspecialchars($_POST['eps']);
    	// P/B Ratio
    	$pb = htmlspecialchars($_POST['pb']);
    	// Segment 
    	$segment = htmlspecialchars($_POST['segment']);

    	$targetDirectory = "./assets/companies/";

    	$imageUrls = '';

    	$sql = "SELECT  * FROM scripts WHERE id = '$id'";
		$result = $conn->query($sql);
        if ($result->num_rows > 0) {
          $product = $result->fetch_assoc();
        }

    	$imageArray = explode(',', $product['imgpath']);

    	foreach ($imageArray as $index => $path) {        	
			unlink($path);          
        }

    	foreach ($_POST['images'] as $index => $base64Image) {
	        // Decode the base64 string
	        $base64Image = trim($base64Image);
	        if (preg_match('/^data:image\/(\w+);base64,/', $base64Image, $type)) {
	            $base64Image = substr($base64Image, strpos($base64Image, ',') + 1);
	            $type = strtolower($type[1]);
	            $base64Image = base64_decode($base64Image);

	            if ($base64Image === false) {
	                continue;
	            }
	            $directory =  './assets/companies/';
	            $fileName =   $directory . uniqid('', true) . '.' . $type;
	            $imageUrls .= $fileName . ',';

	            file_put_contents('../.'.$fileName, $base64Image);

	        } else {
	            continue;
	        }
	    }
	    $imageUrls = rtrim($imageUrls, ',');

	    $sql = "UPDATE `scripts` SET 
	    				`script_code`='$script_code',
	    				`company_name`='$company_name',
	    				`ticker_symbol`='$symbol',
	    				`segment`='$segment',
	    				`ticker_size`='$tick_size',
	    				`ltp`='$ltp',
	    				`prev_close`='$prev_close',
	    				`mcap`='$mcap',
	    				`52_week_high`='$high',
	    				`52_week_low`='$low',
	    				`imgpath`='$imageUrls',
	    				`roe`='$roe',
	    				`div_yield`='$d_yield',
	    				`debttoequity`='$debttoequity',
	    				`issued_shares`='$oshares',
	    				`book_value`='$book_value',
	    				`face_value`='$face_value',
	    				`eps`='$eps',
	    				`ipe`='$ipe',
	    				`pe_ratio`='$pe',
	    				`pb_ratio`='$pb',
	    				`fkbasicindustryid`='$basic_industry'
	    			WHERE id = '$id'";

	   	if($conn->query($sql) === TRUE){
	   		//
	   		header("Location: ../company_edit.php?id=$id&success=1");
	   	}else{
	   		//
	   		header("Location: ../company_edit.php?success=0");
	   	}
    	
	}

?>