<?php

	class RequisitionCurrentStatus extends Eloquent {

		protected $table = 'requisition_current_statuses';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'requisition_current_status_id';
	}
