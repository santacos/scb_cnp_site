@extends('user.layouts.default')

@section('title')
SCB Recruitment-Home
@stop

@section('libs')
	<link rel="stylesheet" href="<?php echo asset('css/onoffswitch2.css')?>">
	<!-- jQuery 2.0.2 -->
	{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js') }}
	<!-- jQuery UI 1.10.3 -->
	{{ HTML::script('assets/js/jquery-ui-1.10.3.min.js') }}
	
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
	                        	<h1 class="title">Hi! <!--edit-->Somsri
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
							<li class="active">
							  	<a href="{{ URL::to('/cd/jobfollow')}}">
							  		<i class="livicon" data-s="16" data-n="notebook" data-c="#fff" data-hc="0"></i>
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
				      <h1 class="title">Following Job</h1>
				    </div>	
			  	</header>

			  	<!--filter box-->
				<div class="content-block bottom-padding frame frame-shadow-curved" style="margin-bottom:5%;">
					
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


				</div>
				<!--end filter box-->

				<!--start alert following job box-->
				<!--title for table-->
				<div class="title-box">
					<!-- <h2 class="title">edit79 Results</h2> -->
					<h3>Alert following job <small>7 Results</small>
						
							
						<div class="big-icon bg bg-warning pull-right">
							<a href="#modalJobcart" data-toggle="modal">
						  	<div class="livicon" data-n="shopping-cart" data-c="#fff" data-s="64" data-hc="0" data-d="800"></div>
							</a>
						</div>
						

					</h3>

				</div>
				<!--end title for table-->

				<div class="table-box">
					<table class="table table-bordered table-striped table-hover text-center" style="font-size:1.2em;">
					  	<thead>
							<tr>
								<th style="width:5%;"></th>
								<th style="width:10%;">Date post</th>
							  	<th style="width:5%;">Job ID</th>
							  	<th style="width:20%;">Job Title</th>
							  	<th style="width:20%;">Department</th>
							  	<th style="width:20%;">Job Location</th>
							  	<th style="width:25%;">Action</th>
							
							</tr>
					  	</thead>
					  	<tbody>
					  		
							<!--yellow-->
							<!-- <tr>
							  	<td>
								  	<div class="checkbox">
									  
										<input type="checkbox" value="">
									  
									</div>
								</td>
							  	<td>12-3-2557</td>
							  	<td>2341</td>
							  	<td>Programmer</td>
							  	<td>IT</td>
							  	<td>Bangkok</td>
							  	<td>
							  		
							  		<div class="btn-group">
										<button class="btn btn btn-border btn-warning btn-sm"><i class="livicon" data-n="eye-open" data-s="16" data-c="#fda425" data-hc="#fff"></i> View</button>
										<button class="btn btn btn-border btn-warning btn-sm">Add to cart <i class="livicon" data-n="shopping-cart-in" data-s="16" data-c="#fda425" data-hc="#fff"></i></button>
									</div>
							  		
							  	</td>
							</tr>
							<tr>
							  	<td>
								  	<div class="checkbox">
									  
										<input type="checkbox" value="">
									  
									</div>
								</td>
							  	<td>12-3-2557</td>
							  	<td>2341</td>
							  	<td>Programmer</td>
							  	<td>IT</td>
							  	<td>Bangkok</td>
							  	<td>
							  		<div class="btn-group">
										<button class="btn btn btn-border btn-warning btn-sm"><i class="livicon" data-n="eye-open" data-s="16" data-c="#fda425" data-hc="#fff"></i> View</button>
										<button class="btn btn btn-border btn-warning btn-sm">Add to cart <i class="livicon" data-n="shopping-cart-in" data-s="16" data-c="#fda425" data-hc="#fff"></i></button>
									</div>
							  	</td>
							</tr> -->
							<!--blue-->
							<tr>
							  	<td>
								  	<div class="checkbox">
									  
										<input type="checkbox" value="">
									  
									</div>
								</td>
							  	<td>12-3-2557</td>
							  	<td>2341</td>
							  	<td>Programmer</td>
							  	<td>IT</td>
							  	<td>Bangkok</td>
							  	<td>
							  		<!--action-->
							  		<div class="btn-group">
										<button class="btn btn-info btn-sm"><i class="livicon" data-n="eye-open" data-s="16" data-c="#fff" data-hc="0"></i> View</button>
										<button class="btn btn-info btn-sm">Add to cart <i class="livicon" data-n="shopping-cart-in" data-s="16" data-c="#fff" data-hc="0"></i></button>
									</div>
							  		<!-- <div class="icon" title="shopping-cart-in">
									  <div class="livicon" data-n="shopping-cart-in"></div>
									</div> -->
							  	</td>
							</tr>
							<tr>
							  	<td>
								  	<div class="checkbox">
									  
										<input type="checkbox" value="">
									  
									</div>
								</td>
							  	<td>12-3-2557</td>
							  	<td>2341</td>
							  	<td>Programmer</td>
							  	<td>IT</td>
							  	<td>Bangkok</td>
							  	<td>
							  		<!--action-->
							  		<div class="btn-group">
										<button class="btn btn-info btn-sm"><i class="livicon" data-n="eye-open" data-s="16" data-c="#fff" data-hc="0"></i> View</button>
										<button class="btn btn-info btn-sm">Add to cart <i class="livicon" data-n="shopping-cart-in" data-s="16" data-c="#fff" data-hc="0"></i></button>
									</div>
							  		<!-- <div class="icon" title="shopping-cart-in">
									  <div class="livicon" data-n="shopping-cart-in"></div>
									</div> -->
							  	</td>
							</tr>
					  	</tbody>
					</table>
			  	</div><!--end table-->
			  	<div class="row"  style="margin-bottom:2%;">
			  		<div class="col col-sm-2 col-md-5">
			  		</div>
			  		<div class="col col-sm-10 col-md-7 pull-left">
			  			<button class="btn btn-danger pull-right" style="width:30%;">Add to job basket</button>
						<button class="btn btn-warning pull-right" style="width:30%;margin-left:10px;margin-right:10px;">Follow</button>
						<button class="btn btn-success pull-right" style="width:30%;">Apply</button>
			  		</div>
			  	</div>
			  	<!--end alert following job box-->


			  	<!--start List of following job box-->
				<!--title for table-->
				<div class="title-box">
					<!-- <h2 class="title">edit79 Results</h2> -->
					<h3>List of following job 
						<small>10 Results</small>
					</h3>

				</div>
				<!--end title for table-->

				<div class="table-box">
					<table class="table table-bordered table-striped table-hover text-center" style="font-size:1.2em;">
					  	<thead>
							<tr>
								<th style="width:15%;">Job title</th>
							  	<th style="width:15%;">Department</th>
							  	<th style="width:10%;">Tag</th>
							  	<th style="width:10%;">Detail</th>
							  	<th style="width:10%;">Created date</th>
							  	<th style="width:10%;">Last updated</th>
							  	<th style="width:10%;">Active</th>
							  	<th style="width:20%;">Action</th>
							
							</tr>
					  	</thead>
					  	<tbody>
					  		
							<!--info-->
							<tr>
								<td>Programmer</td>
								<td>IT</td>
							  	<td>
								  	-
								</td>
							  	<td>
							  		<button class="btn btn-info btn-sm"><i class="livicon" data-n="eye-open" data-s="16" data-c="#fff" data-hc="0"></i> View</button>
							  	</td>
							  	<td>12-4-2557</td>
							  	<td>12-5-2557</td>
							  	<td>-</td>
							  	<td>
							  		<!--action-->
							  		<div class="btn-group">
										<button class="btn btn-info btn-sm">
											<i class="livicon" data-n="edit" data-s="16" data-c="#fff" data-hc="0"></i> Edit
										</button>
										<button class="btn btn-info btn-sm">
											Delete <i class="livicon" data-n="trash" data-s="16" data-c="#fff" data-hc="0"></i>
										</button>
									</div>
							  	</td>
							</tr>

							<tr>
								<td>Programmer</td>
								<td>IT</td>
							  	<td>
								  	-
								</td>
							  	<td>
							  		<button class="btn btn-info btn-sm"><i class="livicon" data-n="eye-open" data-s="16" data-c="#fff" data-hc="0"></i> View</button>
							  	</td>
							  	<td>12-4-2557</td>
							  	<td>12-5-2557</td>
							  	<td>-</td>
							  	<td>
							  		<!--action-->
							  		<div class="btn-group">
										<button class="btn btn-info btn-sm">
											<i class="livicon" data-n="edit" data-s="16" data-c="#fff" data-hc="0"></i> Edit
										</button>
										<button class="btn btn-info btn-sm">
											Delete <i class="livicon" data-n="trash" data-s="16" data-c="#fff" data-hc="0"></i>
										</button>
									</div>
							  	</td>
							</tr>
							<tr>
								<td>Programmer</td>
								<td>IT</td>
							  	<td>
								  	-
								</td>
							  	<td>
							  		<button class="btn btn-info btn-sm"><i class="livicon" data-n="eye-open" data-s="16" data-c="#fff" data-hc="0"></i> View</button>
							  	</td>
							  	<td>12-4-2557</td>
							  	<td>12-5-2557</td>
							  	<td>-</td>
							  	<td>
							  		<!--action-->
							  		<div class="btn-group">
										<button class="btn btn-info btn-sm">
											<i class="livicon" data-n="edit" data-s="16" data-c="#fff" data-hc="0"></i> Edit
										</button>
										<button class="btn btn-info btn-sm">
											Delete <i class="livicon" data-n="trash" data-s="16" data-c="#fff" data-hc="0"></i>
										</button>
									</div>
							  	</td>
							</tr>
							
					  	</tbody>
					</table>
			  	</div><!--end table-->
			  	<!--end List of following job box-->

			  	<!--setting box-->
			  	<div class="content-block bottom-padding bg frame">
			  		<div class="row">
				  		<h5><i class="fa fa-fw fa-gear"></i> Settings</h5>
						<div class="col col-md-2 pull-left">
							<h5><strong>All notifications: </strong> </h5>
						</div>
						<div class="col col-md-2 pull-left">
							
							<select class="form-control" style="font-size:1.1em;">
										<option value="" class="">ON</option>
										<option value="0">OFF</option>
							</select>
						</div>
					</div>
				</div>

			  	<!--end setting box-->




			  	
			</section>
      	
      	</article><!-- .content -->
      	<!--end center content-->

      

    </div><!--row-->
   
  <!-- .container -->

@stop

