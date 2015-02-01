<?php snippet('html-header') ?>

<section id="hero" class="hero">
	<?php snippet('header') ?>
	<div class="hero-wrapper margin-container">
		<meta class="adjectives" data-adjectives="<?= $page->adjectives() ?>">
		<h1 class="hero-header">Websites with spirit.</h1>
		<?= kirbytext( $site->description() ) ?>
		<img src="<?= $page->images()->find('macbook.png')->url() ?>" alt="" class="hero-image">
	</div>
</section>

<section class="content-section content-section--services">
	<div class="margin-container">
		<?php $services_page = $site->find('services') ?>
		<div class="section-header">
			<h2><?= $services_page->homepage_header() ?></h2>
			<?= kirbytext( $services_page->homepage_subheader() ) ?>
		</div>
		<ul class="services-list">
			<?php $services = $services_page->children()  ?>
			<?php foreach( $services as $service ): ?>
				<li class="service" itemscope itemtype="https://schema.org/Service">
					<div class="service-wrapper">
						<a href="<?= $services_page->url() ?>#<?= $service->slug() ?>" class="service-link">
							<?php $src = $service->images()->first()->url() ?>
							<img src="<?= $src ?>" alt="<?= $service->title() ?>" class="service-image" itemprop="image">
							<h3 class="service-name" itemprop="name"><?= html( $service->title() ) ?></h3>
						</a>
					</div>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</section>

<section class="content-section content-section--light stand-out">
	<div class="margin-container">
		<div class="section-header">
			<?= kirbytext( $page->text() ) ?>
		</div>
		<img src="<?= $page->image('stand-out.png')->url() ?>" alt=""> 
	</div>
</section>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>