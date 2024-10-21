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
				if (isset($_GET['search'])) {
				    // Return the result as JSON
				    header('Content-Type: application/json');
				    echo json_encode($companies);
				}
				else{

					$uid = $user_data["uid"];
					$sql = "SELECT * FROM watchlist WHERE fkuser_id = '$uid'";
					$result = $conn->query($sql);
					$watchlist = [];
					if ($result->num_rows > 0) {
				        // Output data of each row
				        while ($row = $result->fetch_assoc()) {
				        	$watchlist[] = [ "name" => $row['name'] ,"id" => $row['id']];
				        }
				    }
					//
					header('Content-Type: application/json');
		    		echo json_encode($watchlist);
				}
			}else{
				echo json_encode($user_data);
			}

		}else{
			echo "Invalid Token";

		}
	}
?>