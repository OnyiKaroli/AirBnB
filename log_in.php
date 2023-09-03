<?php
// Start a session to store user data
require 'config/conn.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email exists in the database
    $query = mysqli_query($server, "SELECT * FROM users WHERE email = '$email'"or die(mysqli_error($server)));
    
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $dbPassword = $row['password'];
        $hashed = md5($dbPassword);

        // Verify the password
        if ($password == $hashed) {
            // Password is correct, log in the user and redirect to index.php
            //$_SESSION['user_email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            // Wrong password, display an error message
            echo "<script>alert('Wrong password!'); window.location.href = 'login.php';</script>";
        }
    } else {
        // Email not found, display an error message and redirect to register.php
        echo "<script>alert('Email does not exist!'); window.location.href = 'register.php';</script>";
    }

    mysqli_close($server);
}
?>