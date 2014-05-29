<?php
	use Zizaco\Confide\ConfideUser;

	class User extends Eloquent  {
	//class User extends ConfideUser  {
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
	}

