<?php
include ('../include/konfigurasi.php');
include('../include/batas.php');
if ($_GET['id']){
	$id = $_GET['id'];
	$sql = mysql_query("DELETE FROM pembayaran WHERE id = '$id'");

	echo '<script language="javascript">alert("Data Sudah Di Hapus")</script>';
	ke('bayar_tampil.php');
}
?>