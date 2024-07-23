<?php
	include('../config/db.php');


	header('Content-Type: application/json');

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	    // Get the raw POST data
	    $postData = file_get_contents("php://input");
	    $data = json_decode($postData, true);

	    // Check if data is in the expected format
	    if (isset($data['ticker']) && isset($data['price'])) {
	        $ticker = $data['ticker'];
	        $price = $data['price'];
	        $prev_close = $date['prev'];


	        $sql = "SELECT id FROM scripts WHERE ticker_symbol='$ticker'";
	        $result = $conn->query($sql);
	      	if ($result->num_rows > 0) {
	        	$script = $result->fetch_assoc();
	      	}
	      	$id = $script['id'];
	      	$sql = "UPDATE scripts SET prev_close='$price' WHERE id='$id'";
	      	$result = $conn->query($sql);

	        echo json_encode(['status' => 'success', 'price' => $price, 'ticker'=> $ticker]);
	    } else {
	        // Respond with an error message
	        echo json_encode(['status' => 'error', 'message' => 'Invalid data format.']);
	    }
	} else {
	    // Respond with an error message if the request method is not POST
	    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
	}
?>
