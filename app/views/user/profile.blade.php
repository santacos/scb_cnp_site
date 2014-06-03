@extends('user.layouts.default')

@section('title')
SCB Recruitment-Home
@stop

@section('body-class')
"fixed-header hidden-top"
@stop


@section('header-class')
"header header-two"
@stop



@section('content')

  
    <div class="row">
      <div class="content pull-right col-sm-3 col-md-3">
    		<button type="button" class="btn btn-border btn-warning"><i class="fa fa-thumbs-up"></i>&nbsp; Warning</button>	
    	</div>

      	<article class="content pull-right col-sm-7 col-md-7">

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
	  
	  <!--sidebar-->
      <div id="sidebar" class="sidebar  col-sm-2 col-md-2" >

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

			   
			</aside><!-- .menu-->
		</div><!-- .sidebar -->
    </div>
  <!-- .container -->

@stop

