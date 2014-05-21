<?php

	class Location extends Eloquent {

		protected $table = 'locations';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'location_id';
	}
