<?php
    $server = "localhost"; 
    $user = "root";
    $password = "";
    $nama_database = "vehicle_rental";

    $db = mysqli_connect($server, $user, $password, $nama_database);
    
    if (!$db) {
        die("Gagal terhubung dengan database: " . mysqli_connection_error());
    }
    ?>