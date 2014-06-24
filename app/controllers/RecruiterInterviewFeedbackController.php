<?php

class RecruiterInterviewFeedbackController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::whereHas('application', function($q) {
			$q->whereApplicationCurrentStatusId(4);
		})->where('requisition_current_status_id','=',6)->get();
		foreach($requisitions as $requisition) {
			$requisition['waiting_for_feedback'] = $requisition->application()->whereApplicationCurrentStatusId(4)->count();
		}
		return View::make('recruiter.interview.feedback.index', compact('requisitions'));
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
		$applications = Requisition::find($id)->application()->whereApplicationCurrentStatusId(4)->get();
		return View::make('recruiter.interview.feedback.show', compact('applications'))->with('requisition_id',$id);
	}

	/**
	 * Show the form for editing the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return $this->edit2($id,false);
	}

	public function getInterviewDetail($id)
	{
		return $this->edit2($id,true);
	}

	public function edit2($id,$preview){
		$application = Application::find($id);
		$visit_number = $application->interviewLog()->orderBy('visit_number','desc')->first();
		if(is_null($visit_number)){
			$visit_number = 1;
		}else{
			$visit_number = $visit_number->visit_number+1;
		}
		$location = $application->intOffSchedule()->whereAppCsId(4)->whereVisitNumber($visit_number)->first();
		if(is_null($location)){
			$location = "";
		}else{
			$location = $location->location;
		}
		return View::make('recruiter.interview.feedback.edit', compact('application'))->with('visit_number',$visit_number)->with('location',$location)->with('preview',$preview);
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
							'action_type' => 4,
							'application_id' => $application->application_id,
							'visit_number' => $visit_number,
							'employee_user_id' => Employee::first()->user_id,
							/**
							change 'employee_user_id' to real employee id
							*/
							'action_datetime' => $timestamp,
							'prev_action_datetime' => $prev_action_datetime,
							'result' => (Input::get('result') != 4),
							'note' => Input::get('note')
			));
		if(Input::get('result') == 1){
			$application->application_current_status_id = 3;
		}else if(Input::get('result') == 2){
			$application->application_current_status_id = 5;
		}else if(Input::get('result') == 3){
			$application->application_current_status_id = 11;
		}else if(Input::get('result') == 4){
			$application->application_current_status_id = 9;
			$application->result = false;
		}
		$application->note = Input::get('note');
		$application->save();

		$application->intOffSchedule()->whereAppCsId(4)->whereVisitNumber($visit_number)->delete();
		DB::table('int_off_schedules')->insert(array(
						'app_cs_id' => 4,
						'visit_number' => $visit_number,
						'application_id' => $application->application_id,
						'datetime' => Input::get('date_time'),
						'location' => Input::get('location')
		));
		$application->interviewEvaluation()->whereVisitNumber($visit_number)->delete();
		$interviewers = Employee::whereIn('user_id', explode(',',Input::get('interviewer_ids')))->get();
		foreach($interviewers as $interviewer){
			DB::table('interview_evaluations')->insert(array(
					'app_id' => $application->application_id,
					'user_id' => $interviewer->user_id,
					'visit_number' => $visit_number,
					'filepath_interview' => Input::hasFile('file'.$interviewer->user_id)?Input::file('file'.$interviewer->user_id)->getRealPath():NULL,
					'score' => Input::get('score'.$interviewer->user_id)
			));
		}
		/**
			Move File to some location before adding to database
		*/
		DB::table('interview_logs')->insert(array(
						'visit_number' => $visit_number,
						'application_id' => $application->application_id,
						'interview_datetime' => Input::get('date_time'),
						'result' => Input::get('result'),
						'note' => Input::get('note')
		));
		/**
			Input::get('redirect1') AND Input::get('redirect2')
		*/
		$applications = Requisition::find($application->requisition_id)->application()->whereApplicationCurrentStatusId(4)->get();
		return View::make('recruiter.interview.feedback.show', compact('applications'))->with('requisition_id',$application->requisition_id);
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