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
     

    	@include('user.includes.sidebar')
	
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

			  	{{Form::open(array('url' => 'cd/searchjob', 'method' => 'get'))}}
			<div class="content-block bottom-padding frame frame-shadow-curved" style="margin-bottom: 40px;">
				<div class="tabs">
				  <ul class="nav nav-tabs">
					<li class="active">
					  <a href="#simplesearch" data-toggle="tab"><h6><i class="fa fa-gears"></i> Quick search</h6></a>
					</li>
					
				  </ul>
				  <div class="tab-content">
					<div class="tab-pane active fade in" id="simplesearch">
					  	<div class="row">
							<div class="col col-md-1">
							</div>
							<div class="col col-md-4">
								<strong>Department :</strong>
								  {{ Former::select('department','')->addOption('Select Department')
                           ->fromQuery(Dept::All(), 'name', 'department')->attributes(array('class'=>'form-control scrollable-menu')) }}  
                               
							</div>
						</div>
						<div class="row">
							<div class="col col-md-1">
							</div>
							<div class="col col-md-8">
								<form class="form" role="form">
									<div class="form-group">
										<label class="" for="exampleInputEmail2">Search keyword :</label>
										{{ Form::text('search', $search, array('class' => 'form-control','placeholder'=>'Search Job','style'=>'font-size:1.1em;')) }}   
									</div>
								</form>
							</div>
						</div>
					  
					  
					</div>
					
					<!-- <div class="tab-pane fade in" id="advancedsearch">
						 <div class="row">
								<div class="col col-md-1">
								</div>
								<div class="col col-md-4">
									<strong>Department :</strong>
									{{ Former::select('department','')->addOption('Select Department')
                           ->fromQuery(Dept::All(), 'name', 'department')->attributes(array('class'=>'form-control scrollable-menu')) }}  
                               
								</div>
								
							</div>
							<div class="row">
								<div class="col col-md-1">
								</div>
								<div class="col col-md-8">
									<form class="form" role="form">
										<div class="form-group">
										  <label class="" for="exampleInputEmail2">Search keyword :</label>
										   {{ Form::text('search', Input::old('search'), array('class' => 'form-control','placeholder'=>'Search Job','style'=>'font-size:1.1em;')) }}   
										</div>
									</form>
								</div>
							</div>
						</div> -->
				  </div><!--end tab content-->
				</div>
			</div>
			{{Form::close()}}
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
					<h3>{{$requisitions->count()}} Results
						
						
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
						  <th style="width:10%;">Job ID</th>
						  
						  
						  <th style="width:20%;">Job Title</th>
						  <th style="width:20%;">Department</th>
						  <th style="width:15%;">Job Location</th>
						  <th style="width:10%;">Date post</th>
						</tr>
					  </thead>
					  @foreach($requisitions as $requisition)
					  <tbody>
					  	
							<tr ng-mouseover="show{{$requisition->requisition_id}}=true;" ng-mouseleave="show{{$requisition->requisition_id}}=false;" >
							  	<td>{{$requisition->requisition_id}}</td>
							  	<td>{{$requisition->job_title}}</td>
							  	<td>{{$requisition->dept->name}}</td>
							  	<td>{{$requisition->location->name}}</td>
							  	<td>26 - 06 - 2014</td>
							</tr>
							<tr ng-show="show{{$requisition->requisition_id}}" ng-mouseover="show{{$requisition->requisition_id}}=true;" ng-mouseleave="show{{$requisition->requisition_id}}=false;">
								<td colspan=7>
									<div class="row">
										<div class="col col-md-3">
											<h3 class="title"  style="margin-bottom:2px;">Programmer</h3>
											<img src="<?php echo asset('img/content/hero.jpg')?>" class="img-rounded" 
												width="150" height="100" alt="" style="padding-top:2px;padding-bottom:10px;">
											<br>
											<a href="{{URL::to('/cd/jobdetail/'.$requisition->requisition_id)}}" target="_blank" class="btn btn-sm btn-default" style="width:60%">View detail</a>
										</div>
										<div class="col col-md-6 text-left" style="font-size:0.9em;">
											<br>
											<strong>Job summary :</strong>
											<p>
												{{$requisition->job_description}}
											</p>
											
											<strong>Job location:</strong>
											<p>{{$requisition->location->name}}</p>
										</div>
										<!-- <div class="col col-md-3">
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
										</div> -->
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
					  @endforeach
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
					  <tr ng-repeat="requisition in requisitions">

					  	sdasdasd
					  </tr>
					  <tbody >

					  		@foreach($requisitions as $requisition)
					  			<tr>
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
												{{$requisition->job_description}}
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
								@endforeach
							
					  </tbody>
					</table>
			  	</div>
			  	<!--end list-->

			  		{{ $requisitions->appends(array('search' => isset($search)?$search:'','department'=>isset($department)?$department:''))->links() }}
			  	<div class="row">
			  		<div class="col col-sm-2 col-md-5">
			  		
			  		</div>
			  		<!-- <div class="col col-sm-10 col-md-7 pull-right">
			  			<button class="btn btn-danger " style="width:30%;">Add to job basket</button>
						<button class="btn btn-warning " style="width:30%;">Follow</button>
						<button class="btn btn-success " style="width:30%;">Apply</button>
			  		</div> -->
			  	</div>
			</section>
      	
      	</article><!-- .content -->
      	<!--end center content-->

      	

    </div><!--row-->
   
  <!-- .container -->

@stop

