<?php

	class Employee extends Eloquent {

		protected $table = 'employees';
		public static $rules = array(
			'user_id'=>'required',
			'position_id'=>'required',
			'dept_id'=>'required',
			'next_level_user_id'=>'required',
			'is_manager'=>'required',
			'award_display_name'=>'required',
			'award_point'=>'required'
		);

		protected $primaryKey = 'user_id';

		public function user(){
			return $this->belongsTo('User');
		}
}

