<?php

class CandidateController extends \BaseController {

	/**
	 * Display a listing of candidates
	 *
	 * @return Response
	 */
	public function index()
	{
		$candidate = Candidate::find(Auth::user()->user_id);
		return View::make('user.homeprofile', array( 'candidate'=> $candidate));
	}
	public function getJobdetail($id)
	{
		return View::make('user.jobDetail')->with('requisition',Requisition::find($id));
	}
	public function getJobstatus($id)
	{	
		$search = trim(Input::get( 'search' ));
        $status = trim(Input::get( 'status' ));
		$apps=Application::where('candidate_user_id','=',$id);
		if($status!=''&&$status!=0)
		{	
			$apps=$apps->where('application_current_status_id','=',$status);
		}
		
		if($search!='')
		{		
			$searchTerms = explode(' ', $search);
			 foreach($searchTerms as $term)
			    {
			    	 $GLOBALS['term'] = $term;
			        $apps->whereHas('requisition', function($q) {
				   		$q->where('job_title', 'LIKE', '%'.  $GLOBALS['term'] .'%');
				     
				     });
			    }

		}
		$applications=$apps->paginate(10);
	
		return View::make('user.jobStatus', compact('applications'))->with(array('search'=>$search,'status'=>$status));	
	}
	public function postJobstatus($id)
	{
		$search = trim(Input::get( 'search' ));
        $status = trim(Input::get( 'status' ));
		$apps=Application::where('candidate_user_id','=',$id);
		if($status!=''&&$status!=0)
		{	
			$apps=$apps->where('application_current_status_id','=',$status);
		}
		
		if($search!='')
		{		
			$searchTerms = explode(' ', $search);
			 foreach($searchTerms as $term)
			    {
			    	 $GLOBALS['term'] = $term;
			        $apps->whereHas('requisition', function($q) {
				   		$q->where('job_title', 'LIKE', '%'.  $GLOBALS['term'] .'%');
				     
				     });
			    }

		}
		$applications=$apps->paginate(10);
	
		return View::make('user.jobStatus', compact('applications'))->with(array('search'=>$search,'status'=>$status));
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
			$candidate->user_id = Auth::user()->user_id;
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
		$candidate = Candidate::find($id);
		$user=$candidate->user()->first();
		return View::make('candidate.show', array( 'candidate'=> $candidate,'user'=>$user));
	}
	/**
	 * Show the form for editing the specified candidate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$candidate = Candidate::find(Auth::user()->user_id);
		$user=$candidate->user()->first();
		return View::make('candidate.edit', array( 'candidate'=> $candidate,'user'=>$user));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	public function update()
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
			$candidate = Candidate::findOrFail(Auth::user()->user_id);
			$user=User::find($candidate->user_id);
            $user->email = trim(strtolower(Input::get( 'email' )));
            $user->first = trim(Input::get( 'first' ));
            $user->last = trim(Input::get( 'last' ));
            $user->contact_number = Input::get( 'contact_number' );
             DB::table('users')->where('user_id',$candidate->user_id)->update($user->toArray());
             // $user=User::find($candidate->user_id);
             // return $user;
             // return $user->errors()->all();
            if(Input::hasFile('filepath_picture')){
				$image = Input::file('filepath_picture');
				$filename = date('Y-m-d-H-i-s')."-".$image->getClientOriginalName();
				Image::make($image->getRealPath())->save(public_path().'/img/candidatepics/'.$filename);
				File::delete(public_path().$candidate->filepath_picture);
				$candidate->filepath_picture = '/img/candidatepics/'.$filename;

			}else if (Input::has('filepath_picture')) {
				File::delete(public_path().$candidate->filepath_picture);
				$candidate->filepath_picture = Input::get('filepath_picture');
			}
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
			$candidate->filepath_profile_picture = Input::get('filepath_profile_picture');
			$candidate->filepath_video = Input::get('filepath_video');
			$candidate->filepath_cv = Input::get('filepath_cv');

			$candidate->push();
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