<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Pembeli</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
	<script type="<?php echo base_url();?>assets/js/form-validasi.js"></script>
	<script type="<?php echo base_url();?>assets/js/daftar.js"></script>
	<script type="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<!--===============================================================================================-->
</head>
<body>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo base_url();?>assets/images/bg-01.jpg);">
					<a href="">
						<span class="login100-form-title-1">
							Big Shop
						</span>
					</a>
					
				</div>
				<form class="login100-form validate-form" method="POST" action="<?php echo base_url(). 'index.php/c_daftar/simpan'; ?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" id="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Confirm Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="cpass" id="cpass" placeholder="Confirm password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Nama is required">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" id="nama" placeholder="Enter Full Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" id="email" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Nomor Handphone is required">
						<span class="label-input100">Nomor Handphone</span>
						<input class="input100" type="text" name="no_hp" id="no_hp" placeholder="Enter Phone Number">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Alamat is required">
						<span class="label-input100">Alamat</span>
						<input class="input100" type="text" name="alamat" id="alamat" placeholder="Enter Address">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Daftar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

</body>
</html>