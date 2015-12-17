<?php 
session_start();
include '../../Koneksi/koneksi.php';


 mysqli_query($con,"update koleksi_buku SET judul = '$_POST[judul]',pengarang= '$_POST[pengarang]',penerbit= '$_POST[penerbit]', thn_terbit= '$_POST[tahunterbit]'
 	 where id_buku = '$_GET[id]' ");

 echo "Berhasil <a href='Artikel_tampil.php'>Kembali</a>";

 ?>