<!-- koneksi -->
<?php
	$con = mysql_connect("localhost", "root", "") or die("Tidak dapat Connect ke Server MySQL");
	mysql_select_db("login") or die("database tidak ada");
?>


<!-- tambah-user.php -->
<form action="simpan-user.php" method="POST">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" placeholder="nama"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" placeholder="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" placeholder="password"></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" value="Simpan">
				<input type="button" value="Batal" onclick="self.history.back()"></td>
		</tr>
	</table>
</form>


<!-- simpan-user.php -->
<?php

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

include "konek.php";

$sql = "insert into user values('', '$name', '$username', '$password')";

$hasil = mysql_query($sql);

include "tampil-user.php";
?>

<!-- tampil-user.php-->
<html>
<head>
	<title>User</title>
</head>
<body class="tes">
<table class="login" align='center'>
<?php
	echo "
		<tr width='90'>
			<th>No</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Action</th>
		</tr>";

	include "konek.php";
	$query = "select * from user";
	$eksekusi = mysql_query($query) or die ("Perminataan gagal dilakukan");
	
	$i=1;
	while($hasil=mysql_fetch_array($eksekusi)){
		?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo "$hasil[name]";?></td>
				<td><?php echo "$hasil[username]";?></td>
				<td><?php echo "$hasil[password]";?></td>
				<td>
					<a href="tambah-user.php"><img src="add.png"></a>
					<a href="delete-user.php"><img src="delete.png"></a>
				</td>
			</tr>

		<?php
		$i++;
	}

	echo "</table>";
?>
	<br>
</body>
</html>


<style>
body{
	background-color:#2c3338;
}
.login{
	background-color:#3b4148;
	border-radius:10px;
	margin-top:120px ;
}
.login:th{
	background-color:#363b41;
}
</style>
