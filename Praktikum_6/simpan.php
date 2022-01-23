<?php
include "koneksi.php";// akses koneksi.php
// menyimpan data pada masing masing tabel
include "create_message.php";// akses create_message untuk menampilkan notif 
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$foto  = $_POST['foto'];

if(isset($_POST['mahasiswa_id'])) {
    $sql = "UPDATE data
     SET nama='$nama', kelas='$kelas', alamat='$alamat', foto='$foto'
     WHERE id=".$_POST['mahasiswa_id'];
    $edit = $conn->query($sql);
        if($edit) {
            $conn->close();
            create_message('Ubah data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error
            ,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }
        } else {

        // query sql untuk memasukan data dengan nilai yang diinputkan
        $sql = "INSERT into data (nama,kelas,alamat,foto) values ('$nama','$kelas','$alamat','$foto')";
        $add = $conn->query($sql);//koneksi ke sql

        //percabangan 
        if($add) {// jika berasil ditambahkan 
            $conn->close();
            create_message('Simpan data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();

        }else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']);
            $conn->close();
            exit();
        }
    }

    ?>