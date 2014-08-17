<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="projects-wrapper">
	<div class="row banner"><h1>Projects</h1></div>
	<div id="project-scroller">
		<?php $projects = $page->children() ?>
		<?php $index = 0 ?>
		<?php foreach( $projects as $project ) : ?>
			<?php if ($index%2==0) : ?>

				<!-- EVEN PROJECT -->
				<section class="project-section">
					<article class="side side-left">
						<h2><?= $project->title() ?></h2>
						<p><?= $project->blurb() ?></p>
						<div class="link-wrapper">
							<a href="<?php $page->link() ?>">View Project</a>
						</div>
					</article>

					<figure class="side side-right">
						<div class="browser"><img src="http://placekitten.com/800/500" alt="<?= $project->title() ?>"></div>
					</figure>
				</section>
				<?php $index++ ?>

			<?php else : ?>

				<!-- ODD PROJECT -->
				<section class="project-section">
					<figure class="side side-left">
						<div class="browser"><img src="http://placekitten.com/800/500" alt="<?= $project->title() ?>"></div>
					</figure>

					<article class="side side-right">
						<h2><?= $project->title() ?></h2>
						<p><?= $project->blurb() ?></p>
						<div class="link-wrapper">
							<a href="<?php $page->link() ?>">View Project</a>
						</div>
					</article>
				</section>
				<?php $index++ ?>

		<?php endif ?>
		<?php endforeach ?>
	</div>
</main>
<script src="../assets/js/classie.js"></script>
<script src="../assets/js/scroller.js"></script>
<script>
	new cbpScroller( document.getElementById('project-scroller') );
</script>
<?php snippet('footer') ?>