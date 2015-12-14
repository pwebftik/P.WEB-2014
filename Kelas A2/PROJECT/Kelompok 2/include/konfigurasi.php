<?php
session_start();
$local = 'localhost';
$user = 'root';
$pass = '';
$db = 'pajak';

mysql_connect($local, $user, $pass);
mysql_select_db($db);

function ke($alamat)
{
	echo '<meta http-equiv="refresh" content="0;URL='.$alamat.'">';	
	}
	
function ceklogin(){
	if(!$_SESSION['user'])
	{
	echo '<script language="javascript">alert("Anda Belum Login")</script>';
	return ke('login.php');
	}
	else{
		true;
	}
}

?>