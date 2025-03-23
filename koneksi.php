<?php
    $host = "localhost";
    $username = "root";
    $password = "Mandega_956";
    $database = "uinma_hotel";
    $koneksi = mysqli_connect($host, $username, $password, $database);
    if($koneksi) {
        echo "    ";
    } else {
        echo "Server not Connected";
    }
?>