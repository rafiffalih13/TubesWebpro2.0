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

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/modern-business.css" rel="stylesheet">

    <!-- CSS NAVBAR -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/navbar.css" />
    
    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pilih.css">


  </head>

  <body style="background-image: url('<?php echo base_url();?>assets/img/coba2.png');">


    <!-- Page Content -->
  <center>
      <h1 class="my-4">Pilih Jenis Akun</h1>
  </center>
  <br>

  <center>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 ">
          <div class="card h-100 bgc">
            <a href="<?php echo site_url('c_login/view_login')?>"><img class="card-img-top" src="<?php echo base_url();?>assets/img/seller.png" alt=""></a>
            <div class="card-body bgl">
              <h4 class="card-title">
                <a href="<?php echo site_url('c_login/view_login')?>">Penjual</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 ">
          <div class="card h-100 bgc">
            <a href="<?php echo site_url('c_login/view_login')?>"><img class="card-img-top" src="<?php echo base_url();?>assets/img/buyer.png" alt=""></a>
            <div class="card-body bgl">
              <h4 class="card-title">
                <a href="<?php echo site_url('c_login/view_login')?>">Pembeli</a>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </center>
        

    <!-- /.container -->


    


    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
