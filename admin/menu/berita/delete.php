<?php
include_once "../../assets/conn/koneksi.php";

$id = $_GET['id'];
$query="DELETE FROM tb_berita WHERE id=$id";
$hapus = mysqli_query($koneksi, $query);

if($hapus){
    echo "<script> alert('Data Berhasil dihapus')</script>";
    header("refresh:0,index.php");
}else{
    echo "<script> alert('Data Gagal dihapus')</script>";
    header("refresh:0,index.php");
}
?>