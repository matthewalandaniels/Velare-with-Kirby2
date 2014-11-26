<?php snippet('head') ?>
	<?php snippet('nav') ?>

		<?php 
			foreach ($page->images() as $page_image) {
				if (strpos($page_image,'-hero') !== false) {
					$hero_image = $page_image;
				}
			}
		?>

		<div class="project_hero" style="background: url('<?php echo $hero_image->url() ?>') no-repeat;	">
			<a href="<?php echo $page->vimeo_url() ?>" class="project_hero_button">
				<div class="play_button">
					<svg version="1.1" class="play_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
	 				<path d="M50,0c-8.8,0-17.4,2.3-25,6.7C1.1,20.5-7.1,51.1,6.7,75c4.4,7.6,10.7,13.9,18.3,18.3c23.9,13.8,54.5,5.6,68.3-18.3	c4.4-7.6,6.7-16.2,6.7-25C100,22.4,77.6,0,50,0z M39.3,68.6V31.4L71.5,50L39.3,68.6z"/>
					</svg>
				</div>
				<div class="text">
					<p class="couple"><?php echo $page->title() ?></p>
					<p class="location"><?php echo $page->location() ?></p>
				</div>
			</a>	
		</div>
		<div class="center_wrapper">
			<section class="project_info">
				<div class="description"><?php echo kirbytext($page->description()) ?></div>
				<div class="credits"><?php echo kirbytext($page->credits()) ?></div>
			</section>
		</div>
		
	<?php if ($page->toggle() == 'true'): ?>
		<section class="film_stills">
			<p class="section_title">Film Stills</p>
			<div class="owl-carousel">
				<?php foreach ($page->images() as $page_image): ?>
					<?php if (strpos($page_image,'-hero') == false && strpos($page_image, '-thumb') == false): ?>
						<img class="item" src="<?php echo $page_image->url() ?>">
					<?php endif ?>
				<?php endforeach ?>
			</div>
		</section>
	<?php endif ?>

	<?php snippet('footer') ?>
	<?php snippet('contact_info') ?>
	<?php snippet('mobile_menu_items') ?>

<?php snippet('tail') ?>