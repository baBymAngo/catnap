<!-- Template: About -->
<?php snippet('html-header') ?>

<main class="about-wrapper">

	<div class="hero no-image">
        <div class="hero-bg">
    		<?php snippet('header') ?>
            <div class="hero-wrapper margin-container">
                <h1 class="hero-header"><?= html( $page->hero_header() ) ?></h1>
                <p class="hero-copy"><?= html( $page->hero_subheader() ) ?></p>
            </div>
        </div>
	</div>

	<div class="the-team">
		<?php $team = $page->children()->find('team-1')->children() ?>
		<?php foreach ($team as $person): ?>
			<article class="person" itemscope itemtype="http://schema.org/Person">
				<img src="http://placehold.it/150x150" alt="" itemprop="image">
				<h1 class="person-name" itemprop="givenName"><?= $person->name() ?></h1>
				<span class="person-job" itemprop="jobTitle"><?= $person->job() ?></span>
				<p class="person-bio" itemprop="description"><?= $person->bio() ?></p>
			</article>
		<?php endforeach ?>
	</div>

	<section class="services">
        <div class="margin-container">
            <?php $services = $page->children()->find('services-2') ?>
            <h1 class="section-header"><?= $services->header() ?></h1>
            <p class="section-subheader"><?= html( $services->subheader() ) ?></p>
            <ul class="services-list">
                <?php $services = $pages->find('home/services-1')->children()  ?>
                <?php foreach( $services as $service ): ?>
                    <li class="service" itemscope itemtype="https://schema.org/Service">
                        <div class="service-wrapper">
                            <?php $src = $service->images()->first()->url() ?>
                            <img src="<?= $src ?>" alt="<?= $service->title() ?>" class="section-thumb" itemprop="image">
                            <div class="service-copy">
                                <h2 itemprop="name"><?= html( $service->title() ) ?></h2>
                                <p itemprop="description"><?= html( $service->description() ) ?></p>
                            </div>
                            
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>

</main>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>