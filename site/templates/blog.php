<?php snippet('head') ?>
	<?php snippet('nav') ?>

		<div class="center_wrapper">

			<?php $articles = $page->children()->visible()->flip()->paginate(10) ?>
				<?php foreach($articles as $article): ?>
					<section class="blog_post">
						<p class="date"><?php echo strftime('%b. %d %Y', $article->date()) ?></p>
						<div class="content">
							<a href="<?php echo $article->url() ?>"><p class="title"><?php echo $article->title() ?></p></a>
							<?php echo $article->vimeo_embed() ?>
							<div class="text"><?php echo kirbytext($article->text()->excerpt(300)) ?></div>
							<a href="<?php echo $article->url()?>" class="read_more">Read More</a>
						</div>
					</section><!-- end blog post -->
				<?php endforeach ?>
				
			<?php if($articles->pagination()->hasPages()): ?>
				<section class="pagination">
					<?php if($articles->pagination()->hasPrevPage()): ?>
						<a href="<?php echo $articles->pagination()->prevPageURL() ?>" class="newer">
							<img src="../assets/img/arrow.svg" alt="" class="arrow_newer">Newer Posts
						</a>
					<?php endif ?>

					<?php if($articles->pagination()->hasNextPage()): ?>
						<a href="<?php echo $articles->pagination()->nextPageURL() ?>" class="older">
							Older Posts<img src="../assets/img/arrow.svg" alt="" class="arrow_older">
						</a>
					<?php endif ?>
				<?php endif ?>
				</section>
		</div> <!-- end center wrapper -->

	<?php snippet('footer') ?>
	<?php snippet('contact_info') ?>
	<?php snippet('mobile_menu_items') ?>

<?php snippet('tail') ?>
