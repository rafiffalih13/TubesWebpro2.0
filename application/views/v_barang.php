<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
  	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/barang.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap.bundle.js"> -->
  <!-- <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
  <script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <?php
        include 'navPembeli.php';
       ?>
    <!-- navbar -->
    <div class="container">
      <div class="row">
        <div class="col" id="column1">
          <img src="<?php echo base_url();?>assets/images/<?php echo $barang->images ?>" id="gambar" alt="logo" width="400" height="254">
        </div>
        <div class="col" id="column2">
          <!-- form barang -->
          <form >
            <div class="form-group">
              <label for="harga">Toko:</label>
              <input disabled type="text" class="form-control" id="harga0" placeholder="<?php echo $barang->nama_toko ?>">
            </div>
             <div class="form-group">
               <label for="nama">Nama:</label>
               <input disabled type="text" class="form-control" id="nama0" placeholder="<?php echo $barang->nama_barang ?>">
             </div>
             <div class="form-group">
               <label for="harga">Harga:</label>
               <input disabled type="text" class="form-control" id="harga0" placeholder="<?php echo $barang->harga ?>">
             </div>
             <div class="form-group">
               <label for="harga">Deskripsi:</label>
               <input disabled type="text" class="form-control" id="harga0" placeholder="<?php echo $barang->deskripsi ?>">
             </div>
             <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" id="btnadd">Add Barang</button>
          </form>
          <!-- form barang  -->
        </div>
      </div>
    </div>

    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Anda Akan Memasukkan Barang Ini Ke Keranjang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <?php echo form_open("c_barang/add"); ?>
        <!-- Modal body -->
        <div class="modal-body">
            <img src="<?php echo base_url();?>assets/images/<?php echo $barang->images ?>" id="gambar1" alt="logo" width="400" height="254" class="center">
            <!-- form barang -->
            <br>
              <div>
                <label for="harga">Toko:</label>
                <input disabled type="text" class="form-control" id="harga0" value="<?php echo $barang->nama_toko ?>">
              </div>
               <div>
                 <label for="nama">Nama:</label>
                 <input disabled type="text" class="form-control" id="nama0" name="nama_barang" value="<?php echo $barang->nama_barang ?>">
               </div>
               <div>
                 <label for="harga">Harga:</label>
                 <input disabled type="text" class="form-control" id="harga0" name="harga" value="<?php echo $barang->harga ?>">
               </div>
               <input type="hidden" name="username" value="<?php echo $username; ?>">
               <input type="hidden" name="nama_barang" value="<?php echo $barang->nama_barang ?>">
               <input type="hidden" name="harga" value="<?php echo $barang->harga ?>">
               <input type="hidden" name="id_barang" value="<?php echo $barang->id_barang ?>">
               <input type="hidden" name="images" value="<?php echo $barang->images ?>">
               <input type="hidden" name="kategori" value="<?php echo $barang->kategori ?>">
          </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">OK</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>

</div>

  </body>
</html>
