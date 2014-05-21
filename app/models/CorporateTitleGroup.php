<?php

	class CorporateTitleGroup extends Eloquent {

		protected $table = 'corporate_title_groups';
		public static $rules = array(
			'name'=>'required|min:1',
			'total_SLA'=>'required|integer'
		);
		protected $primaryKey = 'corporate_title_group_id';
	}