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
							  <li class="parent active">
							  	<a href="{{ URL::to('/cd')}}">
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
	    <article class="content pull-left col-sm-9 col-md-9">

      		<br>
      		
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
							<a href="{{ URL::to('/cd/edit-profile')}}">
							<button class="btn btn-border btn-warning btn-sm " style="margin-left:0px;">Edit profile</button>
							</a>
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
								  <td><strong>Date of Birth :</strong></td>
								  <td>12 July 1988</td>
								  <td><strong>Nationality : </strong></td>
								  <td>Thai</td>
								</tr>
								<tr>
								  <td><strong>Passport NO:</strong></td>
								  <td>1100932419323</td>
								  <td><strong>ID Number :</strong></td>
								  <td>1100932419323</td>
								</tr>
							  </tbody>
							</table>
							
					  	</div>
					  	<div class="col col-md-5">
					  <!-- 		<div class="container">
						  		<div class="row">
						  			<div class="col col-md-8">
						  			</div>
						  			<div class="col col-md-4">
						  				<div class="row">
								  			<div class="col col-md-4">
								  				<button type="button" class="btn btn-default" style="width:80%;">View resume</button>
								  			</div>
								  			<div class="col col-md-4">
								  				<button type="button" class="btn btn-default" style="width:80%;">Export to pdf</button>
								  			</div>
								  			<div class="col col-md-4">
								  				<button class="btn btn-default pull-left" style="width:8em;" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
			                    			</div>
								  		</div>
						  			</div>
						  		</div>
					  		</div> -->
					  		
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
				  		<div class="col col-md-12">
				  			<div class="panel panel-primary frame frame-shadow-curved">
							  <div class="panel-heading"  >
								<h3 class="panel-title">Work Experience</h3>
							  </div>
							  <div class="panel-body">
									<div class="row">
							  			<div class="col col-md-12">
											<div class="content-block frame border-radius" style="padding:5px;">
												<div class="row">
													<div class="col col-md-6">
														<p><strong>Job title :</strong><!--edit-->Programmer
														<br><strong>Time period</strong><!--edit-->2009 - 2011
														</p>
													</div>
													<div class="col col-md-6">
														<strong>Company name :</strong><!--edit-->Lotuss
														<br><strong>Location :</strong><!--edit-->Bangkok
													</div>
												</div>
												<div class="row">
													<div class="col col-md-12">
														<strong>Job Achievement(s) :</strong> 
													</div>
												</div>
												
											</div>
										</div>
										
									</div><!--end first row for Work Experience-->
									<br>
									<div class="row">
							  			<div class="col col-md-12">
											<div class="content-block frame border-radius" style="padding:5px;">
												<div class="row">
													<div class="col col-md-6">
														<p><strong>Job title :</strong><!--edit-->Programmer
														<br><strong>Time period</strong><!--edit-->2009 - 2011
														</p>
													</div>
													<div class="col col-md-6">
														<strong>Company name :</strong><!--edit-->Lotuss
														<br><strong>Location :</strong><!--edit-->Bangkok
													</div>
												</div>
												<div class="row">
													<div class="col col-md-12">
														<strong>Job Achievement(s) :</strong> 
													</div>
												</div>
												
											</div>
										</div>
										
									</div><!--end second row for Work Experience-->
							  </div>
							</div>
				  		</div>

				  		<!--skill-->
				  		<div class="col col-md-12">
				  			<div class="panel panel-info frame frame-shadow-curved">
							  <div class="panel-heading"  >
								<h3 class="panel-title">Skill</h3>
							  </div>
							  <div class="panel-body">
							  		<div class="row">
							  			<div class="col col-md-6">
											<div class="content-block frame border-radius" style="padding:5px;">
												<p><strong>Skill name : </strong><!--edit-->JAVA 
												<br><strong>Skill branch : </strong><!--edit-->Programming language </p>
											</div>
										</div>
										<div class="col col-md-6">
											<div class="content-block frame border-radius" style="padding:5px;">
												<p><strong>Skill name : </strong><!--edit-->JAVA 
												<br><strong>Skill branch : </strong><!--edit-->Programming language </p>
											</div>
										</div>
									</div><!--end first row for skill-->
									<br>
									<div class="row">
							  			<div class="col col-md-6">
											<div class="content-block frame border-radius" style="padding:5px;padding-top:10px;">
												<p><strong>Skill name : </strong><!--edit-->JAVA 
												<br><strong>Skill branch : </strong><!--edit-->Programming language </p>
											</div>
										</div>
										<div class="col col-md-6">
											<div class="content-block frame border-radius" style="padding:5px;">
												<p><strong>Skill name : </strong><!--edit-->JAVA 
												<br><strong>Skill branch : </strong><!--edit-->Programming language </p>
											</div>
										</div>
									</div><!--end second row for skill-->
							  </div>
							</div>
				  		</div>

				  		<!--education-->
				  		<div class="col col-md-12">
				  			<div class="panel panel-success  frame frame-shadow-curved " >
							  <div class="panel-heading"  >
								<h3 class="panel-title">Education</h3>
							  </div>
							  <div class="panel-body">
								<div class="row">
						  			<div class="col col-md-12">
										<div class="content-block frame border-radius" style="padding:5px;">
											<div class="row">
												<div class="col col-md-3">
													<p><strong>2000 - 2004 </strong><!--edit-->
													
													</p>
												</div>
												<div class="col col-md-9">
													<strong>Chulalongkorn university</strong><!--edit-->
													<br><!--edit-->Degree : Bachelor
													<br><!--edit-->Field of study : Faculty of Science and Technology
													<br><!--edit-->Major : Information Technology
													<br><!--edit-->GPA : 4.00
												</div>
											</div>
											
											
										</div>
									</div>
										
								</div><!--end first row for Education-->

							  </div>
							</div>
				  		</div>

				  		<!--award-->
				  		<div class="col col-md-12">
				  			<div class="panel panel-warning  frame frame-shadow-curved">
							  <div class="panel-heading"  >
								<h3 class="panel-title">Award and Honors</h3>
							  </div>
							  <div class="panel-body">
								<div class="row">
						  			<div class="col col-md-12">
										<div class="content-block frame border-radius" style="padding:5px;">
											<div class="row">
												<div class="col col-md-3">
													<p><strong>June 2010 </strong><!--edit-->
													
													</p>
												</div>
												<div class="col col-md-9">
													<strong>Award title</strong><!--edit-->
													<br><!--edit-->By issuer
													<br><!--edit-->Date: month,year
													<br><!--edit-->Description : <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad</p>
													
												</div>
											</div>
											
											
										</div>
									</div>
										
								</div><!--end first row for Award and Honors-->
							  </div>
							</div>
				  		</div>

				  		<!--Professional certificate-->
				  		<div class="col col-md-12">
				  			<div class="panel panel-danger frame frame-shadow-curved" >
							  <div class="panel-heading"  >
								<h3 class="panel-title">Professional certificate</h3>
							  </div>
							  <div class="panel-body">
								<div class="row">
						  			<div class="col col-md-12">
										<div class="content-block frame border-radius" style="padding:5px;">
											<div class="row">
												<div class="col col-md-3">
													<p><strong>CPA certificate</strong><!--edit-->
													
													</p>
												</div>
												<div class="col col-md-9">
													<p>the statutory title of qualified accountants in the United States who have passed the Uniform Certified Public Accountant Examination and have met additional state education and experience requirements for membership in their respective professional accounting bodies and certification as a CPA. Individuals who have</p>
												
												</div>
											</div>
										</div>


									</div>
										
								</div><!--end first row for Professional certificate-->
								<div class="row">
						  			<div class="col col-md-12">
										<div class="content-block frame border-radius" style="padding:5px;">
											<div class="row">
												<div class="col col-md-3">
													<p><strong>CPA certificate</strong><!--edit-->
													
													</p>
												</div>
												<div class="col col-md-9">
													<p>the statutory title of qualified accountants in the United States who have passed the Uniform Certified Public Accountant Examination and have met additional state education and experience requirements for membership in their respective professional accounting bodies and certification as a CPA. Individuals who have</p>
												
												</div>
											</div>
										</div>

										
									</div>
										
								</div><!--end second row for Professional certificate-->
							  </div>
							</div>
				  		</div>

				  	</div>
				  	<!--end first row-->


				  </div><!--end content in profile-->
			</div>
			<!-- end profile-->

			
      	</article><!-- .content -->
      	<!--end center content-->

      

    </div><!--row-->
   
  <!-- .container -->

@stop

