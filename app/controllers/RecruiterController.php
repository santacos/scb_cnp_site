<?php

class RecruiterController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::all();

		return View::make('recruiter.home', compact('requisitions'));
	}
	public function getApproved()
	{
		$requisitions = Requisition::all();

		return View::make('HM.approved', compact('requisitions'));
	}
	

}