<?php

	class Corperate_title_group extends Eloquent {

		protected $table = 'corperate_title_groups';
		public static $rules = array(
			'name'=>'required|min:1',
			'totle_SLA'=>'required|integer'
		);
		protected $primaryKey = 'corperate_title_group_id';
	}