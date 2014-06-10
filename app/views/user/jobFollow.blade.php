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
			  	<!-- <div class="content-block  text-center bg" style="margin-bottom:20px;">
					<p class="lead">Welcome to our site. There are many variations alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Donec pharetra, lectus nec dignissim pharetra quis libero. </p>
					<button class="btn btn-default">Read More</button>
					<button class="btn btn-default">Join Now</button>
				</div> -->
				<div class="content-block bottom-padding frame frame-shadow-curved" style="margin-bottom: 10px;">
					
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

				<!--title for table-->
				<div class="title-box">
					<!-- <h2 class="title">edit79 Results</h2> -->
					<h3>7 Results
						
						<!-- <div class="icon pull-right" title="apple-logo">
						  <div class="livicon" data-n="shopping-cart"></div>
						</div> --> 	
						<div class="big-icon bg bg-warning pull-right">
						  <div class="livicon" data-n="shopping-cart" data-c="#fff" data-s="64" data-hc="0" data-d="800"></div>
						</div>
					</h3>

				</div>
				<!--end title for table-->

				<div class="table-box">
					<table class="table table-bordered table-striped table-hover text-center" style="font-size:1.2em;">
					  <thead>
						<tr>
						  <th style="width:5%;"></th>
						  <th style="width:15%;">Date post</th>
						  <th style="width:20%;">Job ID</th>
						  <th style="width:20%;">Job Title</th>
						  <th style="width:10%;">Department</th>
						  <th style="width:10%;">Job Location</th>
						  <th style="width:20%;">Action</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
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
						</tr>
						<tr>
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
						</tr>
					
					  </tbody>
					</table>
			  	</div><!--end table-->
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

