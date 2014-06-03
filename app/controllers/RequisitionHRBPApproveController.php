<?php

class RequisitionHRBPApproveController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::all();

		return View::make('requisition.index', compact('requisitions')); // Same as Hiring Manager
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
		return View::make('HRBPOfficer.show')->with('requisition',Requisition::find($id));
	}
	public function getDatatable()
    {    	
    	return  Datatable::collection(Requisition::all())
    ->addColumn('requisitsion_id',function($model)
   		{
   			return '<span class="badge bg-grey">'.$model->requisition_id.'</span>';
   		})
    ->showColumns('job_title')
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
    ->addColumn('total_number',function($model)
        { return $model->total_number;
        })
    ->addColumn('SLA',function($model)
        { return $model->total_number;
        })
    ->addColumn('Date Order',function($model)
        { return $model->total_number;
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
			$prev_action = RequisitionLog::where('requisition_id','===',$id)->orderBy('action_datetime','desc');
			if($prev_action->count() > 0){
				$prev_action = $prev_action->first();
			}else{
				$prev_action = NULL;
			}
			$date = new Datetime();
			if(is_null($prev_action)){
				$length_to_prev_action_in_hour = $date->getTimestamp();
			}else{
				$length_to_prev_action_in_hour = ($date->getTimestamp()-($prev_action->action_datetime))/(60.0*60.0);
			}
			DB::table('requisition_logs')->insert(array(
							'action_type' => 3,
							'requisition_id' => $id,
							'send_number' => 1,
							'employee_user_id' => 1,
							/**
							change 'employee_user_id' to real employee id
							*/
							'action_datetime' => time(),
							'length_to_prev_action_in_hour' => $length_to_prev_action_in_hour,
							'result' => Input::get('approve'),
							'note' => Input::get('note')
			));
			//if(Input::get('approve')){
			//$requisition->datetime_prev_status = Input::get('datetime_prev_status');// Unchanged Because of HRBP officer
			$requisition->requisition_current_status_id = 3;// Unchanged Because of HRBP officer
			//Input::get('requisition_current_status_id');
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
		return Response::json(array('success' => false));
	}

}