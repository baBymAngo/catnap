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

	<a class="footer-logo" href="<?= url('home') ?>"><img src="<?= url('assets/images/logo.svg') ?>" alt="<?= $site->title() ?>"></a>
	<a href="mailto:bonjour@catnap.co">bonjour@catnap.co</a>
	<span class="footer-msg">proudly made in greensboro, nc</span>
	<div class="sm-footer">
		<a href="#"><i class="fa fa-facebook"></i></a><br>
		<a href="#"><i class="fa fa-tumblr"></i></a>
		<a href="#"><i class="fa fa-dribble"></i></a>
		<a href="#"><i class="fa fa-instagram"></i></a>
	</div>
</footer>

</body>

</html>