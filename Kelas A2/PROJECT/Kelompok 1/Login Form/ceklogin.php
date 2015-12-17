<?php 
	include "../Koneksi/koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$a = mysqli_query($con,"select *from user where username='$username' and password = '$password' ");
	$data = mysqli_fetch_array($a);
	$jumlah = mysqli_num_rows($a);

	if ($jumlah>0) {
		 $_SESSION['login'] = true;
		 $_SESSION['username'] = $data['username'];
		 $_SESSION['password'] = $data['password'];


		if($data['Level']=="admin") {
		echo "Anda Berhasil Log in";
		echo"<meta http-equiv='refresh' content='1; url=../Admin/Admin.php'>";
		?>
		<?php 
					}

		if($data['Level']=="petugas") {
		echo "Anda Berhasil Log in";
		echo"<meta http-equiv='refresh' content='1; url=../Petugas/Petugas.php'>";
		?>
		<?php
					}
				}
					else {
						echo "Username atau Password salah";
						echo"<meta http-equiv='refresh' content='1; url=../Awal/Awal.php'>";
						}

 ?>