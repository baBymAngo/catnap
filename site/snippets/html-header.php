<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" /> 
  <meta name="robots" content="index, follow" />	
	
  <?php echo css('assets/styles/styles.css') ?>
  <?php echo js('assets/js/vendors/jquery-1.11.1.min.js') ?>

</head>

<body>