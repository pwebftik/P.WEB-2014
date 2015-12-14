<?php

if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "1")
   {   
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "2")
   {
       echo '<script language="javascript">alert("Tidak ada hak akses")</script>';
       return ke('logout.php');
   }
}
if (!isset($_SESSION['level']))
{
	header('location:login.php');
}
 ?>