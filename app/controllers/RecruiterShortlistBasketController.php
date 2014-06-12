<?php

class RecruiterShortlistBasketController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(array('success' => false));
	}

	/**
	 * Show the form for creating a new requisition
	 *
	 * @return Response
	 */
	public function create()
	{
		return Response::json(array('success' => false));
	}

	/**
	 * Store a newly created requisition in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Response::json(array('success' => false));
	}

	/**
	 * Display the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$applications = Application::whereRequisitionID($id)->whereIsInBasket(1)->whereNull('send_number');
		// $reviews = Application::whereRequisitionID($id)->where('application_current_status_id','=','2');
		// $reviews = Application::whereRequisitionID($id)->where('application_current_status_id','=','3');
		// $reviews = Application::whereRequisitionID($id)->where('application_current_status_id','=','4');
		// $reviews = Application::whereRequisitionID($id)->where('application_current_status_id','=','5');
		// $reviews = Application::whereRequisitionID($id)->where('application_current_status_id','=','6');
		// $reviews = Application::whereRequisitionID($id)->where('application_current_status_id','=','7');
		$in_basket = count($applications);
		$requisition = Requisition::find($id);
		$require = $requisition->total_number;
		$num_get = $requisition->get_number;
		$applications = $applications->get();
		return View::make('recruiter.requisition.shortlist.basket.show', compact('applications'))->with('in_basket',$in_basket)->with('num_get',$num_get)->with('require',$require)->with('requisition',$requisition)->with('requisition_id',$id);
	}

	/**
	 * Show the form for editing the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($requisition_id)
	{
		return Response::json(array('success' => false));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return Response::json(array('success' => false));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Requisition::destroy($id);

		return Response::json(array('success' => true));
	}

}