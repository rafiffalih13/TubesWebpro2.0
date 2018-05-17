<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
  	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/keranjang.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
  <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <?php
        if ($this->session->flashdata('alert')=='sukses_hapus'){
            echo "<script>alert('Sukses Hapus Data');</script>";
        }
        include 'navPembeli.php';
       ?>
       <div class="container" style="margin-top: 20px">
         <p id="demo"></p>
         <form method='post'>
           <?php
             $i =0;
             foreach ($barang as $b) {
               $i++;
               if ($i == 1) { ?>
                 <div class="col-md-12">
                   <div class="row">
                     <div class="col-sm-3.5" >
                       <img src="<?php echo base_url();?>assets/images/<?php echo $b->images ?>" id="gambar" >
                     </div>
                     <div class="col-sm-4" id="barang">
                       <form action="" id="form2">
                          <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input disabled type="text" class="form-control" id="nama0" placeholder="<?php echo $b->nama_barang ?>">
                          </div>
                          <div class="form-group">
                            <label for="harga">Harga:</label>
                            <input disabled type="text" class="form-control" id="harga0" placeholder="<?php echo $b->harga ?>">
                          </div>
                          <div class="form-group">
                            <label for="stock">Kuantitas:</label> <br>
                            <input type="text" id="kuantitas<?php echo $i; ?>" name="kuantitas<?php echo $i; ?>" align="center" value="<?php echo $kuantitas ?>">
                            <button type="button" class="btn btn-default" name="min" id="min">-</button>
                            <button type="button" class="btn btn-default" name="plus" id="plus">+</button>
                          </div>
                          <button class="btn btn-default btn-danger" data-toggle="modal" data-target="#hapus<?php echo $b->nama_barang; ?>" id="btndel"><img src="<?php echo base_url();?>assets/img/trash.jpg" id="trash"></button>
                       </form>
                     </div>
                     <form action="<?php echo base_url();?>index.php/c_keranjang/done" id="form1">
                        <div class="form-group">
                          <label for="total">Total Harga Barang :</label>
                          <input disabled type="text" class="form-control" id="total" placeholder="<?php echo $jum ?>">
                        </div>
                        <div class="form-group">
                          <label for="total">Biaya Pengiriman:</label>
                          <input disabled type="text" class="form-control" id="ongkir" placeholder="<?php echo $ongkir ?>">
                        </div>
                        <div class="form-group">
                          <label for="total">Total:</label>
                          <input disabled type="text" class="form-control" id="all" placeholder="<?php echo $ongkir + $jum ?>">
                        </div>
                        <button type="submit" class="btn btn-default" id="btnbuy" >Lanjutkan Pembayaran</button>
                     </form>
                   </div>
                	</div>

            <?php  } else {
           ?>
           <div class="col-md-12">
             <div class="row">
               <div class="col-sm-3.5" >
                 <img src="<?php echo base_url();?>assets/images/<?php echo $b->images ?>" id="gambar" >
               </div>
               <div class="col-sm-4" id="barang">
                 <form action="" id="form2">
                    <div class="form-group">
                      <label for="nama">Nama:</label>
                      <input disabled type="text" class="form-control" id="nama0" placeholder="<?php echo $b->nama_barang ?>">
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga:</label>
                      <input disabled type="text" class="form-control" id="harga0" placeholder="<?php echo $b->harga ?>">
                    </div>
                    <div class="form-group">
                      <label for="stock">Kuantitas:</label> <br>
                      <input type="text" id="kuantitas<?php echo $i; ?>" name="kuantitas<?php echo $i; ?>" align="center" value="<?php echo $kuantitas ?>">
                      <button type="button" class="btn btn-default" name="min" id="min">-</button>
                      <button type="button" class="btn btn-default" name="plus" id="plus">+</button>
                    </div>
                    <button type="submit" class="btn btn-default" id="btndel"><img src="<?php echo base_url();?>assets/img/trash.jpg" id="trash"></button>
                 </form>
               </div>
             </div>
            </div>
        <?php
          }
          ?>
          <div id="hapus<?php echo $b->nama_barang; ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"></button>
                          <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                          <?php echo form_open("c_keranjang/hapus"); ?>
                          <input type="hidden" name="nama_barang" class="form-control" value="<?php echo $b->nama_barang;?>" id="nim" required>
                      </div>
                      <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                          <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                      </div>
                      <?php echo form_close(); ?>
                  </div>
              </div>
          </div>
        <?php
            } ?>
         </form>
       </div>
        <script type="text/javascript">

        </script>
  </body>
</html>
