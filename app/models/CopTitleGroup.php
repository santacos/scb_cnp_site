<?php

	class CopTitleGroup extends Eloquent {
		/**
	     * Validation rules
	     */
		protected $table = 'coperate_titles';

	    public static $rules = array(
	    	'name'=> 'required|min:1',
	    	'totle_SLA'=> 'required|integer'
	    );

	    protected $primaryKey = 'coperate_title_group_id';
	}//f