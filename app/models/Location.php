<?php

	class Location extends Eloquent {
		/**
	     * Validation rules
	     */
		protected $table = 'locations';

	    public static $rules = array(
	    	'name'=> 'required|min:1'
	    );

	    protected $primaryKey = 'location_id';
	}//f

