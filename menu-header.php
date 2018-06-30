<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Baharinesia</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts - Roboto-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  <!-- Bootstrap Select-->
  <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
  <!-- owl carousel-->
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon and apple touch icons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
  <!-- Tweaks for older IEs--><!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
  <?php
  // $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $active_link = substr("$_SERVER[REQUEST_URI]",14);
  // echo $active_link;

   ?>
  <div id="all">
    <!-- Navbar Start-->
    <header class="nav-holder make-sticky">
      <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/logo.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
          <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
          <div id="navigation" class="navbar-collapse collapse">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item <?=$active_link == 'index.php' ? 'active' : ''?>"><a href="index.php">Home <b class="caret"></b></a>
                <!-- <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="index.php" class="nav-link">Option 1: Default Page</a></li>
                  <li class="dropdown-item"><a href="index2.html" class="nav-link">Option 2: Application</a></li>
                  <li class="dropdown-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                  <li class="dropdown-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                  <li class="dropdown-item"><a href="index5.html" class="nav-link">Option 5: Portfolio</a></li>
                </ul> -->
              </li>
              <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Profil <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="about.php" class="nav-link">Sekilas Kemaritiman</a></li>
                  <li class="dropdown-item"><a href="lembaga.php" class="nav-link">Lembaga Terkait</a></li>
                </ul>
              </li>
              <?php
              if ($active_link == 'berita.php' || $active_link == 'agenda.php' || $active_link == 'artikel.php') {
                echo '<li class="nav-item dropdown active">';
              }else{
                echo '<li class="nav-item dropdown">';
              }
               ?>
                <a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Publikasi <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="berita.php" class="nav-link">Berita</a></li>
                  <li class="dropdown-item"><a href="artikel.php" class="nav-link">Artikel</a></li>
                  <li class="dropdown-item"><a href="agenda.php" class="nav-link">Agenda</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Galeri <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="foto.php" class="nav-link">Foto</a></li>
                  <li class="dropdown-item"><a href="video.php" class="nav-link">Video</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div id="search" class="collapse clearfix">
            <form role="search" class="navbar-form">
              <div class="input-group">
                <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                  <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
