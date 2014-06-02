<?php

	class Position extends Eloquent {

		protected $table = 'positions';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'position_id';

		function responsibility(){
			return $this->hasMany('Responsibility');
		}

		function qualification(){
			return $this->hasMany('Qualification');
		}

		function question(){
			return $this->belongsToMany('Question');
		}

		function employee(){
			return $this->hasMany('Employee');
		}
	}
