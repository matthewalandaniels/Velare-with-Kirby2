	</div> <!-- end mega wrapper -->
	<?php echo js(array('assets/js/jquery-1.11.0.min.js', 
											'assets/js/owl.carousel.js', 
											'assets/js/nivo-lightbox.js', 
											'assets/js/jquery.fitvids.js',
											'assets/js/nav-animation.js',
											'assets/js/jquery.tipsy.js',
											'assets/js/jquery.smoove.js'
	)) ?>

	<script> /*owl carousel*/
		$('.owl-carousel').owlCarousel({
		    center:true,
		    items:2,
		    loop:true,
		    margin:10,
		    responsive:{
		    	0:{
            items:1,
          },
          550:{
            items:2,
          }
        }
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
	<script> /*google analytics*/
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-31724684-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<script> /*smoove*/
		$(document).ready(function() {
		     $('.foo').smoove();
		});
	</script>

</body>
</html>


