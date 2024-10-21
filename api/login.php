<?php 
	include('./config/db.php');
	require 'vendor/autoload.php';
	include("./config/utils.php");
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$data     = json_decode(file_get_contents("php://input"), true);
		$email    = htmlspecialchars($data['email']);
		$password = htmlspecialchars($data['password']);

		$sql = "SELECT * FROM users WHERE email = '$email'";
	    $result = $conn->query($sql);

		if ($result && $result->num_rows > 0) {
			
	        $user = $result->fetch_assoc();
	        
	        if (password_verify($password, $user['password'])) {
	        	echo json_encode([ 
	        		'status' => 'success', 
	        		'message' => 'Login Success',
	        		'jwt' => generate_jwt($user["id"], $email),
	        		'refresh_token' => $user["refresh_token"]
	        	]);
	        } else {
	        	echo json_encode(['status' => 'Error', 'message' => 'Wrong Password']);
	        }
	    } else{
	        echo json_encode(['status' => 'Error', 'message' => 'Invalid Email']);
	    }    
	}else{
		echo "Invalid Method";
	}

?>