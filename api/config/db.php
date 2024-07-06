<?php 
    ob_start();

    if(!isset($_SESSION)) {
        session_start();
    }
    $hostname = "localhost";
    // Needs to be changed when uploading to hostinger
    $dbname = "Vitt";
    // 
    $username = "user";
    $password = "password";
    //
    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.")
?>