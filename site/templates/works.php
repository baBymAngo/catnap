<!-- Template: Works -->
<?php snippet('html-header') ?>

<main class="projects-wrapper">
	<div class="hero no-image">
        <div class="hero-bg">
    		<?php snippet('header') ?>
            <div class="hero-wrapper margin-container">
                <h1 class="hero-header"><?= $page->hero_header() ?></h1>
                <p class="hero-copy"><?= $page->hero_subheader() ?></p>
            </div>
        </div>
	</div>

	<div class-"projects-list">
		<?php $projects = $page->children() ?>
		<?php foreach( $projects as $project ) : ?>
			<section class="project-block">
				<div class="margin-container">
					<article class="project-content">
						<h1><?= $project->title() ?></h1>
						<span class="responsibilities">
							Responsibilities: <?= $project->responsibilities() ?>
						</span>
						<p><?= $project->description() ?></p>
						<a href="<?php $page->link() ?>">View Site</a>
					</article>
					<img src="http://placehold.it/650x400" alt="Project Thumbnail" class="project-thumb">
				</div>
				
			</section>
		<?php endforeach ?>
	</div>
</main>
	
<?php snippet('footer') ?>
<?php snippet('html-footer') ?>