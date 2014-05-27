<?php

	class ApplicationCurrentStatus extends Eloquent {

		protected $table = 'application_current_statuses';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'application_current_status_id';
	}
