<?php

	class Certificate extends Eloquent {

		protected $table = 'certificates';
		public static $rules = array(
			'candidate_user_id'=>'required|integer',
			'name'=>'required'
		);
		protected $primaryKey = 'certificate_id';

		function candidate(){
			return $this->belongsTo('Candidate','candidate_user_id','user_id');
		}
	}
