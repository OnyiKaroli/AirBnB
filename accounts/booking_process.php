<?php

    include '../config/conn.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $property = $_POST['property'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $price = $_POST['price'];

    $query = mysqli_query($server, "INSERT INTO `bookings`(`property_id`, `client_id`, `property_name`, `init_date`, `end_date`) 
        VALUES ('$id','$email', '$property','$date1','$date2','')") or die(mysqli_error($server));

    if (mysqli_query($server, $query)) {
    // Display a pop-up and redirect to login.php
    echo '<script>alert("Booking Done!"); window.location.href = "all_booking";</script>';
    exit();
} else {
    echo "Error: " . mysqli_error($server);
}
?>