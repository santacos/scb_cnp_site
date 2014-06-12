<?php

	class PublicHoliday extends Eloquent {

		protected $table = 'public_holidays';
		public static $rules = array(
			'name'=>'required',
			'date'=>'required'
		);
		protected $primaryKey = 'date';
	}
