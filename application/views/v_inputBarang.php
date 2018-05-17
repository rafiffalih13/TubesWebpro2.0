<<<<<<< HEAD
<?php
  include 'navbar.php';
 ?>
=======

<?php
  include 'navbar.php';
 ?>


>>>>>>> a963f132bbc5ee7e0793ada5b5e1eb9cf3547f71
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
    <?php
        include 'navPembeli.php';
       ?>
        <div class="container">
          <div class="login100-form-title" style="background-image: url(<?php echo base_url();?>assets/img/static1.squarespace.com.jpg);">
            <span id="judul">
              <h1 style="color: white;"><b>Input Barang</b></h1>
            </span>
          </div>
<<<<<<< HEAD
          </div>
=======
              <h1 style="color:white"><b>Input Barang</b></h1>
            </span>
          </div>


>>>>>>> a963f132bbc5ee7e0793ada5b5e1eb9cf3547f71
                <?php echo form_open_multipart('c_inputBarang/do_upload');?>
              <form id="form2" method="post">
                <table class="table" border="0">
                  <tr>
                    <div>
                      Nama :
                    </div>
                  </tr><br>
                  <tr>
                    <div>
                      <input type="text" class="form-control" placeholder="Nama Barang" id="nama0" name="namaBarang"required>
                    </div>
                  </tr> <br>
                  <tr>
                    <div>
                      Harga :
                    </div>
                  </tr><br>
                  <tr>
                    <div>
                      <input type="number" class="form-control" placeholder="Harga Barang" id="harga0" name="harga" required>
                    </div>
                  </tr> <br>
                  <tr>
                    <div>
                      Kategori :
                    </div>
                  </tr><br>
                  <tr>
                    <div>
                      <select class="dropdown" name="kategori" required>
                        <option value=""></option>
                        <option value="pakaian">Pakaian</option>
                        <option value="komputer">Komputer</option>
                        <option value="makanan">Makanan</option>
                      </select>
                    </div>
                  </tr> <br>
                  <tr>
                    <div>
                      Deskripsi :
                    </div>
                  </tr><br>
                  <tr>
                    <div>
                      <textarea class="form-control" srows="4" cols="50" name="dess" id="dess">Masukkan deskripsi barang anda</textarea>
                    </div>
                  </tr> <br>
                  <tr>
                    <div>
                      Gambar Barang :
                    </div>
                  </tr> <br>
                  <tr>
                    <div>
                      <input type="file" name="userfile" size="20" id="image-source" onchange="previewImage();"/>
                      <br />
                      <img id="image-preview" alt="image preview"/>
                      <br/>
                    </div>
                  </tr>
                  <tr>
                    <div class="container-login100-form-btn">
          						<button type="submit" class="login100-form-btn">
          							SUBMIT
          						</button>
          					</div>
                  </tr>
                </table>
              </form>
                </form>
            <!-- </div> -->
        </div>
  </body>
</html>
