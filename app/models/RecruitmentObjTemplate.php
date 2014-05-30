<?php

	class RecruitmentObjTemplate extends Eloquent {

		protected $table = 'recruitment_objective_templates';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'recruitment_objective_template_id';
	}