<?php

    include '../config/conn.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $property = $_POST['property'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $price = $_POST['price'];

    $query = mysqli_query($server, "INSERT INTO `bookings`(`id`,`property_id`, `client_id`, `property_name`, `init_date`, `end_date`, `status`) 
        VALUES ('$id','$property', '$email','$title','$date1','$date2', 'Pending')") or die(mysqli_error($server));

header("location:all_booking");
?>