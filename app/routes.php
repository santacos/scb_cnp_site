<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// Test
Route::get('ptry',function(){
    return View::make('angular.ptry');
});
Route::get('testtest',function(){
	return View::make('testtest');
});

//////////////////// test area/////////////////////////////

// Route::get('cd',function(){
//     return View::make('user.homeprofile');
// });
// Route::get('cd/home',function(){
//     return View::make('user.home');
// });

// Candidate

// Route::get('cd/profile',function(){
//     return View::make('user.profile');
// });


// Route::get('cd/jobstatus',function(){
//     return View::make('user.jobStatus');
// });

// Route::get('cd/jobfollow',function(){
//     return View::make('user.jobFollow');
// });

// Route::get('cd/jobrecommend',function(){
//     return View::make('user.jobRecommend');
// });
// Route::get('cd/jobcart',function(){
//     return View::make('user.jobCart');
// });
// Route::get('cd/searchjob',function(){
//     return View::make('user.searchJob');
// });

Route::resource('cd', 'CandidateController', ['except' => ['show']]);
Route::controller('cd', 'CandidateController');

Route::resource('candidate', 'ShowCandidateController' ,array('except' => array('index','create', 'store','edit', 'update', 'destroy')));
Route::resource('job', 'ShowJobController',array('except' => array('index','create', 'store','edit', 'update', 'destroy')));
///////////////////////////////////////////////////////////
Route::get('package/{id}',function($id){
	$application = Application::find($id);
	return View::make('recruiter.offering.package.option',compact('application'));
});

Route::get('tryAngular',function(){
	//return View::make('emailtemplate');
	//return View::make('user.signup');
	return View::make('HM.create');
});

Route::get('showReq',function(){
	return View::make('HM.allRequisiton');
});

Route::controller('rest','RestController');


Route::get('home',function(){
	return View::make('user.home');
});
Route::get('home/login',function(){
	return View::make('user.login');
});
Route::get('trylogin',function(){
	$user = array(
        'username' => 'cos',
        'password' => 'qweqwe'
    );

    if (Auth::attempt($user)) {
        //return Redirect::intended('dashboard');
        return "ok.";
    } else {
        return "Wrong.";
    }
});

Route::get('checklogin',function(){


    if (Auth::check()) {
        //return Redirect::intended('dashboard');
        return "ok.";
    } else {
        return "Wrong.";
    }
});


///////////////////////////////////////////////////admin/////////////////////////

Route::get('/default', function()
{
	return View::make('recruiter.home');
	//return View::make('admin.layouts.home2');
});

Route::get('/', function()
{
	return View::make('all');
	//return View::make('admin.layouts.home2');
});
Route::get('empty', function()
{
	return View::make('admin.layouts.empty');
});
Route::get('widgets', function()
{
	return View::make('admin.layouts.widgets');
});
Route::get('mailbox', function()
{
	return View::make('admin.layouts.mailbox');
});
Route::get('calendar', function()
{
	return View::make('admin.layouts.calendar');
});
Route::resource('calendar-controller','CalendarController');
Route::get('buttons', function()
{
	return View::make('admin.layouts.ui.buttons');
});
Route::get('general', function()
{
	return View::make('admin.layouts.ui.general');
});
Route::get('icons', function()
{
	return View::make('admin.layouts.ui.icons');
});
Route::get('sliders', function()
{
	return View::make('admin.layouts.ui.sliders');
});
Route::get('timeline', function()
{
	return View::make('admin.layouts.ui.timeline');
});
Route::get('flot', function()
{
	return View::make('admin.layouts.charts.flot');
});
Route::get('morris', function()
{
	return View::make('admin.layouts.charts.morris');
});
Route::get('inline', function()
{
	return View::make('admin.layouts.charts.inline');
});
Route::get('advanced', function()
{
	return View::make('admin.layouts.forms.advanced');
});
Route::get('editors', function()
{
	return View::make('admin.layouts.forms.editors');
});
Route::get('formgeneral', function()
{
	return View::make('admin.layouts.forms.general');
});
Route::get('tabledata', function()
{
	return View::make('admin.layouts.tables.data');
});
Route::get('tablesimple', function()
{
	return View::make('admin.layouts.tables.simple');
});
Route::get('404', function()
{
	return View::make('admin.layouts.examples.404');
});
Route::get('500', function()
{
	return View::make('admin.layouts.examples.500');
});
Route::get('invoice', function()
{
	return View::make('admin.layouts.examples.invoice');
});
Route::get('lockscreen', function()
{
	return View::make('admin.layouts.examples.lockscreen');
});
Route::get('login', function()
{
	return View::make('admin.layouts.examples.login');
});
Route::get('register', function()
{
	return View::make('admin.layouts.examples.register');
});

