<?php 
session_start();
include '../Koneksi/koneksi.php';
 ?>

<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="Bootstrap & Css Petugas\jquery.min.js"></script>
    <script type="text/javascript" src="Bootstrap & Css Petugas\bootstrap.min.js"></script>
    <link href="Bootstrap & Css Petugas\font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="Bootstrap & Css Petugas\bootstrap.css"
    rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="..\Style Css all\style.css">
  </head>
  
  <body background="5.jpg">
    <div class="navbar navbar-default navbar-static-top" id="headerpetugas" >
      <div class="container" >
        <div class="navbar-header" >
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
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="btn-group btn-group-lg">
              <a class="btn btn-info dropdown-toggle" data-toggle="dropdown"> Pilihan</span></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="Buku/Artikel_tampil.php">Buku</a>
                </li>
                <li>
                  <a href="Peminjaman/Peminjaman.php">Peminjaman</a>
                </li>
                 <li>
                  <a href="../logout.php">Log Out</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8"></div>
        </div>
      </div>
    </div>
  </body>

</html>