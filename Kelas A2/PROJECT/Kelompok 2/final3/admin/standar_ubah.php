<?php 
include('../include/header_admin.php'); 
if(isset($_POST['submit'])){
    $id = $_POST['id_pembayar'];
    $nama = $_POST['nama'];
    $nopol = $_POST['nopol'];
    $jk = $_POST['jk'];
	$tgl = $_POST['tgl'];
	$total = $_POST['total'];
    if ($id == '' or $nama == '' or $nopol == '' or $jk == '' or $tgl == '' or $total == ''){
        echo '<script language="javascript">alert("Data Masih Ada Yang Kosong")</script>';
    }
    else{
        $sql = mysql_query ("UPDATE pembayaran SET id_pembayar='$id', Kompetensi_kode='$kompetensi', SK_nama='$nama', SK_kelas='$kelas' WHERE SK_kode = '$kode'");

        echo '<script language="javascript">alert("Data Berhasil Di Ubah")</script>';
        ke ('standar_tampil.php');
    }
}
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM standar_kompetensi WHERE SK_kode = '$id'");
$data = mysql_fetch_array($sql);
?>
<div id="kotak_luar">
	<div id="header"><img src="../images/head.jpg"  width="1100" height="250" /></div>
		<div id="konten">
        	<div id="konten_kiri">
            	<div id="menu">
                	<h2>Menu</h2>
                   <?php include('../include/sidebar_admin.php'); ?>
                </div>
            </div>
            <div id="konten_kanan">
            <h2>Ubah Data Standar Kompetensi</h2>
            <p>
            </p>
            <form id="form1" name="form1" method="post" action="">
              <table width="400" border="0">
                <tr>
                  <td>SK Kode</td>
                  <td>:</td>
                  <td><label for="kode"><?php echo $data['SK_kode'] ?></label></td>
                </tr>
                <tr>
                  <td>Kode Kompetensi</td>
                  <td>:</td>
                  <td><label for="kompetensi"></label>
                    <select name="kompetensi" id="kompetensi">
                        <?php
                    $sql = mysql_query("SELECT * FROM kompetensi_keahlian 
                    ORDER BY Kompetensi_kode ASC");
                    while ($row = mysql_fetch_array($sql)) {
                        if ($data['Kompetensi_kode'] == $row['Kompetensi_kode']) {
                            $pilih = "selected";
                        }
                        else {
                            $pilih = "";    
                        }
                        echo '<option value="'.$row['Kompetensi_kode'].'" '.$pilih.'>
                        '.$row['Kompetensi_nama'].'</option>';
                            
                    }
                    ?>
                  </select></td>
                </tr>
                <tr>
                  <td>SK Nama</td>
                  <td>:</td>
                  <td><label for="nama"></label>
                  <input type="text" name="nama" id="nama" value="<?php echo $data['SK_nama'] ?>"/></td>
                </tr>
                <tr>
                  <td>SK Kelas</td>
                  <td>:</td>
                  <td><label for="kelas"></label>
                  <input type="text" name="kelas" id="kelas" value="<?php echo $data['SK_kelas'] ?>" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="hidden" name="kode" id="kode" value="<?php echo $data['SK_kode'] ?>"/></td>
                  <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
                </tr>
              </table>
            </form>
            <p></p>
            </div>
        </div>
    <div id="footer">
    	<div id="footer_kiri">
        	<h2>Link Terkait</h2>
        </div>
        <div id="footer_kanan">
        	<h2>Dibuat Oleh</h2>
        </div>
    </div>
</div>
<?php include('../include/footer_admin.php'); ?>