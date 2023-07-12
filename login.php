<?php
    session_start();
    
    // Check if user is already logged in
    if (isset($_SESSION['user_id'])) {
        header('Location: dashboard.php');
        exit();
    }
    
    // Check if login form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Here you can check from database as per your need 
        //This is only for remember me functionality
        // Verify login credentials (replace with your own authentication logic)
        if ($username == 'exampleuser' && $password == 'examplepassword') {
            $_SESSION['user_id'] = 123; // Set user ID in session
            
            // Redirect to dashboard
            header('Location: dashboard.php');
            exit();
        } else {
            // Display error message
            $error = 'Invalid username or password.';
            echo $error;
            die();
        }
    }
?>
