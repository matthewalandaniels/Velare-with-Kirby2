<div id="mobile_menu_items">
	<?php foreach($pages->visible() as $p): ?>
		<a class="link" <?php e($p->isOpen(), 'class="selected"') ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
	<?php endforeach ?>
		<a href="contact" class="link">Contact</a>
</div>