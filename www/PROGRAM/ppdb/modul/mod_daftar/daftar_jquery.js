<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#nisn").change(function(){ 
	$('#pesan').html("<img src='images/loader.gif' /> checking ...");
    var nisn  = $("#nisn").val(); 
	$.ajax({
		type:"POST",
		url:"modul/mod_daftar/daftar_checking.php",    
		data: "nisn=" + nisn,
		success: function(data){                 
			if(data==0){
				if(nisn.length == 0 || nisn.length < 10 || nisn.length > 10){
					$('#pesan').html("");
					$('#nisn').css('border', '1px #C33 solid');
				}
				else{
					$("#pesan").html('<img src="images/tick.png"> Nisn belum digunakan');
					$('#nisn').css('border', '1px #090 solid');	
					$("#submit").fadeIn();
				}
			}  
			else{
				$("#pesan").html('<img src="images/cross.png"> Nisn sudah dipakai');       
				$('#nisn').css('border', '1px #C33 solid');	
				$("#submit").fadeOut();
			}
		}
	});
	})
	$("#daftar").validate({
		rules: {
				nama: {required: true},		
				nisn: {required: true,number: true,minlength: 10,maxlength: 10},		
				asal_skl: {required: true},
				email: {required: true,email: true},
				captcha:{required: true}
				},
		messages: {
				nama: {required: "Nama harus diisi"},
				nisn: {required: "NISN harus diisi",number: "NISN harus Angka",minlength: "Minimal 10 Digit",maxlength: "Maksimal 10 Digit"},
				asal_skl: {required: "Alamat Sekolah harus diisi",},
				email: {required: "E-mail harus diisi",email: "Masukkan E-mail yang valid"},
				captcha:  "Captcha harus diisi"
				},
		errorPlacement: function(error, element) {
				error.appendTo(element.parent("td"));
				},
		submitHandler: function(form) {
				var dataForm = $("#daftar").serialize();
				var nama = $("input[name=nama]").val();
				var nisn = $("input[name=nisn]").val();
				var asal_skl = $("input[name=asal_skl]").val();
				var email = $("input[name=email]").val();
				$.ajax({
					type:"POST",
					url:"modul/mod_daftar/daftar_action.php",
					data:dataForm,
					success: function(data){
						if(data=='berhasil'){
							window.location.href = '?module=register&id='+nisn;
						}
						else{
							$("#info").html(data);
							$("#info").fadeOut(5000);
						}
					}
				});
			return false;
		}
	})
});
</script>
