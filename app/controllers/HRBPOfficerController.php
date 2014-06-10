<?php

class HRBPOfficerController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::all();

		return View::make('HRBPOfficer.home', compact('requisitions'));
	}
	public function getApproved()
	{
		$requisitions = Requisition::all();

		return View::make('HM.approved', compact('requisitions'));
	}
	

}