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
	   	@include('user.includes.sidebar')
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
					  	<div class="col col-md-7">
					  		<table class="table text-left" style="font-size:1.1em;">
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
					  	<div class="col col-md-3 pull-left" style="padding-left:0px;">
							<div class="col-md-12">
								<div class="bs-docs-example-images">
									<a class="img-thumbnail img-rounded lightbox" style="padding-bottom:1.3em;" rel="fancybox" href="{{asset('assets/img/avatar3.png')}}" >
										<img src="{{asset('assets/img/avatar3.png')}}" alt="" title="">
										<span class="bg-images">
											<i class="fa fa-search"></i>
										</span>
									</a>
								</div>
							</div>
					  	</div>
					  	<div class="col col-md-2 pull-left" style="padding-left:0px;padding-right:0px;">
					  		<button class="btn push-top push-bottom btn-border btn-info" 
					  		style="width:90%;"data-toggle="modal" data-target="#videoModal">
								Video resume
							</button><br>
							<button class="btn push-top push-bottom btn-border btn-success" 
							style="width:90%;" data-toggle="modal" data-target="#myModal">
								View resume
							</button><br>
							<button class="btn push-top push-bottom btn-border btn-warning" 
							style="width:90%;" data-toggle="modal" data-target="#myModal">
								Export to pdf
							</button>
					  	</div>
					  	<!--modal zone-->
					  	<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
								<div class="modal-header">
								  <a href="#" class="close" data-dismiss="modal" aria-hidden="true">×</a>
								  <div class="title-box">
									<h4 class="title">Video resume</h4>
								  </div>
								</div>
								<div class="modal-body">
									<div class="video-box youtube">
										<!-- <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/oNBBijn4JuY?showinfo=0&amp;wmode=opaque"></iframe>
										 -->
										 <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/0oHhD3Bk9Uc"></iframe>
									
									</div>
									
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  
								</div>
							  </div>
							</div>
						</div>

					  	<!--end modal zone-->
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

