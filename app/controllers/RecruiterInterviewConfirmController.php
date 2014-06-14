<?php

class RecruiterInterviewConfirmController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::whereHas('application', function($q) {
			$q->whereApplicationCurrentStatusId(3);
		})->get();
		foreach($requisitions as $requisition) {
			$requisition['waiting_for_confirm'] = $requisition->application()->whereApplicationCurrentStatusId(3)->count();
		}
		return View::make('recruiter.requisition.interview.index', compact('requisitions'));
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
		$applications = Requisition::find($id)->application()->whereApplicationCurrentStatusId(3)->get();
		return View::make('recruiter.requisition.interview.show', compact('applications'));
	}

	/**
	 * Show the form for editing the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$application = Application::find($id);
		return View::make('recruiter.requisition.interview.edit', compact('application'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Application Log
			$application = Application::findOrFail($id);
			$prev_action = ApplicationLog::where('application_id','=',$id)->orderBy('action_datetime','desc');
			if($prev_action->count() > 0){
				$prev_action = $prev_action->first();
			}else{
				$prev_action = NULL;
			}
			$timestamp = Carbon::now();
			/**
			
			*/
			$visit_number = $application->interviewLog()->orderBy('visit_number','desc')->first();
			if(is_null($visit_number)){
				$visit_number = 1;
			}else{
				$visit_number = $visit_number->visit_number+1;
			}
			if(is_null($prev_action)){
				$prev_action_datetime = 0;
			}else{
				$prev_action_datetime = $prev_action->action_datetime;
			}
			DB::table('application_logs')->insert(array(
							'action_type' => 3,
							'application_id' => $application->application_id,
							'visit_number' => $visit_number,
							'employee_user_id' => Employee::first()->user_id,
							/**
							change 'employee_user_id' to real employee id
							*/
							'action_datetime' => $timestamp,
							'prev_action_datetime' => $prev_action_datetime,
							'result' => Input::get('approve'),
							'note' => Input::get('note')
			));
		$application->application_current_status_id = Input::get('approve')?4:9;
		if(Input::get('approve') == false){
			$application->result = false;
		}
		$application->note = Input::get('note');
		$application->save();
		// $int_visit_number = $application->applicationLog()->whereActionType(4)->orderBy('visit_number','desc');
		// 	if($int_visit_number->count() > 0){
		// 		$int_visit_number = $prev_int_visit_number->first()->send_number+1;
		// 	}else{
		// 		$int_visit_number = 1;
		// 	}
		/**
			>> Have or don't have confirmed????
			>> Interviewers Input::get('interviewer_ids');
		*/
		DB::table('int_off_schedules')->insert(array(
						'app_cs_id' => 4,
						'visit_number' => $visit_number,
						'application_id' => $application->application_id,
						'datetime' => Input::get('date_time')
		));
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