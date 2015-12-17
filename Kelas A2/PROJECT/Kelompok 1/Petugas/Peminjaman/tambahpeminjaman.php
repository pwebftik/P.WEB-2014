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
              <a class="btn btn-info dropdown-toggle" data-toggle="dropdown"> Pilihan</a>
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
            <form role="form" method="POST" action="tambahpeminjamanproses.php">
            <div class="form-group">
                <label class="control-label" id="tambahcolor">ID Buku</label>
                <input class="form-control" placeholder="ID Buku" type="text" name="idbuku">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">ID Anggota</label>
                <input class="form-control" placeholder="ID Anggota" type="text" name="idanggota" 
                type="text">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Nama Anggota</label>
                <input class="form-control" placeholder="Nama Anggota" type="text" name="namaanggota">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Alamat Anggota</label>
                <input class="form-control" placeholder="Alamat Anggota" type="text" name="alamatanggota">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Kode Pinjam</label>
                <input class="form-control" placeholder="Kode Pinjam" type="text" name="kodepinjam">
              </div>
               <div class="form-group">
                <label class="control-label" id="tambahcolor">No Telepon</label>
                <input class="form-control" placeholder="No Telepon" type="text" name="notelepon">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Lama Pinjam</label>
                <input class="form-control" placeholder="Lama Pinjam" type="text" name="lamapinjam">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Tanggak Peminjaman</label>
                <input class="form-control" placeholder="Tanggal Peminjaman" type="text" name="tanggalpeminjaman">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Tanggal Pengembalian</label>
                <input class="form-control" placeholder="Tanggal Pengembalian" type="text" name="tanggalpengembalian">
              </div>
              <button type="submit" class="btn btn-default">Tambah</button>
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