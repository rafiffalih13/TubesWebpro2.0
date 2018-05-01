<!DOCTYPE html>
<html>
<head>
	<title>Daftar Akun</title>
	<!-- Icon Title -->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo1.png">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<!-- daftar.html css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/daftar.css">
	<!-- bootstrap js -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<!-- jquery -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.1.js"></script>
	<!-- plugin validasi form -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
	<!-- rules & massage validasi form -->
	<script src="<?php echo base_url();?>assets/js/form-validasi.js"></script>
	<!-- javascript agar form nomor telfon hanya bisa numeric -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/daftar.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col"></div>
			<!-- Start isi Konten -->
			<div class="col-4 center">
				<a href="<?php echo site_url('c_daftar/view_home') ?>">
					<img class="logo" src="<?php echo base_url();?>assets/img/logo1.png">
				</a>
				<div class="daftar">
					Daftar Akun Pembeli Sekarang
				</div>
				<div class="disini">
					<p>Sudah punya akun? klik <a href="<?php echo site_url('c_daftar/view_login')?>" style="color: ">disini</a></p>
				</div>
				<!-- Form Daftar Start -->
				<?php echo validation_errors(); ?>
				<?php echo form_open('c_daftar/simpanPembeli');?>
				<form id="FormDaftar" action="<?php echo base_url(). 'index.php/c_daftar/simpanPembeli';?>">
					<div class="form-group">
						<div class="col-sm-15">
							<input class="form-control" type="text" name="username" id="username" placeholder="Enter username">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-19">
							<input class="form-control" type="password" name="pass" id="pass" placeholder="Enter password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-19">
							<input class="form-control" type="password" name="cpass" id="cpass" placeholder="Confirm password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-19">
							<input class="form-control" type="text" name="nama" id="nama" placeholder="Enter Full Name">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-19">
							<input class="form-control" type="text" name="email" id="email" placeholder="Enter Email">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-19">
							<input class="form-control" type="text" name="no_hp" id="no_hp" placeholder="Enter Phone Number">
						</div>
					</div>
					<div class="form-group left">
						<div class="col-sm-19">
							<input class="form-control" type="text" name="alamat" id="alamat" placeholder="Enter Address">
						</div>
					</div>
					<div class="form-group left">
						<div class="col-sm-0">
							<p>Dengan klik daftar, kamu telah menyetujui Aturan Penggunaan dan Kebijakan Privasi dari Big Shop</p>
							<button type="submit" class="btn tmbl">DAFTAR</button>
						</div>
					</div>
				</form>
				<!-- Form Daftar End -->
			</div>
			<!-- Center Div end -->
			<div class="col"></div>
		</div>			
	</div>
</body>
</html>