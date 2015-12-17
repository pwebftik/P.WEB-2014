<?php 
session_start();
include '../../Koneksi/koneksi.php';

$id = $_GET['id'];

$a = mysqli_query($con," select *from user where id_user='$id' ");
$data = mysqli_fetch_array($a);

mysqli_query($con,"delete from user where id_user='$id' ");
echo "Data telah terhapus";


 ?>
 <a href="artikel_tampil.php">Kembali</a>