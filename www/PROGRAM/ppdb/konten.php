<?php
include 'config/koneksi.php';
include 'config/class_paging.php';
include 'config/functions_all.php';
$sql=mysql_query("select aktif from ppdb_menu where main_id=4")or die(mysql_error());
$bar=mysql_fetch_array($sql);

if ($_GET['module']=='home'){
	if($bar['aktif'] == 'N'){
		if (isset($no_peserta) and (isset($nisn))){
			include 'modul/mod_home/login_home.php';
		}
		else{
			include 'modul/mod_home/home.php';
		}
	}else{
		include 'modul/mod_home/login_home.php';
	}
}
elseif ($_GET['module']=='biodata'){
  include 'modul/mod_biodata/biodata.php';
}
elseif ($_GET['module']=='rapor'){
  include 'modul/mod_rapor/rapor.php';
}
elseif ($_GET['module']=='daftar'){
  include 'modul/mod_daftar/daftar.php';
}
elseif ($_GET['module']=='pendaftar'){
  include 'modul/mod_pendaftar/pendaftar.php';
}
elseif ($_GET['module']=='pengumuman'){
  include 'modul/mod_pengumuman/pengumuman.php';
}
elseif($_GET['module']=='register'){
  include 'modul/mod_register/register.php';
}
elseif($_GET['module']=='login'){
  include 'modul/mod_login/login.php';
}
elseif($_GET['module']=='akun'){
  include 'modul/mod_akun/akun.php';
}
elseif($_GET['module']=='dokumen'){
  include 'modul/mod_dokumen/dokumen.php';
}
elseif($_GET['module']=='pesan'){
  include 'modul/mod_bantuan/pesan/bantuan.php';
}
else
{
  echo "<meta http-equiv='refresh' content='0 url=?module=home' />";
}
?>
