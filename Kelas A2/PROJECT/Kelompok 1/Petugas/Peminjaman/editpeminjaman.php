<?php 
session_start();
include '../../Koneksi/koneksi.php';

$a = mysqli_query($con,"select *from anggota where ID_Anggota= '$_GET[id]'");
$data = mysqli_fetch_array($a)
 ?>

<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="..\Bootstrap & Css Petugas\jquery.min.js"></script>
    <script type="text/javascript" src="..\Bootstrap & Css Petugas\bootstrap.min.js"></script>
    <link href="..\Bootstrap & Css Petugas\font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="..\Bootstrap & Css Petugas\bootstrap.css" rel="stylesheet"
    type="text/css">
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
              <a class="btn btn-info dropdown-toggle" data-toggle="dropdown">Pilihan</a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="Peminjaman.php">Back</a>
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
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <form role="form" method="POST" action="editpeminjamanproses.php?id=<?php echo $data['ID_Anggota']; ?>">
            <div class="form-group">
            <input type="hidden" value="<?php echo $data['ID_Anggota']; ?>">
                <label class="control-label" id="tambahcolor">ID Buku</label>
                <input class="form-control" name="idbuku" placeholder="ID Buku" 
                type="text" value="<?php echo $data['id_buku']; ?>">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">ID Anggota</label>
                <input class="form-control" name="idanggota" placeholder="ID Anggota"
                type="text" value="<?php echo $data['ID_Anggota']; ?>">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Nama Anggota</label>
                <input class="form-control" name="namaanggota" placeholder="Nama Anggota" 
                type="text" value="<?php echo $data['Nama_Anggota']; ?>">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Alamat Anggota</label>
                <input class="form-control" name="alamatanggota" placeholder="Alamat Anggota" 
                type="text" value="<?php echo $data['Alamat_Anggota']; ?>">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">No Telepon</label>
                <input class="form-control" name="notelepon" placeholder="No Telepon" 
                type="text" value="<?php echo $data['no_telepon']; ?>">
              </div>
               <div class="form-group">
                <label class="control-label" id="tambahcolor">Kode Pinjam</label>
                <input class="form-control" name="kodepinjam" placeholder="Kode Pinjam" 
                type="text" value="<?php echo $data['kode_pinjam']; ?>">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Lama Pinjam</label>
                <input class="form-control" name="lamapinjam" placeholder="Lama Pinjam" 
                type="text" value="<?php echo $data['lama_pinjam']; ?>">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Tanggal Peminjaman</label>
                <input class="form-control" name="tanggalpeminjaman" placeholder="Tanggal Peminjaman" 
                type="text" value="<?php echo $data['tanggal_peminjaman']; ?>">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Tanggal Pengembalian</label>
                <input class="form-control" name="tanggalpengembalian" placeholder="Tanggal Pengembalian" 
                type="text" value="<?php echo $data['tanggal_pengembalian']; ?>">
              </div>
              <button type="submit" class="btn btn-default">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12"></div>
        </div>
      </div>
    </div>
  </body>

</html>