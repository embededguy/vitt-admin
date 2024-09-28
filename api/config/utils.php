<?php
	include("db.php");

	use Firebase\JWT\JWT;
	use Firebase\JWT\Key;
	use Firebase\JWT\ExpiredException;
	//
	$secret_key = "6bd0b999b1ef0e72118acb9e783a7594f885f36ca1f260c9524c81cb33111ba4";
	// Generate JWT Function
	function generate_jwt($uid, $email, $exp_time = 3600) {
	    global $secret_key;

	    $issuedAt = time();
	    $expirationTime = $issuedAt + $exp_time; // JWT valid for X seconds
	    $payload = [
	        'iss' => 'piickr api by vittapp.in',
	        'iat' => $issuedAt,
	        'exp' => $expirationTime,
	        'uid' => $uid,
	        'email' => $email
	    ];

	    return JWT::encode($payload, $secret_key, 'HS256');
	}
	// Refresh Token 
	function generate_refresh_token() {
    	return bin2hex(random_bytes(64)); // Generate a random string for the refresh token
	}
	// Refresh Access Token Using Refresh Token 
	function refresh_access_token($refresh_token) {
	    global $conn, $secret_key;

	    // Check if the refresh token exists in the database
	    $result = $conn->query("SELECT * FROM users WHERE refresh_token='$refresh_token'");

	    if ($result->num_rows == 1) {
	        // If valid, generate a new access token
	        $user = $result->fetch_assoc();
	        $new_access_token = generate_jwt($user['id'], $user['email'], 3600); // New 1-hour JWT
	        return [
	            'status' => 'success',
	            'access_token' => $new_access_token
	        ];
	    } else {
	        // Invalid refresh token
	        return [
	            'status' => 'error',
	            'message' => 'Invalid refresh token'
	        ];
	    }
	}



	function validate_jwt($jwt) {
	    global $secret_key;

	    try {
	        // Decode the JWT, this will throw an exception if the token is expired
	        $decoded = JWT::decode($jwt, new Key($secret_key, 'HS256'));
	        return (array) $decoded; // Token is valid, return decoded data
	    } catch (ExpiredException $e) {
	        // Catch expired token exception
	       	http_response_code(401);
	        return [
	            'status' => 'error',
	            'message' => 'Token expired' // This message will be sent to the Flutter app
	        ];
	    } catch (Exception $e) {
	        // Other errors (invalid token, etc.)
	       	http_response_code(403);
	        return [
	            'status' => 'error',
	            'message' => 'Invalid token'
	        ];
	    }
	}

?>