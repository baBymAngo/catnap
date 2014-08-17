<header>		
	<div class="margin-container">		
	    <a class="logo" href="<?= url('home') ?>"><img src="<?= url('assets/images/logo.svg') ?>" alt="<?= $site->title() ?>"></a>
		<nav class="main-nav">
	    	<?php foreach($pages->visible() as $p): ?>
	    	<a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
	    	<?php endforeach ?>
    	</nav>
  	</div>
</header>