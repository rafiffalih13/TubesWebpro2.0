<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">

    <!-- CSS NAVBAR -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/navbar.css" />

    <!-- ICON -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  </head>

  <body>


    <?php
      if($this->session->userdata('username') == ''){
        include_once("navbar.php");
        
      }else{
        if($jenis == 'penjual'){
          include_once("navPembeli.php");
        }else {
          include_once("navPenjual.php");
        }
        
      }

        
    ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url(<?php echo base_url();?>assets/img/static1.squarespace.com.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>Pakaian</h3>
              <p>Pilih Gayamu Sekarang </p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(<?php echo base_url();?>assets/img/laptop.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>Komputer</h3>
              <p>Pilih Komputermu Sekarang</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url(<?php echo base_url();?>assets/img/Bao-Bao-Holder3.jpg)">
            <div class="carousel-caption d-none d-md-block">
              <h3>Makanan</h3>
              <p>Pilih Makananmu Sekarang</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <!-- Kategori komputer -->
      <br>
        <center>
            <h1 class="my-4">Komputer</h1>

            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident,<br> perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse</p> -->
        </center>
      <br>

      <!-- baris pertama with loop -->
      <div class="row">
        <?php
          $i =0;
          foreach ($barang as $b) {
            $i++;
            if ($i>6) break;
            if ($b->kategori=='komputer') {
        ?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" style="min-height: 250px; max-width: auto; overflow: hidden;" src="<?php echo base_url();?>assets/images/<?php echo $b->images ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $b->nama_barang; ?></a>
              </h4>
              <p style="font-size: 12px"><?php echo $b->nama_toko; ?></p>
              <p class="card-text"><?php echo $b->harga; ?></p>
              <a href="#" class="btn btn-primary">Buy!</a>
            </div>
          </div>
        </div>

        <?php
            }
          }
        ?>
      </div>
      <!-- end baris pertama -->
      <!-- end komputer -->

      <!-- Kategori pakaian -->
      <br>
        <center>
            <h1 class="my-4">Pakaian</h1>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident,<br> perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse</p> -->
        </center>
      <br>

      <!-- baris kedua with loop -->
      <div class="row">
        <?php
          $i =0;
          foreach ($barang as $b) {
            $i++;
            if ($i>6) break;
            if ($b->kategori=='pakaian') {
        ?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" style="min-height: 250px; max-height: 250px; max-width: auto; overflow: hidden;" src="<?php echo base_url();?>assets/images/<?php echo $b->images ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $b->nama_barang; ?></a>
              </h4>
              <p style="font-size: 12px"><?php echo $b->nama_toko; ?></p>
              <p class="card-text"><?php echo $b->harga; ?></p>
              <a href="#" class="btn btn-primary">Buy!</a>
            </div>
          </div>
        </div>

        <?php
            }
          }
        ?>
      </div>

      <!-- end baris kedua -->
      <!-- end pakaian -->
      
    </div>
    <!-- /.container -->

    <!-- Footer -->

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
