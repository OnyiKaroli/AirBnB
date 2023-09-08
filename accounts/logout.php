<?php
    include '../config/conn.php';

    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    //redirect
    header("location:../index");
?>