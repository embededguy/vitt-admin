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
					$searchQuery = $_GET['search'];
		    		$searchQuery = $conn->real_escape_string($searchQuery);

		    		$sql = "SELECT * FROM scripts WHERE company_name LIKE '%$searchQuery%' OR ticker_symbol LIKE '%$searchQuery%'";
				    $result = $conn->query($sql);

				    $companies = [];
				    if ($result->num_rows > 0) {
				        // Output data of each row
				        while ($row = $result->fetch_assoc()) {
				            $companies[] = [ "name" => $row['company_name'] ,"symbol" => $row['ticker_symbol'],"script_code" => $row['script_code']];
				        }
				    }
				    // Return the result as JSON
				    header('Content-Type: application/json');
				    echo json_encode($companies);
				}else{
					//
					header('Content-Type: application/json');
		    		echo json_encode($user_data);
				}
			}else{
				echo json_encode($user_data);
			}

		}else{
			echo "Invalid Token";

		}
	}
?>