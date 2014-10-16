	</div> <!-- end mega wrapper -->
	<?php echo js(array('assets/js/jquery-1.11.0.min.js', 
											'assets/js/owl.carousel.js', 
											'assets/js/nivo-lightbox.js', 
											'assets/js/jquery.fitvids.js',
											'assets/js/nav-animation.js',
											'assets/js/jquery.tipsy.js',
											'assets/js/jquery.smoove'
	)) ?>

	<script> /*owl carousel*/
		$('.owl-carousel').owlCarousel({
		    center:true,
		    items:2,
		    loop:true,
		    margin:10,
		});
	</script>
	<script> /*nivo lightbox*/
		$(document).ready(function(){
		    $('a').nivoLightbox();
		});
	</script>
	<script> /*fitVid*/
	  $(document).ready(function(){
	    // Target your .container, .wrapper, .post, etc.
	    $(".center_wrapper").fitVids();
	  });
	</script>
	<script> /*tipsy tooltip*/
		$(document).ready(function() {
		     $('.pin').tipsy();
		});
	</script>
	<script> /*smoov*/
		$(document).ready(function() {
			$('.foo').smoove();
		});
	</script>

</body>
</html>


