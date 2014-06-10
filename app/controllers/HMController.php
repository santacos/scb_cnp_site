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

		return View::make('HM.home2', compact('requisitions'));
	}
	public function getApproved()
	{
		$requisitions = Requisition::all();

		return View::make('HM.approved', compact('requisitions'));
	}
	

}