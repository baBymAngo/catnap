<footer>

	<!-- Microdata -->
	<div itemscope itemtype="http://schema.org/LocalBusiness">
		<link itemprop="url" href="http://catnap.co" >
		<link itemprop="sameAs" href="http://blog.catnap.co">
		<meta itemprop="name" content="Catnap Creative">
		<meta itemprop="description" content="<?= html($site->description()) ?>">
		<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<meta itemprop="streetAddress" content="<?= html( $site->address() ) ?>">
			<meta itemprop="addressLocality" content="<?= html( $site->city() ) ?>">
			<meta itemprop="addressRegion" content="<?= html( $site->state() ) ?>">
			<meta itemprop="postalCode" content="<?= html( $site->postcode() ) ?>">
			<meta itemprop="addressCountry" content="<?= html( $site->country() ) ?>">
		</div>
	</div>
	<div class="margin-container">
		<a class="footer-logo" href="<?= url('home') ?>"><?php include(__DIR__.'/../../assets/images/catnap.svg') ?></a>
		<nav class="footer-nav">
				<a href="/">Home</a>
			<?php foreach($pages->visible() as $p): ?>
	    	<a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
	    	<?php endforeach ?>
		</nav>
		<a class="footer-email" href="mailto:bonjour@catnap.co">bonjour@catnap.co</a>
	</div>
	
</footer>