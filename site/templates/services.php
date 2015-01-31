<?php snippet('html-header') ?>

<main class="content" id="main">

	<?php snippet('hero') ?>

	<section class="content-section">
        <div class="margin-container">
            <?= kirbytext( $page->text() ) ?>
			
			<?php $services = $page->children() ?>
			<?php foreach( $services as $service ): ?>
				<div id="<?= $service->slug() ?>">
					<img src="<?= $service->images()->first()->url() ?>" alt="<?= $service->title() ?>" class="section-thumb" itemprop="image">
	            	<h2 class="section-header"><?= html( $service->title() ) ?></h2>
	            	<p class="section-subheader"><?= html( $service->subtitle() ) ?></p>
	            	<p><?= kirbytext( $service->text() ) ?></p>
	            </div>
            <?php endforeach ?>

        </div>
    </section>

</main>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>