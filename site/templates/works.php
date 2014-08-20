<?php snippet('html-header') ?>

<main class="projects-wrapper">
	<div class="hero">
        <div class="hero-bg">
    		<?php snippet('header') ?>
            <div class="hero-wrapper margin-container">
                <h1 class="hero-header">Just some stuff we put together :)</h1>
                <p class="hero-copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum minus ex atque neque aut officiis corrupti tenetur cupiditate, repellat earum.</p>
            </div>
        </div>
	</div>

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
						<div class="ipad"><img src="http://placekitten.com/800/500" alt="<?= $project->title() ?>"></div>
					</figure>
				</section>
				<?php $index++ ?>

			<?php else : ?>

				<!-- ODD PROJECT -->
				<section class="project-section">
					<figure class="side side-left">
						<div class="ipad"><img src="http://placekitten.com/800/500" alt="<?= $project->title() ?>"></div>
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
<script src="../assets/js/vendors/classie.js"></script>
<script src="../assets/js/vendors/scroller.min.js"></script>
<script>
(function(){
	new cbpScroller( document.getElementById('project-scroller') );
})();	
</script>
<?php snippet('footer') ?>
<?php snippet('html-footer') ?>