@extends('user.layouts.default')

@section('title')
SCB Recruiter-Home
@stop

@section('body-class')
"fixed-header"
@stop

@section('header-class')
"header header-two"
@stop



@section('content')
	<section id="main">
	  <header class="page-header">
	    <div class="container">
	      <h1 class="title">Login or Create an Account</h1>
	    </div>	
	  </header>
	  <div class="container">
	    <div class="row">
	      <div class="content login col-sm-12 col-md-12">
			<div class="row">
				  <div class="col-sm-6 col-md-6">
				    <div class="new-costumers">
				      <h3 class="title">Sign Up</h3>
				      <p>creating an account with SCB Recruitment system</p>

				      <a href="{{URL::to('user/create')}}"> 
				      <button class="btn btn-default">Create an Account</button>
				  	  </a>

				    </div>
				  </div>

				  <div class="col-sm-6 col-md-6">
				  	@if ( Session::get('error') )
					<div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
					@endif

					@if ( Session::get('notice') )
					<div class="alert alert-success">{{{ Session::get('notice') }}}</div>
					@endif
					
					<!--login form-->
					<form method="POST" action="{{{ Confide::checkAction('UserController@do_login') ?: URL::to('/user/login') }}}" accept-charset="UTF-8">
						<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
						<fieldset>
							<div class="form-group">
								<label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
								<input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
							</div>
							<div class="form-group">
								<label for="password">
									{{{ Lang::get('confide::confide.password') }}}
									<small>
										<a href="{{{ (Confide::checkAction('UserController@forgot_password')) ?: 'forgot' }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
									</small>
								</label>

								

								<input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
							</div>


							<div class="form-group">
								<label for="remember" class="checkbox">{{{ Lang::get('confide::confide.login.remember') }}}
									
									<input tabindex="4" type="checkbox" name="remember" id="remember" value="1"><input type="hidden" name="remember" value="0">
								</label>
							</div>




							<div class="form-group">
								<button tabindex="3" type="submit" class="btn btn-primary btn-lg btn-block">{{{ Lang::get('confide::confide.login.submit') }}}</button>
							</div>
							<div class="text-center">
								<h5>Or sign in using social networks</h5>
								<div class="row">
									<div class="col col-md-5"></div>
									<div class="col col-md-3">
										<div class="pull-left">
											<div class="livicon" data-n="facebook-alt" data-hc="#000" data-s="50"></div>
										</div>
										<div class="pull-right">
											<div class="livicon" data-n="linkedin-alt" data-hc="#000" data-s="50"></div>
										</div>
									</div>
								</div>
								
																	
							</div>
						</fieldset>
					</form>
					<div>
						Don't have an account? <a href="{{{ URL::to('user/create')}}}">Resgister now.</a>
					</div>
				  </div>
			</div>
	      </div>
	    </div>
	  </div><!-- .container -->
	</section><!-- #main -->
@stop