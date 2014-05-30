@extends('admin.layouts.default')

@section('title')
thisIsTitle
@stop

@section('libs')
   <link rel="stylesheet" href="<?php echo asset('css/coshome.css')?>">
@stop

@section('content')
        <!--welcome box-->
        <div class="alert alert-info alert-bold-border fade in alert-dismissable" style="margin-left:0px;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h3><i class="fa fa-fw fa-smile-o"></i><strong>Welcome to SCB recruitment system!</strong></h3>
            <p class="text-muted"></p>
        </div>

        <!--end welcome box-->

        <!--recruiter tool-->
        @include('admin.partials.recruiter.statBox')

        <!--row two for TO DO REQUISITION-->
        <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">To do..</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-primary btn-xs" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button class="btn btn-primary btn-xs" data-widget="remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
                   <div class="box-body">
                       <div class="box box-solid box-primary">
                   <div class="box-header">
                       <h1 class="box-title">Requisition</h1>
                       <div class="box-tools">
                           <div class="input-group">
                               <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <!--table style "table-striped"-->
                                <div class="box-body table-responsive no-padding">
                                    <br>
                                    <!--start table-->
                                    <table class="table-fill">
                                        <thead>
                                            <tr>
                                            <th class="text-left">Month</th>
                                            <th class="text-left">Sales</th>
                                            <th class="text-left">Month</th>
                                            <th class="text-left">Sales</th>
                                            <th class="text-left">Sales</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-hover">
                                        <tr>
                                        <td class="text-left">January</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        <td class="text-left">January</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        </tr>
                                        <tr>
                                        <td class="text-left">February</td>
                                        <td class="text-left">$ 10,000.00</td>
                                        <td class="text-left">January</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        </tr>
                                        <tr>
                                        <td class="text-left">March</td>
                                        <td class="text-left">$ 85,000.00</td>
                                        <td class="text-left">January</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        </tr>
                                        <tr>
                                        <td class="text-left">April</td>
                                        <td class="text-left">$ 56,000.00</td>
                                        <td class="text-left">January</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        </tr>
                                        <tr>
                                        <td class="text-left">May</td>
                                        <td class="text-left">$ 98,000.00</td>
                                        <td class="text-left">January</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        <td class="text-left">$ 50,000.00</td>
                                        </tr>
                                        </tbody>
                                        </table>
                                    <!--end table-->
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                        </div>
                    </div><!-- /.box -->
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <br>
                        </div><!-- /.box-footer-->
                    </div>
                    <!--end TO DO REQUISITION-->


                    <!-- row for calendar and event-->
                    <div class="row">
                        <div class="col-md-7">


                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="fa fa-calendar"></i>
                                    <div class="box-title">
                                        Calendar
                                    </div>

                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="#">Add new event</a>
                                                </li>
                                                <li>
                                                    <a href="#">Clear events</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">View calendar</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <!--The calendar -->
                              
                                    <div class="contain-clock">
                                        <div class="face-1 abs">
                                            <div class="hour lines"></div>
                                            <div class="minute lines"></div>
                                            <div class="second lines"></div>
                                            <div class="center abs"></div>
                                        </div>
                                        <div class="face-2">
                                        </div>
                                    </div><!--end contain clock-->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->            
                                    
                            
                        </div>
                        <!--end calendar-->


                        <!--start HOT EVENT-->
                        <div class="col-md-5">
                            <div class="box box-primary">
                                    <div class="box-header" data-toggle="tooltip" title="" data-original-title="see what have to do">
                                        <h1 class="box-title">MY personal reminder</h1>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-primary btn-xs" data-widget="collapse">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <button class="btn btn-primary btn-xs" data-widget="remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </div>


                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <a href="#" class="small-box bg-maroon">
                                                <div class="inner">
                                                    <h3> Total<br>123</h3>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion ion-stats-bars"></i>
                                                </div>
                                                <div class="small-box-footer"> 
                                                    More info <i class="fa fa-arrow-circle-right"></i>
                                                </div>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <!--post job-->
                                                <a href="#" class="small-box bg-purple">
                                                    <div class="inner">
                                                        <h3> Post Job <br><i class="fa fa-fw fa-edit" style="color:#48036F;"></i> </h3>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion" style="color:white;">23</i>
                                                    </div>
                                                    <div class="small-box-footer"> More info <i class="fa fa-arrow-circle-right"></i> </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-6">

                                                <a href="#" class="small-box bg-blue">
                                                    <div class="inner">
                                                        <h3> Send Shortlist<br><i class="ion ion-stats-bars"></i></h3>

                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-stats-bars"></i>
                                                    </div>
                                                    <div class="small-box-footer"> More info <i class="fa fa-arrow-circle-right"></i> </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <!--Shortlist sent-->
                                                <a href="#" class="small-box bg-light-blue">
                                                    <div class="inner">
                                                        <h3> Shortlist sent<br><i class="ion ion-stats-bars"></i> </h3>
                                                
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-person-add"></i>
                                                    </div>
                                                    <div class="small-box-footer"> More info <i class="fa fa-arrow-circle-right"></i> </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-6">
                                                <!--Shortlist sent-->
                                                <a href="#" class="small-box bg-light-blue">
                                                    <div class="inner">
                                                        <h3> Shortlist sent<br><i class="ion ion-stats-bars"></i> </h3>
                                                
                                                    </div>
                                                    <div class="icon">
                                                        <i class="ion ion-person-add"></i>
                                                    </div>
                                                    <div class="small-box-footer"> More info <i class="fa fa-arrow-circle-right"></i> </div>
                                                </a>
                                            </div>
                                        </div><!-- end row-->
            
                                    </div>
                                    <div class="box-footer" style="display: block;">
                                    
                                    </div>
                                
                            </div>
                        </div>

                    </div>

                    <!--end HOT EVENT-->


    

						




@stop