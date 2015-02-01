<?php snippet('html-header') ?>
<?php snippet('hero') ?>

<section class="content-section project-websites">
	<?php $websites = $page->find('websites') ?>
	<div class="margin-container">
		<div class="section-header">
			<h2><?= $websites->title() ?></h2>			
			<?= kirbytext( $websites->text() ) ?>
		</div>
		<?php $websites = $websites->children() ?>
		<?php foreach( $websites as $website ) : ?>
			<div class="project-website">
				<?php if($website->link()): ?>
					<a href="<?= $website->link() ?>">
						<img src="http://placehold.it/700x400" alt="Project Thumbnail" class="project-thumb">
					</a>
				<?php else: ?>
					<img src="http://placehold.it/700x400" alt="Project Thumbnail" class="project-thumb">
				<?php endif ?>
				<div class="project-content">
					<div class="project-title">
						<h3><?= $website->title() ?></h3>
						<a class="btn btn-grey btn-tiny" href="<?= $website->link() ?>">Visit the site &#10140;</a>
					</div>
					<?= kirbytext( $website->text() ) ?>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</section>

<section class="content-section content-section--light">
	<?php $shirts = $page->find('shirts') ?>
	<div class="margin-container">
		<div class="section-header">
			<h2><?= $shirts->title() ?></h2>			
			<?= kirbytext( $shirts->text() ) ?>
		</div>
	</div>
	<div class="project-shirts">
		<?php $shirts = $shirts->images() ?>
		<?php foreach( $shirts as $shirt ) : ?>
			<div class="project-shirt">
				<img src="<?= $shirt->url() ?>" alt="Project Thumbnail" class="project-thumb">
			</div>
		<?php endforeach ?>
	</div>
</section>

<section class="content-section">
	<?php $logos = $page->find('logos') ?>
	<div class="margin-container">
		<div class="section-header">
			<h2><?= $logos->title() ?></h2>			
			<?= kirbytext( $logos->text() ) ?>
		</div>
		<div class="project-logos">
			<?php $logos = $logos->images() ?>
			<?php foreach( $logos as $logo ) : ?>
				<div class="project-logo">
					<img src="<?= $logo->url() ?>" alt="Project Thumbnail" class="project-thumb">
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>