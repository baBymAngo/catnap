<header id="header">		
	<div class="margin-container">		
	    <a class="logo" href="<?= url('home') ?>"><?php include(__DIR__.'/../../assets/images/catnap.svg') ?></a>
		<nav class="main-menu">
	    	<?php foreach($pages->visible() as $p): ?>
	    	<a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
	    	<?php endforeach ?>
    	</nav>
  	</div>
</header>