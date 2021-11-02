@extends('layouts.app')

@section('content')

			<div role="main" class="main">

				<section class="page-header page-header-classic">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Pages</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col p-static">
								<h1 data-title-border>Login</h1>

							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col">

							<div class="featured-boxes">
								<div class="row">
									<div class="col-md-6">
										<div class="featured-box featured-box-primary text-left mt-5">
											<div class="box-content">
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">I'm a Returning Customer</h4>
												<form method="POST" action="{{ route('login') }}" id="frmSignIn" class="needs-validation">
													@csrf
													<a href="{{ url('/redirect') }}" class="btn btn-primary btn-block mb-4"> <i class="fa fa-google"></i> &nbsp; Continue with
														Google</a>
														<div class="row my-2">
															<div class="col-lg-5 col-md-5 col-sm-5 col-5"><hr></div>
															<div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">OR</div>
															<div class="col-lg-5 col-md-5 col-sm-5 col-5"><hr></div>
																		</div>  
													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">E-mail Address</label>
															<input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-lg" name="email" value="{{ old('email') }}" placeholder="Enter your email" required >
															@error('email')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<a class="float-right" href="#">
																@if (Route::has('password.request'))
																<a href="{{ route('password.request') }}" class="float-right">{{ __('Forgot password?') }}</a>
																@endif		</a>
															<label class="font-weight-bold text-dark text-2">Password</label>
															<input id="password" type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror form-control-lg" name="password" placeholder="Password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="rememberme" checked="" name="remember" {{ old('remember') ? 'checked' : '' }}>
																<label class="custom-control-label text-2" for="rememberme">Remember Me</label>
															</div>
														</div>
														<div class="form-group col-lg-6">
															<input type="submit" value="Login" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="featured-box featured-box-primary text-left mt-5">
											<div class="box-content">
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Register An Account</h4>
												<form method="POST" action="{{ route('register') }}" id="frmSignUp" class="needs-validation">
													@csrf
													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">Name</label>
															<input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-control-lg" name="name" value="{{ old('name') }}" required autocomplete="name" required>
															@error('name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
														</div>
													</div>

													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">E-mail Address</label>
														<input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-lg" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="" required>
															@error('email')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror

														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">Password</label>
                                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" name="password" autocomplete="new-password" required>
															@error('password')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror

														</div>
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">Re-enter Password</label>
															<input id="password-confirm" type="password" name="password_confirmation" class="form-control form-control-lg" autocomplete="new-password" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-9">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="terms" checked="" name="remember" {{ old('remember') ? 'checked' : '' }}>
																<label class="custom-control-label text-2" for="terms">Remember Me</label>
															</div>
														</div>
														<div class="form-group col-lg-3">
															<input type="submit" value="Register" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
														</div>
													</div>
													<div class="row my-2">
														<div class="col-lg-5 col-md-5 col-sm-5 col-5"><hr></div>
														<div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">OR</div>
														<div class="col-lg-5 col-md-5 col-sm-5 col-5"><hr></div>
																	</div>  
																	<div class="form-group">
																	<a href="{{ url('/redirect') }}" class="btn btn-primary btn-block"> <i class="fa fa-google"></i> &nbsp; Sign Up with
																		Google</a>
																	</div>
												</form>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>

			@endsection