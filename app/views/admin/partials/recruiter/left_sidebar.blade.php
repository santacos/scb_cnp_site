<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="{{asset('assets/img/avatar3.png')}}" class="img-circle" alt="User Image" />
		</div>
		<div class="pull-left info">
			<p>
				Hello, recruiter
			</p>

			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>
	<!-- search form -->
	<form action="#" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Search..."/>
			<span class="input-group-btn">
				<button type='submit' name='seach' id='search-btn' class="btn btn-flat">
					<i class="fa fa-search"></i>
				</button> </span>
		</div>
	</form>
	<!-- /.search form -->
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">
		<li class="active">
			<a href="{{ URL::to('/') }}"> <i class="fa fa-fw fa-home"></i> <span>Home</span> </a>
		</li>


		<li>
			<a href="{{ URL::to('analytics') }}"> <i class="fa fa-fw fa-bar-chart-o"></i> <span>Analytics</span> <small class="badge pull-right bg-green">new</small> </a>
		</li>
		<?php $r[4]=Requisition::where('requisition_current_status_id', '=', 4)->count();
			$r[5]=Requisition::where('requisition_current_status_id', '=', 5)->count();
			$r[6]=Requisition::where('requisition_current_status_id', '=', 6)->count();
			$a[3]=Requisition::whereHas('application', function($q) 
				{$q->whereApplicationCurrentStatusId(3);})
			->where('requisition_current_status_id','=',6)->count();
			$a[4]=Requisition::whereHas('application', function($q) 
				{$q->whereApplicationCurrentStatusId(4);})
			->where('requisition_current_status_id','=',6)->count();
			$a[5]=Requisition::whereHas('application', function($q) 
				{$q->whereApplicationCurrentStatusId(5);})
			->where('requisition_current_status_id','=',6)->count();
			$a[7]=Requisition::whereHas('application', function($q) 
				{$q->whereApplicationCurrentStatusId(7);})
			->where('requisition_current_status_id','=',6)->count();
			$a[8]=Requisition::whereHas('application', function($q) 
				{$q->whereApplicationCurrentStatusId(8);})
			->where('requisition_current_status_id','=',6)->count();
			$total_a=Requisition::whereHas('application', function($q) 
				{$q->whereApplicationCurrentStatusId(3)
					->orwhere('application_current_status_id','=',4)
					->orwhere('application_current_status_id','=',5)
					->orwhere('application_current_status_id','=',7)
					->orwhere('application_current_status_id','=',8)
					;

				})
			->where('requisition_current_status_id','=',6)->count();
			?>

		<li class="treeview">
			<a href="#"> <i class="fa fa-fw fa-inbox"></i> <span>Requisition      <small class="badge bg-blue">{{$r[4]+$r[5]}}</small></span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{URL::to('recruiter-requisition-post')}}">
						<i class="fa fa-fw fa-edit"></i> 
						Post Job 
						<!--number of post job-->
						<small class="badge pull-right bg-yellow">{{ $r[4]}}</small>
					</a>
				</li>
				<li>
					<a href="{{URL::to('recruiter-shortlist-candidate')}}">
						<i class="ion ion-person-add"></i> Send Shortlist 
						<small class="badge pull-right bg-red"> {{$r[5]}}</small>
					</a>
				</li>
				<li>
					<a href="{{URL::to('recruiter-shortlist-candidate-sent')}}">
						<i class="fa fa-fw fa-check-square-o"></i> Shortlist sent
						<small class="badge pull-right bg-red"> {{$r[6]}}</small>
					</a>
				</li>
				<li>
					<a href="{{ URL::to('recruiter-closed-requisition') }}"><i class="fa fa-fw fa-book"></i> Closed Job</a>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#"> <i class="fa fa-fw fa-user"></i> <span>Candidate       <small class="badge bg-aqua">{{$total_a}}</small></span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{URL::to('recruiter-interview-confirm')}}"><i class="fa fa-fw fa-phone"></i> Interview Confirm
						<small class="badge pull-right bg-yellow"> {{$a[3]}}</small>
					</a>
				</li>

				<li>
					<a href="{{URL::to('recruiter-interview-feedback')}}"><i class="fa fa-fw fa-comments-o"></i> Interview Feedback
						<small class="badge pull-right bg-red"> {{$a[4]}}</small>
					</a>
				</li>

				<li>
					<a href="{{URL::to('recruiter-prepare-package')}}"><i class="fa fa-fw fa-inbox"></i> Prepare Package
						<small class="badge pull-right bg-yellow"> {{$a[5]}}</small>
					</a>
				</li>

				<li>
					<a href="{{URL::to('recruiter-offer-package')}}"><i class="fa fa-fw fa-dollar"></i> Offer
						<small class="badge pull-right bg-red"> {{$a[7]}}</small>
					</a>
				</li>
				<li>
					<a href="{{URL::to('recruiter-sign')}}"><i class="fa fa-fw fa-dollar"></i> Sign
						<small class="badge pull-right bg-yellow"> {{$a[8]}}</small>
					</a>
				</li>
				<li>
					<a href="{{ URL::to('recruiter-closed-requisition') }}"><i class="fa fa-fw fa-book"></i> Closed Candidate</a>
				</li>

			</ul>
		</li>
		<li>
			
			<a href="#"> <i class="fa fa-fw fa-search"></i><span>  Search Candidate</span> </a>
		
		</li>
		<li> 
		
			<a href="#"> <i class="fa fa-fw fa-save"></i><span>  Saved Candidate</span>  </a>
		
		</li>
		<li> 
		
			<a href="javascript:window.open('{{ URL::to('calendar-controller') }}','Calendar','width=1000,height=650,menubar=no,location=no,resizable=yes,scrollbars=yes,status=no,personalbar=no,titlebar=no')"> <i class="fa fa-fw fa-calendar"></i><span>  Calendar</span>  </a>
		
		</li>
		
	</ul>
</section>