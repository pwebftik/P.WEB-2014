<?php
include "../include/konfigurasi.php";

header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=myCSV.csv");

$content = "NISN, Nama, Alamat, Tanggal Lahir, Nama Ayah, Nama Ibu, Pekerjaan Ayah, Pekerjaan Ibu, Alamar Orang Tua, Telepon\n";

$q = mysql_query("select * from siswa,wali_murid WHERE siswa.Siswa_NISN = Wali_murid.Siswa_NISN order by siswa.Siswa_nama asc");

while ($row = mysql_fetch_array($q)) {

	$content .= "\"".$row['Siswa_NISN']."\",";
	$content .= "\"".$row['Siswa_nama']."\",";
	$content .= "\"".$row['Siswa_alamat']."\",";
	$content .= "\"".$row['Siswa_tgl_lahir']."\",";
	$content .= "\"".$row['Wali_nama_ayah']."\",";
	$content .= "\"".$row['Wali_nama_ibu']."\",";
	$content .= "\"".$row['Wali_pekerjaan_ayah']."\",";
	$content .= "\"".$row['Wali_pekerjaan_ibu']."\",";
	$content .= "\"".$row['Wali_alamat']."\",";
	$content .= "\"".$row['Wali_telpon']."\"\n";
}

echo $content;

?>