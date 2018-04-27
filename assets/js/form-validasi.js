$().ready(function () {
	$("#FormDaftar").validate({
		rules: {
			username:{
				required: true,
				minlength:3
			},
			pass:{
				required: true,
				minlength:8
			},
			cpass:{
				required: true,
				minlength:8,
				equalTo:"#password"
			},
			nama:"required",
			email:{
				required:true,
				email:true
			},
			no_hp:"required"
			alamat:"required"
		},
		messages:{
			username:{
				required:"Masukkan username anda",
				minlength : "Minimal character username 3"
			},
			password:{
				required:"Masukkan password anda",
				minlength : "Minimal character password 3"
			},
			confpassword:{
				required:"Masukkan password anda",
				minlength : "Minimal character password 3",
				equalTo: "Password tidak sama dengan password diatas"
			},
			namalengkap:"Masukkan nama lengkap",
			email:{
				required:"Masukkan Email Anda",
				email:"Email Tidak Valid"
			},
			no_hp:"Masukkan Nomor Telepon/Handphone anda",
			alamat:"Masukkan alamat anda"
		}
	});
});