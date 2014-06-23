@extends('user.layouts.default')

@section('title')
SCB Recruitment-Home
@stop

@section('libs')
	<script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
	<script>
		var nameApp = angular.module('nameApp',[]);
		nameApp.controller('NameCtrl',['$scope', '$http',
	  		function ($scope, $http) {
	  			//$scope.cos=10;

  			}//before end controller

  	
  		]);//end controller

	</script>
	<script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
    
    <script src="<?php echo asset('vendor/ui-utils.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-utils.min.js')?>"></script>

   
@stop

@section('body-class')
"fixed-header "
@stop


@section('header-class')
"header header-two"
@stop



@section('content')

  
    <div class="row" ng-app="nameApp" ng-controller="NameCtrl">
     

	  <!--sidebar-->
	   	<div class="col-sm-3 col-md-3" style="positon:fixed;width:270px;" ng-init="cos=9">
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

							<li class="active">
							  	<a href="{{ URL::to('/cd/search')}}">
							  		<i class="livicon" data-s="16" data-n="search" data-c="#fff" data-hc="0"></i>
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
				      <h1 class="title">Search Job</h1>
				    </div>	
			  	</header>

			<div class="content-block bottom-padding frame frame-shadow-curved" style="margin-bottom: 40px;">
				<div class="tabs">
				  <ul class="nav nav-tabs">
					<li class="active">
					  <a href="#simplesearch" data-toggle="tab"><h6><i class="fa fa-gears"></i> Quick search</h6></a>
					</li>
					<li>
					  <a href="#advancedsearch" data-toggle="tab"><h6><i class="fa fa-fw fa-search"></i> Advanced search</h6></a>
					</li>
				  </ul>
				  <div class="tab-content">
					<div class="tab-pane active fade in" id="simplesearch">
					  	<div class="row">
							<div class="col col-md-1">
							</div>
							<div class="col col-md-4">
								<strong>Department :</strong>
								<select class="form-control" style="font-size:1.1em;">
									<option value="" class="">Select Department</option>
									<option value="0">President</option>
								</select>
							</div>
							<div class="col col-md-4">
								<strong>Job title :</strong>
								<select class="form-control" style="font-size:1.1em;">
									<option value="" class="">Select Job title</option>
									<option value="0">President</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col col-md-1">
							</div>
							<div class="col col-md-8">
								<form class="form" role="form">
									<div class="form-group">
									  	<label class="" for="exampleInputEmail2">Search keyword :</label>
									  	<input type="email" style="font-size:1.1em;" class="form-control" id="exampleInputEmail2" placeholder="Enter keyword">
									</div>
								</form>
							</div>
						</div>
					  
					  
					</div>
					
					<div class="tab-pane fade in" id="advancedsearch">
						 <div class="row">
								<div class="col col-md-1">
								</div>
								<div class="col col-md-4">
									<strong>Department :</strong>
									<select class="form-control" style="font-size:1.1em;">
										<option value="" class="">Select Department</option>
										<option value="0">President</option>
									</select>
								</div>
								<div class="col col-md-4">
									<strong>Job title :</strong>
									<select class="form-control" style="font-size:1.1em;">
										<option value="" class="">Select Job title</option>
										<option value="0">President</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col col-md-1">
								</div>
								<div class="col col-md-8">
									<form class="form" role="form">
										<div class="form-group">
										  	<label class="" for="exampleInputEmail2">Search keyword :</label>
										  	<input type="email" style="font-size:1.1em;" class="form-control" id="exampleInputEmail2" placeholder="Enter keyword">
										</div>
									</form>
								</div>
							</div>
						</div>
				  </div><!--end tab content-->
				</div>
			</div>

				<!-- <div class="content-block bottom-padding frame frame-shadow-curved" style="margin-bottom: 10px;">
					
					<h5><i class="fa fa-fw fa-plus-circle"></i>Add new following job</h5>
					
					<div class="row">
						<div class="col col-md-1">
						</div>
						<div class="col col-md-4">
							<strong>Department :</strong>
							<select class="form-control" style="font-size:1.1em;">
								<option value="" class="">Select Department</option>
								<option value="0">President</option>
							</select>
						</div>
						<div class="col col-md-4">
							<strong>Job title :</strong>
							<select class="form-control" style="font-size:1.1em;">
								<option value="" class="">Select Job title</option>
								<option value="0">President</option>
							</select>
						</div>
						
					</div>
					<div class="row">
						<div class="col col-md-1">
						</div>
						<div class="col col-md-4">
							<strong>alert via :</strong><br>
							<label class="radio-inline">
								<input type="radio" id="inlineCheckbox1" value="option1"> Email
							</label>
							<label class="radio-inline">
								<input type="radio" id="inlineCheckbox2" value="option2"> SMS
							</label>
							
						</div>
						<div class="col col-md-4">
						
							<strong>alert every :</strong>
							<select class="form-control" style="font-size:1.1em;">
								<option value="" class="">Select alert</option>
								<option value="0">Monday</option>
								<option value="1">Sunday</option>
							</select>
						</div>
						<div class="col col-md-3">
							<br>
							<button class="btn btn-inverse " style="width:80%;">Follow</button>
						</div>
					</div>
					<div class="row">
						<div class="col col-md-1">
						</div>
						<div class="col col-md-4">
						</div>
						<div class="col col-md-4">
							
						</div>
					</div>


				</div> -->
				

				<!--title for table-->
				<div class="title-box" ng-init="friends = [
												  {name:'John', age:25, gender:'boy'},
												  {name:'Jessie', age:30, gender:'girl'},
												  {name:'Johanna', age:28, gender:'girl'},
												  {name:'Joy', age:15, gender:'girl'},
												  {name:'Mary', age:28, gender:'girl'},
												  {name:'Peter', age:95, gender:'boy'},
												  {name:'Sebastian', age:50, gender:'boy'},
												  {name:'Erika', age:27, gender:'girl'},
												  {name:'Patrick', age:40, gender:'boy'},
												  {name:'Samantha', age:60, gender:'girl'}
												]">
					<!-- <h2 class="title">edit79 Results</h2> -->
					<h3>7 Results
						
						
						<!-- <div class="icon pull-right" title="apple-logo">
						  <div class="livicon" data-n="shopping-cart"></div>
						</div> --> 	
						
						<div class="big-icon bg bg-warning pull-right">
							<a href="#modalJobcart" data-toggle="modal">
						  	<div class="livicon" data-n="shopping-cart" data-c="#fff" data-s="64" data-hc="0" data-d="800"></div>
							</a>
						</div>
					</h3>

				</div>
				<!--end title for table-->
				<!-- <h1>show::</h1> @{{show}}
				
				<div class="form-group">
				  	<label class="" for="search">Search keyword :</label>
				  	<input type="text" ng-model="q" style="font-size:1.1em;" class="form-control" id="search" placeholder="Enter keyword">
				</div> -->

				<!--try toggle button-->
				<div>
					<span class="title"><h7>Views:</h7>&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<div class="btn-group" style="padding-bottom:1.5em;"data-toggle="buttons" ng-init="isList=false">
			            <button class="btn btn-border  btn-danger" ng-class="{active:!isList}" ng-click="isList=false">
			                <i class="livicon" data-s="18" data-n="table" data-c="#c10841" data-hc="#fff"></i>
			                Table
			            </button>
			            <button class="btn btn-border  btn-danger" ng-class="{active:isList}" ng-click="isList=true">
			                <i class="livicon" data-s="18" data-n="list" data-c="#c10841" data-hc="#fff"></i>
							List
			            </button>
			        </div>
		    	</div>	

				<!--table-->
				<div ng-show="!isList" class="table-box" ng-init="show=false">
					<table class="table table-bordered table-striped table-hover text-center" style="font-size:1.2em;">
					  <thead>
						<tr>
						  <th style="width:5%;"></th>
						  <th style="width:10%;">Date post</th>
						  <th style="width:10%;">Job ID</th>
						  <th style="width:20%;">Job Title</th>
						  <th style="width:20%;">Department</th>
						  <th style="width:15%;">Job Location</th>
						  <th style="width:20%;">Action</th>
						</tr>
					  </thead>
					  <tbody  ng-repeat="friend in friends |filter:q ">
					  	
							<tr ng-mouseover="show=true;" ng-mouseleave="show=false;" >
							  	<td>
								  	<div class="checkbox">
									  
										<input type="checkbox" value="">
									  
									</div>
								</td>
							  	<td>@{{friend.name}}</td>
							  	<td>Subtotal:</td>
							  	<td>$1.00</td>
							  	<td>Subtotal:</td>
							  	<td>$1.00</td>
							  	<td>Subtotal:</td>
							</tr>
							<tr ng-show="show" ng-mouseover="show=true;" ng-mouseleave="show=false;">
								<td colspan=7>
									<div class="row">
										<div class="col col-md-3">
											<h3 class="title"  style="margin-bottom:2px;">Programmer</h3>
											<img src="<?php echo asset('img/content/hero.jpg')?>" class="img-rounded" 
												width="150" height="100" alt="" style="padding-top:2px;padding-bottom:10px;">
											<br>
											<a href="{{URL::to('/cd/jobdetail')}}" target="_blank" class="btn btn-sm btn-default" style="width:60%">View detail</a>
										</div>
										<div class="col col-md-6 text-left" style="font-size:0.9em;">
											<br>
											<strong>Job summary :</strong>
											<p>
												Sublime Text is a sophisticated text editor for code, markup and prose. You'll love the slick user interface, extraordinary features and amazing performance.
											</p>
											
											<strong>Job location:</strong>
											<p>SCB Head office</p>
										</div>
										<div class="col col-md-3">
											<div class="list-group text-left">
												<a href="#" class="list-group-item ">
													<i class="fa fa-fw fa-check-square-o"></i> Apply
												</a>
												<a href="#" class="list-group-item ">
												  	<i class="livicon shadowed" data-n="shopping-cart-in" data-s="16" data-c="#7996b7" data-hc="#2a6496"></i>
													Add to job cart
												</a>
												<a href="#" class="list-group-item">
													<i class="livicon shadowed" data-n="save" data-s="16" data-c="#7996b7" data-hc="#2a6496"></i>
													Follow this position
												</a>
												
											</div>
										</div>
									</div>
								</td>
							</tr>
						
						<!-- <tr>
						  	<td>
							  	<div class="checkbox">
								  
									<input type="checkbox" value="">
								  
								</div>
							</td>
						  	<td>Description</td>
						  	<td>Subtotal:</td>
						  	<td>$1.00</td>
						  	<td>Subtotal:</td>
						  	<td>$1.00</td>
						  	<td>Subtotal:</td>
						</tr> -->
					
					  </tbody>
					</table>
			  	</div>
			  	<!--end table-->

			  	<!--list-->
			  	<div ng-show="isList" class="table-box">
					<table class="table table-bordered table-striped table-hover text-center" style="font-size:1.2em;">
					  <!-- <thead>
						<tr>
						  <th style="width:5%;"></th>
						  <th style="width:10%;">Date post</th>
						  <th style="width:10%;">Job ID</th>
						  <th style="width:20%;">Job Title</th>
						  <th style="width:20%;">Department</th>
						  <th style="width:15%;">Job Location</th>
						  <th style="width:20%;">Action</th>
						</tr>
					  </thead> -->
					  <tbody >
					  		<tr ng-repeat="friend in friends |filter:q ">
								<td colspan=7>
									<div class="row" style="padding-bottom:1.5em;">
										<div class="col col-md-3">
											<h3 class="title"  style="margin-bottom:2px;">Programmer</h3>
											<img src="<?php echo asset('img/content/hero.jpg')?>" class="img-rounded" 
												width="150" height="100" alt="" style="padding-top:2px;padding-bottom:10px;">
											<br>
											<a href="{{URL::to('/cd/jobdetail')}}" target="_blank" class="btn btn-sm btn-default" style="width:60%">View detail</a>
										</div>
										<div class="col col-md-6 text-left" style="font-size:0.9em;">
											<br>
											<strong>Job summary :</strong>
											<p>
												Sublime Text is a sophisticated text editor for code, markup and prose. You'll love the slick user interface, extraordinary features and amazing performance.
											</p>
											
											<strong>Job location:</strong>
											<p>SCB Head office</p>
										</div>
										<div class="col col-md-3">
											<div class="list-group text-left">
												<a href="#" class="list-group-item ">
													<i class="fa fa-fw fa-check-square-o"></i> Apply
												</a>
												<a href="#" class="list-group-item ">
												  	<i class="livicon shadowed" data-n="shopping-cart-in" data-s="16" data-c="#7996b7" data-hc="#2a6496"></i>
													Add to job cart
												</a>
												<a href="#" class="list-group-item">
													<i class="livicon shadowed" data-n="save" data-s="16" data-c="#7996b7" data-hc="#2a6496"></i>
													Follow this position
												</a>
												
											</div>
										</div>
									</div>
								</td>
							</tr>
					  </tbody>
					</table>
			  	</div>
			  	<!--end list-->


			  	<div class="row">
			  		<div class="col col-sm-2 col-md-5">
			  		
			  		</div>
			  		<div class="col col-sm-10 col-md-7 pull-right">
			  			<button class="btn btn-danger " style="width:30%;">Add to job basket</button>
						<button class="btn btn-warning " style="width:30%;">Follow</button>
						<button class="btn btn-success " style="width:30%;">Apply</button>
			  		</div>
			  	</div>
			</section>
      	
      	</article><!-- .content -->
      	<!--end center content-->

      	

    </div><!--row-->
   
  <!-- .container -->

@stop

