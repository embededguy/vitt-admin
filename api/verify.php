<?php
    require 'config/db.php';

    $token = $_GET['token'];
    $current_time = date('Y-m-d H:i:s');

    $sql = "SELECT * FROM users WHERE email_verification_token = '$token' AND email_verification_expires > '$current_time'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $user = mysqli_fetch_assoc($result);
            $update_sql = "UPDATE users SET email_verified = 1, email_verification_token = NULL, email_verification_expires = NULL WHERE id = " . $user['id'];
            
            if ($conn->query($update_sql)) {
                echo json_encode([
                                    'status' => 'success', 
                                    'message' => 'Email verified successfully'
                                ]);
            } else {
                echo json_encode([
                                    'status' => 'error', 
                                    'message' => 'Failed to update user: ' . $conn->error
                                ]);
            }
        } else {
            echo json_encode([
                                'status' => 'error', 
                                'message' => 'Invalid or expired verification token'
                            ]);
        }
    } else {
        echo json_encode([
                            'status' => 'error', 
                            'message' => 'Failed to query database: ' . $conn->error
                        ]);
    }

    $conn->close();
?>