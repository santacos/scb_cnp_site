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
	<script src="<?php echo asset('js/apply-manager.js')?>"></script>
@stop


@section('content')
	
	@include('user.includes.apply.modalQuestion')
	@include('user.includes.apply.modalApplySuccess')
	@include('user.includes.apply.modalIncomplete')
  
    <div class="row">
     

	  <!--sidebar-->
	   @include('user.includes.sidebar')
	  <!-- .end sidebar -->

	  	<!-- center content -->
	    <article class="content pull-left col-sm-8 col-md-8" style="padding-bottom: 50px;">
										
	    	<section id="main" style="	padding-top: 30px;
										padding-right: 0px;
										padding-bottom: 0px;
										padding-left: 0px;">
			  	<header class="page-header" style="margin-bottom:20px;">
				    <div class="container">
				      <h1 class="title">Job detail</h1>
				    </div>	
			  	</header>

			  	<div class="content-block bottom-padding frame border-radius">
					<h3><!--edit-->
						Job title : {{$requisition->job_title}}

						<div class="big-icon bg bg-warning pull-right">
							<a href="#modalJobcart" data-toggle="modal">
						  	<div class="livicon" data-n="shopping-cart" data-c="#fff" data-s="64" data-hc="0" data-d="800"></div>
							</a>
						</div>
					</h3>
					<div class="row">
						<!--general information-->
						<div class="col col-md-10 col-sm-10">
							<div class="panel panel-default border-radius">
								<!-- <div class="panel-heading">
									<h3 class="panel-title">Panel title</h3>
								</div> -->
								<div class="panel-body">
									<!--edit-->
									<div class="row">
										<div class="col col-md-8 col-sm-8">
											<div class="row">
												<div class="col col-md-6 col-sm">
													<strong>Location :</strong>
												</div>
												<div class="col col-md-6 col-sm">
													<!--edit-->{{$requisition->location->name}}
												</div>
											</div>
											<div class="row">
												<div class="col col-md-6 col-sm">
													<strong>Year of Experience :</strong>
												</div>
												<div class="col col-md-6 col-sm">
													<!--edit-->{{$requisition->year_of_experience}}
												</div>
											</div>
											<div class="row">
												<div class="col col-md-6 col-sm">
													<strong>Employment Type :</strong>
												</div>
												<div class="col col-md-6 col-sm">
													<!--edit-->{{$requisition->recruitmentType->name}}
												</div>
											</div>
											<div class="row">
												<div class="col col-md-6 col-sm">
													<strong>Department (group) :</strong>
												</div>
												<div class="col col-md-6 col-sm">
													<!--edit-->{{$requisition->dept->name}}
												</div>
											</div>
										</div>
										<div class="col col-md-4 col-sm-4">
											
										</div>

									</div>
									<div class="row pull-right" >
											<i>
											<strong>Post date :</strong> 
											<!--edit-->26 - 06 - 2014
											</i>
									</div>
									
									
								</div>
							</div>
						</div>
						<!--Job summary-->
						<div class="col col-md-10 col-sm-10">
							<div class="panel panel-primary border-radius ">
								<div class="panel-heading">
									<h3 class="panel-title">Job summary</h3>
								</div>
								<div class="panel-body">
									{{$requisition->job_description}}
								</div>
							</div>
						</div>
						<!-- Job responsibilities -->
						<div class="col col-md-10 col-sm-10">
							<div class="panel border-radius panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">Job responsibilities</h3>
								</div>
								<div class="panel-body">
									{{$requisition->responsibility}}
								</div>
							</div>
						</div>
						<!-- Qualifications -->
						<div class="col col-md-10 col-sm-10">
							<div class="panel border-radius panel-success">
								<div class="panel-heading">
									<h3 class="panel-title">Qualifications</h3>
								</div>
								<div class="panel-body">
									{{$requisition->qualification}}
								</div>
							</div>
						</div>
						<!-- tag -->
						<div class="col col-md-10 col-sm-10">
							<div class="panel border-radius panel-danger">
								<div class="panel-heading">
									<h3 class="panel-title">Tag</h3>
								</div>
								<div class="panel-body">
									<!--edit tag name-->
									<a href="#">
										<small class="badge badge-warning" style="margin-top:0.2em;">IT</small>
									</a>
									<a href="#">
										<small class="badge badge-warning" style="margin-top:0.2em;">Programmer</small>
									</a>
									<a href="#">
										<small class="badge badge-warning" style="margin-top:0.2em;">Computer</small>
									</a>
								
								</div>
							</div>
						</div>
					</div><!--end row for all box-->
					<div class="row">
						<div class="col col-md-3 col-sm-3"></div>
						<div class="col col-md-3 col-sm-3">
							
							<!--edit link button-->
							<a href="#modalQuestion" data-toggle="modal" class="btn  btn-danger" style="margin-left:60px;width:100%">
								<strong>Apply</strong>
							</a>

							<a href="#modalIncomplete" data-toggle="modal" class="btn  btn-inverse" style="margin-left:60px;width:100%">
								<strong>In complete Apply</strong>
							</a>

							<!-- <a href="#modalQuestion" data-toggle="modal">
								<button type="button" class="btn btn-danger">Apply</button>
							</a> -->
						</div>
						<div class="col col-md-4 col-sm-4">

						</div>
					</div>
					
				</div>
			  	
			</section>
      	
      	</article><!-- .content -->
      	<!--end center content-->

      	<!-- right side bar-->
      	<div class="content pull-left col-sm-2 col-md-2" style="margin-top:8%;padding-right:2%;width:100 px;">
      	 	
    		<!-- <button type="button" class="btn btn-border btn-warning " style="margin-top:20px;width:100 px;height:100px;">
    			<h5><i class="fa fa-fw fa-search "></i>&nbsp;Search&nbsp;Job</h5>
    		</button>	

    		<button type="button" class="btn btn-border btn-warning " style="margin-top:20px;width:100 px;height:100px;">
    			<h5>
    				<i class="fa fa-warning "></i>&nbsp;Notification
    			</h5>
    		</button> -->
    		<div class="list-group  text-center" style="width:50%;font-size:1.2em;">
				<a href="#" class="list-group-item ">
					<i class="fa fa-fw fa-check-square-o"></i> 
					<br>
					Apply
				</a>
				<a href="#" class="list-group-item ">
				  	<i class="livicon shadowed" data-n="shopping-cart-in" data-s="24" data-c="#7996b7" data-hc="#2a6496"></i>
					<br>Add to job cart
				</a>
				<a href="#" class="list-group-item">
					<i class="livicon shadowed" data-n="save" data-s="24" data-c="#7996b7" data-hc="#2a6496"></i>
					<br>Follow this job
				</a>
				
				<a href="#" class="list-group-item">
					<i class="livicon shadowed" data-n="message-out" data-s="24" data-c="#7996b7" data-hc="#2a6496"></i>
					<br>Email a friend
				</a>
				<a href="#" class="list-group-item">
					<i class="livicon shadowed" data-n="facebook-alt" data-s="24" data-c="#7996b7" data-hc="#2a6496"></i>
					<br>FB Share
				</a>
			</div>
    		
    	</div>
    	<!--end right side bar-->

    </div><!--row-->
   
  <!-- .container -->

@stop

