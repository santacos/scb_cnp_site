<?php

	class Position extends Eloquent {

		protected $table = 'positions';
		public static $rules = array(
			'name'=>'required',
		);
		protected $primaryKey = 'position_id';
	}
