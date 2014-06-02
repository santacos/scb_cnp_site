<?php

	class Question extends Eloquent {

		protected $table = 'questions';
		public static $rules = array(
			'question'=>'required'
		);
		protected $primaryKey = 'question_id';

		public function requisition(){
			return $this->belongsTo('Requisition');
		}

		public function position(){
			return $this->belongsToMany('Position');
		}

		public function answer(){
			return $this->belongsToMany('Answer');
		}

		public function application(){
			return $this->belongsToMany('Application');
		}
	}
