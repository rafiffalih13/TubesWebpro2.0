<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Icon title -->
	<!-- <link rel="icon" type="image/png" href="img/logo1.png"> -->
	<!-- Bootstrap CSS & JS -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
	
	<!-- Page CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css" />
	<!-- JQuery -->
	<script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="col"></div>
			<!-- div center Start -->
			<div class="col-4 center" >

				<a href="index.html">
					<img class="logo" src="<?php echo base_url();?>assets/img/logo1.png">
				</a>
				
				<div class="daftar">
					Login Akun Big Shop
				</div>
				<br>
				<!-- Form Login Start -->
				<?php echo form_open('c_login/login');?>
				<form class="login100-form validate-form" method="POST" action="<?php echo base_url(). 'index.php/c_login/login'; ?>">
					<div class="form-group">
						<div class="col-sm-19">
							<input name="username" type="text" class="form-control" placeholder="Username" required/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-19">
                            <input name="password" type="password" class="form-control" placeholder="Password Akun" required/>
						</div>
					</div>
					<div class="form-group left">
						<div class="col-sm-0">
							<button class="btn tmbl">Login</button>
						</div>
					</div>
				</form>
				<!-- Form login End -->
			</div>
			<!-- div center end -->
			<div class="col"></div>
		</div>			
	</div>
	<script src="js/main.js"></script>

</body>
</html>