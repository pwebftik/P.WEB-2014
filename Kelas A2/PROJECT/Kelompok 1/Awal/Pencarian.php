<?php 
session_start();
include '../Koneksi/koneksi.php';
 ?>

<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="Bootstrap & Css Awal\jquery.min.js"></script>
    <script type="text/javascript" src="Bootstrap & Css Awal\bootstrap.min.js"></script>
    <link href="Bootstrap & Css Awal\font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="Bootstrap & Css Awal\bootstrap.css"
    rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="..\Style Css all\style.css">
  </head>
  
  <body background="2.jpg">
    <div class="navbar navbar-default navbar-static-top" id="headeradmin">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Pustakālaya</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse"></div>
      </div>
    </div>
    <div class="section" draggable="true">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="btn-group btn-group-lg">
              <a class="btn btn-info dropdown-toggle" data-toggle="dropdown"> Pilihan</a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="Awal.php">Back</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8"></div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="section">
      <div class="col-md-6"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <a href="Tambahbuku.php" class="btn btn-primary btn-sm">Tambah</a>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                     <th>
                      Action
                    </th>
                  </tr>
                  <?php 
                    $no=1;
                    $artikel = mysqli_query($con,"select *from koleksi_buku where judul like '%$_POST[kata]%' order by judul desc ");
                    $jmldata = mysqli_num_rows($artikel);
 						if($jmldata > 0) {
 					echo "Hasil pencarian dari <b>$_POST[kata]</b>";
  					  while($data = mysqli_fetch_array($artikel)){
					?>

                  <tr bgcolor="white">
                    <th><?php echo $no; ?></th>
                    <th><?php echo $data['judul'];?></th>
                    <th><?php echo $data['pengarang'];?></th>
                    <th><?php echo $data['penerbit'];?></th>
                    <th><?php echo $data['thn_terbit'];?></th>
                    <th>
                      <a class="btn btn-primary btn-sm" href="pinjem.php?id=<?php echo $data['id_buku']; ?>">Pinjam</a>
                    </th>
                  </tr>
                  <?php 
                  $no++;
                  }
              }
                   ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
