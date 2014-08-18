<?php snippet('html-header') ?>

<main class="wrapper">
	<div class="hero">
		<?php snippet('header') ?>
        <div class="margin-container">
            <meta class="adjectives" data-adjectives="<?= $page->adjectives() ?>">
            <h1 class="hero-header">Websites with <span id="typed-txt"></span><span id="typed-cursor"></span></h1>
            <p class="hero-copy"><?= $site->description() ?></p>
            <div class="hero-link-block">
                <a href="<?= url('works') ?>">See our work</a>
                <a href="<?= url('about') ?>">Meet the team</a>
            </div>
        </div>
	</div>

	<section class="services">
        <div class="margin-container">
            <?php $services = $pages->find('home/services-1') ?>
            <h1 class="section-header"><?= $services->header() ?></h1>
            <p class="section-subheader"><?= html( $services->subheader() ) ?></p>
            <ul class="services-list">
                <?php $services = $services->children()  ?>
                <?php foreach( $services as $service ): ?>
                    <li class="service" itemscope itemtype="https://schema.org/Service">
                        <?php if ( $service->hasImages() ) {
                            $src = $service->images()->last()->url();
                        } else {
                            $src = "";
                        } ?>
                        <img src="<?= $src ?>" alt="<?= $service->title() ?>" class="section-thumb" itemprop="image">
                        <h2 itemprop="name"><?= html( $service->title() ) ?></h2>
                        <p itemprop="description"><?= html( $service->blurb() ) ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
            <a href="<?= url('about') ?>">Learn more about us</a>
        </div>
    </section>

    <section class="instagram-section">
        <div class="instagram-wrapper">
            <div id="instagram"></div>
            <div class="overlay"></div>
        </div>  
    </section>
</main>

<script src="assets/js/vendors/typed.js"></script>
<script src="assets/js/vendors/instafeed.min.js"></script>
<script src="assets/js/home.js"></script>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>