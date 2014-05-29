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

		public function position(){
			return $this->belongsTo('Position');
		}

		public function dept(){
			return $this->belongsTo('Dept');
		}

		public function nextLevel(){
			return $this->belongsTo('User','next_level_user_id','user_id');
		}
}

