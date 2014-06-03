<?php
	

	class Requisition extends Eloquent {
		/**
	     * Validation rules
	     */
		protected $table = 'requisitions';
       
	    public static $rules = array(
			'total_number'=>'required',
			'get_number'=>'required',
			'datetime_create'=>'required',
			'datetime_prev_status'=>'required',
			'year_of_experience'=>'required',
			'recruitment_objective'=>'required',
			'responsibility'=>'required',
			'qualification'=>'required'
			);

	    protected $primaryKey = 'requisition_id';

	    public function employee() {
			return $this->belongsTo('User','employee_user_id','user_id');
		}

		public function location() {
			return $this->belongsTo('Location');
		}

		public function corporateTitle() {
			return $this->belongsTo('CorporateTitle');
		}

		public function position() {
			return $this->belongsTo('Position');
		}

		public function dept() {
			return $this->belongsTo('Dept');
		}

		public function requisitionCurrentStatus() {
			return $this->belongsTo('RequisitionCurrentStatus');
		}

		public function recruitmentType() {
			return $this->belongsTo('RecruitmentType');
		}

		public function tag(){
			return $this->hasMany('Tag');
		}

		public function requisitionLog(){
			return $this->hasMany('RequisitionLog');
		}

		public function application(){
			return $this->hasMany('Application');
		}

		public function skill(){
			return $this->belongsToMany('Skill');// no pivot;

		}

		public function question(){
			return $this->hasMany('Question');
		}

		public function jobCart(){
			return $this->hasMany('JobCart');
		}

		public function objective(){
			return $this->belongsTo('RecruitmentObjectiveTemplate');
		}
	}
