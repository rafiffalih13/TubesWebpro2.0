<?php
  include 'navbar.php';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--===============================================================================================-->
     	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
     	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/inputBarang.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
     <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>
     <title></title>
   </head>
   <body>
     <div class="container">
       <div class="login100-form-title" style="background-image: url(<?php echo base_url();?>assets/img/2017-11-15_store-slider-sea-1600x583_desktop_4.jpg);">
         <span id="judul">
           <h1 style="color: white;"><b>BARANG SUKSES DI INPUTKAN</b></h1>
         </span>
       </div>
       <div style="text-align:center;">
         <a href="<?php echo base_url()."index.php/c_inputBarang"; ?>"> Input Barang Lagi </a>
          | 
         <a href="<?php echo base_url(); ?>">Kembali ke halaman utama </a>
       </div>

     </div>
   </body>
 </html>
