<?php 
session_start();
include '../../Koneksi/koneksi.php';

$id = $_GET['id'];

$a = mysqli_query($con," select *from koleksi_buku where id_buku='$id' ");
$data = mysqli_fetch_array($a);

mysqli_query($con,"delete from koleksi_buku where id_buku='$id' ");
echo "Data telah terhapus";


 ?>
 <a href="Artikel_tampil.php">Kembali</a>