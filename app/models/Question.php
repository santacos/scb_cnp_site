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
			return $this->belongsToMany('Position')->withPivot('is_checked');
		}

		public function answer(){
			return $this->belongsToMany('Answer','question_answers');// no pivot
		}

		public function application(){
			return $this->belongsToMany('Application')->withPivot('answer_id');
		}
	}
