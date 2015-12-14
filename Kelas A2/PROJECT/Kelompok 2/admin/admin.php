<?php include('../include/header_admin.php');
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
            <h2>Menu Utama</h2>
            <p><center>
            Selamat Datang <?php echo $_SESSION['user']; ?></center>
            <p><strong>Silakan memilih menu yang terdapat di kiri layar anda. Terima Kasih  </strong></p>
            <img src="../images/satu.jpg" style="padding-left:50px"; />
            </p>
            </div>
        </div>
    <div id="footer">
    
        <div id="footer_kanan">
        	
        </div>
    </div>
</div>
<?php include('../include/footer_admin.php'); ?>