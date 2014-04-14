<?php
switch(@$_GET['act']){
  default:
		include 'nilai.php';
    break;
  case 'del':
		include 'nilai_action.php';
  break;
  case 'edit_nilai':
		include 'nilai_form.php';
  break;
}
?>
