<?php snippet('head') ?>
	<?php snippet('nav') ?>

		<div class="center_wrapper">

			<section class="blog_post">
				<p class="date"><?php echo strftime('%b. %d %Y', $page->date()) ?></p>
				<div class="content">
					<p class="title"><?php echo $page->title() ?></p>
					
					<?php echo $page->vimeo_embed() ?>
					
					<div class="fb-like" data-href="<?php echo $page->url() ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
					
					<div class="text"><?php echo kirbytext($page->text()) ?></div>

				</div>
			</section>

    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'velaretest'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    

	    <section class="pagination">
				
			<?php if($next = $page->nextVisible()): ?>
				<a href="<?php echo $next->url() ?>" class="newer">
					<img src="../assets/img/arrow.svg" alt="" class="arrow_newer"><?php echo $next->title() ?>
				</a>
			<?php endif ?>

			<?php if($prev = $page->prevVisible()): ?>
				<a href="<?php echo $prev->url() ?>" class="older">
					<?php echo $prev->title() ?><img src="../assets/img/arrow.svg" alt="" class="arrow_older">
				</a>
			<?php endif ?>
			</section>
    
		</div> <!-- end center wrapper -->

	<?php snippet('footer') ?>
	<?php snippet('contact_info') ?>
<?php snippet('tail') ?>
