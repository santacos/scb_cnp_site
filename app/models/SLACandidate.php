<?php

	class SLACandidate extends Eloquent {

		protected $table = 'SLA_candidates';
		public static $rules = array(
			'corporate_tg_id'=>'required|integer',
			'candidate_cs_id'=>'required|integer',
			'visit_number'=>'required|integer',
			'SLA'=>'required|integer'
		);

		protected $primaryKey = array('corporate_tg_id','app_cs_id','visit_number');

		// NO RELATION FUNCTION NEEDED
	}