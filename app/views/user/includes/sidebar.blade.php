 <!--sidebar-->
	   	<div class="col-sm-3 col-md-3" style="positon:fixed;width:270px;">
	      	<div id="sidebar" class="sidebar pull-left hide-for-small-only " style ="positon:fixed;" >

		      	<aside class="widget menu">
					<header style="margin-left:10px;padding-right:0px;">
						
					  	<div class="row">
					  		<br>
	                      	<div class="col col-md-5 col-sm-5">
								<img class="image img-circle appear-animation bounceIn appear-animation-visible" src="{{asset(Auth::user()->candidate->filepath_picture)}}" alt="" title="" width="84" height="84" data-appear-animation="bounceIn">     
							</div>
	                      
	                      	<div class="col col-md-7 col-sm-7">
	                      		<br><br>
	                        	<h1 class="title">Hi! <!--edit-->{{Auth::user()->first}}
	                        		<i class="livicon" data-s="24" data-op="0" data-hc="0"data-n="sun" data-c="#fda425" data-hc="0"></i>
	                        	</h1>

	                        	<!-- <i class="fa fa-circle text-success"></i> <h7 class="title">Online</h7> -->
	                      	</div>
	 					</div>

					</header>

					<nav style="margin-left:10px;padding-right:0px;">
							<ul>
								<?php 
									if($active['current']=='index')
									{	$color="#fff";
										$class="active";
									}
									else{
										$color="#2e5481"; 
										$class="";
									}
								?>
							  <li class="{{$class}}">
							  	<a href="{{ URL::to('/cd')}}">
							  		<i class="livicon" data-s="16" data-n="home" data-c="{{$color}}" data-hc="0"></i>
							  		
							  		<!--  <i class="fa fa-fw fa-home"></i> -->
							  		 Home
							  		</a>
							 	<?php 
									if($active['current']=='editprofile'||$active['current']=='profile')
									{	$color="#fff";
										$class="active";
									}
									else{
										$color="#2e5481"; 
										$class="";
									}
								?> 		
							  	</li>
							  <li class="parent {{$class}}">
								<a href="#">
									<span class="open-sub"></span>
									 <i class="livicon" data-s="16" data-n="user" data-c="{{$color}}" data-hc="0"></i>
									 
									<i class="fa fa-user open-sub item-icon"></i>Profile
								</a>
								<ul class="sub">
									<?php 
									if($active['current']=='editprofile')
									{	
										$class="active";
									}
									else{
										$class="";
										}
									?> 	
								  	<li class="{{$class}}"><a href="{{ URL::to('/cd/edit-profile')}}"><span class="open-sub"></span>Edit profile</a></li>
								  	<?php 
									if($active['current']=='profile')
									{	
										$class="active";
									}
									else{
										$class="";
										}
									?> 
						  			<li class="{{$class}}"><a href="{{ URL::to('/cd/profile')}}"><span class="open-sub"></span>View profile</a></li>
								</ul>
							  </li>
							   <?php 
									if($active['current']=='jobstatus')
									{	$color="#fff";
										$class="active";
									}
									else{
										$color="#2e5481"; 
										$class="";
									}
								?>
							  <li class="{{$class}}">
							  	<a href="{{ URL::to('/cd/jobstatus')}}">
							  		<i class="livicon" data-s="16" data-n="globe" data-c="{{$color}}" data-hc="0"></i> 
							  		Job status
							  		<small class="badge bg-blue pull-right" style="margin-top:0.2em;">2</small>
							  	</a>
							  </li>
							  <?php 
									if($active['current']=='jobfollow')
									{	$color="#fff";
										$class="active";
									}
									else{
										$color="#2e5481"; 
										$class="";
									}
								?> 	
							<li class="{{$class}}" >
								<a href="{{ URL::to('/cd/jobfollow')}}">
							  		<i class="livicon" data-s="16" data-n="notebook" data-c="{{$color}}" data-hc="0"></i>
							  		 Following Job<small class="badge bg-blue pull-right" style="margin-top:0.2em;">7</small>
							  	</a>
							</li>
							 <?php 
									if($active['current']=='jobrecommend')
									{	$color="#fff";
										$class="active";
									}
									else{
										$color="#2e5481"; 
										$class="";
									}
								?> 	
							<li class="{{$class}}">
							  	<a href="{{ URL::to('/cd/jobrecommend')}}">
							  		<i class="livicon" data-s="16" data-n="gift" data-c="{{$color}}" data-hc="0"></i>
							  		 Recommend Job<small class="badge bg-blue pull-right" style="margin-top:0.2em;">4</small>
							  	</a>
							</li>
							 <?php 
									if($active['current']=='jobcart')
									{	$color="#fff";
										$class="active";
									}
									else{
										$color="#2e5481"; 
										$class="";
									}
								?> 	
							<li class="{{$class}}">
							  	<a href="{{ URL::to('/cd/jobcart')}}">
							  		<i class="livicon" data-s="16" data-n="shopping-cart" data-c="{{$color}}" data-hc="0"></i>
							  		 Job cart
							  	</a>
							</li>
							 <?php 
									if($active['current']=='searchjob')
									{	$color="#fff";
										$class="active";
									}
									else{
										$color="#2e5481"; 
										$class="";
									}
								?> 	
							<li class="{{$class}}">
							  	<a href="{{ URL::to('/cd/searchjob')}}">
							  		<i class="livicon" data-s="16" data-n="search" data-c="{{$color}}" data-hc="0"></i>
							  		 Search Job</a>
							</li>
							  
							</ul>
					</nav>

					   
				</aside>
				
			</div>
 		</div>
	  <!-- .end sidebar -->