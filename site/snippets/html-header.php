<!DOCTYPE html>
<html lang="en">
<head>
	<?php if($page->isHomepage()): ?>
		<title><?= html($site->title()) ?></title>
	<?php else: ?>
		<title><?= html($page->title()) ?> &middot; <?= html($site->title()) ?></title>
	<?php endif ?>
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" /> 

	<meta charset="utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<meta property="og:image" content="assets/images/facebook-preview.png" />
	<link rel="icon" href="favicon.ico" />
	
	<?= css('assets/styles/styles.css') ?>
	<?= js('assets/js/vendors/modernizr.min.js') ?>
	<?= js('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') ?>

	<script src="//use.typekit.net/xbi8rlt.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<?php snippet('analytics') ?>
</head>

<body id="<?= html($page->slug()) ?>">
	<div class="mobile-menu">
		<div class="margin-container">
			<?php snippet('nav') ?>
		</div>
	</div>
	<main id="main">