<?php snippet('head') ?>

	<?php snippet('nav') ?>

		<?php 
			foreach ($page->images() as $page_image) {
				if (strpos($page_image,'-hero') !== false) {
					$hero_image = $page_image;
				}
			}
		?>

		<div class="about_hero" style="background: url('<?php echo $hero_image->url() ?>') no-repeat;	">
				<span class="title"><?php echo $page->hero_title() ?></span>
				<div class="divider"></div>
		</div>
		<div class="center_wrapper">
			<section class="about_info">
				<p class="headline"><?php echo $page->about_headline() ?></p>
				<div class="text"><?php echo kirbytext($page->about_text()) ?></div>
			</section>

			<section class="team">
				<p class="headline"><?php echo $page->find('team')->team_headline() ?></p>
				<div class="profiles">
					<?php foreach($page->children()->find('team')->children()->visible()->limit(4) as $profile): ?>
						<div class="profile">
							<img src="<?php echo $profile->image()->url() ?>" alt="">
							<p class="first_name"><?php echo $profile->first_name() ?></p>
							<p class="last_name"><?php echo $profile->last_name() ?></p>
							<p class="job_title"><?php echo $profile->job_title() ?></p>
							<p class-"twitter_handle"><a href="https://twitter.com/<?php echo $profile->twitter_name() ?>">@<?php echo $profile->twitter_name() ?></a></p>
						</div>
					<?php endforeach ?>
				</div>
			</section>

			<section class="locations">
				<p class="section_title"><?php echo $page->find('locations')->locations_headline() ?></p>
				<p class="description"><?php echo $page->find('locations')->locations_text() ?></p>
				<div class="map_wrapper">
					<img src="assets/img/map.svg" alt="" class="map">
					<?php foreach($page->children()->find('locations')->children()->visible() as $location): ?>
						<div class="pin" 
						     title="<?php echo $location->title() ?>" 
						     style="top: <?php echo $location->top() ?>%; 
						            left: <?php echo $location->left() ?>%">
	          </div>
					<?php endforeach ?>
				</div>
			</section>

			<section class="logos">
				<p class="section_title">Lorem Ipsum dolor</p>
				<a href="" class="logo martha"><img src="assets/img/martha.svg"></a>
				<a href="" class="logo free"><img src="assets/img/free.svg"></a>
				<a href="" class="logo knot"><img src="assets/img/knot.svg"></a>
				<a href="" class="logo green"><img src="assets/img/green.svg"></a>
				<a href="" class="logo chicks"><img src="assets/img/chicks.svg"></a>
				<a href="" class="logo couture"><img src="assets/img/couture.svg"></a>
				<a href="" class="logo fab"><img src="assets/img/fab.svg"></a>
				<a href="" class="logo mywedding"><img src="assets/img/mywedding.svg"></a>
				<a href="" class="logo weddingwire"><img src="assets/img/weddingwire.svg"></a>
				<a href="" class="logo bridal"><img src="assets/img/bridal.svg"></a>
			</section>
		</div>

		<?php snippet('footer') ?>
		<?php snippet('contact_info') ?>
		<?php snippet('mobile_menu_items') ?>

<?php snippet('tail') ?>