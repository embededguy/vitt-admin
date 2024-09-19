<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        	// Handle invalid CSRF token 
        	die("CSRF token validation failed.");
    	}
    	// 
    	$company_name = htmlspecialchars($_POST['name']);
    	//
    	$symbol = htmlspecialchars($_POST['symbol']);
    	// 
    	$basic_industry = htmlspecialchars($_POST['basic_industry']);
    	//
    	$oshares = htmlspecialchars($_POST['issued_shares']);
 		//
    	$ltp = htmlspecialchars($_POST['ltp']);
    	//
    	$high = htmlspecialchars($_POST['52weekhigh']);
    	//
    	$low = htmlspecialchars($_POST['52weeklow']);
    	// 
    	$prev_close = htmlspecialchars($_POST['previous_close']);
    	//
    	$roe = htmlspecialchars($_POST['roe']);
    	//
    	$debttoequity = htmlspecialchars($_POST['debttoequity']);
    	//
    	$d_yield = htmlspecialchars($_POST['d_yield']);
    	// 
    	$tick_size = htmlspecialchars($_POST['tick_size']);
    	//
    	$book_value = htmlspecialchars($_POST['book_value']);
    	//
    	$face_value = htmlspecialchars($_POST['face_value']);
    	// Industry P/E
    	$ipe = htmlspecialchars($_POST['ipe']);
    	// P/E 
    	$pe = htmlspecialchars($_POST['pe']);
    	// Earning Per Share
    	$eps = htmlspecialchars($_POST['eps']);

    	
	}

?>