<?php
session_start();

// Check if username and password are set
if(isset($_POST['username']) && isset($_POST['password'])){
    // For demo purposes, let's assume valid credentials are "admin" and "password"
    $valid_username = 'admin';
    $valid_password = 'password';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password
    if($username === $valid_username && $password === $valid_password){
        // Credentials are valid, set session variables
        $_SESSION['username'] = $username;
        echo 'success';
    } else {
        // Invalid credentials
        echo 'error';
    }
} else {
    // Redirect to login page if accessed directly
    header('Location: index.html');
    exit();
}
?>
