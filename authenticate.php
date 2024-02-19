<?php

// Start session to access session variables
session_start();

// Check if both username and password are provided
if(isset($_POST['username']) && isset($_POST['password'])) {
    // Validate username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Credentials for authentication
    $valid_username = 'hgnt';
    $valid_password = 'Friday14$';

    // Check if the provided username and password match the valid credentials
    if($username === $valid_username && $password === $valid_password) {
        // Authentication successful, set session variable
        $_SESSION['authenticated'] = true;
        
        // Redirect to protected_page.php
        header("Location: protected_page.php");
        exit;
    } else {
        // Authentication failed
        echo "Invalid login. Please try different credentials.";
    }
} else {
    // Redirect back to the login page if username or password is missing
    header("Location: login.html");
    exit;
}

?>
