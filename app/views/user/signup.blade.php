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
	  <header class="page-header" style="padding-bottom:0.2em;">
	    <div class="container">
	      <h1 class="title">Create an Account</h1>
	    </div>	
	  </header>
	  <div class="container">
	    <div class="row">
	      <div class="content login col-sm-12 col-md-12">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="well">
					    <form method="POST" action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" accept-charset="UTF-8">
						    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
						    <fieldset>
						        <div class="form-group">
						            <label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
						            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
						        </div>
						        <div class="form-group">
						            <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
						            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ isset($email)?$email:Input::old('email') }}}">
						        </div>
						        <div class="form-group">
						            <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
						            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
						        </div>
						        <div class="form-group">
						            <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
						            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
						        </div>
						         <div class="form-group">
						                <label for="first">Firstname</label>
						                <input class="form-control" placeholder="Firstname" type="text" name="first" id="first" value="{{{ isset($first)?$first:Input::old('first')}}}">
						            </div>
						            <div class="form-group">
						                <label for="last">Lastname</label>
						                <input class="form-control" placeholder="Lastname" type="text" name="last" id="last" value="{{{ isset($last)?$last:Input::old('last')}}}">
						            </div>
						            <div class="form-group">
						                <label for="contact_number">Mobilephone</label>
						                <input class="form-control" placeholder="08xxxxxxxx" type="text" name="contact_number" id="contact_number" value="{{{ isset($contact_number)?$contact_number:Input::old('contact_number') }}}">
						            </div>

						                @if (Session::has('message'))
						                <div class="alert alert-info">{{ Session::get('message') }}</div>
						                @endif

						                <!-- if there are creation errors, they will show here -->
						                {{ HTML::ul($errors->all()) }}


						        @if ( Session::get('notice') )
						            <div class="alert">{{ Session::get('notice') }}</div>
						        @endif
						        <div class="row">
						        	<div class="col col-md-4"></div>

						        	<div class="col col-md-6">
						        		<div class="form-actions form-group">
								          <button type="submit" class="btn btn-default">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
								        </div>
						        	</div>

						        	<div class="col col-md-3"></div>
						        </div>
						        

						    </fieldset>
						</form>

					</div>
					
				</div>
				<div class="col-sm-3 col-md-3">

				</div>
			</div>
	      </div>
	    </div>
	  </div><!-- .container -->
	</section><!-- #main -->
@stop