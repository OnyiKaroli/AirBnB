<?php
	ob_start();
	
    //error_reporting(0);
	session_start();
    
    //session_destroy();

	$server = mysqli_connect("localhost", "root", "") or die('Failed to connect');
    $db = mysqli_select_db($server, "aveden_db") or die('Failed to database connect');
    




    $user_session = $_SESSION['user']['session'];
    if ($user_session == '') {

        $_SESSION['user']=array();
        $user_session = $_SESSION['user']['session'] = time();
    }


    $user_name = $_SESSION['user']['name'];
    $user_role = $_SESSION['user']['role'];
    $user_email = $_SESSION['user']['email'];
    $user_phone = $_SESSION['user']['phone_no'];
    //$user_status = $_SESSION['user']['status'];

//session_destroy();
?>



