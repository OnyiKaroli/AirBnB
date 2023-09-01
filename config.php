<?php
    $server = mysqli_connect("localhost", "root", "") or die('Failed to connect');
    $db = mysqli_select_db($server, "aveden_db") or die('Failed to database connect');
?>