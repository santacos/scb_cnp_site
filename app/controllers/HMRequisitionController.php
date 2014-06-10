<?php

class HMRequisitionController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::all();

		return View::make('HM.requisition.index', compact('requisitions'));
	}

	/**
	 * Show the form for creating a new requisition
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('HM.requisition.create');
	}

	/**
	 * Store a newly created requisition in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$validator = Validator::make($data = Input::all(), Requisition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/
			$requisition = new Requisition;
			$requisition->total_number = Input::get('total_number');
			/**
				change 'employee_user_id' to real employee id
			*/
			$requisition->employee_user_id = Employee::first()->user_id;

			//Input::get('employee_user_id');
			$requisition->datetime_create = Carbon::now();
			//$requisition->datetime_prev_status = Input::get('datetime_prev_status');
			$requisition->location_id = Input::get('location_id');
			$requisition->corporate_title_id = Input::get('corporate_title_id');
			$requisition->position_id =  Input::get('position_id');
			$dep= $requisition->position()->first()->group;
			$a = Dept::where('name','=',$dep)->firstOrFail()->dept_id;
			$requisition->dept_id =$a;
			$requisition->requisition_current_status_id = Input::get('save')?1:2;
			//Input::get('requisition_current_status_id');
			$requisition->recruitment_type_id = Input::get('recruitment_type_id');
			$requisition->recruitment_obj_template_id=Input::get('recruitment_obj_template_id');
			$requisition->recruitment_objective = Input::get('recruitment_objective');
			$requisition->year_of_experience = Input::get('year_of_experience');
			//$requisition->recruitment_objective = Input::get('recruitment_objective');
			$requisition->responsibility = Input::get('responsibility');
			$requisition->qualification = Input::get('qualification');
			$requisition->note = Input::get('note');
			$requisition->save();

		return View::make('HM.home2', compact('requisitions'));
	}

	/**
	 * Display the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Requisition::find($id));
	}
	
	/**
	 * Show the form for editing the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($requisition_id)
	{
		$requisition = Requisition::find($requisition_id);
		return View::make('HM.requisition.edit', array( 'requisition'=> $requisition));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		/*$requisition = Requisition::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Requisition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$requisition->update($data);

		return Redirect::route('requisitions.index');*/
		/*$validator = Validator::make($data = Input::all(), Requisition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/
			$requisition = Requisition::findOrFail($id);
			$requisition->total_number = Input::get('total_number');
			/**
			change 'employee_user_id' to real employee id
			*/
			$requisition->employee_user_id = $requisition->employee_user_id;
			//Input::get('employee_user_id');
			// $requisition->datetime_create = Carbon::now();
			//$requisition->datetime_prev_status = Input::get('datetime_prev_status');
			$requisition->location_id = Input::get('location_id');
			$requisition->corporate_title_id = Input::get('corporate_title_id');
			$requisition->position_id =  Input::get('position_id');
			$dep= $requisition->position()->first()->group;
			$a = Dept::where('name','=',$dep)->firstOrFail()->dept_id;
			$requisition->dept_id =$a;
			$requisition->requisition_current_status_id = Input::get('save')?1:2;
			//Input::get('requisition_current_status_id');
			$requisition->recruitment_type_id = Input::get('recruitment_type_id');
			$requisition->recruitment_obj_template_id=Input::get('recruitment_obj_template_id');
			$requisition->recruitment_objective = Input::get('recruitment_objective');
			$requisition->year_of_experience = Input::get('year_of_experience');
			//$requisition->recruitment_objective = Input::get('recruitment_objective');
			$requisition->responsibility = Input::get('responsibility');
			$requisition->qualification = Input::get('qualification');
			$requisition->note = Input::get('note');
			$requisition->save();

		return View::make('HM.home2', compact('requisitions'));
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