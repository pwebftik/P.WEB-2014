<?php 
include('../include/header_admin.php'); 
include('../include/batas.php');
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$nama = $_POST['nama'];
    $nopol = $_POST['nopol'];
    $jk = $_POST['prdId'];
    $tgl = $_POST['jtempo'];
	$hari = $_POST['hitung'];
	$pajak = $_POST['pajak'];
	$total = $_POST['total'];
    if ($nama == '' || $nopol == '' || $jk == '' || $tgl == '' || $hari == '' || $pajak == '' || $total == ''){
        echo '<script language="javascript">alert("Data Masih Ada Yang Kosong")</script>';
    }
    else{
        $sql = mysql_query("UPDATE pembayaran SET id='$id', nama='$nama', nopol='$nopol', jk='$jk', 
		tgl='$tgl', hari='$hari',pajak='$pajak', total='$total' WHERE id = '$id'");

        echo '<script language="javascript">alert("Data Berhasil Di Ubah")</script>';
        ke ('bayar_tampil.php');
    }
}
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM pembayaran WHERE id = '$id'");
$data = mysql_fetch_array($sql);
?>
<script type=text/javascript>
function hitungDenda() {
    var tjt = document.getElementsByName('jtempo')[0].value.split('-');
    var thn = tjt[0]; var bln = tjt[1]; var tgl = tjt[2];
    var t_jt = new Date(thn,bln-1,tgl,0,0,0,0);
    var t_by = new Date();
    t_by.setHours(0); t_by.setMinutes(0); t_by.setSeconds(0); t_by.setMilliseconds(0);
    var hari = hitungHari(t_jt,t_by);
    var denda = hari;
	if (denda == 0)
	{
		document.form1.hitung.value = (0);
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 0) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 1) & (denda <= 30))
	{
		document.form1.hitung.value = (1 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 1) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 31) & (denda <= 60))
	{
		document.form1.hitung.value = (2 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 2) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 61) & (denda <= 90))
	{
		document.form1.hitung.value = (3 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 3) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 91) & (denda <= 120))
	{
		document.form1.hitung.value = (4 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 4) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 121) & (denda <= 150))
	{
		document.form1.hitung.value = (5 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 5) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 151) & (denda <= 180))
	{
		document.form1.hitung.value = (6 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 6) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 181) & (denda <= 210))
	{
		document.form1.hitung.value = (7 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 7) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 211) & (denda <= 240))
	{
		document.form1.hitung.value = (8 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 8) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 241) & (denda <= 270))
	{
		document.form1.hitung.value = (9 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 9) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 271) & (denda <= 300))
	{
		document.form1.hitung.value = (10 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 10) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 301) & (denda <= 330))
	{
		document.form1.hitung.value = (11 + ' bulan' + ' / ' +denda + ' hari ');
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) *11) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	else if ((denda >= 331) & (denda <= 365))
	{
		document.form1.hitung.value = (12 + ' bulan' + ' / ' +denda + ' hari ');
		var a = document.form1.hitung.value;
		var pajak = document.form1.pajak.value;
		var hasil = ((((pajak * 25) / 100) * 12) / 12);
		document.form1.total.value = parseInt(hasil) + parseInt(pajak);
	}
	
}
function hitungHari(start,end) {
    if(start>=end) return 0;
    var satuhari=1000*60*60*24;
    var start_ms = start.getTime();
    var end_ms = end.getTime();
    var x_ms = end_ms - start_ms;
    return x_ms/satuhari;
}
</script>
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
            <h2>Ubah Data Pembayaran</h2>
            <p>
            </p>
            <form id="form1" name="form1" method="post" action="">
              <table width="400" border="0">
                <tr>
                  <td>ID Pembayaran</td>
                  <td>:</td>
                  <td><label for="id"><?php echo $data['id'] ?></label></td>
                </tr>
                <tr>
                  <td>No. Polisi</td>
                  <td>:</td>
                  <td><label for="nopol"></label>
                  <input type="text" name="nopol" id="nopol" value="<?php echo $data['nopol'] ?>" /></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><label for="nama"></label>
                  <input type="text" name="nama" id="nama" value="<?php echo $data['nama'] ?>"/></td>
                </tr>
                <tr>
                  <td>Jenis Kendaraan</td>
                  <td>:</td>
                  <td><label for="jk"></label>
                        <?php
               	 		$result = mysql_query("SELECT * FROM kendaraan");  
						$jsArray = "var prdName = new Array();\n";  
						echo '<select name="prdId" onchange="document.getElementById(\'pajak\').value = prdName[this.value]">';  
					  
						while ($row = mysql_fetch_array($result)) {  
   						echo '<option value="' . $row['jk'] . '">' . $row['jk'] . '</option>';  
   				 		$jsArray .= "prdName['" . $row['jk'] . "'] = '" . addslashes($row['jumlah_harga']) . "';\n";  
						}  
						echo '</select>';  
						?>
               </td>
                </tr>
                <tr>
                  	<td>Tanggal Jatuh Tempo</td>
                  	<td>:</td>
                  	<td><label for="tgl"></label>
                  	<input type="text" name="jtempo" onkeyup="hitungDenda()" value="<?php echo $data['tgl'] ?>"/></td>
                </tr>
                <tr>
                 	<td>Denda</td>
                 	<td>:</td>
                 	<td><input type="text" name="hitung" readonly onkeyup="hitungDenda()" value="<?php echo $data['hari'] ?>"></td>
                </tr>
                <tr>
            		<td>Pajak</td>
            		<td>:</td>
            		<td> <input type="text" name="pajak" id="pajak" readonly onKeyUp="hitungDenda()"/>
						<script type="text/javascript">  
						<?php echo $jsArray; ?>  
						</script> 
                </td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td>:</td>
                  <td><label for="total"></label>
                  <input type="text" name="total" id="total" readonly value="<?php echo $data['total'] ?>" /></td>
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
        </div>
    </div>
</div>
<?php include('../include/footer_admin.php'); ?>