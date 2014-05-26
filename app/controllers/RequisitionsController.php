<?php

class RequisitionsController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::all();

		return View::make('requisitions.index', compact('requisitions'));
	}

	/**
	 * Show the form for creating a new requisition
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('HM.create');
	}

	/**
	 * Store a newly created requisition in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Requisition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

			$requisition = new Requisition;
			$requisition->total_number = Input::get('total_number');
			$requisition->employee_user_id = Input::get('employee_user_id');
			$requisition->datetime_create = Input::get('datetime_create');
			$requisition->datetime_prev_status = Input::get('datetime_prev_status');
			$requisition->location_id = Input::get('location_id');
			$requisition->corporate_title_id = Input::get('corporate_title_id');
			$requisition->position_id = Input::get('position_id');
			$requisition->dept_id = Input::get('dept_id');
			$requisition->requisition_current_status_id = Input::get('requisition_current_status_id');
			$requisition->recruitment_type_id = Input::get('recruitment_type_id');
			$requisition->year_of_experience = Input::get('year_of_experience');
			$requisition->recruitment_objective = Input::get('recruitment_objective');
			$requisition->responsibility = Input::get('responsibility');
			$requisition->qualification = Input::get('qualification');
			$requisition->note = Input::get('note');
			$requisition->save();

		return Redirect::route('requisitions.index');
	}

	/**
	 * Display the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$requisition = Requisition::findOrFail($id);

		return View::make('requisitions.show', compact('requisition'));
	}

	/**
	 * Show the form for editing the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$requisition = Requisition::find($id);

		return View::make('requisitions.edit', compact('requisition'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$requisition = Requisition::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Requisition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$requisition->update($data);

		return Redirect::route('requisitions.index');
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

		return Redirect::route('requisitions.index');
	}

}