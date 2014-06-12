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
	      	<div id="sidebar" class="sidebar pull-left hide-for-small-only " style ="" >

		      	<aside class="widget menu">
					<header style="margin-left:10px;padding-right:0px;">
						
					  	<div class="row">
					  		<br>
	                      	<div class="col col-md-5 col-sm-5">
								<img class="image img-circle appear-animation bounceIn appear-animation-visible" src="{{asset('assets/img/avatar3.png')}}" alt="" title="" width="84" height="84" data-appear-animation="bounceIn">     
							</div>
	                      
	                      	<div class="col col-md-7 col-sm-7">
	                      		<br><br>
	                        	<h1 class="title">Hi! <!--edit--> Somsri
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

							<li class="active">
							  	<a href="{{ URL::to('/cd/jobcart')}}">
							  		<i class="livicon" data-s="16" data-n="shopping-cart" data-c="#fff" data-hc="0"></i>
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
				      <h1 class="title">
				      		<!-- <div class="icon">
								<div class="livicon" data-n="shopping-cart" data-s="40" data-c="#000" data-hc="0"></div>
						  	</div> -->
						  	<div class="big-icon bg bg-warning pull-left">
							  	<div class="livicon" data-n="shopping-cart" data-c="#fff" data-s="64" data-hc="0" data-d="800"></div>
							</div>
						  	Job Cart
						  	
							<!--edit--><small>total</small> <span class="badge bg-blue badge-lg" style="font-size:0.6em;">2</span><small> Jobs in cart</small>
							
				      </h1>

				    </div>	
			  	</header>

			  	<!--filter box-->
			  	<!-- <div class="content-block  text-center bg" style="margin-bottom:20px;">
					<p class="lead">Welcome to our site. There are many variations alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Donec pharetra, lectus nec dignissim pharetra quis libero. </p>
					<button class="btn btn-default">Read More</button>
					<button class="btn btn-default">Join Now</button>
				</div> -->
				<!--end filter box-->

				

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
			  			
						<button class="btn btn-success " style="width:45%;">Follow</button>
						<button class="btn btn-danger " style="width:45%;">Apply</button>
			  		</div>
			  	</div>
			</section>
      	
      	</article><!-- .content -->
      	<!--end center content-->

      	<!-- right side bar-->
      	<!-- <div class="content pull-left col-sm-1 col-md-1">
      	 	
    		
    	</div> -->
    	<!--end right side bar-->

    </div><!--row-->
   
  <!-- .container -->

@stop
