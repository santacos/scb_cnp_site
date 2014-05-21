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
			'qualification'=>'required',
			'note'=>'required'
			);/*
	    public function employee_user() {
			return $this->belongsTo('Employee');
		}
		public function location() {
			return $this->belongsTo('Location');
		}
		public function coperate_title() {
			return $this->belongsTo('CopTitle');
		}
		public function position() {
			return $this->belongsTo('Position');
		}
		public function department() {
			return $this->belongsTo('Dept');
		}
		public function recruitment_current_status() {
			return $this->belongsTo('RequisitionCurrentStatus');
		}
		public function recruitment_type() {
			return $this->belongsTo('Recruitment_Type');
		}*/
	    protected $primaryKey = 'requisition_id';
	}
