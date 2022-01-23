<?php
include "koneksi.php";// akses koneksi.php
// menyimpan data pada masing masing tabel
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

// query sql untuk memasukan data dengan nilai yang diinputkan
$sql = "INSERT into data (nama,kelas,alamat) values ('$nama','$kelas','$alamat')";
$add = $conn->query($sql);//koneksi ke sql
//percabangan 
if($add) {// jika berasil ditambahkan 
    $conn->close();
    header("location:index.php");
    exit();

}else {//jika gagal
    echo "Error : ".$conn->error;
    $conn->close();
    exit();
}

?>