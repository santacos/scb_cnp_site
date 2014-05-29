<?php

	class Folder extends Eloquent {

		protected $table = 'folders';
		public static $rules = array(
			'name'=>'required'
		);
		protected $primaryKey = 'folder_id';

		public function parent(){
			return $this->belongsTo('Folder','is_in_folder_id','folder_id');
		}

		public function employee(){
			return $this->belongsTo('User','employee_user_id','user_id');
		}
	}
