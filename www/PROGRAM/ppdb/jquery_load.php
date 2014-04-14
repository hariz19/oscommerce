<?
include 'js/message.js';

if ($_GET['module']=='home'){
	include 'modul/mod_login/login_jquery.js';
	include 'modul/mod_pass/dialog_jquery.js';
}
elseif ($_GET['module']=='biodata'){
	include 'js/dtpicker.js';
	include 'modul/mod_biodata/biodata_jquery.js';
}
elseif ($_GET['module']=='rapor'){
	include 'js/avg.js';
	include 'modul/mod_rapor/rapor_jquery.js';
}
elseif ($_GET['module']=='daftar'){	
	include 'modul/mod_daftar/daftar_jquery.js';
}
elseif ($_GET['module']=='login'){	
	include 'modul/mod_login/login_jquery.js';
	include 'modul/mod_pass/dialog_jquery.js';
}
elseif ($_GET['module']=='logout'){	
	include 'modul/mod_logout/logout_action.php';
}
elseif ($_GET['module']=='pesan'){
	include 'modul/mod_bantuan/pesan/bantuan_jquery.js';
}
?>