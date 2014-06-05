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
	                        	<h1 class="title">Hi! Somsri
	                        		<i class="livicon" data-s="24" data-op="0" data-hc="0"data-n="sun" data-c="#fda425" data-hc="0"></i>
	                        	</h1>

	                        	<!-- <i class="fa fa-circle text-success"></i> <h7 class="title">Online</h7> -->
	                      	</div>
	 					</div>

					</header>

					<nav style="margin-left:10px;padding-right:0px;">
							<ul>
							  <li class="parent active">
							  	<a href="#">
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
								  	<li><a href="#"><span class="open-sub"></span>Edit profile</a></li>
						  			<li><a href="#"><span class="open-sub"></span>View profile</a></li>
								</ul>
							  </li>
							  <li>
							  	<a href="#">
							  		<i class="livicon" data-s="16" data-n="globe" data-c="#2e5481" data-hc="0"></i> 
							  		Job status
							  		<small class="badge bg-blue pull-right" style="margin-top:0.2em;">2</small>
							  	</a>
							  </li>
							<li>
							  	<a href="#">
							  		<i class="livicon" data-s="16" data-n="notebook" data-c="#2e5481" data-hc="0"></i>
							  		 Following Job<small class="badge bg-blue pull-right" style="margin-top:0.2em;">7</small>
							  	</a>
							</li>
							<li>
							  	<a href="#">
							  		<i class="livicon" data-s="16" data-n="gift" data-c="#2e5481" data-hc="0"></i>
							  		 Recommend Job<small class="badge bg-blue pull-right" style="margin-top:0.2em;">4</small>
							  	</a>
							</li>

							<li>
							  	<a href="#">
							  		<i class="livicon" data-s="16" data-n="shopping-cart" data-c="#2e5481" data-hc="0"></i>
							  		 Job cart
							  	</a>
							</li>

							<li>
							  	<a href="#">
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
								  <td>Peepeepee</td>
								  <td><strong>Lastname:</strong>
								  <td>northnorthnorth</td>
								
								</tr>
								<tr>
								  <td><strong>ชื่อ: </strong>
								  <td>พีพีพี</td>
								  <td><strong>นามสกุล: </strong></td>
								  <td>นอร์ทนอร์ท</td>
								  
								</tr>
								<tr>
								  <td><strong>Gender: </strong></td>
								  <td>Male</td>
								  <td><strong>Age: </strong></td>
								  <td>25&nbsp;&nbsp;years</td>
								</tr>
								<tr>
								  <td>Item #4</td>
								  <td>Description</td>
								</tr>
								<tr>
								  <td><strong>All Items</strong></td>
								  <td><strong>Description</strong></td>
								</tr>
							  </tbody>
							</table>
							
					  	</div>
					  	<div class="col col-md-5">

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
				  		

				  		<!--experience box-->
				  		<div class="col col-md-6">
				  			<div class="panel panel-default frame frame-shadow-curved">
							  <div class="panel-heading"  >
								<h3 class="panel-title">Panel title</h3>
							  </div>
							  <div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad atque cum est. Commodi consequatur soluta officiis veniam nobis corrupti tenetur dolorem reprehenderit sunt vitae iure suscipit adipisci explicabo qui facere! Ea dolore quas maxime facere tenetur illum quibusdam sapiente dolorem nesciunt laudantium necessitatibus accusamus ab libero vel odio.</p>
				  	
							  </div>
							</div>
				  		</div>

				  		<!--skill-->
				  		<div class="col col-md-6">
				  			<div class="panel panel-default frame frame-shadow-curved">
							  <div class="panel-heading"  >
								<h3 class="panel-title">Panel title</h3>
							  </div>
							  <div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad atque cum est. Commodi consequatur soluta officiis veniam nobis corrupti tenetur dolorem reprehenderit sunt vitae iure suscipit adipisci explicabo qui facere! Ea dolore quas maxime facere tenetur illum quibusdam sapiente dolorem nesciunt laudantium necessitatibus accusamus ab libero vel odio.</p>
				  	
							  </div>
							</div>
				  		</div>

				  		<!--education-->
				  		<div class="col col-md-6">
				  			<div class="panel panel-default " >
							  <div class="panel-heading"  >
								<h3 class="panel-title">Panel title</h3>
							  </div>
							  <div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad atque cum est. Commodi consequatur soluta officiis veniam nobis corrupti tenetur dolorem reprehenderit sunt vitae iure suscipit adipisci explicabo qui facere! Ea dolore quas maxime facere tenetur illum quibusdam sapiente dolorem nesciunt laudantium necessitatibus accusamus ab libero vel odio.</p>
				  	
							  </div>
							</div>
				  		</div>

				  		<!--award-->
				  		<div class="col col-md-6">
				  			<div class="panel panel-default ">
							  <div class="panel-heading"  >
								<h3 class="panel-title">Panel title</h3>
							  </div>
							  <div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad atque cum est. Commodi consequatur soluta officiis veniam nobis corrupti tenetur dolorem reprehenderit sunt vitae iure suscipit adipisci explicabo qui facere! Ea dolore quas maxime facere tenetur illum quibusdam sapiente dolorem nesciunt laudantium necessitatibus accusamus ab libero vel odio.</p>
				  	
							  </div>
							</div>
				  		</div>

				  		<!--Professional certificate-->
				  		<div class="col col-md-12">
				  			<div class="panel panel-default frame frame-shadow-curved" >
							  <div class="panel-heading"  >
								<h3 class="panel-title">Panel title</h3>
							  </div>
							  <div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad atque cum est. Commodi consequatur soluta officiis veniam nobis corrupti tenetur dolorem reprehenderit sunt vitae iure suscipit adipisci explicabo qui facere! Ea dolore quas maxime facere tenetur illum quibusdam sapiente dolorem nesciunt laudantium necessitatibus accusamus ab libero vel odio.</p>
				  	
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
      	<!--end center content-->

      	<!-- right side bar-->
      	<div class="content pull-left col-sm-1 col-md-1">
      	 	
    		<button type="button" class="btn btn-border btn-warning " style="margin-top:20px;width:100 px;height:100px;">
    			<h5><i class="fa fa-fw fa-search "></i>&nbsp;Search&nbsp;Job</h5>
    		</button>	

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

