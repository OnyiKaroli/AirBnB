<?php
	ob_start();
	
    //error_reporting(0);
	session_start();
    
    //session_destroy();

	$server = mysqli_connect("localhost", "root", "") or die('Failed to connect');
    $db = mysqli_select_db($server, "aveden_db") or die('Failed to database connect');
    
    //$servedby_id = $_SESSION['user']['id'];
    $servedby_name = $_SESSION['user']['name'];
    $servedby_email = $_SESSION['user']['email'];
    $servedby_role = $_SESSION['user']['role'];
    //$servedby_status = $_SESSION['user']['status'];

    //et current url
    $urlpage = $_SERVER['REQUEST_URI'];

//session_destroy();
?>