@extends('user.layouts.default')

@section('title')
SCB Recruitment-Home
@stop

@section('body-class')
"fixed-header "
@stop


@section('header-class')
"header header-two"
@stop



@section('content')
	<!--Modal area-->
	<!-- Modal HTML -->
            <div id="ModalStatus" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Application Detail</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                        	
	                        	<div class="row">
	                        		<div class="col col-md-8">
			                        	<table class="table text-left" style="font-size:1.1em;">
										  <!-- <thead>
											<tr>
											  <th>Column 1</th>
											  <th>Column 2</th>
											</tr>
										  </thead> -->
										  <tbody>
											<tr>
											  <td>
											  	<strong>Job title :</strong>
											  </td>
											  <td>Programmer</td><!--edit-->
											  
											</tr>
											<tr>
											  <td><strong>Department : </strong>
											  </td><td>Technology and Operation Group</td><!--edit-->
											
											</tr>
											<tr>
											  <td><strong>Date Applied: </strong></td>
											  <td>18 - 4 -2557</td>
											</tr>
											<tr>
											  <td><strong>Date Update: </strong></td>
											  <td>18 - 4 -2557</td>
											</tr>
											<tr>
											  <td><strong>Status:</strong></td>
											  <td>appointment of interview</td>
											</tr>
										  </tbody>
										</table>
									</div> <!--end col-8 -->
								</div><!--end row-->
								<div class="row">
									<div class="col col-md-0.5 col-sm-0.5">
									</div>
									<div class="col col-md-11 col-sm-11">
										<div class="panel panel-primary frame border-radius">
											<div class="panel-heading"><strong>Message :</strong></div>
											<div class="panel-body" style="font-size:1.2em;">
												
												<!--edit-->																							
												<div class="row" style="font-size:1.1em;">
													<div class="col col-md-3 pull-left">
														<strong>interview detail:</strong>
													</div>
													<div class="col col-md-3 pull-left">
														20 June 2014  
													</div>
													<div class="col col-md-3 pull-left">
														10.00 am
													</div>
												</div>
												
												<div class="row" style="font-size:1.1em;">
													<div class="col col-md-3 pull-left">
														<strong>At : </strong>
													</div>
													<div class="col col-md-6 pull-left">
														Head Office
													</div>
													<div class="col col-md-3 pull-left">
														
													</div>
												</div>
												<div class="row" style="font-size:1.1em;">
													<div class="col col-md-3 pull-left">
														
													</div>
													<div class="col col-md-6 pull-left">
														
													</div>
													<div class="col col-md-3 pull-left">
														
													</div>
												</div><br>
												<div class="row" style="font-size:1.1em;">
													<div class="col col-md-3 pull-left">
														<strong>Recruiter detail : </strong>
													</div>
													<div class="col col-md-3 pull-left">
														<strong>John Smith </strong>
													</div>
													<div class="col col-md-3 pull-left">
														<i class="fa fa-fw fa-phone-square"></i>
														089-546-9879
													</div>
													<div class="col col-md-3 pull-left">
														<!--edit-->
														<button class="btn btn-info btn-sm" class="button">Send Email to</button>
													</div>
												</div><!--end last row-->
											</div><!--end panel body-->
										</div>
									</div>
								</div><!--end row2-->
							
                        </div><!--end modal body-->
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button> -->
                            <button class="btn btn-warning" class="button close" data-dismiss="modal" aria-hidden="true">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        <!--end Modal HTML-->
	<!-- end Modal area-->

  
    <div class="row">
     

	  <!--sidebar-->
	   	<div class="col-sm-3 col-md-3" style="positon:fixed;width:270px;">
	      	<div id="sidebar" class="sidebar pull-left hide-for-small-only " style ="positon:fixed;" >

		      	<aside class="widget menu">
					<header style="margin-left:10px;padding-right:0px;">
						
					  	<div class="row">
					  		<br>
	                      	<div class="col col-md-5 col-sm-5">
								<img class="image img-circle appear-animation bounceIn appear-animation-visible" src="{{asset('assets/img/avatar3.png')}}" alt="" title="" width="84" height="84" data-appear-animation="bounceIn">     
							</div>
	                      
	                      	<div class="col col-md-7 col-sm-7">
	                      		<br><br>
	                        	<h1 class="title">Hi! Somsri
	                        		<i class="livicon" data-s="24" data-op="0" data-hc="0"data-n="sun" data-c="#fda425" data-hc="0"></i>
	                        	</h1>

	                        	<!-- <i class="fa fa-circle text-success"></i> <h7 class="title">Online</h7> -->
	                      	</div>
	 					</div>

					</header>

					<nav style="margin-left:10px;padding-right:0px;">
							<ul>
							  <li class="parent">
							  	<a href="{{ URL::to('/cd')}}">
							  		<i class="livicon" data-s="16" data-n="home" data-c="#2e5481" data-hc="0"></i>
							  		
							  		<!--  <i class="fa fa-fw fa-home"></i> -->
							  		 Home
							  		</a>

							  	</li>
							  <li class="parent">
								<a href="#">
									<span class="open-sub"></span>
									 <i class="livicon" data-s="16" data-n="user" data-c="#2e5481" data-hc="0"></i>
									 
									<i class="fa fa-user open-sub item-icon"></i>Profile
								</a>
								<ul class="sub">
								  	<li><a href="{{ URL::to('/cd/edit-profile')}}"><span class="open-sub"></span>Edit profile</a></li>
						  			<li><a href="{{ URL::to('/cd/profile')}}"><span class="open-sub"></span>View profile</a></li>
								</ul>
							  </li>
							  <li class="active">
							  	<a href="{{ URL::to('/cd/jobstatus')}}">
							  		<i class="livicon" data-s="16" data-n="globe" data-c="#fff" data-hc="0"></i> 
							  		Job status
							  		<small class="badge bg-blue pull-right" style="margin-top:0.2em;">2</small>
							  	</a>
							  </li>
							<li>
							  	<a href="{{ URL::to('/cd/jobfollow')}}">
							  		<i class="livicon" data-s="16" data-n="notebook" data-c="#2e5481" data-hc="0"></i>
							  		 Following Job<small class="badge bg-blue pull-right" style="margin-top:0.2em;">7</small>
							  	</a>
							</li>
							<li>
							  	<a href="{{ URL::to('/cd/jobrecommend')}}">
							  		<i class="livicon" data-s="16" data-n="gift" data-c="#2e5481" data-hc="0"></i>
							  		 Recommend Job<small class="badge bg-blue pull-right" style="margin-top:0.2em;">4</small>
							  	</a>
							</li>

							<li>
							  	<a href="{{ URL::to('/cd/jobcart')}}">
							  		<i class="livicon" data-s="16" data-n="shopping-cart" data-c="#2e5481" data-hc="0"></i>
							  		 Job cart
							  	</a>
							</li>

							<li>
							  	<a href="{{ URL::to('/cd/searchjob')}}">
							  		<i class="livicon" data-s="16" data-n="search" data-c="#2e5481" data-hc="0"></i>
							  		 Search Job</a>
							</li>
							  
							</ul>
					</nav>

					   
				</aside>
				
			</div>
 		</div>
	  <!-- .end sidebar -->

	  	<!-- center content -->
	    <article class="content pull-left col-sm-9 col-md-9" style="padding-bottom: 50px;">
										
	    	<section id="main" style="	padding-top: 30px;
										padding-right: 0px;
										padding-bottom: 0px;
										padding-left: 0px;">
			  	<header class="page-header" style="margin-bottom:40px;">
				    <div class="container">
				      <h1 class="title">Job Status</h1>
				    </div>	
			  	</header>

			  	<!--filter box-->
			  	{{Form::open(array('url' => 'cd/jobstatus/'.Auth::user()->user_id, 'method' => 'post'))}}
			  	<div class="content-block bottom-padding frame frame-shadow-curved" style="margin-bottom:20px;">
					<div class="row">
						<div class="col col-md-1">
						</div>
						<div class="col col-md-4">
							<form class="form" role="form">
								<div class="form-group">
								  	<label class="" for="exampleInputEmail2">Job title :</label>
								  	<!-- <input type="email" style="font-size:1.1em;" class="form-control" id="exampleInputEmail2" placeholder="search job title"> -->
								  	 
                                     {{ Form::text('search', Input::old('search'), array('class' => 'form-control','placeholder'=>'search job title','style'=>'font-size:1.1em;')) }}   
                                      
								</div>
							</form>
						</div>
						<div class="col col-md-4">
							<strong>Status :</strong>
							<!-- <select class="form-control" style="font-size:1.1em;">
								<option value="" class="">Select Job status</option>
								<option value="0">waiting for interview</option>
								<option value="1">waiting for result</option>
								<option value="2">pending</option>
							</select> -->
							   {{ Former::select('status','')->addOption('Select Job Status')
                           ->fromQuery(RecruitmentType::All(), 'name', 'recruitment_type_id')->attributes(array('class'=>'form-control scrollable-menu')) }}  
                                       
						</div>
						
					</div><!--end first row-->

					<div class="row">
						<div class="col col-md-1">
						</div>
						<div class="col col-md-4">
						</div>
						<div class="col col-md-4">
							<button class="btn btn-default " style="width:100%;" type="submit">Submit</button>
						</div>
					</div><!--end second row-->

				</div>
				{{Form::close()}}
				<!--end filter box-->

				<div class="table-box">
					<table class="table table-bordered table-striped table-hover text-center" style="font-size:1.2em;">
					  <thead>
						<tr>
						  <th style="width:10%;">Application id</th>
						  <th style="width:20%;">Job title</th>
						  <th style="width:20%;">Application status</th>
						  <th style="width:20%;">Application Detail</th>
						  <th style="width:15%;">Date update</th>
						  <th style="width:15%;">Date applied</th>
						  
						  
						</tr>
					  </thead>
					  <tbody>
						<tr class="warning">
						  	<td>123e32</td>
						  	<td>Programmer</td>
						  	<td>
						  		waiting for interview

						  	</td>
						  	<td>
						  		<a href="#ModalStatus" data-toggle="modal">
						  		<i class="fa fa-fw fa-envelope-o"></i></a>Appointment
						  	</td>
						  	<td>29-4-2557</td>
						  	<td>18-4-2557</td>
						</tr>
						<tr>
						  	<td>f53e37</td>
						  	<td>Programmer</td>
						  	<td>
						  		waiting for appointment

						  	</td>
						  	<td>
						  		-
						  	</td>
						  	<td>20-4-2557</td>
						  	<td>16-4-2557</td>
						</tr>
						
							@foreach($applications as $application)
							 <tr>
							  <td>{{$application->application_id}}</td>
							  	<td>{{$application->requisition->job_title}}</td>
							  	<td>
							  		{{$application->applicationCurrentStatus()->first()->name}}

							  	</td>
							  	<td>
							  		-
							  	</td>
							  	<td>20-4-2557</td>
							  	<td>{{Carbon::createFromTimestamp(strtotime($application->created_at))->format('j F Y')}}</td>

							 </tr>
							@endforeach
						
					  </tbody>
					</table>
					{{ $applications->appends(array('search' => isset($search)?$search:'','status'=>isset($status)?$status:''))->links() }}
			  	</div><!--end table-->
			  	
			</section>
      	
      	</article><!-- .content -->
      	<!--end center content-->

      	

    </div><!--row-->
   
  <!-- .container -->

@stop

