<?php 
	include('../config/db.php');
	if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $email = $_POST["email"];
        $password = $_POST["password"];

        if (empty($email) || empty($password)) {
            header("Location: ../login.php?success=0");
            echo "Email and password are required.";
            exit;
        }

        try {
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $email = $conn->real_escape_string($email);
            $sql = "SELECT id, name, password, role_id,imagepath,allowed_urls FROM admins WHERE email = '$email'";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['imgpath'] = $user['imagepath'];
                    $_SESSION['is_superadmin'] = $user['role_id'] == 1 ? 1 : 0;
                    $_SESSION['user_logged_in'] = true;
                    $_SESSION['allowed_urls'] = $user['allowed_urls'];
                    // Redirect to the dashboard or user-specific page
                    header("Location: ../index.php");
                    exit;
                } else {
                    echo "Invalid password.";
                    exit;
                }
            } else{
                // User does not exist
                echo "Invalid email.";
                exit;
            }
        } catch (Exception $e) {
            // Handle other exceptions, redirect back to the login form with an error message, etc.
            echo "Error: " . $e->getMessage();
            exit;
        }
    } 
    else {
        // Redirect to the login form if accessed directly without a form submission
        header("Location: login.php");
        exit;
    }

?>