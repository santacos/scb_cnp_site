<?php

	class CorporateTitleGroup extends Eloquent {

		protected $table = 'corporate_title_groups';
		public static $rules = array(
			'name'=>'required|min:1',
			'total_SLA'=>'required|integer'
		);
		protected $primaryKey = 'corporate_title_group_id';

		public function title(){
			return $this->hasMany('CorporateTitle');
		}

		public function SLARequisition(){
			return $this->hasMany('SLARequisition','corporate_tg_id');
		}

		public function SLACandidate(){
			return $this->hasMany('SLACandidate','corporate_tg_id');
		}
	}