<?php

class CandidateController extends \BaseController {

	/**
	 * Display a listing of candidates
	 *
	 * @return Response
	 */
	public function index()
	{
		$candidates = Candidate::all();

		return View::make('candidate.index', compact('candidates'));
	}

	/**
	 * Show the form for creating a new candidate
	 *
	 * @return Response
	 */
	public function create()
	{
		

		return View::make('candidate.create');
	}

	/**
	 * Store a newly created candidate in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$validator = Validator::make($data = Input::all(), Candidate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/
			$candidate = new candidate;
			$candidate->user_id = 1;
			$candidate->save();

		return Response::json(array('success' => true));
	}

	/**
	 * Display the specified candidate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Candidate::find($id));
	}
	/**
	 * Show the form for editing the specified candidate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($candidate_id)
	{
		$candidate = Candidate::find($candidate_id);
		return View::make('candidate.edit', array( 'candidate'=> $candidate));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		/*$candidate = Candidate::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Candidate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$candidate->update($data);

		return Redirect::route('candidates.index');*/
		/*$validator = Validator::make($data = Input::all(), Candidate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/
			$candidate = Candidate::findOrFail($id);
			$user=$candidate->user()->first();
            $user->email = trim(strtolower(Input::get( 'email' )));
            $user->first = trim(Input::get( 'first' ));
            $user->last = trim(Input::get( 'last' ));
            $user->contact_number = Input::get( 'contact_number' );
            $user->save(); 
            // return $user->errors()->all();
            
			$candidate->idcard = Input::get('idcard');
			$candidate->passport_number = Input::get('passport_number');
			$candidate->thai_saluation = Input::get('thai_saluation');
			$candidate->thai_firstname = Input::get('thai_firstname');
			$candidate->thai_lastname = Input::get('thai_lastname');
			$candidate->eng_saluation = Input::get('eng_saluation');
			$candidate->is_male = Input::get('is_male');
			$candidate->birth_date = Input::get('birth_date');
			$candidate->nationality = Input::get('nationality');
			$candidate->country = Input::get('country');
			$candidate->city = Input::get('city');
			$candidate->zip_code = Input::get('zip_code');
			$candidate->full_location = Input::get('full_location');
			$candidate->current_living_location = Input::get('current_living_location');
			$candidate->filepath_picture = Input::get('filepath_picture');
			$candidate->filepath_profile_picture = Input::get('filepath_profile_picture');
			$candidate->filepath_video = Input::get('filepath_video');
			$candidate->filepath_cv = Input::get('filepath_cv');

			$candidate->save();

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
		Candidate::destroy($id);

		return Response::json(array('success' => true));
	}

}