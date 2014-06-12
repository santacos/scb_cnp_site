<?php

class HMController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::all();
		$to_approve = Requisition::where('requisition_current_status_id', '=', 2)->count();
		$to_review = Requisition::where('requisition_current_status_id', '=', 6)->count();
		$to_interview = Application::where('application_current_status_id', '=', 4)->count();
		return View::make('HM.home2', compact('requisitions'))
				->with('to_approve',$to_approve)
				->with('to_review',$to_review)
				->with('to_interview',$to_interview);
	}
	public function getApproved()
	{
		$requisitions = Requisition::all();

		return View::make('HM.approved', compact('requisitions'));
	}
	public function getSaved()
	{
		return View::make('HM.requisition.saved');
	}
	

}