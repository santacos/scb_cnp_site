<?php

	class Corperate_title extends Eloquent {

		protected $table = 'corperate_titles';
		public static $rules = array(
			'name'=>'required',
			'corperate_title_group_id'=>'required'
		);
		 public function group()
		  {
		    return $this->belongsTo('Corperate_title_group');
		  }
		protected $primaryKey = 'corperate_title_id';
	}
