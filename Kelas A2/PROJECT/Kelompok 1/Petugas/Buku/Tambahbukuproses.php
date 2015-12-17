<?php 

include '../../Koneksi/koneksi.php';

mysqli_query($con,"INSERT INTO koleksi_buku SET  judul = '$_POST[judul]',pengarang= '$_POST[pengarang]',penerbit= '$_POST[penerbit]', thn_terbit= '$_POST[tahunterbit]'");
echo "Data telah tersimpan";
 ?>
 <a href="Artikel_tampil.php">Tampil artikel</a>