@extends('welcome')
@section('content')
<!--About Section--> 
<div class="page-header">
            <div class="container">
            </div>
            <div class="breadcrumb-box">
                <div class="container">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index-2.html">Нүүр</a>
                        </li>
                        <li class="active">Холбоо барих</li>
                    </ul>
                </div>
            </div>
        </div>
<!--About Section-->
<!--Portfolio Section-->
<section class="padding ptb-xs-40 contact-form__block">
	<div class="container">
		<div class="row">
			
			@include('contents.sidebar')

			<div class="col-md-10 text-center">
				<div class="headeing pb-20 mb-30">
					<h2>Keep in Touch</h2>
					<span class="b-line"></span>
				</div>

				<p class="lead">
					Nullam dictum felis eu pede mollis pretium leo eget bibendum sodales augue velit cursus. tellus eget condimentum rhoncus sem quam semper libero.
				</p>
				<div class="row text-center">
					<div class="col-sm-4">
						<i class="ion-android-call icon-circle pos-s"></i><a href="#" class="mt-15 i-block">+(976) 70139977</a>
					</div>
					<div class="col-sm-4">
						<i class="ion-ios-location icon-circle pos-s"></i>
						<p  class="mt-15">
							Үйлдвэрийн гудамж, 3-р хороо, Хан-Уул дүүрэг, Улаанбаатар - 17062,
							<br />
							Монгол Улс, Ш/Х 36/434
						</p>
					</div>
					<div class="col-sm-4">
						<i class="ion-ios-email icon-circle pos-s"></i><a href="mailto:business@support.com"  class="mt-15 i-block">marketing@gobi.mn</a>
					</div>
				</div>
			
			<!-- Map Section -->
			<div id="overlay" class="col-md-12">
			    <iframe src="https://www.google.com/maps/d/embed?mid=1LLdaTCHj2mH8OJTejevn4k2eO3WzTp19" width="100%"  height="480"></iframe>
			</div>
			<!-- Map Section -->
			</div>
		</div>
	</div>

				<!-- <div class="container contact-form text-center pt-80 pt-xs-60 mt-up">
					<div class="row">
						<div class="col-sm-12">
							<div class="headeing pb-20">
								<h2>Get in Touch</h2>
								<span class="b-line"></span>
							</div>
							<p>
								Nullam dictum felis eu pede mollis pretium.
							</p> -->
							<!-- Contact FORM -->
							<!-- <form id="contact" class="mt-30"> -->
								<!-- IF MAIL SENT SUCCESSFULLY -->
								<!-- <div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Thanks</strong>  Your message has been sent.
									</div>
								</div> -->
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<!-- <div class="row">
									<div class="col-sm-6">
										<div class="form-field">
											<input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name">
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" >
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message" ></textarea>
										</div>
									</div>
									<div class="col-sm-12 mt-30">
										<button class="btn-text" type="button" id="submit" name="button">
											Send Message
										</button>
									</div>
								</div> -->
							<!-- </form> -->
							<!-- END Contact FORM -->
						<!-- </div>
					</div>
				</div -->>
			
</section>
<!--Portfolio Section End-->
@endsection
@section('scripts')

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFBKjEzShhrnM5lW9gFzUyvWzf9H7TC6s"></script>
	<script>

	    /*
	    Map Settings

	        Find the Latitude and Longitude of your address:
	            - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
	            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

	    */

	    // Map Markers
	    var mapMarkers = [{
	        address: "217 Summit Boulevard, Birmingham, AL 35243",
	        html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
	        icon: {
	            image: "img/pin.png",
	            iconsize: [26, 46],
	            iconanchor: [12, 46]
	        }
	    },{
	        address: "645 E. Shaw Avenue, Fresno, CA 93710",
	        html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
	        icon: {
	            image: "img/pin.png",
	            iconsize: [26, 46],
	            iconanchor: [12, 46]
	        }
	    },{
	        address: "New York, NY 10017",
	        html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
	        icon: {
	            image: "img/pin.png",
	            iconsize: [26, 46],
	            iconanchor: [12, 46]
	        }
	    }];

	    // Map Initial Location
	    var initLatitude = 47.916559;
	    var initLongitude = 106.915292;

	    // Map Extended Settings
	    var mapSettings = {
	        controls: {
	            draggable: (($.browser.mobile) ? false : true),
	            panControl: true,
	            zoomControl: true,
	            mapTypeControl: true,
	            scaleControl: true,
	            streetViewControl: true,
	            overviewMapControl: true
	        },
	        scrollwheel: false,
	        markers: mapMarkers,
	        latitude: initLatitude,
	        longitude: initLongitude,
	        zoom: 10
	    };

	    var map = $('#googlemaps').gMap(mapSettings),
	        mapRef = $('#googlemaps').data('gMap.reference');

	    // Map Center At
	    var mapCenterAt = function(options, e) {
	        e.preventDefault();
	        $('#googlemaps').gMap("centerAt", options);
	    }

	    // Styles from https://snazzymaps.com/
	    var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

	    var styledMap = new google.maps.StyledMapType(styles, {
	        name: 'Styled Map'
	    });

	    mapRef.mapTypes.set('map_style', styledMap);
	    mapRef.setMapTypeId('map_style');
	</script>
	<script>
	    $(document).ready(function () {

	        $('#map').addClass('scrolloff');                // set the mouse events to none when doc is ready
	        
	        $('#overlay').on("mouseup",function(){          // lock it when mouse up
	            $('#map').addClass('scrolloff'); 
	            //somehow the mouseup event doesn't get call...
	        });
	        $('#overlay').on("mousedown",function(){        // when mouse down, set the mouse events free
	            $('#map').removeClass('scrolloff');
	        });

	        $("#map").mouseleave(function () {              // becuase the mouse up doesn't work... 
	            $('#map').addClass('scrolloff');            // set the pointer events to none when mouse leaves the map area
	                                                        // or you can do it on some other event
	        });
	        
	    });
	</script>

@endsection