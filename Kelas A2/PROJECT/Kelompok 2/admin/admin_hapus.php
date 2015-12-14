<?php
include('../include/konfigurasi.php');
include('../include/batas.php');
if ($_GET['id']){
	$id = $_GET['id'];
	$sql = mysql_query("DELETE FROM login WHERE id = '$id' ");

	echo '<script language="javascript">alert("Data Berhasil Di Hapus")</script>';
	ke('manajemen_admin.php');
}
?>