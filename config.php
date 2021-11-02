<?php
    $server = "168.138.24.140/";
    $user = "admin";
    $pass = "Admin123_";
    $dbname = "sister";

    $connect = mysqli_connect($server, $user, $pass, $dbname);
    if ($connect) {
    
    } else {
    die("Connection Failed: " .mysqli_connect_error());
    }
?>