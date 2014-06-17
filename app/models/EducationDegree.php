<?php

	class EducationDegree extends Eloquent {

		protected $table = 'education_degrees';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'education_degree_id';

		public function education(){
			return $this->hasMany('Education','education_id','education_id');
		}
	}
