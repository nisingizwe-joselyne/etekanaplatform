@extends('layouts.app')

@section('content')

			<div role="main" class="main">

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div>

				<div class="container">

					<div class="row py-4">
						<div class="col-lg-6">

							<div class="overflow-hidden mb-1">
								<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Feel free to ask for details, don't save any questions!</p>
							</div>

							<form method="POST" action="{{route('message.store')}}">
								@csrf
								@if (Session::has('sendMessageSuccess'))
								<div class="alert alert-success alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
							  <strong><i class="fas fa-check"></i></strong> {{ Session::get('sendMessageSuccess') }} </div>
							  @elseif(Session::has('sendMessageFail'))
							  <div class="alert alert-danger alert-dismissible mb-2" style="margin: 5px 5px 0px 5px;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
							  <strong>FAILED:</strong> {{ Session::get('sendMessageFail') }} </div> 
								@endif
								
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark text-2">Full Name</label>
										<input type="text" data-msg-required="Please enter your name." class="form-control @error('name') is-invalid @enderror" name="name" @auth value="{{ Auth::user()->name }}" @else value="{{ old('name') }}" @endauth  id="name" placeholder="Enter you name" required>
										@error('name')
										<span class="invalid-feedback" role="alert">
										  <strong>{{ $message }}</strong>
										   </span>
									@enderror
									</div>
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark text-2">Email Address</label>
										<input type="email" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control @error('email') is-invalid @enderror" id="email" @auth value="{{ Auth::user()->email }}" @else value="{{ old('email') }}" @endauth name="email" placeholder="Enter your email" required>
										@error('email')
										<span class="invalid-feedback" role="alert">
										  <strong>{{ $message }}</strong>
										   </span>
									@enderror 
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Subject</label>
										<input type="text" data-msg-required="Please enter the subject." class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}"  id="subject" placeholder="Enter the subject" required>
										@error('subject')
										<span class="invalid-feedback" role="alert">
										  <strong>{{ $message }}</strong>
										   </span>
									@enderror

									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark text-2">Message</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message" required></textarea>
										@error('message')
										<span class="invalid-feedback" role="alert">
										  <strong>{{ $message }}</strong>
										   </span>
									@enderror
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
										
									</div>
								</div>
							</form>

						</div>
						<div class="col-lg-6">

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> 1234 Street Name, City Name, United States</li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123) 456-789</li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
								</ul>
							</div>

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<h4 class="pt-5">Business <strong>Hours</strong></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
									<li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
									<li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
								</ul>
							</div>

							<h4 class="pt-5">Get in <strong>Touch</strong></h4>
							<p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div>

					</div>

				</div>

			</div>

			<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-lg-9">
							<div class="call-to-action-content">
								<h2 class="font-weight-normal text-6 mb-0">Porto is <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> website!</h2>
								<p class="mb-0">The <strong class="font-weight-extra-bold">Best</strong> HTML Site Template on ThemeForest</p>
							</div>
						</div>
						<div class="col-md-3 col-lg-3">
							<div class="call-to-action-btn">
								<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
							</div>
						</div>
					</div>
				</div>
			</section>

			@endsection