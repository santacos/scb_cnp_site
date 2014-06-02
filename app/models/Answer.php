<?php

	class Answer extends Eloquent {

		protected $table = 'answers';
		public static $rules = array(
			'name'=>'required',
			'point'=>'required|integer'
		);
		protected $primaryKey = 'answer_id';

		public function question(){
			return $this->belongsToMany('Question');
		}

		// NO APPLICATION_QUESTION_ANSWER NEEDED
	}
