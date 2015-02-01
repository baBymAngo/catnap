<footer id="footer">

	<!-- Microdata -->
	<div itemscope itemtype="http://schema.org/LocalBusiness">
		<link itemprop="url" href="http://catnap.co" >
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
		<?= kirbytext( $site->copyright() ) ?>
	</div>
	
</footer>