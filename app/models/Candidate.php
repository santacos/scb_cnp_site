<?php

	class Candidate extends Eloquent {
		/**
	     * Validation rules
	     */
		protected $table = 'candidates';
		protected $primaryKey = 'user_id';

	    public static $rules = array(
	    	'idcard'=>'digit:13',
	    );

	    public function user(){
	    	return $this->belongsTo('User','user_id','user_id'); // Table, Child, Parent
	    }

	    public function application(){
	    	return $this->hasMany('Application','application_id','application_id'); // Table, Child, Parent
	    }

	    public function workExperience(){
	    	return $this->hasMany('WorkExperience','candidate_user_id','user_id'); // Table, Child, Parent
	    }

	    public function education(){
	    	return $this->hasMany('Education','candidate_user_id','user_id'); // Table, Child, Parent
	    }

	    public function award(){
	    	return $this->hasMany('Award','candidate_user_id','user_id'); // Table, Child, Parent
	    }

	    public function followingJob(){
	    	return $this->hasMany('FollowingJob','candidate_user_id','user_id'); // Table, Child, Parent
	    }

	    public function certificate(){
	    	return $this->hasMany('Certificate','candidate_user_id','user_id'); // Table, Child, Parent
	    }

	    public function jobCart(){
	    	return $this->hasMany('JobCart','candidate_user_id','user_id'); // Table, Child, Parent
	    }

	    public function skill(){
	    	return $this->belongsToMany('Skill','candidate_skills','candidate_user_id','skill_id')->withPivot('level'); // Table, Child, Parent
	    }

	    public function folder(){
	    	return $this->belongsToMany('Folder');
	    }
	}

