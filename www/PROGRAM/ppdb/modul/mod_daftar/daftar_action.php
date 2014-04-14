<?
session_start();

include '../../config/koneksi.php';
include '../../config/Generate_Password.php';
include '../../config/auto_number.php';

$nama		= $_POST['nama'];
$nisn		= $_POST['nisn'];
$asal_skl	= $_POST['asal_skl'];
$email		= $_POST['email'];

$inisial = date('Ym');
$date = date('Y-m-d');
if($_POST['captcha']==$_SESSION['captcha_session']){
	$pass = GeneratePassword(5);
	$pass1 = md5($pass);
	$auto = auto_number('ppdb_adm_siswa',$inisial);
	$input = mysql_query("insert into ppdb_adm_siswa(no_peserta, 
													 nama, 
													 nisn, 
													 asal_skl, 
													 email, 
													 password, 
													 pass_view,
													 tgl_daftar, 
													 status) 
											 values ('$auto',
													 '$nama',
													 '$nisn',
													 '$asal_skl',
													 '$email',
													 '$pass1',
													 '$pass',
													 '$date'
													 ,0)");
	
	$biodata = mysql_query("insert into ppdb_biodata(nisn,nm_siswa,asl_sekolah,sts_bio) values ('$nisn','$nama','$asal_skl',0)");
	$rapor1 = mysql_query("insert into ppdb_bind(nisn,sts_bind) values ('$nisn',0)");
	$rapor2 = mysql_query("insert into ppdb_bing(nisn,sts_bing) values ('$nisn',0)");
	$rapor3 = mysql_query("insert into ppdb_ipa(nisn,sts_ipa) values ('$nisn',0)");
	$rapor4 = mysql_query("insert into ppdb_ips(nisn,sts_ips) values ('$nisn',0)");
	$rapor5 = mysql_query("insert into ppdb_mat(nisn,sts_mat) values ('$nisn',0)");
	if($input && $biodata && $rapor1 && $rapor2 && $rapor3 && $rapor4 && $rapor5){
		echo "berhasil";
	}
	else{
		echo "<font color='#00FF00'>Data Gagal Disimpan...</font>";
	}
}
else{
	echo "<font color='#FF0000'>Kode captcha yang Anda Masukan Salah</font>";
}

?>
