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

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
        </div>

    </fieldset>
</form>
