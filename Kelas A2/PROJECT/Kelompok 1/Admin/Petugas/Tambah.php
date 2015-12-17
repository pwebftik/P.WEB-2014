<?php 
session_start();
include '../../Koneksi/koneksi.php';
 ?>

<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="..\Bootstrap &amp; Css Admin\jquery.min.js"></script>
    <script type="text/javascript" src="..\Bootstrap &amp; Css Admin\bootstrap.min.js"></script>
    <link href="..\Bootstrap &amp; Css Admin\font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="..\Bootstrap &amp; Css Admin\bootstrap.css" rel="stylesheet"
    type="text/css">
     <link rel="stylesheet" type="text/css" href="..\..\Style Css all\style.css">
  </head>
  
  <body background="1.jpg">
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
                  <a href="artikel_tampil.php">Back</a>
                </li>
                <li>
                  <a href="../../logout.php">Log Out</a>
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
            <form role="form" method="POST" action="tambahproses.php">
            <div class="form-group">
                <label class="control-label" id="tambahcolor">Nama User</label>
                <input class="form-control" placeholder="Nama User" type="text" name="nama">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Username</label>
                <input class="form-control" placeholder="Username" name="username" 
                type="text">
              </div>
              <div class="form-group">
                <label class="control-label" id="tambahcolor">Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
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