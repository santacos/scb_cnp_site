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
	                        	<h1 class="title">Hi! <!--edit-->{{$candidate->user()->first()->first.' '.$candidate->user()->first()->last}}
	                        		<i class="livicon" data-s="24" data-op="0" data-hc="0"data-n="sun" data-c="#fda425" data-hc="0"></i>
	                        	</h1>

	                        	<!-- <i class="fa fa-circle text-success"></i> <h7 class="title">Online</h7> -->
	                      	</div>
	 					</div>

					</header>

					<nav style="margin-left:10px;padding-right:0px;">
							<ul>
							  <li class="parent active">
							  	<a href="{{ URL::to('/cd')}}">
							  		<i class="livicon" data-s="16" data-n="home" data-c="#fff" data-hc="0"></i>
							  		
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
							  <li>
							  	<a href="{{ URL::to('/cd/jobstatus')}}">
							  		<i class="livicon" data-s="16" data-n="globe" data-c="#2e5481" data-hc="0"></i> 
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
	    <article class="content pull-left col-sm-8 col-md-8">

      		<br>
      		<!--recommend box-->
	      	<div class="row">
				<div class="alert alert-error fade in alert-warning alert-dismissable">
					<i class="fa fa-cloud-download alert-icon"></i>
					<button type="button" class="close" data-dismiss="alert">×</button>
					<h5>Recommend box</h5>
					<h7>Where did you graduate from?</h7>
					<br>

					<!-- <button type="button" class="close" data-dismiss="alert">×</button>
					 --><div class="round-button close pull-left" data-dismiss="alert">
						<div class="round-button-circle">
							<a href="#" class="round-button"></a>
						</div>
					</div>
					
				</div>
			</div>
			<!--end recommend box-->

		

			<!-- profile-->
			<div class="row">

				  <div class="content-block bottom-padding frame">
				  	
				   	<!-- <div class="content-block bottom-padding bg">-->
				   	
					  	<!--progress bar-->
						<div class="progress-circular progress-striped pull-right" style="padding-left:10px;">
							<input type="text" class="knob" value="0" rel="75" data-linecap="round" data-width="80" data-bgColor="#f2f2f2" data-fgColor="#c10841" data-thickness=.30 data-readOnly=true disabled>
						</div>
						<!--end progress bar-->
						

						<!--profile-->
						<h1>
							Profile
							<!--button to link to full profile-->
							<button class="btn btn-border btn-warning btn-sm">View profile</button>
							<button class="btn btn-border btn-warning btn-sm " style="margin-left:0px;">Edit profile</button>
							<!-- end button-->
						</h1>
						<hr style="margin-top:5px;margin-bottom:5px;">
					
					<!--personal detail-->
					<div class="row">
						<!-- <div class="text-left col col-md-6">
							
							<strong>Firstname:&nbsp;</strong>Peepeepee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  	<strong>Lastname:&nbsp;</strong>northnorthnorth
						  	<br>
						  	<strong>ชื่อ:&nbsp;</strong>พีพีพี&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  	<strong>นามสกุล:&nbsp;</strong>นอร์ทนอร์ท
						  	
					  	</div> -->
					  	<div class="col col-md-7">
					  		<table class="table text-left" style="font-size:1.1em;">
							  <!-- <thead>
								<tr>
								  <th>Column 1</th>
								  <th>Column 2</th>
								</tr>
							  </thead> -->
							  <tbody>
								<tr>
								  <td><strong>Firstname:</strong>
								  <td>{{$candidate->user()->first()->first}}</td>
								  <td><strong>Lastname:</strong>
								  <td>{{$candidate->user()->first()->last}}</td>
								
								</tr>
								<tr>
								  <td><strong>ชื่อ: </strong>
								  <td>{{$candidate->thai_firstname}}</td>
								  <td><strong>นามสกุล: </strong></td>
								  <td>{{$candidate->thai_lastname}}</td>
								  
								</tr>
								<tr>
								  <td><strong>Gender: </strong></td>
								  <td>Male</td>
								  <td><strong>Age: </strong></td>
								  <td>	@if($candidate->birth_date!='' && $candidate->birth_date!=0)
								  			{{Carbon::createFromFormat('Y-m-d',$candidate->birth_date)->diffInYears()}}
								  		@endif
								  		</td>
								</tr>
								<tr>
								  <td><strong>Date of Birth :</strong></td>
								  <td>@if($candidate->birth_date!='' && $candidate->birth_date!=0)
								  			{{Carbon::createFromFormat('Y-m-d',$candidate->birth_date)->format('j F Y');}}
								  		@endif
								  	</td>
								  <td><strong>Nationality : </strong></td>
								  <td>{{$candidate->nationality}}</td>
								</tr>
								<tr>
								  <td><strong>Passport NO:</strong></td>
								  <td>{{$candidate->passport_number}}</td>
								  <td><strong>ID Number :</strong></td>
								  <td>{{$candidate->idcard}}</td>
								</tr>
							  </tbody>
							</table>
							
					  	</div>
					  	<div class="col col-md-4" style="margin-top:-100px;">
					  		<div class="row">
						  		<div class="col-md-10">
									<div class="bs-docs-example-images">
										<a class="img-thumbnail img-rounded lightbox" style="padding-bottom:1.3em;" rel="fancybox" href="{{asset('assets/img/avatar3.png')}}" >
											<img src="{{asset('assets/img/avatar3.png')}}" alt="" title="">
											<span class="bg-images">
												<i class="fa fa-search"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
					  	</div>
				  	</div>
				  	
				  	<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad atque cum est. Commodi consequatur soluta officiis veniam nobis corrupti tenetur dolorem reprehenderit sunt vitae iure suscipit adipisci explicabo qui facere! Ea dolore quas maxime facere tenetur illum quibusdam sapiente dolorem nesciunt laudantium necessitatibus accusamus ab libero vel odio.</p>
				  	 --><!--end personal detail-->


				  	<!--first row for box-->
				  	<div class="row">

				  		<!-- <div class="col col-md-6">
				  			<div class="content-block bottom-padding frame frame-shadow-curved">
				  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad atque cum est. Commodi consequatur soluta officiis veniam nobis corrupti tenetur dolorem reprehenderit sunt vitae iure suscipit adipisci explicabo qui facere! Ea dolore quas maxime facere tenetur illum quibusdam sapiente dolorem nesciunt laudantium necessitatibus accusamus ab libero vel odio.</p>
				  	
				  			</div>
				  		</div> -->
				  		
				  		<div class="row">
					  		<!--experience box-->
					  		<div class="col col-md-6">
					  			<div class="panel panel-default frame frame-shadow-curved">
								  <div class="panel-heading"  >
									<h3 class="panel-title">Work Experience</h3>
								  </div>
								  <div class="panel-body">
								  		
								  		@foreach($candidate->workExperience()->orderBy('time_period_start', 'ASC')->get() as $work_experience)
										<div class="row">
								  			<div class="col col-md-12">
												<div class="content-block frame border-radius" style="padding:5px;">
													<div class="row">
														<div class="col col-md-6">
															<p><strong>Job title : </strong><!--edit-->{{$work_experience->position}}
															<br><strong>Time period : </strong><!--edit-->
																	@if($work_experience->time_period_start!='')
																	{{$work_experience->time_period_start}} - {{$work_experience->time_period_end}}
																	@endif
															</p>
														</div>
														<div class="col col-md-6">
															<strong>Company name : </strong><!--edit-->{{$work_experience->company_name}}
															<br><strong>Location : </strong><!--edit-->{{$work_experience->location}}
														</div>
													</div>
													<div class="row">
														<div class="col col-md-12">
															<strong>Job Achievement(s) : </strong> 
															{{$work_experience->job_achieve}}
														</div>
													</div>
													<div class="row">
														<div class="col col-md-12">
															<strong>Reasons for Leaving a Job : </strong> 
															{{$work_experience->reason_leave}}
														</div>
													</div>
													
												</div>
												
											</div>
											
										</div><!--end first row for Work Experience-->
										<br>
										@endforeach
										<!-- <div class="row">
											<carousel interval="400">
										      <slide>
										        
										          <h4>Slide index</h4>
										        
										      </slide>
										       <slide>
										        
										          <h4>Slide index</h4>
										        
										      </slide>
										       <slide>
										        
										          <h4>Slide index</h4>
										        
										      </slide>
										    </carousel>
										</div> -->
								  </div>
								</div>
					  		</div>

					  		<!--skill-->
					  		<div class="col col-md-6">
					  			<div class="panel panel-default frame frame-shadow-curved">
								  <div class="panel-heading"  >
									<h3 class="panel-title">Skill</h3>
								  </div>
								  <div class="panel-body">
								  		
												
								  		<div class="row">
								  			@foreach($candidate->skill()->get() as $skill)
								  			<div class="col col-md-6">
												<div class="content-block frame border-radius" style="padding:5px;">
													<p><strong>Skill name : </strong><!--edit-->{{$skill->name}} 
													<br><strong>Skill branch : </strong><!--edit-->{{$skill->category->name}}
													<br><strong>level : </strong><!--edit-->{{$skill->pivot->level}}  
												</p>
												</div>
											</div>
											@endforeach
										</div><!--end first row for skill-->
										<br>
										
										<div class="row">
								  			<div class="col col-md-6">
												<div class="content-block frame border-radius" style="padding:5px;padding-top:10px;">
													<p><strong>Skill name : </strong><!--edit-->JAVA 
													<br><strong>Skill branch : </strong><!--edit-->Programming language </p>
												</div>
											</div>
											<div class="col col-md-6">
												<div class="content-block frame border-radius" style="padding:5px;">
													<p><strong>Skill name : </strong><!--edit-->JAVA 
													<br><strong>Skill branch : </strong><!--edit-->Programming language </p>
												</div>
											</div>
										</div><!--end second row for skill-->
								  </div>
								</div>
					  		</div>
				  		</div>


				  		<div class="row">
					  		<!--education-->
					  		<div class="col col-md-6">
					  			<div class="panel panel-default frame-shadow-curved " >
								  <div class="panel-heading"  >
									<h3 class="panel-title">Education</h3>
								  </div>
								  <div class="panel-body" style="width:100%;height:200px; overflow-y: scroll; font-size:1.2em;">
									<div class="row">
							  			<div class="col col-md-12">
											<div class="content-block frame border-radius" style="padding:5px;">
												@foreach($candidate->Education()->orderBy('year_end', 'DESC')->orderBy('education_degree_id', 'DESC')->get() as $education)
												
												@if($education->year_start!='')
												<div class="row">
													<div class="col col-md-3">
														<p><strong>
															
															{{$education->year_start}} - {{$education->year_end}}
															

														</strong><!--edit-->
														
														</p>
													</div>
													<div class="col col-md-9">
														<strong>{{$education->school_name}}</strong><!--edit-->
														<br><!--edit-->Degree : {{$education->educationDegree()->first()->name}}
														<br><!--edit-->Field of study : {{$education->field_of_study}}
														<br><!--edit-->Major : {{$education->major}}
														<br><!--edit-->GPA : {{$education->GPA}}
													</div>
												</div>
												@endif
												@if($education->year_start=='')
													<div class="row">
														
														<div class="col col-md-11 col-md-offset-1">
															<strong>{{$education->school_name}}</strong><!--edit--><br>
															<div class="col-md-offset-1">
																<!--edit-->Degree : {{$education->educationDegree()->first()->name}}
																<br><!--edit-->Field of study : {{$education->field_of_study}}
																<br><!--edit-->Major : {{$education->major}}
																<br><!--edit-->GPA : {{$education->GPA}}
															</div>
														</div>
													</div>
												@endif

												@endforeach
												
											</div>
										</div>
											
									</div><!--end first row for Education-->

								  </div>
								</div>
					  		</div>

					  		<!--award-->
					  		<div class="col col-md-6">
					  			<div class="panel panel-default frame-shadow-curved">
								  <div class="panel-heading"  >
									<h3 class="panel-title">Award and Honors</h3>
								  </div>
								  <div class="panel-body" style="width:100%;height:200px;overflow-x:hidden; overflow-y: hidden; font-size:1.2em;">
									<div class="row">
										@if($candidate->award()->count()!=0)
							  			<div class="col col-md-12">
											<div class="content-block frame border-radius" style="padding:5px;">
												@foreach($candidate->award()->orderBy('date_get', 'DESC')->get() as $award)
												
												<div class="row">
													<div class="col col-md-3">
														<p><strong>{{Carbon::createFromFormat('Y-m-d',$award->date_get)->format('F Y');}} </strong><!--edit-->
														
														</p>
													</div>
													<div class="col col-md-9">
														<strong>{{$award->title}}</strong><!--edit-->
														<br><!--edit-->By issuer : {{$award->issuer}}
														<br><!--edit-->Date: {{Carbon::createFromFormat('Y-m-d',$award->date_get)->format('j F Y');}}
														<br><!--edit-->Description : <p> {{$award->description}}</p>
														
													</div>
												</div>
												
												@endforeach
											</div>
										</div>
										@endif
										@if($candidate->award()->count()==0)
												<div class="row">
													<div class="col col-md-2 col-sm-2"></div>
													<div class="col col-md-6 col-sm-6">
														<!--edit link button-->
														<a href="#" class="btn  btn-warning" style="margin-left:50px;width:100%;margin-top:70px;">
															<strong>Add Award and Honors</strong>
														</a>
													</div>
													<div class="col col-md-4 col-sm-4">

													</div>
												</div>
										@endif
											
									</div><!--end first row for Award and Honors-->
								  </div>
								</div>
					  		</div>
				  		</div>
				  		<!--Professional certificate-->
				  		<div class="row">
					  		<div class="col col-md-12">
					  			<div class="panel panel-default frame frame-shadow-curved" >
								  <div class="panel-heading"  >
									<h3 class="panel-title">Professional certificate</h3>
								  </div>
								  <div class="panel-body">
								  	@foreach($candidate->certificate()->orderBy('date_get', 'DESC')->get() as $certificate)
									<div class="row">
							  			<div class="col col-md-12">
											<div class="content-block frame border-radius" style="padding:5px;">
												<div class="row">
													<div class="col col-md-3">
														<p><strong>{{$certificate->name}}</strong><!--edit-->
														
														</p>
													</div>
													<div class="col col-md-9">
														<p>{{$certificate->description}}</p>
													
													</div>
												</div>
											</div>


										</div>
											
									</div><!--end first row for Professional certificate-->
									@endforeach
									<div class="row">
							  			<div class="col col-md-12">
											<div class="content-block frame border-radius" style="padding:5px;">
												<div class="row">
													<div class="col col-md-3">
														<p><strong>CPA certificate</strong><!--edit-->
														
														</p>
													</div>
													<div class="col col-md-9">
														<p>the statutory title of qualified accountants in the United States who have passed the Uniform Certified Public Accountant Examination and have met additional state education and experience requirements for membership in their respective professional accounting bodies and certification as a CPA. Individuals who have</p>
													
													</div>
												</div>
											</div>

											
										</div>
											
									</div><!--end second row for Professional certificate-->
								  </div>
								</div>
					  		</div>
				  		</div>

				  	</div>
				  	<!--end first row-->


				  </div><!--end content in profile-->
			</div>
			<!-- end profile-->

			<div class="row">

					<div class="content-block bottom-padding frame">
				  		@include('user.includes.checkStatus')
				  	
					</div>
				
			</div>
      	</article><!-- .content -->
      	<!--end center content-->

      	<!-- right side bar-->
      	<div class="content pull-left col-sm-1 col-md-1">
      	 	
    		<a href="{{ URL::to('/cd/searchjob')}}" type="button" class="btn btn-border btn-warning " style="margin-top:20px;width:100 px;height:100px;">
    			<h5><i class="fa fa-fw fa-search "></i>&nbsp;Search&nbsp;Job</h5>
    		</a>	

    		<button type="button" class="btn btn-border btn-warning " style="margin-top:20px;width:100 px;height:100px;">
    			<h5>
    				<i class="fa fa-warning "></i>&nbsp;Notification
    			</h5>
    		</button>
    		
    	</div>
    	<!--end right side bar-->

    </div><!--row-->
   
  <!-- .container -->

@stop

