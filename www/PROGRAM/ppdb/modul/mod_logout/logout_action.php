<?
include 'config/koneksi.php';
$sess_peserta 	= $_SESSION['no_peserta'];
$sess_nisn		= $_SESSION['nisn'];
if (isset($sess_peserta) and (isset($sess_nisn)))
{
	mysql_query("update ppdb_adm_siswa set status = '0' where no_peserta = '$sess_peserta'") or die (mysql_error());
	session_destroy();
}
?>