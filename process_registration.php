<?php
    require 'config/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $name = $_POST["name"];
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if (!$email) {
        die("Invalid email address.");
    }

    if ($password !== $cpassword) {
        die("Passwords do not match.");
    }
    
    // Check if the email already exists in the 'users' table
    $query = mysqli_query($server, "SELECT email FROM users WHERE email = '$email'") or die(mysqli_error($server));

    if (mysqli_num_rows($query) > 0) {
        // Redirect to login.php if email already exists
        header("Location: login");
        exit();
    }

    // Hash the password (You should use a more secure method in production)
    $hashed_password = md5($password); // This is NOT secure, use bcrypt or another secure hashing method

    // Insert user data into the 'users' table
    $sql = mysqli_query($server, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')") or die(mysqli_error($server));

    if (mysqli_query($sql)) {
        // Display a pop-up and redirect to login.php
        echo '<script>alert("Account Created"); window.location.href = "login";</script>';
        exit();
    } else {
        echo "Error: " . mysqli_error($server);
    }

    // Close the database connection
    mysqli_close($server);
} else {
    echo "Invalid request.";
}
?>
