@extends('user.layouts.default')

@section('title')
SCB Recruitment-Home
@stop

@section('body-class')
"fixed-header "
@stop


@section('header-class')
"header"
@stop



@section('content')

  
    <div class="row">
     

	  <!--sidebar-->
      	<div id="sidebar" class="sidebar pull-left  col-sm-3 col-md-3" style ="width:270px;" >

	      	<aside class="widget menu">
				  <header style="margin-left:10px;padding-right:0px;">
					<h3 class="title">Pages</h3><br>
					<img class="image img-circle appear-animation bounceIn appear-animation-visible" src="{{asset('assets/img/avatar3.png')}}" alt="" title="" width="84" height="84" data-appear-animation="bounceIn">
				  </header>
					<nav style="margin-left:10px;padding-right:0px;">
						<!--<ul class="nav nav-pills nav-stacked text-left list-unstyled">-->
						<ul>
						  <li class="active"><a href="#"><i class="livicon" data-s="16" data-n="home" data-c="#fff" data-hc="0"></i> Home</a></li>
						  <li class="parent">
							<a href="#"><span class="open-sub"></span><i class="livicon" data-s="16" data-n="gears" data-c="#2e5481" data-hc="0"></i>Profile</a>
							<ul class="sub">
							  	<li><a href="#"><span class="open-sub"></span>Edit profile</a></li>
					  			<li><a href="#"><span class="open-sub"></span>View profile</a></li>
							</ul>
						  </li>
						  <li><a href="#"><i class="livicon" data-s="16" data-n="edit" data-c="#2e5481" data-hc="0"></i> Job status</a></li>
						  <li><a href="#"><i class="livicon" data-s="16" data-n="edit" data-c="#2e5481" data-hc="0"></i> Following Job</a></li>
						  <li><a href="#"><i class="livicon" data-s="16" data-n="edit" data-c="#2e5481" data-hc="0"></i> Recommend Job</a></li>
						  <li><a href="#"><i class="livicon" data-s="16" data-n="edit" data-c="#2e5481" data-hc="0"></i> Search Job</a></li>
						  
						</ul>
					</nav>

				   
			</aside>
			
		</div>

	  <!-- .sidebar -->
	    <article class="content pull-left col-sm-7 col-md-7">

      		<br>
	      	<div class="row">
				<div class="alert alert-error fade in alert-warning alert-dismissable">
					<i class="fa fa-cloud-download alert-icon"></i>
					<button type="button" class="close" data-dismiss="alert">×</button>
					<h5>Recommend box</h5>
					<h7>Where did you graduate from?</h7>
				</div>
			</div>
			<div class="row">

				  <div class="content-block bottom-padding frame">
				  	
				  	
					 <div class="progress-circular progress-striped pull-right" style="padding-left:10px;">
						<input type="text" class="knob" value="0" rel="75" data-linecap="round" data-width="80" data-bgColor="#f2f2f2" data-fgColor="#c10841" data-thickness=.30 data-readOnly=true disabled>
					 </div>
					<h1>
						Profile
						<button class="btn btn-border btn-primary btn-sm">View profile</button>
					<button class="btn btn-border btn-primary btn-sm " style="margin-left:0px;">Edit profile</button>
					</h1>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad atque cum est. Commodi consequatur soluta officiis veniam nobis corrupti tenetur dolorem reprehenderit sunt vitae iure suscipit adipisci explicabo qui facere! Ea dolore quas maxime facere tenetur illum quibusdam sapiente dolorem nesciunt laudantium necessitatibus accusamus ab libero vel odio.</p>
				  </div>
				
			</div>

      	</article><!-- .content -->

      	 <div class="content pull-left col-sm-2 col-md-2">
    		<button type="button" class="btn btn-border btn-primary btn-lg" style="margin-top:20px;width:250px;height:60px;">
    			<h5><i class="fa fa-fw fa-search pull-left"></i>&nbsp;Search Job</h5>
    		</button>	
    	</div>

    </div>
  <!-- .container -->

@stop

