@extends('layouts.app')

@section('content')

			<div role="main" class="main">

				<div class="slider-container rev_slider_wrapper" style="height: 670px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class="slide-overlay slide-overlay-primary" data-transition="fade">
								<img src="{{ asset('front/img/slides/slide-corporate-1-1.jpg') }}"  
									alt="no image loaded"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-145','-145','-145','-320']"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('front/img/slides/slide-title-border.png') }}" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="700"
									data-fontsize="['16','16','16','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE DESIGNS, WE ARE</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['145','145','145','320']"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('front/img/slides/slide-title-border.png') }}" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-155','-155','-155','-255']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">P</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-80','-80','-80','-130']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">O</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">R</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['65','65','65','115']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">T</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['139','139','139','240']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">O</div>

								<div class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['85','85','85','140']"
									data-fontsize="['18','18','18','40']"
									data-lineheight="['26','26','26','45']">The best choice for your new website</div>
								
							</li>
							<li class="slide-overlay" data-transition="fade">
								<img src="{{ asset('front/img/slides/slide-corporate-1-2.jpg') }}"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-55','-55','-55','-55']"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']"
									data-letterspacing="-1">AWESOME DESIGNS</h1>

								<div class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:0.8;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['-5','-5','-5','15']"
									data-fontsize="['18','18','18','35']"
									data-lineheight="['20','20','20','40']">Porto is a huge success in the of one of the world’s largest MarketPlace.</div>

								<a class="tp-caption btn btn-light font-weight-bold text-color-primary"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-120','-120','-120','-195']"
									data-y="center" data-voffset="['65','65','65','105']"
									data-paddingtop="['15','15','15','30']"
									data-paddingbottom="['15','15','15','30']"
									data-paddingleft="['33','33','33','50']"
									data-paddingright="['33','33','33','50']"
									data-fontsize="['13','13','13','25']"
									data-lineheight="['20','20','20','25']">LEARN MORE</a>

								<a class="tp-caption btn btn-primary font-weight-bold"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['90','90','90','165']"
									data-y="center" data-voffset="['65','65','65','105']"
									data-paddingtop="['15','15','15','30']"
									data-paddingbottom="['15','15','15','30']"
									data-paddingleft="['33','33','33','50']"
									data-paddingright="['33','33','33','50']"
									data-fontsize="['13','13','13','25']"
									data-lineheight="['20','20','20','25']">GET STARTED NOW <i class="fas fa-arrow-right ml-1"></i></a>
								
							</li>
						</ul>
					</div>
				</div>

				<div class="home-intro mb-0" id="home-intro">
					<div class="container">

						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									The fastest way to grow your business with the leader in <span class="highlighted-word highlighted-word-animation-1 text-color-primary font-weight-semibold text-5">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now!</a>
									<div class="learn-more">or <a href="index.html">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<section class="section section-parallax section-height-3 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 7, 'parallaxHeight': '150%', 'offset': 100}" data-image-src="{{ asset('front/img/parallax/parallax-corporate-1-1.jpg') }}">
					<div class="container pb-5 mb-5">
						<div class="row text-center pb-5 mb-5">
							<div class="col-md-10 mx-md-auto pb-5 mb-5">
								<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
									<span>Porto is </span>
									<span class="word-rotator-words bg-dark">
										<b class="is-visible">incredibly</b>
										<b>especially</b>
										<b>extremely</b>
									</span>
									<span> beautiful and fully responsive.</span>
								</h1>
								<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
								</p>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<h2 class="font-weight-normal text-center text-6 pb-3">Our <strong class="font-weight-extra-bold">Services</strong></h2>
							</div>
						</div>
						<div class="row mb-lg-4">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-support text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold mb-2">Customer Support</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-layers text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold mb-2">Sliders</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-menu text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold mb-2">Buttons</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-doc text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold mb-2">HTML5 / CSS3 / JS</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-user text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold mb-2">Icons</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-screen-desktop text-color-primary"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold mb-2">Lightbox</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row counters counters-sm py-4 mt-5">
						<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
							<div class="counter">
								<i class="icons icon-user text-color-dark"></i>
								<strong class="text-color-dark font-weight-extra-bold" data-to="30000" data-append="+">0</strong>
								<label class="text-4 mt-1">Happy Clients</label>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
							<div class="counter">
								<i class="icons icon-badge text-color-dark"></i>
								<strong class="text-color-dark font-weight-extra-bold" data-to="15">0</strong>
								<label class="text-4 mt-1">Years In Business</label>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
							<div class="counter">
								<i class="icons icon-graph text-color-dark"></i>
								<strong class="text-color-dark font-weight-extra-bold" data-to="178">0</strong>
								<label class="text-4 mt-1">High Score</label>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="counter">
								<i class="icons icon-cup text-color-dark"></i>
								<strong class="text-color-dark font-weight-extra-bold" data-to="352">0</strong>
								<label class="text-4 mt-1">Cups of Coffee</label>
							</div>
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="col-md-4 mb-4 mb-md-0">
							<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('front/img/layout-styles.png') }}" alt="layout styles" />
						</div>
						<div class="col-md-8 pl-md-5">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Layout</strong> Styles &amp; Variants</h2>
							<p class="text-4">There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Exclusive</strong> Style Switcher</h2>
							<p class="text-4">With our exlusive Style Switcher you will be able to choose any color you want for your website, choose the layout style (wide / boxed), website type (one page / normal), then generate the css that will be compiled by a {less} proccessor.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.</p>
						</div>
						<div class="col-md-4 px-5 px-md-3">
							<img class="img-fluid scale-2 my-4" src="{{ asset('front/img/style-switcher.png') }}" alt="style switcher" />
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row text-center">
						<div class="col">
							<h2 class="font-weight-normal text-6 mt-4">Our <strong class="font-weight-extra-bold">Portfolio</strong></h2>
						</div>
					</div>
				</div>

				<div class="image-gallery sort-destination full-width mb-0">
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('front/img/projects/project.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('front/img/projects/project-2.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('front/img/projects/project-4.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('front/img/projects/project-5.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="isotope-item">
						<div class="image-gallery-item mb-0">
							<a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('front/img/projects/project-6.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Project Title</span>
											<span class="thumb-info-type">Project Type</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>

				<section class="section section-height-3 section-background section-text-light section-center overlay overlay-show overlay-op-9 overlay-color-primary m-0 appear-animation" data-appear-animation="fadeIn" style="background-image: url(img/bg-corporate-1-1.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<div class="owl-carousel owl-theme nav-bottom rounded-nav dots-light mb-0" data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">
									<div>
										<div class="col">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
												<div class="testimonial-author">
													<img src="{{ asset('front/img/clients/client-1.jpg') }}" class="img-fluid rounded-circle" alt="">
												</div>
												<blockquote>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong class="text-2 opacity-10">- John Smith. Okler</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
												<div class="testimonial-author">
													<img src="{{ asset('front/img/clients/client-1.jpg') }}" class="img-fluid rounded-circle" alt="">
												</div>
												<blockquote>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong class="text-2 opacity-10">- John Smith. Okler</strong></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row text-center pt-4 mt-5">
						<div class="col">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2">
								<span>We're not the only ones </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
								<span> about Porto Template...</span>
							</h2>
							<h4 class="text-primary lead tall text-4">30,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4>
						</div>
					</div>

					<div class="row text-center mt-5 pb-5 mb-5">
						<div class="owl-carousel owl-theme carousel-center-active-item mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
							<div>
								<img class="img-fluid" src="{{ asset('front/img/logos/logo-1.png') }}" alt="">
							</div>
							<div>
								<img class="img-fluid" src="{{ asset('front/img/logos/logo-2.png') }}" alt="">
							</div>
							<div>
								<img class="img-fluid" src="{{ asset('front/img/logos/logo-3.png') }}" alt="">
							</div>
							<div>
								<img class="img-fluid" src="{{ asset('front/img/logos/logo-4.png') }}" alt="">
							</div>
							<div>
								<img class="img-fluid" src="{{ asset('front/img/logos/logo-5.png') }}" alt="">
							</div>
							<div>
								<img class="img-fluid" src="{{ asset('front/img/logos/logo-6.png') }}" alt="">
							</div>
							<div>
								<img class="img-fluid" src="{{ asset('front/img/logos/logo-4.png') }}" alt="">
							</div>
							<div>
								<img class="img-fluid" src="{{ asset('front/img/logos/logo-2.png') }}" alt="">
							</div>
						</div>
					</div>
				</div>

				<section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-9">
								<div class="call-to-action-content">
									<h2 class="font-weight-normal text-6 mb-0">Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h2>
									<p class="mb-0">The best HTML template for your new website.</p>
								</div>
							</div>
							<div class="col-md-3 col-lg-3">
								<div class="call-to-action-btn">
									<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-modern btn-primary">Buy Now!</a>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>

			@endsection