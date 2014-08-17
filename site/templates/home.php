<?php snippet('html-header') ?>

<main class="wrapper">
	<div class="hero">
		<?php snippet('header') ?>
	</div>

	<section class="services">
        <h1>Services</h1>
        <ul class="services-list">
            <?php $services = $page->children()  ?>
            <?php foreach( $services as $service ): ?>
                <li class="service" itemscope itemtype="https://schema.org/Service">
                    <h2 itemprop="name"><?= $service->title() ?></h2>
                    <p itemprop="description"><?= $service->blurb() ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </section>

    <section class="instagram-section">
        <div class="instagram-wrapper">
            <div id="instagram"></div>
            <div class="overlay"></div>
        </div>  
    </section>
</main>

<script src="assets/js/instafeed.min.js"></script>
<script src="assets/js/home.js"></script>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>