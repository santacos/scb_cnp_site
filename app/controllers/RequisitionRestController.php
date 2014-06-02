<?php

class RequisitionRestController extends \BaseController {

	

		public function getCoporateTitle()
		{
			$corporate_titles = CorporateTitle::All()->toJson();
			return $corporate_titles;
		}

		public function getDept()
		{
			$depts = Dept::All()->toJson();
			return $depts;
		}
		public function getRecruitmentType()
		{
			$recruitment_types = RecruitmentType::All()->toJson();
			return $recruitment_types;
		}
		public function getLocation()
		{
			$locations = Location::All()->toJson();
			return $locations;
		}

	}