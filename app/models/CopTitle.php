<?php

	class CopTitle extends Eloquent {
		/**
	     * Validation rules
	     */
		protected $table = 'coperate_title_groups';

	    public static $rules = array(
	    	'name'=> 'required|min:1'
	    );
	    public function group()
		  {
		    return $this->belongsTo('CopTitleGroup');
		  }
	    protected $primaryKey = 'coperate_title_id';
	}//f