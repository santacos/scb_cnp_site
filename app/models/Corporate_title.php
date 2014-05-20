<?php

	class Corporate_title extends Eloquent {

		protected $table = 'corporate_titles';
		public static $rules = array(
			'name'=>'required',
			'corporate_title_group_id'=>'required'
		);
		 public function group()
		  {
		    return $this->belongsTo('Corporate_title_group');
		  }
		protected $primaryKey = 'corporate_title_id';
	}