Route::controller('userrest', 'UserRestController');

// Hiring Manager
Route::controller('hm','HMController');
Route::resource('hm','HMController');

Route::resource('hm-requisition', 'HMRequisitionController');
Route::get('api/requisition/{user_id?}/{app_status?}/{status_id1?}/{status_id2?}/{status_id3?}/{status_id4?}/{status_id5?}/{status_id6?}/{status_id7?}', array('as'=>'api.requisition', 'uses'=>'RequisitionRestController@getRequisitionDatatable'));
Route::get('api/application/{requisition_id?}/{special_status?}/{status_id1?}/{status_id2?}/{status_id3?}/{status_id4?}/{status_id5?}/{status_id6?}/{status_id7?}/{status_id8?}/{status_id9?}/{status_id10?}', array('as'=>'api.application', 'uses'=>'ApplicationRestController@getApplicationDatatable'));
//Route::get('api/basket/{requisition_id?}/{status_id1?}/{status_id2?}/{status_id3?}/{status_id4?}/{status_id5?}/{status_id6?}/{status_id7?}/{status_id8?}/{status_id9?}/{status_id10?}', array('as'=>'api.basket', 'uses'=>'ApplicationRestController@getBasketDatatable'));
Route::controller('requisitionrest', 'RequisitionRestController');
Route::resource('hm-application-review', 'HMApplicationReviewController');

// Next Level Hiring Manager
Route::resource('hm-nl-requisition', 'HMNLRequisitionController');

// HRBP Officer
Route::controller('hrbp-officer','HRBPOfficerController');
Route::resource('hrbp-officer','HRBPOfficerController');
Route::resource('hrbp-officer-requisition', 'HRBPOfficerRequisitionController');

// HRBP Manager
Route::controller('hrbp-manager','HRBPManagerController');
Route::resource('hrbp-manager','HRBPManagerController');
Route::resource('hrbp-manager-requisition', 'HRBPManagerRequisitionController');
Route::resource('hrbp-manager-confirm-package', 'HRBPManagerPackageController');

// Application
Route::resource('application', 'ApplicationController');

// Recruiter
Route::resource('recruiter','RecruiterController');
Route::controller('recruiter','RecruiterController');
Route::resource('recruiter-requisition-post', 'RecruiterRequisitionPostController');
Route::controller('recruiter-requisition-post', 'RecruiterRequisitionPostController');
Route::resource('recruiter-shortlist', 'RecruiterShortlistController');
Route::resource('recruiter-shortlist-candidate', 'RecruiterShortlistCandidateController');
Route::get('recruiter-shortlist-candidate-sent', 'RecruiterShortlistCandidateController@index2');
Route::resource('recruiter-shortlist-basket', 'RecruiterShortlistBasketController');
Route::resource('recruiter-shortlist-log', 'RecruiterShortlistLogController');
Route::get('recruiter-shortlist-candidate-ckbox-ctrl/{id}', 'RecruiterShortlistCandidateController@toggle');
Route::get('recruiter-shortlist-candidate-ckbox', function(){
	return View::make('recruiter.requisition.shortlist.candidate.ckbox');
});
Route::get('recruiter-shortlist-log/{id}/{id2}', 'RecruiterShortlistLogController@view');
Route::resource('recruiter-interview-confirm', 'RecruiterInterviewConfirmController');
Route::get('recruiter-interview-confirm-addInterviewer', function(){
    return View::make('recruiter.interview.confirm.addInterviewer');
});
Route::resource('recruiter-interview-feedback', 'RecruiterInterviewFeedbackController');
Route::controller('recruiter-interview-feedback', 'RecruiterInterviewFeedbackController');
Route::resource('recruiter-prepare-package', 'RecruiterPackageController');
Route::resource('recruiter-offer-package', 'RecruiterOfferPackageController');
Route::resource('recruiter-sign', 'RecruiterSignController');
Route::resource('recruiter-closed-requisition', 'RecruiterClosedRequisitionController');

