<?php

	class RequisitionLog extends Eloquent {

		protected $table = 'requisition_logs';
		public static $rules = array(
			'action_type'=>'required|integer',
			'requisition_id'=>'required|integer',
			'send_number'=>'required|integer',
			'employee_user_id'=>'required|integer',
			'result'=>'required'
		);
		protected $primaryKey = array();

		public function requisition(){
			return $this->belongsTo('Requisition');
		}

		public function requisitionCurrentStatus(){
			return $this->belongsTo('RequisitionCurrentStatus');
		}

		public function employee(){
			return $this->belongsTo('User','employee_user_id','user_id');
		}
	}
