<?php

	class InterviewEvaluation extends Eloquent {

		protected $table = 'interview_evaluations';
		public static $rules = array(
			'visit_number'=>'required|integer',
			'application_id'=>'required|integer',
			'employee_user_id'=>'required|integer'
		);
		protected $primaryKey = array('visit_number','application_id','employee_user_id');

		public function applications(){
			return $this->belongsTo('Application','app_id');
		}

		public function employee(){
			return $this->belongsTo('User','user_id','user_id');
		}
	}
