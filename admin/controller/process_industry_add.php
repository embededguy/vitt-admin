<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        	// Handle invalid CSRF token 
        	die("CSRF token validation failed.");
    	}
    	$code = $_POST['code'];
    	$name = $_POST['name'];

    	if($_POST['parentCategory'] == '0'){
    		$sql = "INSERT INTO industry_index (name,code) VALUES ('$name', '$code')";
    		if ($conn->query($sql) === TRUE) {
	    		header("Location: ../industry_add.php?success=1");
			} else {
				header("Location: ../industry_add.php?success=0");
			}
    	}else{
    		$parentid = $_POST['parentCategory'];
    		$sql = "INSERT INTO industry_index (name,code,fk_sector_id) VALUES ('$name', '$code','$parentid')";
    		if ($conn->query($sql) === TRUE) {
	    		header("Location: ../industry_add.php?success=1");	
			} else {
				header("Location: ../sector_add.php?success=0");
			}
    	}

	}

?>