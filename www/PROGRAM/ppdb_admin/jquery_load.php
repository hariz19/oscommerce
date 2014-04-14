<?
include 'js/menu.js';
if ($_GET['module']=='home'){
}
elseif ($_GET['module']=='biodata'){
	include 'js/dtpicker.js';
	include 'modul/mod_admpdb/mod_biodata/biodata_jquery.js';
}
elseif ($_GET['module']=='nilai'){
	include 'js/avg.js';
	include 'modul/mod_admpdb/mod_nilai/nilai_jquery.js';
}
elseif ($_GET[act]=='add_user'){
	include 'modul/mod_setting/mod_user/adduser_jquery.js';
}
elseif ($_GET[act]=='edit_user'){
	include 'modul/mod_setting/mod_user/edituser_jquery.js';
}
elseif ($_GET['module']=='info'){
	include 'modul/mod_setting/mod_info/info_jquery.js';
}
elseif ($_GET['module']=='kontak'){
	include 'modul/mod_kontak/kontak_jquery.js';
}
elseif ($_GET['module']=='logout'){
  include 'modul/mod_logout/logout.php';
}
?>