<?php
/*
|--------------------------------------------------------------------------
| Confide Controller Template
|--------------------------------------------------------------------------
|
| This is the default Confide controller template for controlling user
| authentication. Feel free to change to your needs.
|
*/

class UserController extends BaseController {
    /**
     * User Model
     * @var User
     */
    public function __construct(Hybrid_Auth $hybridAuth)
    {
        $this->hybridAuth = $hybridAuth;
    }
    /**
     * Displays the form for account creation
     *
     */
    public function create()
    {
        //return View::make('pages.user.signup');
        return View::make('user.signup');
    }

    /**
     * Stores new account
     *
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), User::$rules);
        if ($validator->fails()) {
            return Redirect::to('user/create')
            ->withErrors($validator)
            ->withInput();
        } else {
            $user = new User;

            $user->username = trim(Input::get( 'username' ));
            $user->email = trim(strtolower(Input::get( 'email' )));
            $user->password = Input::get( 'password' );
            $user->first = trim(Input::get( 'first' ));
            $user->last = trim(Input::get( 'last' ));
            $user->contact_number = Input::get( 'contact_number' );

            // The password confirmation will be removed from model
            // before saving. This field will be used in Ardent's
            // auto validation.
            $user->password_confirmation = Input::get( 'password_confirmation' );
           
            // Save if valid. Password field will be hashed before save
            $user->save();

            if ( !$user->errors()->all())
            {
                $candidate = new candidate;
                $candidate->user_id = $user->user_id;
                $user = User::find($user->user_id);
                 $rolec= Role::where('name','=','Candidate')->get()->first();
                 $user->attachRole( $rolec); 
                $candidate->save();
                // Redirect with success message, You may replace "Lang::get(..." for your custom message.
                            return Redirect::action('UserController@login')
                                ->with( 'notice', Lang::get('confide::confide.alerts.account_created') );
            }
            else
            {
                // Get validation errors (see Ardent package)
                $error = $user->errors()->all();

                            return Redirect::action('UserController@create')
                                ->withInput(Input::except('password'))
                    ->with( 'error', $error );
            }
        }
    }

    /**
     * Displays the login form
     *
     */
    public function login()
    {
        if( Confide::user() )
        {
            // If user is logged, redirect to internal 
            // page, change it to '/admin', '/dashboard' or something
            
            return Redirect::to('/home');
        }
        else
        {
            return View::make('user.login');
        }
    }

    /**
     * Attempt to do login
     *
     */
    public function socialLogin($action)
    {
        if ( $action == "auth" ) {
              try {
                 Hybrid_Endpoint::process();
              }
              catch ( Exception $e ) {
                 echo "Error at Hybrid_Endpoint process (UserController@socialLogin): $e";
              }
              return;
        }
        // Authenticate with Steam (using the details from our IoC Container).
         $socialAuth = new Hybrid_Auth(app_path() . '/config/hybridauth.php');
        // authenticate with Linkedin
        $provider = $socialAuth->authenticate($action);
        // fetch user profile
        $userProfile = $provider->getUserProfile();
        $this->hybridAuth->logoutAllProviders();
        $user = DB::table('users')->where('email', $userProfile->email)->first();
        if(is_null($user))
        {
           //  $birth_date='';
           //  $is_male='';
           //  if($userProfile->birthYear!=''&&$userProfile->birthMonth&&$userProfile->birthDay)
           // { 
           //      $birth_date=$userProfile->birthYear.'-'.$userProfile->birthMonth.'-'.$userProfile->birthDay;
           // }
           // if($userProfile->gender!='')
           // {
           //      if($userProfile->gender=='male')
           //          {$is_male=1;}
           //      else{$is_male=0;}
           // }
           return View::make('user.signup')
            ->with('email',$userProfile->email)
            ->with('first',$userProfile->firstName)
            ->with('last',$userProfile->lastName)
            ->with('contact_number',$userProfile->phone)
           // ->with('filepath_profile_picture',$userProfile->photoURL)
           //  ->with('birth_date',$birth_date)
           //  ->with('address',$userProfile->address)
           //  ->with('country',$userProfile->country)
           //  ->with('city',$userProfile->city)
           //  ->with('zip',$userProfile->zip)
           //  ->with('is_male',$is_male)
            ;
        }
        else
        {
            Auth::loginUsingId($user->user_id);
            return Redirect::intended('/cd');
        }
        echo "Connected with: <b>{$provider->id}</b><br />";
    echo "As: <b>{$userProfile->identifier}</b><br />";
    echo "<pre>" . print_r( $userProfile, true ) . "</pre><br />";
    echo "<img src=". $userProfile->photoURL . ">";
    $this->hybridAuth->logoutAllProviders();
         

}
    public function do_login()
    {
        $input = array(
            'email'    => Input::get( 'email' ), // May be the username too
            'username' => Input::get( 'email' ), // so we have to pass both
            'password' => Input::get( 'password' ),
            'remember' => Input::get( 'remember' ),
        );

        // If you wish to only allow login from confirmed users, call logAttempt
        // with the second parameter as true.
        // logAttempt will check if the 'email' perhaps is the username.
        // Get the value from the config file instead of changing the controller
        if ( Confide::logAttempt( $input, Config::get('confide::signup_confirm') ) ) 
        {
            // Redirect the user to the URL they were trying to access before
            // caught by the authentication filter IE Redirect::guest('user/login').
            // Otherwise fallback to '/'
            // Fix pull #145
            return Redirect::intended('/home'); // change it to '/admin', '/dashboard' or something
        }
        else
        {
            $user = new User;

            // Check if there was too many login attempts
            if( Confide::isThrottled( $input ) )
            {
                $err_msg = Lang::get('confide::confide.alerts.too_many_attempts');
            }
            elseif( $user->checkUserExists( $input ) and ! $user->isConfirmed( $input ) )
            {
                $err_msg = Lang::get('confide::confide.alerts.not_confirmed');
            }
            else
            {
                $err_msg = Lang::get('confide::confide.alerts.wrong_credentials');
            }

                        return Redirect::action('UserController@login')
                            ->withInput(Input::except('password'))
                ->with( 'error', $err_msg );
        }
    }

