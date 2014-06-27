<!-- Small boxes (Stat box) -->
	<div class="row">

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('recruiter-requisition-post')}}" class="small-box bg-aqua">
				<div class="inner">
					<h3> Post job <br><i class="fa fa-fw fa-edit" style="color:#48036F;"></i> </h3>
				</div>

				<div class="icon">
					<i class="ion ion" style="color:white;font-size:80%;"> {{ $a[0]=Requisition::where('requisition_current_status_id', '=', 4)->count()}}</i>		
				</div>
				<div class="small-box-footer">
					total job  <span class="label label-info" style="border-radius:50%;font-size:1.1em;">  {{$a[0]}}</span> 
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('recruiter-shortlist-candidate')}}" class="small-box bg-green">
				<div class="inner">
					<h3> Select<br>candidate</h3>

				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<div class="small-box-footer">
					total job  <span class="label label-success" style="border-radius:50%;font-size:1.1em;">  {{$a[1]=Requisition::where('requisition_current_status_id', '=', 5)->count()}}</span> 
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('recruiter-shortlist-candidate-sent')}}" class="small-box bg-yellow">
				<div class="inner">
					<h3> Shortlist<br> sent </h3>
			
				</div>
				<div class="icon">
					<i class="fa fa-fw fa-check-square-o"></i>
				</div>
				<div class="small-box-footer"> 
					total job  <span class="label label-warning" style="border-radius:50%;font-size:1.1em;">  {{$a[2]=Requisition::where('requisition_current_status_id', '=', 6)->count()}}</span> 
				
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('recruiter-interview-confirm')}}" class="small-box bg-red">
				<div class="inner">
					<h3> Interview<br>appointment </h3>
				</div>
				<div class="icon">
					<i class="fa fa-fw fa-group"></i>
				</div>
				<div class="small-box-footer"> 
					total job  <span class="label label-danger" style="border-radius:50%;font-size:1.1em;">  {{$a[3]=Requisition::whereHas('application', function($q) {
																													$q->whereApplicationCurrentStatusId(3);
																												})->where('requisition_current_status_id','=',6)->count()}}</span> 
				
				</div>
			</a>
		</div><!-- ./col -->

		<!-- try add-->
		<div class="col-lg-3 col-xs-6" >
			<!-- small box -->
			<a href="{{URL::to('recruiter-interview-feedback')}}" class="small-box bg-blue">
				<div class="inner">
					<h3> Interview <br>feedback</h3>
				</div>

				<div class="icon">
					<i class="fa fa-fw fa-comments-o"></i>
				</div>
				<div class="small-box-footer"> 
					total job  <span class="label bg-blue" style="border-radius:50%;font-size:1.1em;"> {{$a[4]=Requisition::whereHas('application', function($q) {
																													$q->whereApplicationCurrentStatusId(4);
																												})->where('requisition_current_status_id','=',6)->count()}}</span> 
				 
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('recruiter-prepare-package')}}" class="small-box bg-purple">
				<div class="inner">
					<h3> Prepare <br>package</h3>

				</div>
				<div class="icon">
					<i class="fa fa-fw fa-archive"></i>
				</div>
				<div class="small-box-footer"> 
					total job  <span class="label bg-purple" style="border-radius:50%;font-size:1.1em;"> {{$a[5]=Requisition::whereHas('application', function($q) {
																													$q->whereApplicationCurrentStatusId(5);
																												})->where('requisition_current_status_id','=',6)->count()}}</span> 
				 
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('recruiter-offer-package')}}" class="small-box bg-teal">
				<div class="inner">
					<h3> Offer <br><i class="ion ion-stats-bars"></i></h3>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<div class="small-box-footer"> 
					total job  <span class="label bg-teal" style="border-radius:50%;font-size:1.1em;"> {{$a[6]=Requisition::whereHas('application', function($q) {
																													$q->whereApplicationCurrentStatusId(7);
																												})->where('requisition_current_status_id','=',6)->count()}}</span> 
				
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('recruiter-sign')}}" class="small-box bg-maroon">
				<div class="inner">
					<!-- <h3> Total<br>{{$a[0]+$a[1]+$a[2]+$a[3]+$a[4]+$a[5]+$a[6]}}</h3> -->
					<h3>Sign <br> Contract </h3>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<div class="small-box-footer"> 
					total job  <span class="label bg-maroon" style="border-radius:50%;font-size:1.1em;"> {{$a[7]=Requisition::whereHas('application', function($q) {
																													$q->whereApplicationCurrentStatusId(8);
																												})->where('requisition_current_status_id','=',6)->count()}}</span> 
				
				</div>
			</a>
		</div><!-- ./col -->

	</div><!-- /.row -->
