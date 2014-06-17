<?php

	class Education extends Eloquent {

		protected $table = 'educations';
		public static $rules = array(
			'candidate_user_id'=>'required|integer',
			'school_name'=>'required'
		);
		protected $primaryKey = 'education_id';

		function candidate(){
			return $this->belongsTo('Candidate','candidate_user_id','user_id');
		}
		public function educationDegree() {
			return $this->belongsTo('EducationDegree','education_degree_id','education_degree_id');
		}
	}