/*App::missing(function($exception)
{
   return View::make('user.home');
});*/

// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'user/login',                  'UserController@login');
Route::post('user/login',                  'UserController@do_login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');
Route::get( 'user/forgot_password',        'UserController@forgot_password');
Route::post('user/forgot_password',        'UserController@do_forgot_password');
Route::get( 'user/reset_password/{token}', 'UserController@reset_password');
Route::post('user/reset_password',         'UserController@do_reset_password');
Route::get( 'user/logout',                 'UserController@logout');

Route::get('social/{action?}','UserController@socialLogin' );
Route::get('facebook/logout', 'FacebookController@logout');
Route::get('linkedin/login/{action?}','LinkedinController@login');
Route::get('linkedin/logout', 'LinkedinController@logout');

// Route::get('social/{action?}', array("as" => "hybridauth", function($action = "")
// {
//     // check URL segment
//     if ($action == "auth") {
//         // process authentication
//         try {
//             Hybrid_Endpoint::process();
//         }

//         catch (Exception $e) {
//             // redirect back to http://URL/social/
//             return Redirect::route('hybridauth');
//         }
//         return;
//     }

//     try {
//         // create a HybridAuth object
//         $socialAuth = new Hybrid_Auth(app_path() . '/config/hybridauth.php');
//         // authenticate with Facebook
//         $provider = $socialAuth->authenticate("Facebook");
//         // fetch user profile
//         $userProfile = $provider->getUserProfile();
//     }

//     catch(Exception $e) {
//         // exception codes can be found on HybBridAuth's web site
//         return $e->getMessage();
//     }

//     // access user profile data
//     echo "Connected with: <b>{$provider->id}</b><br />";
//     echo "As: <b>{$userProfile->displayName}</b><br />";
//     echo "<pre>" . print_r( $userProfile, true ) . "</pre><br />";

//     // logout
//     $provider->logout();
// }));

Route::get('analytics',function(){
	$option = 0;
	$value = 0;
	for($i=1;$i<=7;$i++){
		if(Input::get('option'.$i) > 0){
			$option = $i;
			$value = Input::get('option'.$i);
			break;
		}
	}
	if(Input::get('mode') == 'requisition'){
		$datatable = Datatable::table()
            ->addColumn( 
                'Requisition ID',
                'Job Title',
                'Sign'
                		)->setUrl(URL::to('analytics/requisition?'
                              	.'option='.$option.'&'
                              	.'value='.$value
                              	))->render('datatable');
    }else if(Input::get('mode') == 'application'){

    }
	return View::make('recruiter.analytics.index',compact('datatable'))->with('input',Input::all());
});
Route::get('analytics/requisition',function(){
	$req = Requisition::all();
	$return = Datatable::collection($req)
	    ->addColumn('Requisition',function($model)
	        {
	            $bin = sprintf( "%020d",  $model->requisition_id);
	            return '<input type="hidden" value="'.$bin.'"><span class="badge bg-grey">'.$model->requisition_id.'</span>';
	        })
	    ->addColumn('Job Title',function($model)
            {
                return $model->position()->first()->job_title;
            })
	    ->addColumn('Sign',function($model)
            { 
            	$bin = sprintf( "%020d",  $model->total_number-$model->get_number);
                return '<input type="hidden" value="'.$bin.'">' . $model->get_number . "/" . $model->total_number;
            });
	$return=$return->make();
    return $return;
});
