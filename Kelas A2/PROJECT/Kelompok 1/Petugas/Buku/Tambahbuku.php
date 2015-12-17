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
                  <a href="Artikel_tampil.php">Back</a>
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
            <form role="form" method="POST" action="Tambahbukuproses.php">
            <div class="form-group">
                <label class="control-label" id="tambahcolor">Judul</label>
                <input class="form-control" placeholder="Judul" type="text" name="judul">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Pengarang</label>
                <input class="form-control" placeholder="Pengarang" type="text" name="pengarang" 
                type="text">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Penerbit</label>
                <input class="form-control" placeholder="Penerbit" type="text" name="penerbit">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Tahun Terbit</label>
                <input class="form-control" placeholder="Tahun Terbit" type="text" name="tahunterbit">
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