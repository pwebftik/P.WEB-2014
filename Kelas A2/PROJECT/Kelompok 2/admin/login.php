<?php
include('../include/konfigurasi.php');
if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$pass= $_POST['pass'];
		
	if($user != "" && $pass != ""){
		$sql = "SELECT * FROM login WHERE user='$user' AND pass =md5('$pass')";
		$query = mysql_query($sql) or die(mysql_error());
		$jumlah = mysql_num_rows($query);
		$row = mysql_fetch_array($query);
		
			if($jumlah != 0)
			{
			 $_SESSION['id'] = $row['id'];
			 $_SESSION['user'] = $row['user'];
			 $_SESSION['level'] = $row['level']; 
			ke('admin.php');
			}
			else
			{
				echo'<script language="javascript">alert("Username atau password Salah!");</script>';	
			}	
			}
				else
				{
				echo'<script language="javascript">alert("Username atau Password Ada Yang Masih Kosong");</script>';	
			}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Administrator</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="pagar_login">
	<div id="login_atas">LOGIN</div>
    <form name="form1" action="" method="post">
    <table border="0" width="300" cellspacing="0" align="center">
    <tr>
    		<td>Username</td>
            <td>:</td>
            <td><input name="user" value="" type="text" /></td>
    </tr>
    <tr>
    		<td>Password</td>
            <td>:</td>
            <td><input name="pass" value="" type="password" /></td>
    </tr>
    <tr>
    		<td colspan="2">&nbsp;</td>
            
            <td><input type="submit" name="submit" value="Login" /></td>
    </tr>
    </table>
    </form>
    <div id="login_bawah"> SISTEM PEMBAYARAN PAJAK</div>
</div>
</body>
</html>