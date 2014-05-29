<?php

	class Qualification extends Eloquent {

		protected $table = 'qualifications';
		public static $rules = array(
			'position_id'=>'required|integer',
			'message'=>'required'
		);
		protected $primaryKey = 'qualification_id';

		public function position(){
			return $this->belongsTo('Position');
		}
	}
