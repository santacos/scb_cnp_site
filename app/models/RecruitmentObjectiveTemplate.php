<?php

	class RecruitmentObjectiveTemplate extends Eloquent {

		protected $table = 'recruitment_objective_templates';
		public static $rules = array(
			'message'=>'required'
		);
		protected $primaryKey = 'recruitment_objective_template_id';

		public function requisition(){
			return $this->belongsTo('Requisition');
		}
	}
