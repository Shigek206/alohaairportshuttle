<section class="footer-cnt">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 txt-left">
				<h3>Aloha Airport Shuttle</h3>
				<p><em>Shuttle service to and from the Honolulu Airport</em></p>

				<ul>
					<li><a href="https://www.facebook.com/alohaairportshuttle/?rf=206813892697382" title="Find Us on Facebook" target="_blank"><img src="graphics/facebook-aloha-airport-shuttle.png" alt="Find Us on Facebook"></a></li>
					<li><a href="https://www.yelp.com/biz/aloha-airport-shuttle-honolulu" title="Yelp Reviews" target="_blank"><img src="graphics/yelp-aloha-airport-shuttle.png" alt="Yelp Reviews"></a></li>
					<li><a href="https://www.tripadvisor.com/Attraction_Review-g60982-d8050358-Reviews-Aloha_Airport_Shuttle-Honolulu_Oahu_Hawaii.html" title="TripAdvisor Reviews" target="_blank"><img src="graphics/tripadvisor-aloha-airport-shuttle.png" alt="TripAdvisor Aloha Airport Shuttle"></a></li>
				</ul>

				<span>&copy; 2019 Aloha Airport Shuttle | Powered by <a href="https://www.marctakeuchi.com" title="bamboo.digital">bamboo.digital</a></span>
			</div>
			<div class="col-xs-12 col-sm-6 txt-right">
				<h3>Contact Us Today!</h3>
				<p><strong>Phone:</strong> <a href="tel:+1-808-538-3355" title="1-808-538-3355">1-808-538-3355</a><br />
				<strong>Toll-Free(U.S & Canada):</strong> <a href="tel:+1-855-538-3355" title="1-855-538-3355">1-855-538-3355</a><br />
				<strong>Email:</strong> <a href="mailto:info@alohaairportshuttle.com" class="email" title="Email Us">info@alohaairportshuttle.com</a></p>

				<span>
					<a href="/" title="">Home</a> <a href="rates" title="Rates">Rates</a> <a href="arrival-information" title="Arrival Information">Arrival Information</a> <a href="frequently-asked-questions" title="Frequently Asked Questions">FAQs</a>
				</span>
			</div>
		</div>
	</div>
</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="scripts/jquery.bxslider.min.js"></script>
<script src="scripts/featherlight.min.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){


	$(window).scroll(function() {
		// 100 = The point you would like to fade the nav in.
  
		if ($(window).scrollTop() > 100 ){
    		$('.navbar-default').addClass('no-op');
    		$('.sub-nav-mobile').addClass('no-op');
    
  		} else {
    		$('.navbar-default').removeClass('no-op');
    		$('.sub-nav-mobile').removeClass('no-op');
 		};   	
	});

	$('.scroll').on('click', function(e){		
		e.preventDefault()
	    
	  $('html, body').animate({
	      scrollTop : $(this.hash).offset().top
	    }, 1500);
	});

	$('.bxslider').bxSlider({
		auto: true,
		controls: false,
		autoControls: false,
		pager: false,
		mode: 'fade',
		speed: 4000
	});

	$(".nav a").on("click", function(){
   		$(".nav").find(".active").removeClass("active");
   		$(this).parent().addClass("active");
	});
});
</script>