    /**
     * Attempt to confirm account with code
     *
     * @param  string  $code
     */
    public function confirm( $code )
    {
        if ( Confide::confirm( $code ) )
        {
            $notice_msg = Lang::get('confide::confide.alerts.confirmation');
                        return Redirect::action('UserController@login')
                            ->with( 'notice', $notice_msg );
        }
        else
        {
            $error_msg = Lang::get('confide::confide.alerts.wrong_confirmation');
                        return Redirect::action('UserController@login')
                            ->with( 'error', $error_msg );
        }
    }

    /**
     * Displays the forgot password form
     *
     */
    public function forgot_password()
    {
        return View::make(Config::get('confide::forgot_password_form'));
    }

    /**
     * Attempt to send change password link to the given email
     *
     */
    public function do_forgot_password()
    {
        if( Confide::forgotPassword( Input::get( 'email' ) ) )
        {
            $notice_msg = Lang::get('confide::confide.alerts.password_forgot');
                        return Redirect::action('UserController@login')
                            ->with( 'notice', $notice_msg );
        }
        else
        {
            $error_msg = Lang::get('confide::confide.alerts.wrong_password_forgot');
                        return Redirect::action('UserController@forgot_password')
                            ->withInput()
                ->with( 'error', $error_msg );
        }
    }

    /**
     * Shows the change password form with the given token
     *
     */
    public function reset_password( $token )
    {
        return View::make(Config::get('confide::reset_password_form'))
                ->with('token', $token);
    }

    /**
     * Attempt change password of the user
     *
     */
    public function do_reset_password()
    {
        $input = array(
            'token'=>Input::get( 'token' ),
            'password'=>Input::get( 'password' ),
            'password_confirmation'=>Input::get( 'password_confirmation' ),
        );

        // By passing an array with the token, password and confirmation
        if( Confide::resetPassword( $input ) )
        {
            $notice_msg = Lang::get('confide::confide.alerts.password_reset');
                        return Redirect::action('UserController@login')
                            ->with( 'notice', $notice_msg );
        }
        else
        {
            $error_msg = Lang::get('confide::confide.alerts.wrong_password_reset');
                        return Redirect::action('UserController@reset_password', array('token'=>$input['token']))
                            ->withInput()
                ->with( 'error', $error_msg );
        }
    }

    /**
     * Log the user out of the application.
     *
     */
    public function logout()
    {   

        Confide::logout();
        
        return Redirect::to('/');
    }

}
