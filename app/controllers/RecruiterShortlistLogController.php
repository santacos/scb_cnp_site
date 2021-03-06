<?php

class RecruiterShortlistLogController extends \BaseController {

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
		$id = Input::get('id');
		// Requisition Log
			$requisition = Requisition::findOrFail($id);
			$prev_action = RequisitionLog::where('requisition_id','=',$id)->orderBy('action_datetime','desc');
			if($prev_action->count() > 0){
				$prev_action = $prev_action->first();
			}else{
				$prev_action = NULL;
			}
			$timestamp = Carbon::now();
			$send_number = 1;
			if(is_null($prev_action)){
				$prev_action_datetime = 0;
			}else{
				$prev_action_datetime = $prev_action->action_datetime;
				if($prev_action->action_type == 5){
					$send_number = $prev_action->send_number+1;
				}
			}
			DB::table('requisition_logs')->insert(array(
							'action_type' => 5,
							'requisition_id' => $id,
							'send_number' => $send_number,
							'employee_user_id' => Employee::first()->user_id,
							/**
							change 'employee_user_id' to real employee id
							*/
							'action_datetime' => $timestamp,
							'prev_action_datetime' => $prev_action_datetime,
							'result' => true,
							'note' => Input::get('note')
			));
		// Application Log
			$applications = $requisition->application()->whereIsInBasket(1)->whereNull('send_number')->get();
			foreach($applications as $application){
				$prev_action = ApplicationLog::where('application_id','=',$application->application_id)->orderBy('action_datetime','desc');
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
								'action_type' => 1,
								'application_id' => $application->application_id,
								'visit_number' => 1,
								'employee_user_id' => Employee::first()->user_id,
								/**
								change 'employee_user_id' to real employee id
								*/
								'action_datetime' => $timestamp,
								'prev_action_datetime' => $application->requisition->requisitionLog()->whereActionType(3)->whereSendNumber(2)->first()->action_datetime,
								'result' => true,
								'note' => Input::get('note')
				));
				//Outside Log
					$application->send_number = $send_number;
					$application->application_current_status_id = 2;
					$application->note = Input::get('note');
					$application->save();
			}
			$requisition->requisition_current_status_id = 6;
			$requisition->note = Input::get('note');
			$requisition->save();
			
			$requisitions = Requisition::all();

		return View::make('recruiter.home', compact('requisitions'));
	}

	/**
	 * Display the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$requisition = Requisition::find($id);
		$shortlists = $requisition->requisitionLog()->whereActionType(5)->get();
		foreach($shortlists as $shortlist) {
			$shortlist['sent_number'] = $requisition->application()->whereSendNumber($shortlist->send_number)->count();
		}
		return View::make('recruiter.requisition.shortlist.log.show', compact('shortlists'));
	}

	/**
	 * Show the form for editing the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
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

	public function view($id,$id2)
	{
		$requisition = Requisition::find($id);
		$applications = $requisition->application()->whereSendNumber($id2)->get();
		return View::make('recruiter.requisition.shortlist.log.view', compact('applications'));
	}
}