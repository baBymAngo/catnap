<?php snippet('html-header') ?>
<?php snippet('hero') ?>

<section class="content-section content-section--members">
	<div class="margin-container">
		<div class="section-header">
			<h2><?= $page->bios_header() ?></h2>
			<?= kirbytext( $page->bios_subheader() ) ?>
		</div>
		<div class="members">
			<?php $members = $page->find('members')->children() ?>
			<?php foreach( $members as $member ): ?>
				<div class="member">
					<img class="member-image" src="<?= $member->images()->find('portrait.jpg')->url() ?>" alt="<?= $member->name() ?>">
					<h3 class="member-name"><?= $member->name() ?></h3>
					<div class="member-job"><?= $member->job() ?></div>
					<a class="member-link" href="http://<?= $member->link() ?>"><?= $member->link() ?></a> 
				</div>
			<?php endforeach ?>
		</div>
		<a href="contact" class="members-button btn">Contact Us</a>
	</div>
</section>

<section class="content-section content-section--light">
	<div class="margin-container">
		<div class="section-header">
			<h2><?= $page->philosophy_header() ?></h2>
			<?= kirbytext( $page->philosophy_subheader() ) ?>
		</div>
		<div class="principles">
			<?php $principles = yaml( $page->principles() ) ?>
			<div class="principles-column principles-left">
				<?php foreach($principles as $principle): ?>
					<?php if($principle['principle_lr']=='left'): ?>
						<div class="principle">
							<h3><?= $principle['principle'] ?></h3>
							<?= kirbytext( $principle['principle_desc'] ) ?>
						</div>
					<?php endif ?>
				<?php endforeach ?>
			</div>
			<div class="principles-column principles-right">
				<?php foreach($principles as $principle): ?>
					<?php if($principle['principle_lr']=='right'): ?>
						<div class="principle">
							<h3><?= $principle['principle'] ?></h3>
							<?= kirbytext( $principle['principle_desc'] ) ?>
						</div>
					<?php endif ?>
				<?php endforeach ?>
			</div>
		</div>

	</div>
</section>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>