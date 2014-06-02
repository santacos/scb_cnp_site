<?php

	class WorkExperience extends Eloquent {

		protected $table = 'work_experiences';
		public static $rules = array(
			'candidate_user_id'=>'required|integer',
			'company_name'=>'required'
		);
		protected $primaryKey = 'work_experience_id';

		function candidate(){
			return $this->belongsTo('Candidate','candidate_user_id','user_id');
		}
	}
