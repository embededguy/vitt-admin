<?php
	include("config/utils.php");
	require 'vendor/autoload.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$data     = json_decode(file_get_contents("php://input"), true);
		$refresh_token      = htmlspecialchars($data['refresh_token']);
		echo json_encode(refresh_access_token($refresh_token));
	}
	
?>