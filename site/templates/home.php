<?php snippet('html-header') ?>

<section id="hero" class="hero">
	<?php snippet('header') ?>
	<div class="hero-wrapper margin-container">
		<meta class="adjectives" data-adjectives="<?= $page->adjectives() ?>">
		<div class="section-header">
			<h1 class="hero-header"><?= $page->hero_header(); ?></h1>
			<?= kirbytext( $site->description() ) ?>
		</div>
		<img src="<?= $page->images()->find('macbook.png')->url() ?>" alt="" class="hero-image">
	</div>
</section>

<section class="content-section content-section--services">
	<div class="margin-container">
		<?php $services_page = $site->find('services') ?>
		<div class="section-header">
			<h2><?= $page->services_header() ?></h2>
			<?= kirbytext( $page->services_subheader() ) ?>
		</div>
		<ul class="services-list">
			<?php $services = $services_page->children()  ?>
			<?php foreach( $services as $service ): ?>
				<li class="service" itemscope itemtype="https://schema.org/Service">
					<div class="service-wrapper">
						<div class="service-link"> <!-- href="[php]$services_page->url()[php]#[php]$service->slug()[php]" -->
							<?php $src = $service->images()->first()->url() ?>
							<img src="<?= $src ?>" alt="<?= $service->title() ?>" class="service-image" itemprop="image">
							<h3 class="service-name" itemprop="name"><?= html( $service->title() ) ?></h3>
						</div>
					</div>
				</li>
			<?php endforeach ?>
		</ul>
		<a href="works" class="btn"><?= $page->services_button() ?></a>
	</div>
</section>

<section class="content-section content-section--light content-section--stand-out">
	<div class="margin-container">
		<div class="section-header">
			<h2><?= $page->standout_header() ?></h2>
			<?= kirbytext( $page->standout_subheader() ) ?>
		</div>
		<a href="about" class="btn"><?= $page->standout_button() ?></a>
	</div>
</section>

<section class="content-section content-section--dark content-section--lets-talk">
	<div class="margin-container">
		<div class="section-header">
			<h2><?= $page->contact_header() ?></h2>
			<?= kirbytext( $page->contact_subheader() ) ?>
		</div>
		<a href="contact" class="btn"><?= $page->contact_button() ?></a> <span class="or">or</span> <a href="about" class="btn btn-grey"><?= $page->learn_more_button() ?></a>
	</div>
</section>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>