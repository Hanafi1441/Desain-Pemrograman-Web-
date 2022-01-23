<?php 
    $host = "localhost";//akses memakai localhost
    $user = "root";//nama user root
    $pass = "";// password kosong
    $dbname = "php_crud";// nama database "php_crud"

    $conn = new mysqli($host,$user,$pass,$dbname);
    // jika koneksi error maka akan muncul peringatan 'Koneksi Gagal'
    if($conn->connect_error){
        die('Koneksi Gagal : '. $conn->connect_error);

    }
    ?>
