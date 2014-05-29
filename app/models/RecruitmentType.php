<?php

	class RecruitmentType extends Eloquent {

		protected $table = 'recruitment_types';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'recruitment_type_id';

		function requisition(){
			return $this->hasMany('Requisition');
		}
	}