<!DOCTYPE html>
<html lang="en">
<head>
	<?php if($page->isHomepage()): ?>
		<title><?= html($site->title()) ?></title>
	<?php else: ?>
		<title><?= html($page->title()) ?></title>
	<?php endif ?>
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" /> 

	<meta charset="utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	
	<?= css('assets/styles/styles.css') ?>
	<?= js('assets/js/vendors/modernizr.min.js') ?>
	<?= js('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') ?>
	<?= js('assets/js/vendors/sweet-alert.min.js') ?>

	<script src="//use.typekit.net/xbi8rlt.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>

<body id="<?= html($page->slug()) ?>">
	<?php snippet('analytics') ?>
	<main id="main">