<?php snippet('html-header') ?>
<?php snippet('hero') ?>

<section class="content-section">
	<div class="margin-container">
		<?= kirbytext( $page->text() ) ?>
	</div>
</section>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>