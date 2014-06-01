<?php

	class Responsibility extends Eloquent {

		protected $table = 'responsibilities';
		public static $rules = array(
			'position_id'=>'required|integer',
			'message'=>'required'
		);
		protected $primaryKey = 'responsibility_id';

		public function position(){
			return $this->belongsTo('Position');
		}
	}
