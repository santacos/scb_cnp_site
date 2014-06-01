<?php

	class Tag extends Eloquent {

		protected $table = 'tags';
		public static $rules = array(
			'requisition_id'=>'required|integer',
			'tag'=>'required'
		);

		protected $primaryKey = 'requisition_id';

		public function requisition(){
			return $this->belongsTo('Requisition');
		}
	}