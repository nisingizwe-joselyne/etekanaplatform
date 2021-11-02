<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Porto - Responsive HTML5 Template 7.4.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('front/img/favicon.ico') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('front/img/apple-touch-icon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/animate/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('front/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/theme-shop.css') }}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('front/vendor/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/rs-plugin/css/layers.css') }}">
		<link rel="stylesheet" href="{{ asset('front/vendor/rs-plugin/css/navigation.css') }}">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('front/css/skins/default.css') }}"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('front/vendor/modernizr/modernizr.min.js') }}"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="{{ asset('front/img/logo.png') }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="nav-link active" href="/">
															Home
														</a>
													</li>

													<li class="dropdown">
														<a class="nav-link" href="{{route('courses')}}">
															Courses
														</a>
													</li>
													
													<li class="dropdown">
														<a class="nav-link" href="/about-us">
															About Us
														</a>
													</li>

													<li class="dropdown">
														<a class="nav-link" href="/contact-us">
															Contact Us
														</a>
													</li>

													<li class="dropdown">
														<a class="nav-link" href="/blog">
															Blogs
														</a>
													</li>

													<li class="dropdown">
														<a class="nav-link" href="/faqs">
															FAQs
														</a>
													</li>

													@guest
@if (Route::has('login') || Route::has('register'))
<li>
	<a class="nav-link" style="font-weight: bold; text-shadow:1px 1px 1px rgb(82, 80, 80);"  href="{{ route('login') }}">
	Login / Register
</a>
</li>
@endif
@else
<li class="dropdown">
	<a class="dropdown-item dropdown-toggle active" href="index.html">
		{{ Auth::user()->name }}
	</a>
	<ul class="dropdown-menu">
		<li>
			<a class="dropdown-item" href="index.html">
				My E-tekana
			</a>
		</li>
		<li>
			<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
				Logout
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
		</li>
	</ul>
</li>

@endguest

													
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

            @yield('content')

            <footer id="footer" class="border-0 bg-dark">
				<div class="container py-4">
					<div class="row justify-content-md-center py-5 mt-3">
						<div class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-5 mb-lg-0">
							<a href="/"><img src="{{ asset('front/img/logo-dark.png') }}" alt="Logo" class="img-fluid" style="max-width: 110px;"></a>
						</div>
						<div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<ul class="list list-unstyled">
								<li class="mb-1"><a href="page-services.html" class="link-hover-style-1"> Our Services</a></li>
								<li class="mb-1"><a href="about-us.html" class="/about-us"> About Us</a></li>
								<li class="mb-1"><a href="contact-us.html" class="/contact-us"> Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Links</h5>
							<ul class="list list-unstyled">
								<li class="mb-1"><a href="page-faq.html" class="/faqs"> FAQ's</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-5 text-center text-lg-left">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
								<form method="POST" action="{{route('subscription.store')}}" class="mb-3 mb-md-0" onsubmit="return subcribe(this)">
									@csrf
								<div class="input-group input-group-rounded">
                                    <input type="email" class="form-control form-control-sm bg-light @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address" name="email" id="newsletterEmail">
									<span class="input-group-append">
										<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
									</span>
								</div>
								@error('email')
								<span class="invalid-feedback" role="alert">
								  <strong>{{ $message }}</strong>
								   </span>
							@enderror
							</form>
							<script>
								function subcribe(form){
								  
								 var ajax= new XMLHttpRequest();
								  ajax.open('POST', form.getAttribute("action"), true);
						   
								  ajax.onreadystatechange = function(){
								  
									if(this.readyState == 4 && this.status == 200){
										alert("You have been subscribed");
									//   swal("Thank you!", "You have been subscribed", "success", {
									//    button:"OK",
									//    });
									  //document.getElementById("mysubjects").innerHTML = this.responseText;
									}
						   
									if(this.status == 500){
									  alert(this.responseText);
									}
								  };
								  
								  var formData = new FormData(form);
								  ajax.send(formData);
				  
								  return false;
								 
								}
							  </script>
                            <p class="mt-3 mb-0 text-center text-lg-left">
                                <i class="fab fa-whatsapp text-color-primary"></i><span class="text-color-light opacity-7 pl-2">(+250) 784937775</span>
                                <i class="far fa-envelope text-color-primary ml-4"></i><a href="mailto:info@etekana.rw" class="opacity-7 pl-2 text-color-light">info@etekana.rw</a>
                            </p>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2 background-transparent footer-top-light-border">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
								<p>© Copyright {{date('Y')}}. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('front/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('front/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('front/vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('front/vendor/common/common.min.js') }}"></script>
		<script src="{{ asset('front/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('front/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('front/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('front/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ asset('front/vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('front/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('front/vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('front/vendor/vivus/vivus.min.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('front/js/theme.js') }}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('front/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('front/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('front/js/custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('front/js/theme.init.js') }}"></script>
        		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('front/js/views/view.contact.js') }}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>

        <script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "Kigali-Rwanda",
				html: "<strong>Kigali Office</strong><br>Rwanda, KG 10017",
				icon: {
					image: "front/img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

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
				zoom: 11
			};

			var map = $('#googlemaps').gMap(mapSettings);

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

		</script>

	</body>
</html>


