<?
session_start();

include '../../config/koneksi.php';

$no_peserta		= $_POST['no_peserta'];
$password		= $_POST['password'];

$result = mysql_query("select count(*) as hasil from ppdb_adm_siswa where no_peserta='$no_peserta' and password=md5('$password')") or die (mysql_error());
$row = mysql_fetch_array($result);

if ($row[0]=="1")
{
	$query_status = mysql_query("select * from ppdb_adm_siswa where no_peserta='$no_peserta'")or die (mysql_error());
	$row_status=mysql_fetch_array($query_status);
	$nisn = $row_status['nisn'];
	$no_peserta = $row_status['no_peserta'];
	
	$_SESSION['no_peserta'] = $no_peserta;
	$_SESSION['nisn'] = $nisn;

	mysql_query("update ppdb_adm_siswa set status='1' where no_peserta='$no_peserta'") or die (mysql_error());
	
	echo "sukses";
}
else
{
	session_destroy();
	echo "<font color='#FF0000'>Login Gagal Ulangi Kembali</font>";

}
?>