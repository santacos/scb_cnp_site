<?php


class RestController extends \BaseController {
	public function getUser(){
			$users = User::All()->toJson();
			return $users;
			//return 'ccc';

	}
	public function getCorporateTitle(){
			$Corporate_titles = CorporateTitle::All()->toJson();
			return $Corporate_titles ;
	}
	public function getCorporate_title_group(){
			$Corporate_title_groups = Corporate_title_group::All()->toJson();
			return $Corporate_title_groups ;
	}
	public function getDept(){
			$depts = Dept::All()->toJson();
			return $depts ;
	}
	public function getEmployee(){
			$employees = Employee::All()->toJson();
			return $employees;
	}
	public function getLocation(){
			$locations = Location::All()->toJson();
			return $locations ;
	}
	public function getPosition(){
			$positions = Position::All()->toJson();
			return $positions ;
	}
	public function getRecruitment_type(){
			$recruitment_types = Recruitment_type::All()->toJson();
			return $recruitment_types ;
	}
	public function getRequisition(){
			$requisitions = Requisition::All()->toJson();
			return $requisitions ;
	}
	public function getRequisition_current_status(){
			$requisition_current_statuses = Requisition_current_status::All()->toJson();
			return $requisition_current_statuses ;
	}
}