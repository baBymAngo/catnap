<nav class="mobile-nav">
	<div class="margin-container">
		<?php foreach($pages->visible() as $p): ?>
		<a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
		<?php endforeach ?>
	</div>
</nav>