<?php 

include '../../Koneksi/koneksi.php';

mysqli_query($con,"INSERT INTO user SET nama_user = '$_POST[nama]',username= '$_POST[username]',password= '$_POST[password]'
 ");
echo "Data telah tersimpan";
 ?>
 <a href="artikel_tampil.php">Tampil artikel</a>