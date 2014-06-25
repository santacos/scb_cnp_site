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
		return View::make('show.candidateDetail', array( 'candidate'=> $candidate));
	}
}