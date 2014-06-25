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

@section('libs')
<script type="text/javascript">
var app = angular.module('app',[]);
app.controller('appCtrl',['$scope', '$http',
	function ($scope, $http) {
		$scope.color='rgba(225, 225, 225, 1)';
		$scope.contact=true;
		$scope.Experience=true;
		$scope.skill=true;
		$scope.education=true;
		$scope.award=true;
		$scope.certificate=true;
		$scope.setShow=function(x){
			if(x==1){
				$scope.contact=true;
				$scope.Experience=true;
				$scope.skill=true;
				$scope.education=true;
				$scope.award=true;
				$scope.certificate=true;

				$scope.color='rgba(225, 225, 225, 1)';
			}
			else if(x==2){
				$scope.contact=true;
				$scope.Experience=false;
				$scope.skill=false;
				$scope.education=false;
				$scope.award=false;
				$scope.certificate=false;
				$scope.color='rgba(225, 225, 225, 1)';
			}
			else if(x==3){
				$scope.contact=false;
				$scope.Experience=true;
				$scope.skill=false;
				$scope.education=false;
				$scope.award=false;
				$scope.certificate=false;

				$scope.color='rgba(66,139,202,1)';
			}
			else if(x==4){
				$scope.contact=false;
				$scope.Experience=false;
				$scope.skill=true;
				$scope.education=false;
				$scope.award=false;
				$scope.certificate=false;


				$scope.color='rgba(0,152,202,1)';
			}
			else if(x==5){
				$scope.contact=false;
				$scope.Experience=false;
				$scope.skill=false;
				$scope.education=true;
				$scope.award=false;
				$scope.certificate=false;


				$scope.color='rgba(115,141,0,1)';
			}
			else if(x==6){
				$scope.contact=false;
				$scope.Experience=false;
				$scope.skill=false;
				$scope.education=false;
				$scope.award=true;
				$scope.certificate=false;


				$scope.color='rgba(248,148,6,1)';
			}
			else if(x==7){
				$scope.contact=false;
				$scope.Experience=false;
				$scope.skill=false;
				$scope.education=false;
				$scope.award=false;
				$scope.certificate=true;

				$scope.color='rgba(193,8,65,1)';
			}
		}
        }//before end controller


        ]);//end controller

</script>
@stop



