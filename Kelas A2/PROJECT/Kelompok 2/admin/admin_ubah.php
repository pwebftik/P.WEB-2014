<?php 
include('../include/header_admin.php'); 

include('../include/batas.php');
if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $level = $_POST['level'];
    if ($user == '' or $pass == '' or $level == ''){
        echo '<script language="javascript">alert("Data Masih Ada Yang Kosong!")</script>';
        }
    else {
        $sql = mysql_query("UPDATE login SET id='$id',user='$user', pass=md5('$pass'), level='$level' WHERE id='$id'");
        echo '<script language="javascript">alert("Data Berhasil Di Ubah")</script>';
        ke ('manajemen_admin.php');
    }
}
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM login WHERE id = $id");
$data = mysql_fetch_array($sql);

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
            <h2>Ubah Data Admin</h2>
            <p>
            </p>
            <form id="form1" name="form1" method="post" action="">
              <table width="200" border="0">
                <tr>
                  <td>ID Admin</td>
                  <td>:</td>
                  <td><label for="id"><?php echo$data['id']?></label></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td><label for="user"></label>
                  <input type="text" name="user" id="user" value="<?php echo $data['user'] ?>"/></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td>:</td>
                  <td><label for="pass"></label>
                  <input type="password" name="pass" id="pass" value="<?php echo $data['pass'] ?>"/></td>
                </tr>
                <tr>
                  <td>Level</td>
                  <td>:</td>
                  <td><label for="level"></label>
                  <input type="text" name="level" id="level" value="<?php echo $data['level'] ?>"/></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="hidden" name="id" id="id" value="<?php echo $data['id'] ?>"/></td>
                  <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
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