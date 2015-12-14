<?php include('../include/header_admin.php'); ?>

<script type="text/javascript">
    function confirmSubmit(){
        var msg;
        msg = ("Apakah Anda Ingin Menghapus Data?");
        var agree = confirm(msg);
        if (agree)
            return true;
        else
            return false;
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
            <h2>Detail Pembayaran</h2>
            <p>
                
                 <form name="cari_data" method="post">
           		 <input type="text" name="cari" />
            	 <input type="submit" name="submit" value="Cari Data" />
            	 </form>
                 <br>
            <table width="800" id="hor-minimalist-a">
              <thead>
              <tr>
                <th scope="col" width="29">No</th>
                <th scope="col" width="53">No.Polisi</th>
                <th scope="col" width="60">Nama</th>
                <th scope="col" width="80">Jenis Kendaraan</th>
                <th scope="col" width="80">Tanggal</th>
                <th scope="col" width="30">Denda(Bulan)</th>
                <th scope="col" width="80">Pajak</th>
                <th scope="col" width="80">Total</th>
              </tr>
          </thead>
          <tbody>
              <?php
              if (isset($_POST['submit'])){
                $keyword = $_POST['cari'];
                $sql = mysql_query("SELECT * FROM pembayaran WHERE nopol LIKE '%$keyword%' OR nama LIKE '%$keyword%'");
				
            }
            else{
                $sql = mysql_query("SELECT * FROM pembayaran order by nopol asc");
				
            }

              $no=1;
                    while ($data=mysql_fetch_array($sql)){
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['nopol'].'</td>';
                        echo '<td>'.$data['nama'].'</td>';
                        echo '<td>'.$data['jk'].'</td>';
                        echo '<td>'.$data['tgl'].'</td>';
						echo '<td>'.$data['hari'].'</td>';
						echo '<td>'.$data['pajak'].'</td>';
						echo '<td>'.$data['total'].'</td>';
						echo '</tr>';
                       $no++;
                       } 
              ?>
          </tbody>
            </table>
            </p>
            </div>
        </div>
    <div id="footer">
    	
        <div id="footer_kanan">
        </div>
    </div>
</div>
