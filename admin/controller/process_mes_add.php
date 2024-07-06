<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$name = $_POST["name"];
		$code = $_POST['code'];

		if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        	// Handle invalid CSRF token 
        	die("CSRF token validation failed.");
    	}

    	$sql = "INSERT INTO mes_index (name,code) VALUES ('$name','$code')";

    	if ($conn->query($sql) === TRUE) {
    		header("Location: ../mes_add.php?success=1");
		} else {
			//
			header("Location: ../mes_add.php?success=0");
		}
	}

?>