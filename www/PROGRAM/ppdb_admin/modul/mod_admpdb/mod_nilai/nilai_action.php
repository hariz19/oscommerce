<?
$id		= @$_GET['id'];
$act 	= @$_GET['act'];

if ($act=='del'){
	mysql_query("DELETE FROM ppdb_bind WHERE nisn='$id'");
	mysql_query("DELETE FROM ppdb_bing WHERE nisn='$id'");
	mysql_query("DELETE FROM ppdb_ipa WHERE nisn='$id'");
	mysql_query("DELETE FROM ppdb_ips WHERE nisn='$id'");
	mysql_query("DELETE FROM ppdb_mat WHERE nisn='$id'");
	mysql_query("DELETE FROM ppdb_biodata WHERE nisn='$id'");
	mysql_query("DELETE FROM ppdb_adm_siswa WHERE nisn='$id'");
	include 'js/back.js';
}
?>