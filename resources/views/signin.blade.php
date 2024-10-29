@extends('layouts.layout')
<!--start style section-->
@section('style')

@endsection
<!--end style section-->
<!--start content section-->
@section('content')

<!-- start: page -->
<section class="body-sign">
			<div class="center-sign">
			<a href="#" class="logo">
                        <img src="{{ asset('images/logo.svg') }}" alt="logo" height="70">
                    </a>
				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign In</h2>
					</div>
					<div class="card-body">
						<form action="" method="">
							<div class="form-group mb-3">
								<label>Username</label>
								<div class="input-group require">
								<div class="input-require-box">
									<input name="username" type="text" class="form-control form-control-lg" />
									<!-- <span class="input-group-text">
										<i class="bx bx-user text-4"></i>
									</span> -->
									<div class="error-massage">
											This field is required.
										</div>
									</div>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-start">Password</label>
									<a href="pages_recover_password" class="float-end">Lost Password?</a>
								</div>
								<div class="input-group require">
									<div class="input-require-box">
									   <input name="pwd" type="password" class="form-control form-control-lg" />
									   <div class="error-massage">
											This field is required.
										</div>
									</div>
									<!-- <span class="input-group-text">
										<i class="bx bx-lock text-4"></i>
									</span> -->
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8 checkbox-button-row">
									<div class="radio-row checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-end">
									<button type="submit" class="btn allBtn dark">Sign In</button>
								</div>
							</div>

							<!-- <span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
							</div> -->

							<p class="text-center">Don't have an account yet? <a href="pages_signup">Sign Up!</a></p>

						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- end: page -->


@endsection
<!--end content section-->
<!--start javascript section-->
@section('javascript')

@endsection
<!--end javascript section-->