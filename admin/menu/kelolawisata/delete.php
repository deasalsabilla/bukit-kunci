<?php
include_once "../../assets/conn/koneksi.php";

$id = $_GET['id'];
$query="DELETE FROM tb_wisata WHERE id=$id";
$hapus = mysqli_query($koneksi, $query);

if($hapus){
    echo "<script> alert('Data Berhasil Di Hapus')</script>";
    header("refresh:0,index.php");
}else{
    echo "<script> alert('Data Tidak Berhasil Di Hapus')</script>";
    header("refresh:0,index.php");
}
?>