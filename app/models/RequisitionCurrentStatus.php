<?php

	class RequisitionCurrentStatus extends Eloquent {

		protected $table = 'requisition_current_statuses';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'requisition_current_status_id';

		public function requisition(){
			return $this->hasMany('Requisition');
		}

		public function SLARequisition(){
			return $this->hasMany('SLARequisition');
		}
	}
