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
			<a href="{{ URL::to('widgets') }}"> <i class="fa fa-fw fa-bar-chart-o"></i> <span>Analytics</span> <small class="badge pull-right bg-green">new</small> </a>
		</li>


		<li class="treeview">
			<a href="#"> <i class="fa fa-fw fa-inbox"></i> <span>Requisition      <small class="badge bg-blue">{{ Requisition::where('requisition_current_status_id', '=', 4)->count()+Requisition::where('requisition_current_status_id', '=', 5)->count()}}</small></span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{URL::to('recruiter-requisition-post')}}">
						<i class="fa fa-fw fa-edit"></i> 
						Post Job 
						<!--number of post job-->
						<small class="badge pull-right bg-yellow">{{ $a[0]=Requisition::where('requisition_current_status_id', '=', 4)->count()}}</small>
					</a>
				</li>
				<li>
					<a href="{{URL::to('recruiter-shortlist-candidate')}}">
						<i class="ion ion-person-add"></i> Send Shortlist 
						<small class="badge pull-right bg-red"> {{$a[1]=Requisition::where('requisition_current_status_id', '=', 5)->count()}}</small>
					</a>
				</li>
				<li>
					<a href="{{URL::to('recruiter-shortlist-candidate-sent')}}"><i class="fa fa-fw fa-check-square-o"></i> Shortlist sent</a>
				</li>
				<li>
					<a href="{{ URL::to('inline') }}"><i class="fa fa-fw fa-book"></i> Closed Job</a>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#"> <i class="fa fa-fw fa-user"></i> <span>Candidate       <small class="badge bg-aqua">5</small></span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{URL::to('recruiter-interview-confirm')}}"><i class="fa fa-fw fa-phone"></i> Interview Confirm</a>
				</li>

				<li>
					<a href="{{URL::to('recruiter-interview-feedback')}}"><i class="fa fa-fw fa-comments-o"></i> Interview Feedback</a>
				</li>

				<li>
					<a href="{{URL::to('recruiter-prepare-package')}}"><i class="fa fa-fw fa-inbox"></i> Prepare Package</a>
				</li>

				<li>
					<a href="{{URL::to('recruiter-offer-package')}}"><i class="fa fa-fw fa-dollar"></i> Offer</a>
				</li>

				<li>
					<a href="{{ URL::to('icons') }}"><i class="fa fa-fw fa-book"></i> Closed Candidate</a>
				</li>

			</ul>
		</li>
		<li>
			
			<a href="{{ URL::to('widgets') }}"> <i class="fa fa-fw fa-search"></i><span>  Search Candidate</span> </a>
		
		</li>
		<li> 
		
			<a href="{{ URL::to('widgets') }}"> <i class="fa fa-fw fa-save"></i><span>  Saved Candidate</span>  </a>
		
		</li>
		
	</ul>
</section>