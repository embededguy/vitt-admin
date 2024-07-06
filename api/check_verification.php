<?php
    require 'config/db.php';

    $token = $_GET['token'];
    $current_time = date('Y-m-d H:i:s');

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();            
            //
            if($user['email_verified'] == 0 ){
                echo json_encode(['status' => 'error', 'message' => 'Email not verified']);
            }else if ($user['email_verified'] == 1) {
                echo json_encode([ 'status' => 'success', 'message' => 'Email verified successfully']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No email found']);
        }
    } else {
        echo json_encode(['status' => 'error','message' => 'Failed to query database: ' . $conn->error]);
    }

    $conn->close();
?>