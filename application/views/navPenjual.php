<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    

    <!-- CSS NAVBAR -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/navbar.css" />
    
    <!-- ICON -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">


  </head>

  <body>

    <!-- Navigation -->
    
    <nav class="navbar text-white fixed-top navbar-expand-lg navbar-info bg-info fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo site_url('c_homePenjual/index/').$this->session->userdata('username'); ?>"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" width="auto" height="35"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="coba fa fa-reorder"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav">
              <!-- <li class="nav-item dropdown kiri">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   KATEGORI
                </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item" href="#">komputer</a>
                  <a class="dropdown-item" href="#">Pakaian</a>
                  <a class="dropdown-item" href="#">Makanan</a>
                  <a class="dropdown-item" href="#">Kendaraan</a>
                  <a class="dropdown-item" href="#">Furniture</a>
                </div>
              </li> -->
          </ul>
          <ul class="nav navbar-nav mx-auto">
            <li class="nav-item">
              <form class="form-inline my-2 my-lg-0" action="<?php echo site_url('c_home/SearchBarang') ?>" method="GET">
                <input class="form-control mr-sm-2 cari" type="search" placeholder="Cari produk" aria-label="Search" name="src">
                <button class="btn btn-info my-2 my-sm-0" type="submit"><i class="fa fa-search"></i><span>  </span>Cari</button>
              </form>
          </li>
          </ul>
          <ul class="navbar-nav ml-auto samping">
            <li class="nav-item" style="padding-right: 7px"><a href="#band" style="word-spacing: 3px" class="nav-link"><i class="fa fa-shopping-cart" style="font-size:23px"></i><span> </span>KERANJANG</a></li>
            
            <li class="nav-item dropdown kiri">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Akun
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="#"><?php echo $this->session->userdata('username'); ?></a>
                
                <a class="dropdown-item" href="<?php echo site_url('c_home/logout') ?>">Logout</a> 
              </div>
            </li>
            <li class="nav-item" style="margin-left: 15px"><a href="#band" style="word-spacing: 3px" class="nav-link"><span> </span><span>  </span><span>  </span></a></li>
          </ul>
        </div>
      </div>
    </nav>




    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
