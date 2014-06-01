<?php

	class MenuVisit extends Eloquent {

		protected $table = 'menu_visits';
		public static $rules = array(
			'user_id'=>'required|integer',
			'menu_number'=>'required|integer',
			'last_visit'=>'required'
		);
		protected $primaryKey = array('user_id','menu_number');

		public function user(){
			return $this->belongsTo('User');
		}
	}
