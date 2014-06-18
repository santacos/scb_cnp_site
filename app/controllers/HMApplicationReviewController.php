<?php

class HMApplicationReviewController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::whereHas('application', function($q) {
			$q->whereApplicationCurrentStatusId(2);
		})->where('requisition_current_status_id','=',6)->get();
		foreach($requisitions as $requisition) {
			$requisition['waiting_for_review'] = $requisition->application()->whereApplicationCurrentStatusId(2)->count();
			$requisition['reviewed'] = $requisition->application()->where('application_current_status_id', '>', 2)->count();
		}
		return View::make('HM.review.index', compact('requisitions'));
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
		$applications = Requisition::find($id)->application()->whereApplicationCurrentStatusId(2)->get();
		return View::make('HM.review.show', compact('applications'))->with('requisition',Requisition::find($id));
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
		return View::make('HM.review.edit', compact('application'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		for($x=0;$x<2;$x++){
			if($x==0){
				$approve = true;
				$applications = Application::whereIn('application_id', explode(',',Input::get('sel_application_ids')))->get();
			}else if($x==1){
				$approve = false;
				$applications = Application::whereIn('application_id', explode(',',Input::get('unsel_application_ids')))->get();
			}
			foreach($applications as $application){
				// Application Log
					$prev_action = ApplicationLog::where('application_id','=',$id)->orderBy('action_datetime','desc');
					if($prev_action->count() > 0){
						$prev_action = $prev_action->first();
					}else{
						$prev_action = NULL;
					}
					$timestamp = Carbon::now();
					if(is_null($prev_action)){
						$prev_action_datetime = 0;
					}else{
						$prev_action_datetime = $prev_action->action_datetime;
					}
					DB::table('application_logs')->insert(array(
									'action_type' => 2,
									'application_id' => $application->application_id,
									'visit_number' => 1,
									'employee_user_id' => Employee::first()->user_id,
									/**
									change 'employee_user_id' to real employee id
									*/
									'action_datetime' => $timestamp,
									'prev_action_datetime' => $prev_action_datetime,
									'result' => $approve,
									'note' => Input::get('note')
					));
				$application->application_current_status_id = $approve?3:9;
				if($approve == false){
					$application->result = false;
				}
				$application->note = Input::get('note');
				$application->save();
			}
		}
		// $int_visit_number = $application->applicationLog()->whereActionType(4)->orderBy('visit_number','desc');
		// 	if($int_visit_number->count() > 0){
		// 		$int_visit_number = $prev_int_visit_number->first()->send_number+1;
		// 	}else{
		// 		$int_visit_number = 1;
		// 	}
		/*DB::table('int_off_schedules')->insert(array(
						'app_cs_id' => 4,
						'visit_number' => 1,
						'application_id' => $application->application_id,
						'datetime' => Input::get('date_time')
		));*/
		return View::make('HM.review.show')->with('requisition',Requisition::find($id));
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