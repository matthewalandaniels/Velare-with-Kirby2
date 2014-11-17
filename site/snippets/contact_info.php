<div id="contact_info">
		<div class="intro">
			<p class="title">Contact Info</p>
			<p class="text"><?php echo $pages->find('contact')->contact_text() ?></p>
		</div>
		
		<div class="info">
		<section class="row">
			<div class="email_icon"><img src="../assets/img/email_icon.svg"></div>
			<div class="email_address"><a href="#"><?php echo $pages->find('contact')->email() ?></a></div>
		</section>

		<section class="row">
			<div class="phone_icon"><img src="../assets/img/phone_icon.svg"></div>
			<div class="phone_number"><?php echo $pages->find('contact')->phone() ?></div>
		</section>
		</div>
</div>