<?php snippet('html-header') ?>

<main id="home main" class="content">

	<section class="hero">
		<?php snippet('header') ?>
        <div class="hero-wrapper margin-container">
            <meta class="adjectives" data-adjectives="<?= $page->adjectives() ?>">
            <h1 class="hero-header">Websites with spirit.</h1>
            <?= kirbytext( $site->description() ) ?>
            <img src="<?= $page->images()->find('macbook.png')->url() ?>" alt="" class="hero-image">
        </div>
	</section>

	<section class="content-section services">
        <div class="margin-container">
            <?php $services_page = $site->find('services') ?>
            <h2 class="section-header"><?= $services_page->homepage_header() ?></h2>
            <p class="section-subheader"><?= html( $services_page->homepage_subheader() ) ?></p>
            <ul class="services-list">
                <?php $services = $services_page->children()  ?>
                <?php foreach( $services as $service ): ?>
                    <li class="service" itemscope itemtype="https://schema.org/Service">
                        <div class="service-wrapper">
                            <a href="<?= $services_page->url() ?>#<?= $service->slug() ?>" class="service-link">
                                <?php $src = $service->images()->first()->url() ?>
                                <img src="<?= $src ?>" alt="<?= $service->title() ?>" class="section-thumb" itemprop="image">
                                <div class="service-copy">
                                    <h3 class="service-name" itemprop="name"><?= html( $service->title() ) ?></h3>
                                    <p class="service-description" itemprop="description"><?= html( $service->blurb() ) ?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>

    <section class="content-section services">
        <div class="margin-container">
            <?= kirbytext( $page->text() ) ?>
        </div>
    </section>

    <section class="content-section instagram-block">
        <div class="instagram-wrapper">
            <div id="instagram"></div>
        </div>  
    </section>
</main>

<script src="assets/js/vendors/typed.js"></script>
<script src="assets/js/vendors/instafeed.min.js"></script>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>