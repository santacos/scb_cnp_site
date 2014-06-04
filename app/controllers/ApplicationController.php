<?php

class ApplicationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /applications
	 *
	 * @return Response
	 */
	public function index()
	{
		$applications = Application::all();

		return View::make('application.index', compact('applications'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /applications/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('application.create');	}

	/**
	 * Store a newly created resource in storage.
	 * POST /applications
	 *
	 * @return Response
	 */
	public function store()
	{
		
		/*$validator = Validator::make($data = Input::all(), Application::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/
			$application = new Application;
			$application->requisitsion_id = Input::get('requisitsion_id');
			$application->candidate_user_id = 1;
			//Input::get('employee_user_id');
			// $application->datetime_create = Carbon::now();
			// $application->datetime_prev_status = Carbon::now();
			
			$application->application_current_status_id = 2;
			//Input::get('application_current_status_id');
			$application->note = Input::get('note');
			$application->save();

		return Response::json(array('success' => true));
	}

	/**
	 * Display the specified resource.
	 * GET /applications/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Application::find($id));
	}
	public function getDatatable()
    {    	
    	return  Datatable::collection(Application::all())
    ->addColumn('requisitsion_id',function($model)
   		{
   			if($model->application_id==3){
   				return $model->application_id;
   				}
   					return '<span class="badge bg-grey">'.$model->application_id.'</span>';
   		})
    ->addColumn('candidate_user_id',function($model)
        {
            return $model->candidate()->first()->name;
        })
    ->addColumn('application_current_status_id',function($model)
        {
            return '<span class="label label-success">'.$model->applicationCurrentStatus()->first()->name.'</span>';
        })
    ->addColumn('SLA',function($model)
        { return $model->application_id;
        })
    ->addColumn('Date Order',function($model)
        { return Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
        })
    ->addColumn('Deadline',function($model)
        { return $model->application_id;
        })
    ->addColumn('Note',function($model)
        { return '<i class="fa fa-fw fa-envelope-o"></i>';
        })
    ->addColumn('Progress',function($model)
        { return $model->application_id;
        })
    
    ->searchColumns('job_title')
    ->make();
    }
	/**
	 * Show the form for editing the specified resource.
	 * GET /applications/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$application = Application::find($id);
		return View::make('application.edit', array( 'application'=> $application));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /applications/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		/*$validator = Validator::make($data = Input::all(), Application::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/
			$application = Application::findOrFail($id);
			$application->requisitsion_id = Input::get('requisitsion_id');
			$application->candidate_user_id = 1;
			//Input::get('employee_user_id');
			$application->datetime_create = Carbon::now();
			$application->datetime_prev_status = Carbon::now();
			
			$application->application_current_status_id = 2;
			//Input::get('application_current_status_id');
			$application->note = Input::get('note');
			$application->save();

		return Response::json(array('success' => true));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /applications/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Application::destroy($id);

		return Response::json(array('success' => true));
	}

}