<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "e_learning_app";
    
    $koneksi = mysqli_connect($host, $user, $password, $database);
    // cek koneksi
    if ($koneksi) {
        // echo "berhasil koneksi";
    } else {
        echo "gagal koneksi";
    }
?>