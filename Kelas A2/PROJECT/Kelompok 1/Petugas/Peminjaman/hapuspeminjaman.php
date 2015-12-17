<?php 
session_start();
include '../../Koneksi/koneksi.php';

$id = $_GET['id'];

$a = mysqli_query($con," select *from anggota where ID_Anggota'$id' ");


mysqli_query($con,"delete from anggota where ID_Anggota='$id' ");
echo "Data telah terhapus";


 ?>
 <a href="Peminjaman.php">Kembali</a>