<?php

	class Employee extends Eloquent {
		/**
	     * Validation rules
	     */
		protected $table = 'employees';

	    public static $rules = array(
	    	'username'=> 'required|alpha_dash',
	        'email' => 'required|email',
	        'password' => 'required|between:4,11|confirmed',
	        'firstname' => 'required|alpha',
	        'lastname' => 'required|alpha',
	        'mobilephonenumber' =>'required|digits:10'
	    );
	    
	    protected $primaryKey = 'user_id';
	}

