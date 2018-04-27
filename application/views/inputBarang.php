<?php
  include 'navbar.html';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
  <script type="text/javascript">
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

        oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
  </script>
    <title>Input Barang</title>
  </head>
  <body>
        <div class="container">
    					<span id="judul">
    						Input Barang
    					</span>
              <form id="form2">
                 <div class="form-group">
                   <label for="namaBarang">Nama:</label>
                   <input type="text" class="form-control" placeholder="Nama Barang" id="nama0" required>
                 </div>

                 <div class="form-group">
                   <label for="harga">Harga:</label>
                   <input type="text" class="form-control" placeholder="Harga Barang" id="harga0" required>
                 </div>

                 <div class="form-group">
                   <label for="deskripsi">Deskipsi:</label> <br>
                   <textarea class="form-control" srows="4" cols="50" name="comment" form="form2">Masukkan dskripsi barang anda</textarea>
                 </div>

                 <div class="form-group">
                   <label for="img">Gambar Barang:</label> <br>
                   <?php echo form_open_multipart('inputBarang_c/do_upload');?>

                   <input type="file" name="userfile" size="20" id="image-source" onchange="previewImage();"/>
                   <br />
                   <img id="image-preview" alt="image preview"/>
                   <br/>
                 </div>

                 <div class="container-login100-form-btn">
       						<button type="submit" id="upload" class="login100-form-btn">
       							SUBMIT
       						</button>
       					</div>
              </form>

                    <div class="flex-col-c p-t-170 p-b-40">

                             <span class="txt1 p-b-9">
    							Ga Punya Akun?
    						</span>

                        <a href="<?php echo site_url('Akun_C/daftar_view') ?>" class="txt3">
                            Daftar Dulu Sekarang
                        </a>
                    </div>
                </form>
            <!-- </div> -->
        </div>
  </body>
</html>
