<?php include('../include/header_admin.php'); 
include('../include/batas.php');?>
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
            <h2>Detail Administrator</h2>
            <p>
            <a href="admin_tambah.php"><input type="button" value="Tambah Data Admin" class="styled-button-3>"</a><br />
            <table width="200" id="hor-minimalist-a">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Admin</th>
                <th scope="col">Username</th>
                <th scope="col">Level</th>
                <th scope="col">Keterangan</th>
              </tr>
              </thead>
              <tbody>
              <?php
			  $no=1;
			  $sql=mysql_query("SELECT * FROM login order by id asc");
			  while ($data=mysql_fetch_array($sql)){
				  echo '<tr>';
				  echo '<td>'.$no.'</td>';
                  echo '<td>'.$data['id'].'</td>';
				  echo '<td>'.$data['user'].'</td>';
				  echo '<td>'.$data['level'].'</td>';
				  echo '<td><a href="admin_ubah.php?id='.$data['id'].'"><img src="../images/black_edit.gif" width="24" height="24"></img> | <a href="admin_hapus.php?id='.$data['id'].'" onclick="return confirmSubmit()"><img src="../images/black_delete.png"></img></a></td>';
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