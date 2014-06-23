<?php

class RecruiterClosedRequisitionController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('recruiter.requisition.closed.index');
	}

}