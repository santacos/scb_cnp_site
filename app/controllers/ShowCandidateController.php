<?php

class ShowCandidateController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /applications
	 *
	 * @return Response
	 */

	public function show($id)
	{
		$candidate = Candidate::find($id);
		$apps=Application::where('candidate_user_id','=',$id);
		$applications=$apps->paginate(10);
		return View::make('show.candidateDetail', array( 'candidate'=> $candidate,'applications' => $applications));
	}
}