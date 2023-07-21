<?php

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $db         = "db_bmi";


        $connect = mysqli_connect($servername, $username, $password, $db);

        try {
            if (!$connect) {
                throw new Exception("Koneksi database gagal: " . mysqli_connect_error());
            } else {
                echo "Koneksi sukses!<br>";
        
                // Lakukan operasi lain dengan database di sini
            }
        } catch (Exception $e) {
            echo "Terjadi kesalahan: " . $e->getMessage();
        }
?>