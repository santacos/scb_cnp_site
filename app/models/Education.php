<?php

	class Education extends Eloquent {

		protected $table = 'educations';
		public static $rules = array(
			'candidate_user_id'=>'required',
			'school_name'=>'required'
		);
		protected $primaryKey = 'education_id';


	}
