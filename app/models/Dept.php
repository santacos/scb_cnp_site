<?php

	class Dept extends Eloquent {

		protected $table = 'depts';
		public static $rules = array(
		
			'name'=>'required',
			'hrbp_user_id'=>'required',
			'recruiter_user_id'=>'required'
		);

		protected $primaryKey = 'dept_id';
	}