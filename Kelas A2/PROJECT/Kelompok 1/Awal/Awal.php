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
    <div class="navbar navbar-default navbar-static-top" id="headerawal">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pustakālaya<span></span></a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="#">About Us</a>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search" action="Pencarian.php" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" name="kata">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
          </form>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a href="../Login Form/Login Form.php" class="btn btn-lg btn-primary">Log in</a>
          </div>
          <div class="col-md-8">
            <div id="carousel-example" data-interval="false" class="carousel slide"
            data-ride="carousel">
              <div class="carousel-inner">
                <div class="item">
                  <img src="../Admin/Petugas/8.jpg">
                  <div class="carousel-caption">
                    <h2>Pustakālaya</h2>
                  </div>
                </div>
                <div class="item">
                  <img src="../Admin/Petugas/10.jpg">
                  <div class="carousel-caption">
                    <h2>Pustakālaya</h2>
                  </div>
                </div>
                <div class="item active">
                  <img src="../Admin/Petugas/045422000_1421214556-imrs.jpg">
                  <div class="carousel-caption">
                    <h2>Pustakālaya</h2>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
              <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
            </div>
          </div
        </div>
      </div>
    </div>
  </body>

</html>