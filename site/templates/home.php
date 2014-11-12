<?php snippet('head') ?>

		<?php snippet('nav') ?>

		<div class="home_hero"
				 style="background: url('<?php echo $page->image('first-frame.jpg')->url() ?>') no-repeat;">
			<a href="<?php echo $page->vimeo_url() ?>" class="home_hero_button">
			<span class="title"><?php echo $page->reel_title() ?></span>
			<div class="divider1"></div>
			<span class="date"><?php echo $page->reel_date() ?></span>
			<div class="divider2"></div>
			<span class="play_triangle"></span>
			</a>

			<video 
				class="vid_bg"
				autoplay="autoplay"
				loop="loop"
				poster="assets/img/transparent.gif"
			>

			<?php foreach ($page->videos() as $video) {
				switch ($video->extension()) {
					case 'webm':
						$webm = $video;
						break;
					case 'mp4':
						$mp4 = $video;
						break;
				}
			} ?>

			<source src="<?php echo $webm->url() ?>" type="<?php echo $webm->mime() ?>">
			<source src="<?php echo $mp4->url() ?>" type="<?php echo $mp4->mime() ?>">
  		</video>

		</div>

		<section class="portfolio">
			<p class="section_title"><?php echo $page->portfolio_title() ?></p>
			
			<?php foreach(page('projects')->children()->visible()->limit(12) as $project): ?>
				<a href="<?php echo $project->url() ?>" class="project_thumb">
					
					<?php foreach ($project->images() as $project_image): ?>
						<?php if (strpos($project_image,'-thumb') !== false): ?>
							<img src="<?php echo $project_image->url() ?>">
						<?php endif ?>
					<?php endforeach ?>

					<div class="overlay">
						<div class="text">
							<p class="couple"><?php echo html($project->title()) ?></p>
							<p class="location"><?php echo html($project->location()) ?></p>
						</div>
					</div>
				</a>
			<?php endforeach ?>

		</section> <!-- end portfolio -->

		<?php snippet('footer') ?>

		<?php snippet('contact_info') ?>
		<?php snippet('mobile_menu_items') ?>
		
<?php snippet('tail') ?>