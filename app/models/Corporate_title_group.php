<?php

	class Corporate_title_group extends Eloquent {

		protected $table = 'corporate_title_groups';
		public static $rules = array(
			'name'=>'required|min:1',
			'totle_SLA'=>'required|integer'
		);
		protected $primaryKey = 'corporate_title_group_id';
	}