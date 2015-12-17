<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="Bootstrap & Css Login Form\jquery.min.js"></script>
    <script type="text/javascript" src="Bootstrap & Css Login Form\bootstrap.min.js"></script>
    <link href="Bootstrap & Css Login Form\font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="Bootstrap & Css Login Form\bootstrap.css"
    rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="..\Style Css all\style.css">
  </head>

   <div class="navbar navbar-default navbar-static-top" id="headerlogin">
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
  
  <body background="7.jpg">
  <br>
  <br>
  <br>
  <br>
  <br>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form class="form-horizontal" role="form" method="POST" action="ceklogin.php">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label" id="color">Username</label>
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label" id="color">Password</label>
                </div>
                <div class="col-sm-5">
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-5">
                  <button type="submit" class="btn btn-default">Sign in</button>
                </div>
                <br>
                <br>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-5">
                 <a href="../Awal/Awal.php" class="btn btn-default">Back </a>
                </div>
              </div>
            </form>
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
          </div>
        </div>
      </div>
    </div>
  </body>

</html>