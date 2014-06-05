<?php
	use Zizaco\Confide\ConfideUser;
	
	// class User extends Eloquent  {
	class User extends ConfideUser  {
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
	}

