<!DOCTYPE html>
<html lang="en"  dir="ltr">
<head>
	<title>Daftar Sucsess</title>
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
				<h3>Your form was successfully submitted!</h3>

				<p><?php echo anchor('c_daftar', 'Try it again!'); ?></p>
			</div>
		</div>
	</div>



</body>
</html>
