<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="{{asset('assets/img/avatar3.png')}}" class="img-circle" alt="User Image" />
		</div>
		<div class="pull-left info">
			<p>
				Hello, Hiring manager
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
			<a href="{{ URL::to('hm') }}"> <i class="fa fa-dashboard"></i> <span>Home</span> </a>
		</li>


		<li>
			<a href="{{ URL::to('widgets') }}"> <i class="fa fa-th"></i> <span>Analytics</span> <small class="badge pull-right bg-green">new</small> </a>
		</li>


		<li class="treeview">
			<a href="{{ URL::to('hm-requisition') }}"> <i class="fa fa-fw fa-inbox"></i> <span>Requisition  <small class="badge bg-blue">{{Requisition::where('requisition_current_status_id', '=', 1)->count()+Requisition::where('requisition_current_status_id', '=', 2)->count()}}</small></span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{ URL::to('hm-requisition/create') }}"><i class="fa fa-fw fa-edit"></i> Create position <small class="badge pull-right bg-yellow"></small></a>
				</li>
				<li>
					<a href="{{ URL::to('hm/saved') }}"><i class="fa fa-fw fa-edit"></i> Saved position <small class="badge pull-right bg-yellow">{{Requisition::where('requisition_current_status_id', '=', 1)->count()}}</small></a>
				</li>
				<li>
					<a href="{{ URL::to('hm-nl-requisition') }}"><i class="fa fa-fw fa-check-square-o"></i> Approve <small class="badge pull-right bg-red">{{Requisition::where('requisition_current_status_id', '=', 2)->count()}}</small></a>
				</li>
				<li>
					<a href="{{ URL::to('hm/approved') }}"><i class="fa fa-fw fa-book"></i> Approved</a>
				</li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#"> <i class="fa fa-fw fa-user"></i> <span>Candidate  <small class="badge bg-aqua">{{Application::where('application_current_status_id', '=', 4)->count()+Requisition::where('requisition_current_status_id', '=', 6)->count()}}</small></span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{ URL::to('hm-application-review') }}"><i class="fa fa-fw fa-clipboard"></i> Review resume <small class="badge bg-blue">{{Requisition::where('requisition_current_status_id', '=', 6)->count()}}</small></a>
				</li>
				<li>
					<a href="{{ URL::to('icons') }}"><i class="fa fa-fw fa-comments-o"></i> interview<small class="badge bg-green">{{Application::where('application_current_status_id', '=', 4)->count()}}</small></a>
				</li>
				
			</ul>
		</li>
		
	</ul>
</section>