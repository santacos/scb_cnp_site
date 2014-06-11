@extends('admin.layouts.main.hm')

@section('title')
home-hiringManager
@stop


@section('content')
<!--welcome box-->
        <div class="alert alert-info alert-bold-border fade in alert-dismissable" style="margin-left:0px;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h3><i class="fa fa-fw fa-smile-o"></i><strong>Welcome to SCB recruitment system!</strong></h3>
            <p class="text-muted"></p>
        </div>

        
          
            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to save changes you made to document before closing?</p>
                            <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end Modal HTML-->



        <!--recruiter tool-->
        @include('admin.partials.hm.statBox')


        <!--box morris test-->

        <!--end box morris test-->

        <!--row two for TO DO REQUISITION-->

        <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title">  To do..</h3>
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
   <!-- first data table for requisition-->
                           <div class="box box-solid box-primary">
                                <!-- /.box-header -->
                                    
                                    <!--table style "table-striped"-->
                                    <div class="box-body table-responsive no-padding">
                               
                                       {{  Datatable::table()
    ->addColumn( 'Requisition ID',
                'Job Title',
                'Corporate Title',
               'Location',
               'Status',
               'Require',
               'SLA',
               'Deadline',
               'From',
               'Note',
               'Action'
                )    
    ->setUrl(URL::to('api/requisition/'.'1/'.'1/2/6'))
    ->render('datatable') }}


    
                                    </div><!-- /.box-body -->
                        </div><!-- /.box -->



                    </div><!-- /.box-body -->
                        <!--
                        <div class="box-footer">
                            <br>
                        </div>
                        -->
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
                                    <div id="calendar"></div>
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