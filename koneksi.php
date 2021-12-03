<?php
    $connect = new mysqli("localhost", "root", "", "perpustakaan_db");

    if (!$connect) {
        echo "koneksi gagal..";
        exit();
    }
    ?>
