<?php

	class CorporateTitle extends Eloquent {

		protected $table = 'corporate_titles';
		protected $primaryKey = 'corporate_title_id';

		public static $rules = array(
			'name'=>'required',
			'corporate_title_group_id'=>'required'
		);

		public function group() {
		    return $this->belongsTo('CorporateTitleGroup','corporate_title_group_id','corporate_title_group_id');
		}

		public function requisition(){
			return $this->hasMany('Requisition','corporate_title_id','corporate_title_id');
		}
	}
