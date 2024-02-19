<?php

// Start session to access session variables
session_start();

// Check if user is authenticated
if(isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    // User is authenticated, redirect to jobics.html
    header("Location: jobics.html");
    exit;
} else {
    // User is not authenticated, redirect to login page
    header("Location: login.html");
    exit;
}

?>
