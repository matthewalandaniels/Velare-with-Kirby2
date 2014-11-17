<?php snippet('head') ?>

	<?php snippet('nav') ?>

<div class="center_wrapper">	
	<div id="contact_info_mobile">
		<div class="intro">
			<p class="title">Contact Info</p>
			<p class="text"><?php echo $site->find('contact')->contact_text() ?></p>
		</div>
		
		<div class="info">
		<section class="row">
			<div class="email_icon"><img src="../assets/img/email_icon_grey.svg"></div>
			<div class="email_address"><a href="mailto:hello@velare.tv?Subject=Hello" target="_blank"><?php echo $site->find('contact')->email() ?></a></div>
		</section>

		<section class="row">
			<div class="phone_icon"><img src="../assets/img/phone_icon_grey.svg"></div>
			<div class="phone_number"><?php echo $site->find('contact')->phone() ?></div>
		</section>
		</div>
	</div>
</div> <!-- end center wrapper -->

		<?php snippet('footer') ?>
		<?php snippet('mobile_menu_items') ?>


<?php snippet('tail') ?>