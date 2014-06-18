<?php

class RecruiterSignController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::whereHas('application', function($q) {
			$q->whereApplicationCurrentStatusId(8);
		})->where('requisition_current_status_id','=',6)->get();
		foreach($requisitions as $requisition) {
			$requisition['waiting_for_sign'] = $requisition->application()->whereApplicationCurrentStatusId(8)->count();
		}
		return View::make('recruiter.offering.sign.index', compact('requisitions'));
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
		$applications = Requisition::find($id)->application()->whereApplicationCurrentStatusId(8)->get();
		return View::make('recruiter.offering.sign.show', compact('applications'));
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
		$requisition = $application->requisition;
		return View::make('recruiter.offering.sign.edit', compact('application'))->with('requisition',$requisition);
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
			$visit_number = 1;
			if(is_null($prev_action)){
				$prev_action_datetime = 0;
			}else{
				$prev_action_datetime = $prev_action->action_datetime;
			}
			DB::table('application_logs')->insert(array(
							'action_type' => 8,
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
		$application->result = Input::get('approve');
		$application->application_current_status_id = Input::get('approve')?10:9;
		$application->note = Input::get('note');
		$application->save();

		$require = $application->requisition->total_number;
		$current = $application->requisition->application()->whereApplicationCurrentStatusId(10)->count();
		$application->requisition->get_number = $current;
		$application->push();

		if(Input::get('approve')){
			$starttime = Carbon::createFromFormat('Y-m-d H:i:s',$application->requisition->requisitionLog()->whereActionType(3)->whereSendNumber(2)->first()->action_datetime);
			$endtime = Carbon::createFromFormat('Y-m-d H:i:s',$application->requisition->requisitionLog()->whereActionType(6)->whereSendNumber(1)->first()->action_datetime);
			$sla_in_hours = $endtime->diffInHours($starttime);


			$target_sla_in_days = 0;
			$logs = $model->ApplicationLog();
			foreach($logs as $log){
				$temp = $model->requisition->corporateTitle->group->SLACandidate()->whereAppCsId($log->action_type)->whereVisitNumber($log->visit_number);
	            if($temp->count() == 0){
	                $temp = $temp->orWhere('visit_number','>=',1)->orderBy('visit_number','desc')->first()->SLA;
	            }else{
	                $temp = $temp->first()->SLA;
	            }
	            $target_sla_in_days += $temp;
			}

            $end_timestamp = $starttime->copy();
            $holidays = PublicHoliday::all();
            $i=0;
            for($i=0; $end_timestamp->diffInSeconds($endtime,false) >= 0; $i++){
                if($end_timestamp->toDateString() == $endtime->toDateString()){
                    $hours_left = $target_sla_in_days*24-$i;
                    break;
                }
                $end_timestamp->addDays(1);
                if($end_timestamp->isWeekend()){
                	$sla_in_hours -= 24;
                	$i--; 
                }else{
                    foreach($holidays as $holiday){
                        if($end_timestamp->toDateString() == $holiday->date){
                        	$sla_in_hours -= 24;
                            $i--;
                            break;
                        }
                    }
                }
            }


			$application->sla_in_hours = $sla_in_hours;
			$application->target_sla_in_days = $target_sla_in_days;
			$application->push();
			if($current >= $require){
				$requisition = $application->requisition;
				$prev_action = RequisitionLog::where('requisition_id','=',$id)->orderBy('action_datetime','desc');
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
				DB::table('requisition_logs')->insert(array(
								'action_type' => 6,
								'requisition_id' => $requisition->requisition_id,
								'send_number' => 1,
								'employee_user_id' => Employee::first()->user_id,
								/**
								change 'employee_user_id' to real employee id
								*/
								'action_datetime' => $timestamp,
								'prev_action_datetime' => $prev_action_datetime,
								'result' => Input::get('approve'),
								'note' => Input::get('note')
				));
				$requisition->requisition_current_status_id = 7;
				$requisition->sla_in_hours = $sla_in_hours;
				$application->push();
				return "Finish : End SLA ... From After HRBP Manager Approve (".$starttime.") - Last Candidate Sign (".$endtime.")  >>  Use total ".$endtime->diffInHours($starttime)."Hour(s) ... SLA = "
				.($sla_in_hours<24?1:$sla_in_hours/24)."Day(s) <br>"
				."get/require = ".$requisition->get_number."/".$requisition->total_number;
			}
		}
		/**
			Redirect Requisition Summary Page(s)
		*/
		return Response::json(array('success' => true));//->with('require',$require)->with('current',$current);
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