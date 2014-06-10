@extends('admin.layouts.main.hm')
@section('title')
thisIsTitle
@stop

@section('libs')
    <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
@stop

@section('content')
	   <div class="container pull-left">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Approve Requisition
                        <small># {{$requisition->requisition_id}}</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{ URL::to('/hm')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="{{ URL::to('/hm-requisition')}}">Requisition</a></li>
                        <li><a href="{{ URL::to('/hm-nl-requisition')}}">Approve</a></li>
                        <li class="active">Requisition# {{$requisition->requisition_id}}</li>
                    </ol>
                </section>

            <!--     <div class="pad margin no-print">
                    <div class="alert alert-info" style="margin-bottom: 0!important;">
                        <i class="fa fa-info"></i>
                        <b>Requisition id:</b> {{$requisition->requisition_id}}
                    </div>
                </div> -->

                <!-- Main content -->
                <section class="content invoice">                    
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="page-header">
                                <i class="fa fa-globe" style="color:blue;"></i><b> Job title : </b> {{$requisition->position->job_title}}
                                <small class="pull-right"> Requisition# {{$requisition->requisition_id}}</small>
                            </h1>                            
                        </div><!-- /.col -->
                    </div>
                    <!-- info row -->

                    <!--short detail-->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            From
                            <address style="font-size:1.2em;">
                                <strong>{{$requisition->employee->first}}</strong> &nbsp; &nbsp; <strong>{{$requisition->employee->last}}</strong><br>
                                <!-- 795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (804) 123-5432<br/>
                                Email: info@almasaeedstudio.com -->
                                <strong>employee ID:</strong> &nbsp; &nbsp; {{$requisition->employee_user_id}}
                            </address>
                        </div><!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <!-- To
                            <address>
                                <strong>John Doe</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (555) 539-1037<br/>
                                Email: john.doe@example.com
                            </address> -->
                        </div><!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Requisition ID: {{$requisition->requisition_id}}</b><br/>
                            
                            <b>Datetime Create:</b> {{$requisition->datetime_create}}<br/>
                            <hr>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <!--end short detail-->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                        	<h6 class="page-header">
                                <b>Requisition detail : </b> 
                                
                            </h6> 
                            <table class="table table-striped text-left table-hover" style="font-size:1.2em;">
                               <thead>
                                    <tr>
                                        <th style="width:40%;"></th>
                                        <th style="width:60%;"></th>
                                        
                                    </tr>                                    
                                </thead>
                                <tbody>
                                    
                                    <tr> 
                                        <td><strong>Position :</strong></td>
                                        <td>{{$requisition->position->job_title}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Corporate Level :</strong></td>
                                        <td>{{$requisition->corporateTitle->name}}</td>
                                    </tr>
                                    <tr> 
                                        <td><strong>Employee (Hiring Manager) :</strong></td>
                                        <td>{{$requisition->employee->first}} &nbsp;&nbsp; {{$requisition->employee->last}}</td>
                                     
                                    </tr>
                                    <tr>
                                        <td><strong>Organization :</strong></td>
                                        <td><!--organization--></td>
                                    </tr>
                                    <tr> 
                                        <td><strong>Department :</strong></td>
                                        <td>{{$requisition->dept->name}}</td>
                                       
                                    </tr>
                                    <tr> 
                                        <td><strong>Recruitment Type :</strong></td>
                                        <td>{{$requisition->recruitmentType->name}}</td>
                                       
                                    </tr>
                                    <tr> 
                                        <td><strong>Location :</strong></td>
                                        <td>{{$requisition->location->name}}</td>
                                       
                                    </tr>
                                    <tr>
                                        <td><strong>Total Number :</strong></td>
                                        <td>{{ $requisition->total_number}}</td>

                                    </tr>
                                    <tr> 
                                        <td><strong>Get Number :</strong></td>
                                        <td>{{$requisition->get_number}}</td>
                                    </tr>
                                    <tr> 
                                        <td><strong>Recruitment Objective Template :</strong></td>
                                        <td>{{$requisition->objective->message}}</td>
                                    </tr>
                                    
                                    <tr> 
                                        <td><strong>Datetime Create :</strong></td>
                                        <td>{{$requisition->created_at}}</td>
                                    </tr>

                                </tbody>
                            </table>                            
                        </div><!-- /.col -->
                    </div><!-- /.row -->


                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                        	<h6 class="page-header">
                                <b>Detail : </b> 
                                
                            </h6> 
                            <table class="table table-striped text-left table-hover" style="font-size:1.2em;">
                               <thead>
                                    <tr>
                                        <th style="width:40%;"></th>
                                        <th style="width:60%;"></th>
                                        
                                    </tr>                                    
                                </thead>
                                <tbody>
                                    
                                    <tr> 
                                        <td><strong>Qualification :</strong></td>
                                        <td>{{$requisition->qualification}}</td>
                                        <!-- <td>amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel. berliner weisse wort chiller adjunct hydrometer alcohol aau! sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                        	amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel. berliner weisse wort chiller adjunct hydrometer alcohol aau! sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                        	amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel. berliner weisse wort chiller adjunct hydrometer alcohol aau! sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                        	amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel. berliner weisse wort chiller adjunct hydrometer alcohol aau! sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                        </td> -->
                                    </tr>
                                    <tr> 
                                        <td><strong>Responsibility :</strong></td>
                                        <td>{{$requisition->responsibility}}</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                   

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                            <p class="lead">Note from Employee (Hiring Manager):</p>
                           	<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                {{$requisition->note}}
                           	</p>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <p class="lead">Note :</p>
                            {{ Form::model($requisition, array('route' => array('hm-nl-requisition.update', $requisition->requisition_id), 'method' => 'PUT')) }}
						        <div class="form-group">
						        	<!-- {{ Form::textarea('note', '', array()) }} -->
						        	<textarea class="form-control" id="note" name="note" rows="5" style="font-size:1.2em;"></textarea>
						        </div>
						       
                           <!--  <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>$250.30</td>
                                    </tr>
                                    <tr>
                                        <th>Tax (9.3%)</th>
                                        <td>$10.34</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping:</th>
                                        <td>$5.80</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$265.24</td>
                                    </tr>
                                </table>
                            </div> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                    	<div class="col-xs-6">
                    		<button class="btn btn-default pull-left" style="width:8em;" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    	</div>
                        <div class="col-xs-6">
                        	 {{ Form::button('Decline', array('name' => 'approve', 'value' => false, 'type' => 'submit', 'class' => 'btn btn-danger btn-lg pull-right','style'=>'width:45%;' )) }}
						     {{ Form::button('Accept', array('name' => 'approve', 'value' => true, 'type' => 'submit', 'class' => 'btn btn-success btn-lg pull-left','style'=>'width:45%;')) }}

						    {{ Form::close() }}
                            
                         <!--   <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>  
                            <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                         --></div>
                    </div>
                </section><!-- /.content -->

            </div><!-- /.right-side -->
@stop