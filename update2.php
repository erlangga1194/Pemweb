<?php

//include koneksi database
include('Koneksi.php');

//get data dari form    
$id    = $_POST['ID'];
$nama  = $_POST['Nama'];
$username = $_POST['Username'];
$password   = $_POST['Password'];
$level   = $_POST ['Level'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET Nama =  '$nama', Username = '$username', Password = '$password',  Level = '$level' WHERE ID = '$id' ";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>