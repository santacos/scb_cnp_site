<?php

	class Dept extends Eloquent {

		protected $table = 'depts';
		public static $rules = array(
			'name'=>'required',
			'hrbp_user_id'=>'required',
			'recruiter_user_id'=>'required'
		);

		protected $primaryKey = 'dept_id';

		public function requisition(){
			return $this->hasMany('Requisition');
		}

		public function employee(){
			return $this->hasMany('Employee');
		}

		public function recruiter(){
			return $this->belongsTo('User','recruiter_user_id','user_id');
		}

		public function hrbp(){
			return $this->belongsTo('User','hrbp_user_id','user_id');
		}
	}