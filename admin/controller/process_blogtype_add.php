<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$name = $_POST["name"];

		if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        	// Handle invalid CSRF token 
        	die("CSRF token validation failed.");
    	}

    	$sql = "INSERT INTO blog_type ( name ) VALUES ( '$name' )";

    	if ($conn->query($sql) === TRUE) {
    		header("Location: ../blog_type_add.php?success=1");
		} else {
			//
			header("Location: ../blog_type_add.php?success=0");
		}
	}

?>