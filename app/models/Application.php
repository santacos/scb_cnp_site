<?php

	class Application extends Eloquent {

		protected $table = 'applications';
		public static $rules = array(
			'requisition_id'=>'required|integer',
			'candidate_user_id'=>'required|integer',
			'application_current_status_id'=>'required|integer'
		);
		protected $primaryKey = 'application_id';

		public function applicationLog(){
			return $this->hasMany('ApplicationLog');
		}

		public function applicationCurrentStatus(){
			return $this->belongsTo('ApplicationCurrentStatus');
		}

		public function interviewLog(){
			return $this->hasMany('InterviewLog');
		}

		public function intOffSchedule(){
			return $this->hasMany('IntOffSchedule');
		}

		public function interviewEvaluation(){
			return $this->hasMany('InterviewEvaluation');
		}

		public function candidate(){
			return $this->belongsTo('Candidate');
		}

		public function question(){
			return $this->belongsToMany('Question')->withPivot('answer_id');
		}

		public function requisition(){
			return $this->belongsTo('Requisition');
		}
	}
