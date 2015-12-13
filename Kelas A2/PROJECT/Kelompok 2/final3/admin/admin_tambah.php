<?php 
include('../include/header_admin.php'); 
if(isset($_POST['submit'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
$level = $_POST['level'];
if ($user == '' or $pass == '' or $level == ''){
	echo '<script language="javascript">alert("Data Masih Ada Yang Kosong!")</script>';
	ke ('manajemen_admin.php');
}
	else{
	$sql = mysql_query	("INSERT INTO login (id, user, pass, level) VALUES ('','$user', md5('$pass'), '$level')");
	echo '<script language="javascript">alert("Data Berhasil Di Tambah")</script>';
	ke ('manajemen_admin.php');
	}
}
?>
<div id="kotak_luar">
	<img src="../images/head.png"  width="1100" height="250" />	
		<div id="konten">
        	<div id="konten_kiri">
            	<div id="menu">
                	<h2>Menu</h2>
                   <?php include('../include/sidebar_admin.php'); ?>
                </div>
            </div>
            <div id="konten_kanan">
            <h2>Tambah Admin</h2>
            <p>
            </p>
            <form name="form1" method="post" action="">
              <table width="200" border="0">
             
                <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td><label for="username"></label>
                  <input type="text" name="user" id="user"></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td>:</td>
                  <td><label for="password"></label>
                  <input type="password" name="pass" id="pass"></td>
                </tr>
                <tr>
                  <td>Level</td>
                  <td>:</td>
                  <td><label for="level"></label>
                  <select name="level">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  </select> 
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="submit" id="submit" value="Submit"></td>
                </tr>
              </table>
            </form>
            <p></p>
            </div>
        </div>
    <div id="footer">
        <div id="footer_kanan">
        	<h2>Dibuat Oleh</h2>
        </div>
    </div>
</div>
<?php include('../include/footer_admin.php'); ?>