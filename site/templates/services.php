<?php snippet('html-header') ?>

<<<<<<< HEAD
<main id="services" class="content">
=======
<main class="content" id="main">
>>>>>>> FETCH_HEAD

	<?php snippet('hero') ?>

	<section class="content-section">
        <div class="margin-container">
            <?= kirbytext( $page->text() ) ?>
			
			<?php $services = $page->children() ?>
			<?php foreach( $services as $service ): ?>
				<div class="service" id="<?= $service->slug() ?>">
					<img src="<?= $service->images()->first()->url() ?>" alt="<?= $service->title() ?>" class="service-image" itemprop="image">
	            	<h2 class="service-name" itemprop="name"><?= html( $service->title() ) ?></h2>
	            	<p class="service-subtitle"><?= html( $service->subtitle() ) ?></p>
	            	<p class="service-text"><?= $service->text() ?></p>
	            </div>
            <?php endforeach ?>

        </div>
    </section>

</main>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>