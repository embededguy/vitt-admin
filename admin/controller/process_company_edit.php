<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {

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
        

    	if($_FILES['image']['error'] === UPLOAD_ERR_OK){
	    	
	    	unlink('../.' . $product['imgpath']);
	  
	    	$fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);    
	    	$randomString = uniqid('', true);		
	    	$newFilename = $randomString . '.' . $fileExtension;
		   	$imagePath = $targetDirectory . $newFilename;
		   	move_uploaded_file($_FILES['image']['tmp_name'], '../.'.$imagePath);

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
	    				`imgpath`='$imagePath',
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
    	   		header("Location: ../company_edit.php?id=$id&success=0");
    	   	}
    	}else{
    	    $img_pth = $product['imgpath'];
    	    
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
	    				`imgpath`='$img_pth',
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
    	   		header("Location: ../company_edit.php?id=$id&success=0");
    	   	}
    	    
    	}
	}

?>