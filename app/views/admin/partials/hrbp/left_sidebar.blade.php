<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="{{asset('assets/img/avatar3.png')}}" class="img-circle" alt="User Image" />
		</div>
		<div class="pull-left info">
			<p>
				Hello, HRBP
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
			<a href="{{ URL::to('hrbp-manager') }}"> <i class="fa fa-fw fa-home"></i> <span>Home</span> </a>
		</li>


		<li>
			<a href="{{ URL::to('widgets') }}"> <i class="fa fa-fw fa-bar-chart-o"></i> <span>Analytics</span> <small class="badge pull-right bg-green">new</small> </a>
		</li>


		<li class="treeview">
			<a href="#"> <i class="fa fa-fw fa-inbox"></i> <span>Requisition      <small class="badge bg-blue">{{$a[1]=Requisition::where('requisition_current_status_id', '=', 3)->count()}}</small></span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{ URL::to('hrbp-manager-requisition') }}">
						<i class="fa fa-fw fa-check-square-o"></i> 
						Approve 
						<!--number of post job-->
						<small class="badge pull-right bg-yellow">{{$a[1]}}</small>
					</a>
				</li>
				<li>
					<a href="{{ URL::to('morris') }}">
						<i class="fa fa-fw fa-book"></i> 
						Approved
						<!--number of post job-->
						<small class="badge pull-right bg-red">{{Requisition::where('requisition_current_status_id', '>', 3)->where('requisition_current_status_id', '<',7 )->count()}}</small>
					</a>
				</li>
	
			</ul>
		</li>
		<?php
			$a[6]=Requisition::whereHas('application', function($q) 
				{$q->whereApplicationCurrentStatusId(6);})
			->where('requisition_current_status_id','=',6)->count();
			?>
		<!--if HRBP Manager -->
		@if(true)
		<li class="treeview">
			<a href="#"> <i class="fa fa-fw fa-user"></i> <span>Offering      <small class="badge bg-aqua">{{$a[6]}}</small></span> <i class="fa fa-angle-left pull-right"></i> </a>
			<ul class="treeview-menu">
				<li>
					<a href="{{ URL::to('hrbp-manager-confirm-package') }}"><i class="fa fa-fw fa-thumbs-up"></i> Confirm salary offer
						 <small class="badge bg-aqua">{{$a[6]}}</small>
					</a>
				</li>

				<li>
					<a href="{{ URL::to('icons') }}"><i class="fa fa-fw fa-book"></i> Confirmed</a>
				</li>
			</ul>
		</li>
		@endif
		
		<!--end if HRBP manager-->
	</ul>
</section>