<!-- Template: Works -->
<?php snippet('html-header') ?>

<main id="work main" class="content">

	<?php snippet('hero') ?>

	<section class="content-section projects">
		<div class="margin-container">
			<?php $projects = $page->children() ?>
			<?php foreach( $projects as $project ) : ?>
				<div class="project-block">
					<img src="http://placehold.it/700x400" alt="Project Thumbnail" class="project-thumb">
					<div class="project-content">
						<h2><?= $project->title() ?></h2>
						<?= kirbytext( $project->text() ) ?>
						<a href="<?php $page->link() ?>">Visit the site</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</section>
</main>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>