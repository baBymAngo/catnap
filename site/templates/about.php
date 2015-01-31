<?php snippet('html-header') ?>
<?php snippet('hero') ?>

<main id="main" class="content">

	<section class="content-section">
		<div class="margin-container">
			<?= kirbytext( $page->text() ) ?>
		</div>
	</section>

</main>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>