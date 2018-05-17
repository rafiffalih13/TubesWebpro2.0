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

    <!-- Custom styles for this template -->
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
        include_once("navPembeli.php");
      }

        
    ?>

    <!-- Page Content -->
    <div class="container">

      <br>
      <center>
          <h1 class="my-4">Hasil Pencarian </h1>
      </center>
      <br>
      
      <!-- search with loop -->
      <div class="row">
        <?php
          $i =0;
          foreach ($barang as $b) {
            $i++;
        ?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?php echo base_url()."index.php/c_barang/index/".$b->id_barang ?>"><img class="card-img-top" style="min-height: 250px; max-height: 250px; max-width: auto; overflow: hidden;"  src="<?php echo base_url();?>assets/images/<?php echo $b->images ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php echo base_url()."index.php/c_barang/index/".$b->id_barang ?>"><?php echo $b->nama_barang; ?></a>
              </h4>
              <p style="font-size: 12px"><?php echo $b->nama_toko; ?></p>
              <p class="card-text">Rp<?php echo $b->harga; ?>,-</p>
              <a href="<?php echo base_url()."index.php/c_barang/index/".$b->id_barang ?>" class="btn btn-primary">Buy!</a>
            </div>
          </div>
        </div>

        <?php
          }
        ?>
      </div>

      <!-- end search -->
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
