<?php snippet('html-header') ?>
<?php snippet('hero') ?>

<section class="content-section">
	<div class="margin-container">
		<div class="section-header">
			<h2>Title</h2>
			<p>Text</p>
		</div>
		
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

<section class="content-section content-section--light">
	<div class="margin-container">
		<div class="section-header">
			<h2>Our Process</h2>
			<p>At Catnap, we believe in candid speech. We won’t talk business jargon at you or beat you over the head with complicated marketing charts. This saves time and keeps everyone focused on the real project.
Detail — The first step is always learning about you. What does your product feel like? What audience are you trying to reach? What do you want this site to say about you?
Play — After we know what you want the site to feel like, we like to play around a bit. It’s this step where the magic happens, and your unique expression starts to take shape.
Build— We then begin to build out the product. We carefully consider each component to be sure your site is as lean and resilient as possible.
Deploy— This is the fun part! This is when your pixel perfect creation hits the web for all of your clients and friends to enjoy. Congratulations. Mission complete.
We don’t waste your time on directionless focus groups or ineffective management. We simply take your ideas and we create.</p>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>