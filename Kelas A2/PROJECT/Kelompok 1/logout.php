<?php 
session_start();
include 'Koneksi/koneksi.php';
session_destroy();

echo "Anda telah Log out !!!";

 ?>
<meta http-equiv='refresh' content='1; url=Awal/Awal.php'>";