<?php 
session_start();
include '../../Koneksi/koneksi.php';
 ?>

<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="..\Bootstrap & Css Petugas\jquery.min.js"></script>
    <script type="text/javascript" src="..\Bootstrap & Css Petugas\bootstrap.min.js"></script>
    <link href="..\Bootstrap & Css Petugas\font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="..\Bootstrap & Css Petugas\bootstrap.css"
    rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="..\..\Style Css all\style.css">
  </head>
  
  <body background="5.jpg">
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
                  <a href="..\Petugas.php">Back</a>
                </li>
                <li>
                  <a href="..\..\logout.php">Log Out</a>
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
              <a href="tambahpeminjaman.php" class="btn btn-primary btn-sm">Tambah</a>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th>ID Buku</th>
                    <th>ID Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Alamat Anggota</th>
                    <th>No Telepon</th>
                    <th>Kode Pinjam</th>
                    <th>Lama Pinjam</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th></th>
                    <th>
                      Action
                    </th>
                  </tr>
                  <?php 
                    $no=1;
                    $a = mysqli_query($con,"select * from anggota");
                    while($data = mysqli_fetch_array($a)){
                   ?>
                  <tr bgcolor="white">
                    <th><?php echo $data['id_buku'];?></th>
                    <th><?php echo $data['ID_Anggota'];?></th>
                    <th><?php echo $data['Nama_Anggota'];?></th>
                    <th><?php echo $data['Alamat_Anggota'];?></th>
                    <th><?php echo $data['no_telepon'];?></th>
                    <th><?php echo $data['kode_pinjam'];?></th>
                    <th><?php echo $data['lama_pinjam'];?></th>
                    <th><?php echo $data['tanggal_peminjaman'];?></th>
                    <th><?php echo $data['tanggal_pengembalian'];?></th>
                    <th></th>
                    <th>
                      <a class="btn btn-primary btn-sm" href="editpeminjaman.php?id=<?php echo $data['ID_Anggota']; ?>">Edit</a>
                      <a class="btn btn-danger btn-sm" href="hapuspeminjaman.php?id=<?php echo $data['ID_Anggota']; ?>">Delete</a>
                    </th>
                  </tr>
                  <?php 
                  $no++;
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