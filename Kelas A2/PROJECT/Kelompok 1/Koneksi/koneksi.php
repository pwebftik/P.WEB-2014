<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "perpustakaan";

$con = mysqli_connect($host, $user, $pass,$db)
	   or die("Tidak dapat konek ke server MySQL");
?>