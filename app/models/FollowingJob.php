<?php

	class FollowingJob extends Eloquent {

		protected $table = 'following_jobs';
		public static $rules = array(
			'candidate_user_id'=>'required|integer'
		);
		protected $primaryKey = 'following_job_id';

		function candidate(){
			return $this->belongsTo('Candidate','candidate_user_id','user_id');
		}
	}
