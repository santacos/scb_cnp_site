<?php

	class RecruitmentObjectiveTemplate extends Eloquent {

		protected $table = 'recruitment_objective_templates';
		public static $rules = array(
			'message'=>'required'
		);
		protected $primaryKey = 'recruitment_obj_template_id';

		public function requisition(){
			return $this->hasMany('Requisition','recruitment_obj_template_id','recruitment_objective_template_id');
		}
	}
