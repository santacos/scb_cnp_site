<!-- Small boxes (Stat box) -->

	<?php
			$a[6]=Requisition::whereHas('application', function($q) 
				{$q->whereApplicationCurrentStatusId(6);})
			->where('requisition_current_status_id','=',6)->count();
			$r[3]=Requisition::where('requisition_current_status_id', '=', 3)->count()
			?>
	<div class="row">

		<div class="col-lg-6 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('hrbp-manager-requisition')}}" class="small-box bg-aqua">
				<div class="inner">
					<h3> Approve <br><i class="fa fa-fw fa-check-square-o" style="color: #3C8CA7;"></i> </h3>
				</div>

				<div class="icon">
					<i class="ion ion" style="color:white;font-size:80%;">{{$r[3]}}</i>		
				</div>
				<div class="small-box-footer">
					total job  <span class="label label-info" style="border-radius:50%;font-size:1.1em;"> {{$r[3]}}</span> 
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-6 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('hrbp-manager-confirm-package')}}" class="small-box bg-green">
				<div class="inner">
					<h3> Confirm Salary Offer  <br><i class="fa fa-fw fa-thumbs-up" style="color: #056B33;"></i> </h3>
				</div>

				<div class="icon">
					<i class="ion ion" style="color:white;font-size:80%;">{{$a[6]}}</i>		
				</div>
				<div class="small-box-footer">
					total job  <span class="label label-success" style="border-radius:50%;font-size:1.1em;">{{$a[6]}}</span> 
				</div>
			</a>
		</div><!-- ./col -->

	</div><!-- /.row -->
		
		


