<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        	// Handle invalid CSRF token 
        	die("CSRF token validation failed.");
    	}

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
	    	
	    	$fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);    
	    	$randomString = uniqid('', true);		
	    	$newFilename = $randomString . '.' . $fileExtension;
		   	$imagePath = $targetDirectory . $newFilename;
		   	move_uploaded_file($_FILES['image']['tmp_name'], '../.'.$imagePath);

		   	$sql = "INSERT INTO `scripts`(
		   	                              `script_code`, `company_name`, `ticker_symbol`, `segment`, 
		   	                              `ticker_size`, `ltp`, `prev_close`, `mcap`, `52_week_high`, 
		   	                              `52_week_low`, `imgpath`, `roe`, `div_yield`, `debttoequity`, 
		   	                              `issued_shares`, `book_value`, `face_value`, `eps`, 
		   	                              `ipe`, `pe_ratio`, `pb_ratio`, `fkbasicindustryid`) 
		   	                              
		   	                      VALUES (
		   	                              '$script_code','$company_name','$symbol','$segment',
		   	                              '$tick_size','$ltp','$prev_close','$mcap','$high',
		   	                              '$low','$imagePath','$roe','$d_yield','$debttoequity',
		   	                              '$oshares','$book_value','$face_value','$eps',
		   	                              '$ipe','$pe','$pb','$basic_industry'
		   	                              
		   	                              )";

    	   	if($conn->query($sql) === TRUE){
    	   		//
    	   		header("Location: ../company_edit.php?success=1");
    	   	}else{
    	   		//
    	   		header("Location: ../company_edit.php?success=0");
    	   	}
    	}else{
    	    $img_pth = "";
    	    
    	    $sql = "INSERT INTO `scripts`(
		   	                              `script_code`, `company_name`, `ticker_symbol`, `segment`, 
		   	                              `ticker_size`, `ltp`, `prev_close`, `mcap`, `52_week_high`, 
		   	                              `52_week_low`, `imgpath`, `roe`, `div_yield`, `debttoequity`, 
		   	                              `issued_shares`, `book_value`, `face_value`, `eps`, 
		   	                              `ipe`, `pe_ratio`, `pb_ratio`, `fkbasicindustryid`) 
		   	                              
		   	                      VALUES (
		   	                              '$script_code','$company_name','$symbol','$segment',
		   	                              '$tick_size','$ltp','$prev_close','$mcap','$high',
		   	                              '$low','$img_pth','$roe','$d_yield','$debttoequity',
		   	                              '$oshares','$book_value','$face_value','$eps',
		   	                              '$ipe','$pe','$pb','$basic_industry'
		   	                              
		   	                              )";

    	   	if($conn->query($sql) === TRUE){
    	   		//
    	   		header("Location: ../company_add.php?success=1");
    	   	}else{
    	   		//
    	   		header("Location: ../company_add.php?success=0");
    	   	}
    	    
    	}
	}

?>