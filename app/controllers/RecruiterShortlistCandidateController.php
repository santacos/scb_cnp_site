<?php

class RecruiterShortlistCandidateController extends \BaseController {

	/**
	 * Display a listing of requisitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$requisitions = Requisition::all();
		return View::make('recruiter.requisition.shortlist.index', compact('requisitions'));
	}

    public function index2()
    {
        $requisitions = Requisition::all();
        return View::make('recruiter.requisition.shortlist.index2', compact('requisitions'));
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
		$applications = Application::whereRequisitionID($id)->whereNull('send_number')->get();
		$input=Input::all();
		$datatable=  Datatable::table()
                                        ->addColumn( 
                                'application_id', 
                                'Name',
                                '%Related',
                                'Point',
                                'Application Status',
                                'Education',
                                'Previous Job',
                                'SLA',
                                'Deadline',
                                'Saved',
                                'Choose',
                                'Note',
                                'Action'
                                          )    
                              ->setUrl(URL::to('api/application/'.$id .'/1' .'/1'

                              	.'?major='.(isset($input['major'])?$input['major']:"").'&'
                              	.'school_name='.(isset($input['school_name'])?$input['school_name']:"").'&'
                              	.'field_of_study='.(isset($input['field_of_study'])?$input['field_of_study']:"").'&'
                              	.'bachelor='.(isset($input['bachelor'])?$input['bachelor']:"").'&'
                              	.'master='.(isset($input['master'])?$input['master']:"").'&'
                              	.'doctor='.(isset($input['doctor'])?$input['doctor']:"").'&'


                              	.'company_name='.(isset($input['company_name'])?$input['company_name']:"").'&'
                              	.'position='.(isset($input['position'])?$input['position']:"").'&'
                              	.'monthly_salary='.(isset($input['monthly_salary'])?$input['monthly_salary']:"").'&'
                              	.'monthly_salary1='.(isset($input['monthly_salary1'])?$input['monthly_salary1']:"").'&'
                              	.'monthly_salary2='.(isset($input['monthly_salary2'])?$input['monthly_salary2']:"").'&'
                              	.'location='.(isset($input['location'])?$input['location']:"").'&'
                              	.'experience='.(isset($input['experience'])?$input['experience']:"").'&'
                              	.'experience1='.(isset($input['experience1'])?$input['experience1']:"").'&'
                              	.'experience2='.(isset($input['experience2'])?$input['experience2']:"").'&'

                              	.'skill='.(isset($input['skill'])?$input['skill']:"").'&'

                              	.'score='.(isset($input['score'])?$input['score']:"").'&'
                              	.'score1='.(isset($input['score1'])?$input['score1']:"").'&'
                              	.'score2='.(isset($input['score2'])?$input['score2']:"").'&'

                              	.'resume='.(isset($input['resume'])?$input['resume']:"")
                              	
                              	))
                              ->render('datatable') ;
		return View::make('recruiter.requisition.shortlist.candidate.show', compact('applications'))
		->with('requisition_id',$id)
		->with('datatable',$datatable)
		->with('input',$input);
		;
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

	public function toggle($id)
	{
		$application = Application::find($id);
		$application->is_in_basket = !$application->is_in_basket;
		$application->save();
		return Redirect::to('recruiter-shortlist-candidate-ckbox?id='.$id);
	}

}