<!-- Site Wrapper --> 
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script> 
<!-- bootstrap Js --> 
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script> 
<!-- Parallax Js --> 
<script src="{{ asset('js/jquery.stellar.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/waypoints.min.js') }}"></script>

<!-- masonry,isotope Effect Js --> 
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/isotope.pkgd.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/masonry.pkgd.min.js') }}" type="text/javascript"></script> 
<!-- Appear Js --> 
<script src="{{ asset('js/jquery.appear.js') }}" type="text/javascript"></script> 
<!-- fancybox Js --> 
<script src="{{ asset('js/jquery.mousewheel-3.0.6.pack.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/jquery.fancybox.pack.js') }}" type="text/javascript"></script> 
<!--popup js-->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>

<!-- Carousel Js --> 
<script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript"></script> 
<!-- custom Js --> 
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/isotope-custom.js') }}" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		  $('.nav-toggle').click(function(){
			//get collapse content selector
			var collapse_content_selector = $(this).attr('href');

			//make the collapse content to be shown or hide
			var toggle_switch = $(this);
			$(collapse_content_selector).toggle(function(){
			  if($(this).css('display')=='none'){
                                //change the button label to be 'Show'
				toggle_switch.html('NewsLetter');
			  }else{
                                //change the button label to be 'Hide'
				toggle_switch.html('x');
			  }
			});
		  });

		});
</script>