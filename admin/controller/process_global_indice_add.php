<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        	// Handle invalid CSRF token 
        	die("CSRF token validation failed.");
    	}
    	$symbol = $_POST['symbol'];
    	$name = $_POST['name'];
    	$country = $_POST['country'];

    	$targetDirectory = "./assets/indices/";

    	if($_FILES['image']['error'] === UPLOAD_ERR_OK){
	    	$fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);    
	    	$randomString = uniqid('', true);		
	    	$newFilename = $randomString . '.' . $fileExtension;
		   	$imagePath = $targetDirectory . $newFilename;
		   	move_uploaded_file($_FILES['image']['tmp_name'], '../.'.$imagePath);

		   	$sql = "INSERT INTO global_indices ( name, symbol, country, imagepath ) VALUES ('$name', '$symbol','$country', '$imagePath')";
		   	if($conn->query($sql) === TRUE){
		   		//
		   		header("Location: ../global_indice_add.php?success=1");
		   	}else{
		   		//
		   		header("Location: ../global_indice_add.php?success=0");
		   	}
    	}else{
    		$sql = "INSERT INTO global_indices ( name, symbol, country ) VALUES ('$name', '$symbol','$country')";
		   	if($conn->query($sql) === TRUE){
		   		//
		   		header("Location: ../global_indice_add.php?success=1");
		   	}else{
		   		//
		   		header("Location: ../global_indice_add.php?success=0");
		   	}		   		
	   	}
	}

?>