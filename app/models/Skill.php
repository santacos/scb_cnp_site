<?php

	class Skill extends Eloquent {

		protected $table = 'skills';
		public static $rules = array(
			'name'=>'required',
			'skill_category_id'=>'required|integer',
			'is_star'=>'required'
		);
		protected $primaryKey = 'skill_id';
	}
