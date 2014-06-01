<?php

	class ApplicationLog extends Eloquent {

		protected $table = 'application_logs';
		public static $rules = array(
			'action_type'=>'required|integer',
			'application_id'=>'required|integer',
			'visit_number'=>'required|integer',
			'employee_user_id'=>'required|integer',
			'result'=>'required'
		);
		protected $primaryKey = array();

		public function application(){
			return $this->belongsTo('Application');
		}

		public function applicationCurrentStatus(){
			return $this->belongsTo('ApplicationCurrentStatus');
		}

		public function employee(){
			return $this->belongsTo('User','employee_user_id','user_id');
		}
	}
