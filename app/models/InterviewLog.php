<?php

	class InterviewLog extends Eloquent {

		protected $table = 'interview_logs';
		public static $rules = array(
			'visit_number'=>'required|integer',
			'application_id'=>'required|integer',
			'interview_datetime'=>'required'
		);
		protected $primaryKey = array('visit_number','application_id');

		public function applications(){
			return $this->belongsTo('Application');
		}
	}