@section('content')

  
    <div class="row" ng-app="app" ng-controller="appCtrl">
     
	  <!--sidebar-->
	   	@include('user.includes.sidebar')
	  <!-- .end sidebar -->

	  	<!-- center content -->
	    <article class="content pull-left col-sm-9 col-md-9">

      		<br>
      		
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
							<a href="{{ URL::to('/cd/edit-profile')}}">
							<button class="btn btn-border btn-warning btn-sm " style="margin-left:0px;">Edit profile</button>
							</a>
							<!-- end button-->
						</h1>
						<hr style="margin-top:5px;margin-bottom:5px;">
					
					<!--personal detail-->
					<div class="row">
					  	<div class="col col-md-7">
					  		<table class="table text-left" style="font-size:1.1em;">
							  <tbody>
							  	<tr>
				                  <td><strong>Thai saluation:</strong>
                  				  <td>{{$candidate->user()->first()->thai_saluation}}</td>
				                  <td><strong>English saluation:</strong>
				                  <td>{{$candidate->user()->first()->eng_saluation}}</td>
				                
				                </tr>
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
					  	<?php
					  		if(file_exists($candidate->filepath_picture)||isset($candidate->filepath_picture))
					  		{$picture = asset($candidate->filepath_picture);}
					  		else
					  		{$picture = asset('assets/img/avatar3.png');}
						?>
					  	<div class="col col-md-3 pull-left" style="padding-left:0px;">
							<div class="col-md-12">
								<div class="bs-docs-example-images">
									<a class="img-thumbnail img-rounded lightbox" style="padding-bottom:1.3em;" rel="fancybox" href="{{$picture}}" >
											<img src="{{$picture}}" style="height: 223px; width: 223px;"> 
											<span class="bg-images">
												<i class="fa fa-search"></i>
											</span>
										</a>
								</div>
							</div>
					  	</div>
					  	<div class="col col-md-2 pull-left" style="padding-left:0px;padding-right:0px;">
					  		<button class="btn push-top push-bottom btn-border btn-info" 
					  		style="width:90%;"data-toggle="modal" data-target="#videoModal">
								Video resume
							</button><br>
							<button class="btn push-top push-bottom btn-border btn-success" 
							style="width:90%;" data-toggle="modal" data-target="#myModal">
								View resume
							</button><br>
							<button class="btn push-top push-bottom btn-border btn-warning" 
							style="width:90%;" data-toggle="modal" data-target="#myModal">
								Export to pdf
							</button>
					  	</div>
					  	<!--modal zone-->
					  	<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
								<div class="modal-header">
								  <a href="#" class="close" data-dismiss="modal" aria-hidden="true">×</a>
								  <div class="title-box">
									<h4 class="title">Video resume</h4>
								  </div>
								</div>
								<div class="modal-body">
									<div class="video-box youtube">
										<!-- <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/oNBBijn4JuY?showinfo=0&amp;wmode=opaque"></iframe>
										 -->
										 <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/0oHhD3Bk9Uc"></iframe>
									
									</div>
									
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  
								</div>
							  </div>
							</div>
						</div>

					  	<!--end modal zone-->
				  	</div>
				  	
				  	<div class="well" style="padding-bottom:2px;" ng-style="{'background-color':color}">
				  	<!-- Nav tabs -->
					<ul class="nav nav-tabs">
					  <li ng-click="setShow(1)" class="active"><a href="#All" data-toggle="tab"  style="font-size:1em;">All</a></li>
					  <li ng-click="setShow(2)"><a href="#Contact" data-toggle="tab" style="font-size:1em;">Contact information</a></li>
					  <li ng-click="setShow(3)"><a href="#Experience" data-toggle="tab" style="font-size:1em;">Experience</a></li>
					  <li ng-click="setShow(4)"><a href="#Skill" data-toggle="tab" style="font-size:1em;">Skill</a></li>
					  <li ng-click="setShow(5)"><a href="#Education" data-toggle="tab" style="font-size:1em;">Education</a></li>
					  <li ng-click="setShow(6)"><a href="#Award" data-toggle="tab" style="font-size:1em;">Award</a></li>
					  <li ng-click="setShow(7)"><a href="#Certicate" data-toggle="tab" style="font-size:1em;">Certicate</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					  <!-- <div class="tab-pane active" id="All">...</div>
					  <div class="tab-pane" id="Experience">...</div>
					  <div class="tab-pane" id="Skill">...</div>
					  <div class="tab-pane" id="Education">...</div>
					  <div class="tab-pane" id="Award">...</div>
					  <div class="tab-pane" id="Certicate">...</div> -->
					</div>
				</div>
				  	<!--first row for box-->
				  	<div class="row">
				  		
				  		 <!--contact information-->
                        <div ng-show="contact" class="col col-md-12">
                            <div class="panel panel-default frame frame-shadow-curved">
                                <div class="panel-heading"  >
                                    <h3 class="panel-title"><strong>Contact information</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col col-md-12">
                                            <div class="content-block frame border-radius" style="padding:5px;">
                                                <!-- <div class="row">
                                                    <div class="col col-md-6">
                                                        <p><strong>Job title :</strong>Programmer
                                                        <br><strong>Time period :</strong>2009 - 2011
                                                        </p>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <strong>Company name :</strong>Lotuss
                                                        <br><strong>Location :</strong>Bangkok
                                                    </div>
                                                </div> -->
                                                <div class="row">
                                                    <div class="col col-md-6">
                                                        <strong>Email :</strong> {{$candidate->user->email}}<br>
                                                        <strong>Contact Number :</strong> {{$candidate->user->contact_number}}<br>
                                                        <!-- <strong>Telephone(Home) :</strong> 029999999<br> -->
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <strong>Current Living Location :</strong>{{$candidate->current_living_location}}<br>
                                                        <strong>Country :</strong> {{$candidate->country}}<br>
                                                        <strong>City :</strong> {{$candidate->city}}<br>
                                                        <strong>Zip/Postal Code :</strong> {{$candidate->zip_code}} <br>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div><!--end first row for Work Experience-->
                                    
                                    
                                </div>
                            </div>
                        </div>
				  		<!--experience box-->
				  		<div ng-show="Experience" class="col col-md-12">
				  			<div class="panel panel-primary frame frame-shadow-curved">
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
														<p><strong>Job title :</strong><!--edit-->{{$work_experience->position}}
														<br><strong>Time period</strong><!--edit-->
																@if($work_experience->time_period_start!='')
																	{{$work_experience->time_period_start}} - {{$work_experience->time_period_end}}
																	@endif
														</p>
													</div>
													<div class="col col-md-6">
														<strong>Company name :</strong><!--edit-->{{$work_experience->company_name}}
														<br><strong>Location :</strong><!--edit-->{{$work_experience->location}}
													</div>
												</div>
												<div class="row">
													<div class="col col-md-12">
														<strong>Job Achievement(s) :</strong> 
														{{$work_experience->job_achieve}}
													</div>
												</div>
												<div class="row">
														<div class="col col-md-6">
															<strong>Reasons for Leaving a Job : </strong> 
															{{$work_experience->reason_leave}}
														</div>
												</div>
											</div>
										</div>
										
									</div><!--end first row for Work Experience-->
									<br>
									@endforeach
									<div class="row">
							  			<div class="col col-md-12">
											<div class="content-block frame border-radius" style="padding:5px;">
												<div class="row">
													<div class="col col-md-6">
														<p><strong>Job title :</strong><!--edit-->Programmer
														<br><strong>Time period</strong><!--edit-->2009 - 2011
														</p>
													</div>
													<div class="col col-md-6">
														<strong>Company name :</strong><!--edit-->Lotuss
														<br><strong>Location :</strong><!--edit-->Bangkok
													</div>
												</div>
												<div class="row">
													<div class="col col-md-12">
														<strong>Job Achievement(s) :</strong> 
													</div>
												</div>
												
											</div>
										</div>
										
									</div><!--end second row for Work Experience-->
							  </div>
							</div>
				  		</div>

				  		<!--skill-->
				  		<div ng-show="skill" class="col col-md-12">
				  			<div class="panel panel-info frame frame-shadow-curved">
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

				  		<!--education-->
				  		<div ng-show="education" class="col col-md-12">
				  			<div class="panel panel-success  frame frame-shadow-curved " >
							  <div class="panel-heading"  >
								<h3 class="panel-title">Education</h3>
							  </div>
							  <div class="panel-body">
								<div class="row">
						  			<div class="col col-md-12">
										<div class="content-block frame border-radius" style="padding:5px;">
											@foreach($candidate->Education()->orderBy('year_end', 'DESC')->orderBy('education_degree_id', 'DESC')->get() as $education)
												
											@if($education->year_start!='')
											<div class="row">
												<div class="col col-md-3">
													<p><strong>{{$education->year_start}} - {{$education->year_end}}</strong><!--edit-->
													
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
											@else
													<div class="row">
														<div class="col col-md-3">
															<p><strong></strong><!--edit-->
															
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
											@endforeach	
										</div>
									</div>
										
								</div><!--end first row for Education-->

							  </div>
							</div>
				  		</div>

				  		<!--award-->
				  		<div ng-show="award" class="col col-md-12">
				  			<div class="panel panel-warning  frame frame-shadow-curved">
							  <div class="panel-heading"  >
								<h3 class="panel-title">Award and Honors</h3>
							  </div>
							  <div class="panel-body">
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
										
										
								</div><!--end first row for Award and Honors-->
							  </div>
							</div>
				  		</div>

				  		<!--Professional certificate-->
				  		<div ng-show="certificate" class="col col-md-12">
				  			<div class="panel panel-danger frame frame-shadow-curved" >
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
									<!--end first row for Professional certificate-->
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
				  	<!--end first row-->


				  </div><!--end content in profile-->
			</div>
			<!-- end profile-->

			
      	</article><!-- .content -->
      	<!--end center content-->

      

    </div><!--row-->
   
  <!-- .container -->

@stop

