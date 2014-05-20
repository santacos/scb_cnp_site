<?php

	class Candidate extends Eloquent {
		/**
	     * Validation rules
	     */
		protected $table = 'candidates';

	    public static $rules = array(
	    	'idcard'=>'digit:13',
	    );

	    public function user(){
	    	return $this->belongsTo('User','user_id','user_id');//Table,that,this
	    }


	}

