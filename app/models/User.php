<?php
	use Zizaco\Confide\ConfideUser;
	use Zizaco\Entrust\HasRole;
	// class User extends Eloquent  {
	class User extends ConfideUser  {
		use HasRole;
		/**
	     * Validation rules
	     */
		protected $table = 'users';

	    public static $rules = array(
	    	'username'=> 'required|alpha_dash',
	        'email' => 'required|email',
	        'password' => 'required|alpha_num|between:4,11|confirmed',
	        'first' => 'required|alpha',
	        'last' => 'required|alpha',
	        'contact_number' =>'required|digits:10'
	    );

	    protected $primaryKey = 'user_id';

	    public function employee(){
	    	return $this->hasOne('Employee');
	    }

	    public function candidate(){
	    	return $this->hasOne('Candidate');
	    }

	    public function requisition(){
	    	return $this->hasMany('Requisition');
	    }

	    public function requisitionLog(){
	    	return $this->hasMany('RequisitionLog');
	    }

	    public function applicationLog(){
	    	return $this->hasMany('ApplicationLog');
	    }

	    public function interviewEvalution(){
	    	return $this->hasMany('InterviewEvalution');
	    }

	    public function folder(){
	    	return $this->hasMany('Folder');
	    }

	    public function menuVisit(){
	    	return $this->hasMany('MenuVisit');
	    }
	     public function saveRoles($inputRoles)
    {
        if(! empty($inputRoles)) {
            $this->roles()->sync($inputRoles);
        } else {
            $this->roles()->detach();
        }
    }

    /**
     * Returns user's current role ids only.
     * @return array|bool
     */
    public function currentRoleIds()
    {
        $roles = $this->roles;
        $roleIds = false;
        if( !empty( $roles ) ) {
            $roleIds = array();
            foreach( $roles as &$role )
            {
                $roleIds[] = $role->id;
            }
        }
        return $roleIds;
    }

    /**
     * Redirect after auth.
     * If ifValid is set to true it will redirect a logged in user.
     * @param $redirect
     * @param bool $ifValid
     * @return mixed
     */
    public static function checkAuthAndRedirect($redirect, $ifValid=false)
    {
        // Get the user information
        $user = Auth::user();
        $redirectTo = false;

        if(empty($user->id) && ! $ifValid) // Not logged in redirect, set session.
        {
            Session::put('loginRedirect', $redirect);
            $redirectTo = Redirect::to('user/login')
                ->with( 'notice', Lang::get('user/user.login_first') );
        }
        elseif(!empty($user->id) && $ifValid) // Valid user, we want to redirect.
        {
            $redirectTo = Redirect::to($redirect);
        }

        return array($user, $redirectTo);
    }

    public function currentUser()
    {
        return (new Confide(new ConfideEloquentRepository()))->user();
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

}

