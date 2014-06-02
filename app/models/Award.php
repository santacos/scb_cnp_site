<?php

	class Award extends Eloquent {

		protected $table = 'awards';
		public static $rules = array(
			'candidate_user_id'=>'required|integer',
			'title'=>'required'
		);
		protected $primaryKey = 'award_id';

		function candidate(){
			return $this->belongsTo('Candidate','candidate_user_id','user_id');
		}
	}
