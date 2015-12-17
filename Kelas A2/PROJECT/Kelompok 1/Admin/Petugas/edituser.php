<?php 
session_start();
include '../../Koneksi/koneksi.php';


 mysqli_query($con,"update user SET nama_user = '$_POST[nama]',username= '$_POST[username]',password= '$_POST[password]'
 	where id_user = '$_GET[id]' ");

 echo "Berhasil <a href='artikel_tampil.php'>Kembali</a>";

 ?>