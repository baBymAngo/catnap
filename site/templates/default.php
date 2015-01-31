<?php snippet('html-header') ?>

<main class="content" id="main">

	<?php snippet('hero') ?>

	<section class="content-section">
        <div class="margin-container">
            <?= kirbytext( $page->text() ) ?>
        </div>
    </section>

</main>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>