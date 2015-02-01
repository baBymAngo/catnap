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
				<?php $image = $website->images()->find('screenshot.png') ?>
				<?php if($image): ?>
					<div class="project-website--browser">
						<div class="toolbar">
							<div class="traffic-lights">
								<div class="traffic-light red"></div>
								<div class="traffic-light yellow"></div>
								<div class="traffic-light green"></div>
							</div>
							<div class="address-bar"></div>
						</div>
						<img src="<?= $image->url() ?>" alt="<?= html( $website->title() )?>" class="project-website--thumb">
					</div>
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

<section class="content-section content-section--light">
	<div class="margin-container">
		<div class="section-header">
			<h2><?= $page->CTA_header() ?></h2>			
			<?= kirbytext( $page->CTA_text() ) ?>
			<a class="btn" href="contact"><?= $page->CTA_button() ?></a>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>