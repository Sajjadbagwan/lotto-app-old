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
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign Up</h2>
					</div>
					<div class="card-body">
						<form>
							<div class="form-group mb-3">
								<label>Name</label>
								<div class="input-group">
								   <input name="name" type="text" class="form-control form-control-lg" />
								</div>
							</div>

							<div class="form-group mb-3">
								<label>E-mail Address</label>
								<div class="input-group">
							       <input name="email" type="email" class="form-control form-control-lg" />
								</div>
							</div>

							<div class="form-group mb-0">
								<div class="row combo-coloum">
									<div class="col-sm-6 mb-3">
										<label>Password</label>
										<div class="input-group">
										<input name="pwd" type="password" class="form-control form-control-lg" />
										</div>
									</div>
									<div class="col-sm-6 mb-3">
										<label>Password Confirmation</label>
										<div class="input-group">
										<input name="pwd_confirm" type="password" class="form-control form-control-lg" />
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-end">
									<button type="submit" class="btn allBtn dark">Sign Up</button>
								</div>
							</div>

							<!-- <span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
							</div> -->

							<p class="text-center">Already have an account? <a href="signin">Sign In!</a></p>

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