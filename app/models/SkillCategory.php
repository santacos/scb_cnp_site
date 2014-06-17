<?php

	class SkillCategory extends Eloquent {

		protected $table = 'skill_categories';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'skill_category_id';

		public function skill(){
			return $this->hasMany('Skill','skill_id','skill_id');
		}
	}
