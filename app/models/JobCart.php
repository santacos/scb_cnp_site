<?php

	class JobCart extends Eloquent {

		protected $table = 'job_carts';
		public static $rules = array(
			'candidate_user_id'=>'required|integer',
			'requisition'=>'required|integer'
		);
		protected $primaryKey = array('candidate_user_id','requisition_id');

		function candidate(){
			return $this->belongsTo('Candidate','candidate_user_id','user_id');
		}

		function requisition(){
			return $this->belongsTo('Requisition');
		}
	}
