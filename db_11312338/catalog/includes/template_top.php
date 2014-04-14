<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/

  $oscTemplate->buildBlocks();

  if (!$oscTemplate->hasBlocks('boxes_column_left')) {
    $oscTemplate->setGridContentWidth($oscTemplate->getGridContentWidth() + $oscTemplate->getGridColumnWidth());
  }

  if (!$oscTemplate->hasBlocks('boxes_column_right')) {
    $oscTemplate->setGridContentWidth($oscTemplate->getGridContentWidth() + $oscTemplate->getGridColumnWidth());
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>" />
<title><?php echo tep_output_string_protected($oscTemplate->getTitle()); ?></title>
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>" />
<?php // BOF Dark Template  ?>
<link rel="stylesheet" type="text/css" href="ext/skins/dark2334/delta/css/normalise.css" />
<link rel="stylesheet" type="text/css" href="ext/skins/dark2334/delta/theme/jquery-ui.css" />
<script type="text/javascript" src="ext/skins/dark2334/delta/js/modernizr-2.0.6.min.js"></script>
<script type="text/javascript" src="ext/skins/dark2334/jquery/jquery.min.js"></script>
<script type="text/javascript" src="ext/skins/dark2334/jquery/jquery-ui.min.js"></script>  
<script type="text/javascript" src="ext/skins/dark2334/delta/js/jquery.imgpreload.min.js"></script>
<script type="text/javascript" src="ext/skins/dark2334/delta/js/jquery-ui.toggleSwitch.js"></script>
<script type="text/javascript" src="ext/skins/dark2334/delta/js/custom.js"></script>
<?php // EOF Dark Template  ?>
<?php
  if (tep_not_null(JQUERY_DATEPICKER_I18N_CODE)) {
?>
<script type="text/javascript" src="ext/jquery/ui/i18n/jquery.ui.datepicker-<?php echo JQUERY_DATEPICKER_I18N_CODE; ?>.js"></script>
<script type="text/javascript">
$.datepicker.setDefaults($.datepicker.regional['<?php echo JQUERY_DATEPICKER_I18N_CODE; ?>']);
</script>
<?php
  }
?>
<?php // EOF Dark Template  ?>
<link rel="stylesheet" type="text/css" href="ext/skins/dark2334/colorbox/colorbox.css" />
<script type="text/javascript" src="ext/skins/dark2334/colorbox/jquery.colorbox-min.js"></script>
<?php // EOF Dark Template  ?>
<link rel="stylesheet" type="text/css" href="ext/960gs/<?php echo ((stripos(HTML_PARAMS, 'dir="rtl"') !== false) ? 'rtl_' : ''); ?>960_24_col.css" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<?php // BOF Dark Template  ?>
<link rel="stylesheet" type="text/css" href="ext/skins/dark2334/custom.css" />
<?php // EOF Dark Template  ?>
<?php echo $oscTemplate->getBlocks('header_tags'); ?>
</head>
<body>

<div id="bodyWrapper" class="container_<?php echo $oscTemplate->getGridContainerWidth(); ?>">

<?php require(DIR_WS_INCLUDES . 'header.php'); ?>

<div id="bodyContent" class="grid_<?php echo $oscTemplate->getGridContentWidth(); ?> <?php echo ($oscTemplate->hasBlocks('boxes_column_left') ? 'push_' . $oscTemplate->getGridColumnWidth() : ''); ?>">
