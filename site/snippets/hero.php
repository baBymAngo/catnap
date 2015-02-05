<section id="hero" class="hero">
	<?php snippet('header') ?>
	<div class="hero-wrapper margin-container">
		<div class="section-header">
			<h1 class="hero-header"><?= html( $page->hero_header() ) ?></h1>
			<?= kirbytext( $page->hero_subheader() ) ?>
		</div>
	</div>
</section>