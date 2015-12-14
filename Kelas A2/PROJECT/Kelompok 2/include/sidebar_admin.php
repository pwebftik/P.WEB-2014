<ul>
    <?php
    if ($_SESSION['level'] == 1)
	{
    echo '<li><a href="bayar_tambah.php">Tambah Pembayaran</a></li>';
    echo '<li><a href="bayar_tampil.php">Lihat Data Pembayaran</a></li>';
    echo '<li><a href="manajemen_admin.php">Kelola Data</a></li>';
    }
    ?>
    <?php
    if ($_SESSION['level'] == 2)
	{
    echo '<li><a href="user_tampil.php">Lihat Data Pembayaran</a></li>';
    }
    ?>
    
    <li><a href="logout.php">Keluar</a></li>

</ul>