<?php snippet('html-header') ?>

<main id="about" class="content">

    <?php snippet('hero') ?>

	<section class="content-section">
        <div class="margin-container">
            <?= kirbytext( $page->text() ) ?>
        </div>
    </section>

</main>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>