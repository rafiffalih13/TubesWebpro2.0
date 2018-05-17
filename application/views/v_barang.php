<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Detail Barang</title>

    <!-- Icon title -->
    <link rel="icon" type="image/png" href="img/logo1.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- ajax -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <!-- CSS  -->
     <link rel="stylesheet" type="text/css" href="css/tampilan.css" />
    <link rel="stylesheet" type="text/css" href="css/tampilan.css" />
    <link rel="stylesheet" href="css/barang.css">
  </head>
  <body>
    <!-- navbar -->
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
    <!-- navbar -->
    <div class="container">
      <div class="row">
        <div class="col" id="column1">
          <img src="<?php echo base_url();?>assets/images/<?php echo $b->images ?>" id="gambar" alt="logo" width="400" height="254">
        </div>
        <div class="col" id="column2">
          <!-- form barang -->
          <form action="simpankeranjang">
             <div class="form-group">
               <label for="nama">Nama:</label>
               <input disabled type="text" class="form-control" id="nama0" placeholder="<?php echo $b->nama_barang; ?>">
             </div>
             <div class="form-group">
               <label for="harga">Harga:</label>
               <input disabled type="text" class="form-control" id="harga0" placeholder="<?php echo $b->harga; ?>">
             </div>
             <div class="form-group">
               <label for="stock">Deskripsi:</label>
               <input disabled type="text" class="form-control" id="stock0" placeholder="<?php echo $b->deskripsi; ?>">
             </div>
             <button type="submit" class="btn btn-default" id="btnadd">Add Barang</button>
          </form>
          <!-- form barang  -->
        </div>
      </div>
    </div>
    <!--Footer-->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>
      <!--/.Footer-->

  </body>
</html>
