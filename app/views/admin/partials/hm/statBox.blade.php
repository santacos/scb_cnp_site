<!-- Small boxes (Stat box) -->
	<div class="row">

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('hm-requisition/create')}}"  class="small-box bg-aqua">
					<div class="inner">
					<h3> Create <br>Position <br> </h3>
				</div>

				<div class="icon">
					<i class="ion ion">
						<i class="fa fa-fw fa-edit"></i>
					</i>		
				</div>
				<div class="small-box-footer">
					{{ 'Create Now!!!' }}
					<!-- <span class="label label-info" style="border-radius:50%;font-size:1.1em;"> 23</span>  -->
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('hm-nl-requisition')}}" class="small-box bg-green">
				<div class="inner">
					<h3> Approve<br>.</h3>

				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<div class="small-box-footer">
					total job  <span class="label label-success" style="border-radius:50%;font-size:1.1em;"> {{Requisition::where('requisition_current_status_id', '=', 2)->count()}}</span> 
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('hm-application-review')}}" class="small-box bg-yellow">
				<div class="inner">
					<h3> Review <br> resume </h3>
			
				</div>
				<div class="icon">
					<i class="fa fa-fw fa-check-square-o"></i>
				</div>
				
				<div class="small-box-footer">
					total job  <span class="label label-warning" style="border-radius:50%;font-size:1.1em;">  {{Requisition::where('requisition_current_status_id', '=', 6)->count()}}</span> 
				</div>
			</a>
		</div><!-- ./col -->

		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<a href="{{URL::to('recruiter-interview-feedback')}}" class="small-box bg-red">
				<div class="inner">
					<h3> Interview<br>. </h3>
				</div>
				<div class="icon">
					<i class="fa fa-fw fa-group"></i>
				</div>
				<div class="small-box-footer">
					total job  <span class="label label-danger" style="border-radius:50%;font-size:1.1em;"> {{Application::where('application_current_status_id', '=', 4)->count()}}</span> 
				</div>	
			</a>
		</div><!-- ./col -->


	</div><!-- /.row -->
