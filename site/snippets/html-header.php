<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" /> 

  <meta charset="utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">	
	
  <?= css('assets/styles/styles.css') ?>
  <?= js('assets/js/vendors/modernizr.min.js') ?>
  <?= js('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') ?>
</head>

<body>