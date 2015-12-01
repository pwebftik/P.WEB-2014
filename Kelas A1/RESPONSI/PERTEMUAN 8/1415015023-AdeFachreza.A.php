<!koneksi.php>
<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="tlogin";

	$con = mysql_connect($host, $user, $pass)
			or die("Tidak dapat Connect ke Server MySQL");

	mysql_select_db($db)
		or die("database tidak ada");
?>

<!form-tambah-user.php>
<form action="proses-simpan-user.php" method="POST">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" value="Simpan">
				<input type="button" value="Batal" onclick="self.history.back()"></td>
		</tr>
	</table>
</form>

<!proses-simpan-user.php>
<?php
//Ambil Data Dari Form
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

//Koneksi ke Database
include "koneksi.php";

//SQL
$sql = "insert into user values('', '$name', '$username', '$password')";

//Eksekusi
$hasil = mysql_query($sql);

include "tampil-user.php";
?>

<!tampil-user.php>
<?php
	echo "<table class='table' border='1'>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
		</tr>";

	include "koneksi.php";
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
			</tr>

		<?php
		$i++;
	}

	echo "</table>";
?>
	<br>
	<a href="form-tambah-user.php">Tambah User</a>
