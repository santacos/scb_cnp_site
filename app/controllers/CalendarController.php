<?php

class CalendarController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /applications
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = IntOffSchedule::all();
		return View::make('admin.layouts.calendar', compact('events'));
	}

}