<?php
	require 'config/db.php';
	require 'vendor/autoload.php';
	require 'config/utils.php'; 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	$data     = json_decode(file_get_contents("php://input"), true);
	$email    = htmlspecialchars($data['email']);

	function sendVerificationEmail($email, $token) {
	    $mail = new PHPMailer(true);
	    try {
	        // ###################### Server settings ######################
	        $mail->isSMTP();
	        $mail->Host       = 'smtp.hostinger.com'; // Set the SMTP server to send through
	        $mail->SMTPAuth   = true;
	        $mail->Username   = 'noreply@vittapp.in'; // SMTP username
	        $mail->Password   = 'Vitt@123@123'; // SMTP password
	        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	        $mail->Port       = 587;
	        // ###################### Recipients ######################
	        $mail->setFrom('noreply@vittapp.in', 'Vitt - Your Financial Partner!');
	        $mail->addAddress($email);

	        // ###################### Content ######################
	        $mail->isHTML(true);
	        $mail->Subject = 'Email Verification';
	        $mail->Body    = '<h1>Email Verification</h1>
	                          <p>Thank you for registering. Please click the link below to verify your email:</p>
	                          <a href="https://api.vittapp.in/verify.php?token=' . $token . '">Verify Email</a>';
	        $mail->send();
	        return true;
	    } catch (Exception $e) {
	    	echo var_dump($e);
	        return false;
	    }
	}
	$password = password_hash($data['password'], PASSWORD_BCRYPT);
	
	$token    = bin2hex(random_bytes(50));
	$expiry   = date('Y-m-d H:i:s', strtotime('+1 hour'));

	// ################# Check if the email already exists ######################
	$email_check_sql    = "SELECT * FROM users WHERE email = '$email'";
	$email_check_result = $conn->query($email_check_sql);

	if ($email_check_result->num_rows > 0) {
	    echo json_encode(['status' => 'error', 'message' => 'Email already exists']);
	    exit();
	}
	// ##########################################################################

	$refresh_token = generate_refresh_token();

	$sql = "INSERT INTO users (email, password, email_verification_token, email_verification_expires, refresh_token) VALUES ('$email', '$password', '$token', '$expiry','$refresh_token')";

	if ($conn->query($sql) && sendVerificationEmail($email, $token)) {
		// 
	    echo json_encode([
	    	'status' => 'success', 
	    	'message' => 'User registered successfully. Please verify your email.',
	    	'token' => $token,
	    	'refresh_token' => $refresh_token,
	    	'jwt' => generate_jwt($conn->insert_id, $email)
		]);
	
	} else {
	    echo json_encode(['status' => 'error', 'message' => 'Failed to register user']);
	}

	$conn->close();
?>