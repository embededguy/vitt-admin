<?php
	include("config/db.php");

	if($_SERVER["REQUEST_METHOD"] == "GET"){

		$query = "SELECT * FROM notification";
		$result = $conn->query($query);
		while($row = $result->fetch_assoc()){
		    $notification[] = $row;
		}
		echo json_encode($notification);
	}

?>