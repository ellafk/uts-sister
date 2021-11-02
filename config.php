<?php
    $server = "10.0.0.228";
    $user = "admin";
    $pass = "Admin123_";
    $dbname = "utsSister";

    $connect = mysqli_connect($server, $user, $pass, $dbname);
    if ($connect) {
    
    } else {
    die("Connection Failed: " .mysqli_connect_error());
    }
?>