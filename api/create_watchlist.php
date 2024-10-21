<?php
	include("config/db.php");
	include("config/utils.php");
	require 'vendor/autoload.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$data     = json_decode(file_get_contents("php://input"), true);
		$jwt      = htmlspecialchars($data['jwt']);
		$user_data = validate_jwt($jwt);
		if($user_data){
			if($user_data["status"] != "error"){
				// 
				$uid = $user_data["uid"];
				$sql = "SELECT * FROM watchlist WHERE fkuser_id = '$uid'";
				$result = $conn->query($sql);
				
				//#######################################################################
				header('Content-Type: application/json');
	    		echo json_encode($watchlist);
				
			}else{
				echo json_encode($user_data);
			}
		}else{
			echo "Invalid Token";
		}
	}
?>