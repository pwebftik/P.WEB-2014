<?php
include('../include/konfigurasi.php');
session_unset();
$_SESSION['username'] = '';
$_SESSION['nama'] = '';
session_destroy();
ke('../index.php');
?>