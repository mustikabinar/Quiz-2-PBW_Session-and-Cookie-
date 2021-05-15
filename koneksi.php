<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "quiz2";
    
    $db = mysqli_connect($server, $user, $password, $database);
    
    if (!$db) {
        die ("Gagal terhubung dengan database: ".mysqli_connect_error());
    }
?>