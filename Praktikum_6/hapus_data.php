<?php
        include "koneksi.php";//memanggil koneksi.php 
        include "create_message.php";//memanggil create_message untuk memunculkan notif
        // query hapus data 
        $sql = "DELETE from data where id=".$_GET['mahasiswa_id'];
        // jika hapus data berhasil
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            create_message('Hapus data berhasil','success','check');
            header("location:index.php");
            exit();
            // jika gagal
        } else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:index.php");
            exit();
        }
?>