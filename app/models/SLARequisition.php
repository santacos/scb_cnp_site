<?php

	class SLARequisition extends Eloquent {

		protected $table = 'SLA_requisitions';
		public static $rules = array(
			'corporate_tg_id'=>'required|integer',
			'requisition_cs_id'=>'required|integer',
			'SLA'=>'required|integer'
		);

		protected $primaryKey = array('corporate_tg_id','requisition_cs_id');

		// NO RELATION FUNCTION NEEDED
	}