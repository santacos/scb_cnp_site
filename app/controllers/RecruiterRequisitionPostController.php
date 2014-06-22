<?php

class RecruiterRequisitionPostController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::all();

		return View::make('recruiter.requisition.post.index', compact('requisitions'));
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
		return View::make('recruiter.requisition.post.show')->with('requisition',Requisition::find($id));
	}

	/**
	 * Show the form for editing the specified requisition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('recruiter.requisition.post.edit')->with('requisition',Requisition::find($id));
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
		if(Input::get('view')){
			$requisition = Requisition::findOrFail($id);
			$requisition->job_title = Input::get('job_title');
			$requisition->job_description = Input::get('job_description');
			$requisition->total_number = Input::get('total_number');
			$requisition->location_id = Input::get('location_id');
			$requisition->corporate_title_id = Input::get('corporate_title_id');

			if(Input::get('position_id')!=0){
				$requisition->position_id =  Input::get('position_id');
				$dep= $requisition->position()->first()->group;
				$a = Dept::where('name','=',$dep)->firstOrFail()->dept_id;
				$requisition->dept_id =$a;
			}
			$requisition->requisition_current_status_id = 4;
			$requisition->recruitment_type_id = Input::get('recruitment_type_id');
			$requisition->recruitment_obj_template_id=Input::get('recruitment_obj_template_id');
			$requisition->recruitment_objective = Input::get('recruitment_objective');
			$requisition->year_of_experience = Input::get('year_of_experience');
			$requisition->responsibility = Input::get('responsibility');
			$requisition->qualification = Input::get('qualification');
			$questions = json_decode(Input::get('question_json'));
			$GLOBALS['to_be_delete'] = Question::whereHas('Position',function($q){$q->where('positions.position_id','=',Input::get('position_id'));})->lists('question_id');
			if(count($GLOBALS['to_be_delete']) > 0){
				Answer::whereHas('Question',function($q){$q->whereIn('questions.question_id',$GLOBALS['to_be_delete']);})->delete();
				Question::whereIn('question_id',$GLOBALS['to_be_delete'])->delete();
			}
			foreach($questions as $question){
				$q = new Question;
				$q->save();
				$q->position()->attach(Input::get('position_id'));
				$p = $q->position()->first()->pivot;
				$p->is_checked = $question->is_checked;
				$p->save();
				$q->question = $question->question;
				if(is_null($q->requisition_id) && $question->is_checked){
					$q2 = $q->replicate();
					unset($q2->question_id);
					$q2->requisition_id = $requisition->requisition_id;
					$q2->save();
				}
				foreach($question->answers as $answer){
					$a = new Answer;
					$a->save();
					$q->answer()->save($a);
					$a->name = $answer->name;
					$a->point = $answer->point;
					$a->save();
					if(is_null($q->requisition_id) && $question->is_checked){
						$a2 = $a->replicate();
						unset($a2->answer_id);
						$q2->answer()->save($a2);
					}
				}
				$q->push();
			}
			$requisition->note = Input::get('note');
			$requisition->save();
			return View::make('recruiter.requisition.post.show')->with('requisition',Requisition::find($id));
		}else if(!Input::get('edit')){
			$requisition = Requisition::findOrFail($id);

			// Requisition Log
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
				'action_type' => 4,
				'requisition_id' => $id,
				'send_number' => 1,
				'employee_user_id' => Employee::first()->user_id,
							/**
							change 'employee_user_id' to real employee id
							*/
							'action_datetime' => $timestamp,
							'prev_action_datetime' => $prev_action_datetime,
							'result' => true,
							'note' => Input::get('note')
							));
			//END Requisition Log

			$requisition->requisition_current_status_id = 5;
			$requisition->note = Input::get('note');
			$requisition->save();


			$requisitions = Requisition::all();

			return View::make('recruiter.home', compact('requisitions'));

		}else{
			return Redirect::to('recruiter-requisition-post/'.$id.'/edit');
		}

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

	public function getQuestionTable($id,$checkOn){
		$questions = Position::find($id)->question()->get();
		return View::make('recruiter.requisition.post.question',compact('questions'))->with('checkOn',$checkOn);
	}

}