<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        	// Handle invalid CSRF token 
        	die("CSRF token validation failed.");
    	}
    	$desc = htmlspecialchars($_POST['description']);
    	$code = $_POST['code'];
    	$name = $_POST['name'];

    	if($_POST['parentCategory'] == '0'){
    		$sql = "INSERT INTO basic_industry_index (name,code,description) VALUES ('$name', '$code','$desc')";
    		if ($conn->query($sql) === TRUE) {
	    		header("Location: ../basic_industry_add.php?success=1");
			} else {
				header("Location: ../basic_industry_add.php?success=0");
			}
    	}else{
    		$parentid = $_POST['parentCategory'];
    		$sql = "INSERT INTO basic_industry_index (name, code, description, fk_industry_id) VALUES ('$name', '$code','$desc','$parentid')";
    		if ($conn->query($sql) === TRUE) {
	    		header("Location: ../basic_industry_add.php?success=1");	
			} else {
				header("Location: ../basic_industry_add.php?success=0");
			}	
    	}

	}

?>