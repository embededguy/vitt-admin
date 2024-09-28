<?php
	include("./config/db.php");
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		if(isset($_GET['query'])){

			$query = $_GET['query'];
			$query = htmlspecialchars($query);
			$indices = array();

			if($query == 'Indian'){
				$sql = "SELECT * FROM global_indices WHERE country = 'India'";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()){
				    $indices[] = $row;
				}

				echo json_encode($indices);

			}elseif($query == 'Global'){
				$sql = "SELECT * FROM global_indices WHERE NOT country = 'India'";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()){
				    $indices[] = $row;
				}
				
				echo json_encode($indices);
			}else{
				echo "Invalid Request";
			}
		}
	}
		
?>