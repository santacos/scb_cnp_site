<?php

	class IntOffSchedule extends Eloquent {

		protected $table = 'int_off_schedules';
		public static $rules = array(
			'visit_number'=>'required|integer',
			'application_id'=>'required|integer',
			'app_cs_id'=>'required'
		);
		protected $primaryKey = array('visit_number','application_id','app_cs_id');

		public function applications(){
			return $this->belongsTo('Application');
		}

		public function applicationCurrentStatus(){
			return $this->belongsTo('ApplicationCurrentStatus');
		}
	}
