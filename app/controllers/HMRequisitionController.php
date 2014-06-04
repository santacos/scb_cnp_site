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

		return View::make('requisition.index', compact('requisitions'));
	}

	/**
	 * Show the form for creating a new requisition
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('requisition.create');
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
			$requisition->employee_user_id = 1;
			//Input::get('employee_user_id');
			$requisition->datetime_create = Carbon::now();
			//$requisition->datetime_prev_status = Input::get('datetime_prev_status');
			$requisition->location_id = Input::get('location_id');
			$requisition->corporate_title_id = Input::get('corporate_title_id');
			$requisition->position_id =  Input::get('position_id');

			
			//Input::get('position_id');
			$dep= Input::get('group');
			$a = Dept::where('name','=',$dep)->firstOrFail()->dept_id;
			$requisition->dept_id =$a;
			$requisition->requisition_current_status_id = 2;
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

		return Response::json(array('success' => true));
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
	public function getDatatable()
    {    	
    	return  Datatable::collection(Requisition::all())
    ->addColumn('requisitsion_id',function($model)
   		{
   			if($model->requisition_id==3){
   				return $model->requisition_id;
   				}
   					return '<span class="badge bg-grey">'.$model->requisition_id.'</span>';
   		})
    ->addColumn('job_title',function($model)
        {
            return $model->position()->first()->job_title;
        })
    ->addColumn('corporate_title_id',function($model)
        {
            return $model->corporateTitle()->first()->name;
        })
    ->addColumn('location_id',function($model)
        {
            return $model->location()->first()->name;
        })
    ->addColumn('requisition_current_status_id',function($model)
        {
            return '<span class="label label-success">'.$model->requisitionCurrentStatus()->first()->name.'</span>';
        })
    ->addColumn('SLA',function($model)
        { return $model->total_number;
        })
    ->addColumn('Date Order',function($model)
        { return Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
        })
    ->addColumn('Deadline',function($model)
        { return $model->total_number;
        })
    ->addColumn('Note',function($model)
        { return '<i class="fa fa-fw fa-envelope-o"></i>';
        })
    ->addColumn('Progress',function($model)
        { return $model->total_number;
        })
    
    ->searchColumns('job_title')
    ->make();
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
		return View::make('requisition.edit', array( 'requisition'=> $requisition));
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
			$requisition->job_title = Input::get('job_title');
			$requisition->total_number = Input::get('total_number');
			$requisition->employee_user_id = 1;
			//Input::get('employee_user_id');
			$date=date_create();
			$requisition->datetime_create = date_timestamp_get($date);
			//$requisition->datetime_prev_status = Input::get('datetime_prev_status');
			$requisition->location_id = Input::get('location_id');
			$requisition->corporate_title_id = Input::get('corporate_title_id');
			$requisition->position_id = 1;
			//Input::get('position_id');
			$requisition->dept_id =Input::get('dept_id');
			$requisition->requisition_current_status_id = 1;
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

		return Response::json(array('success' => true));
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