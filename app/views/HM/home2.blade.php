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
    ->setUrl(URL::to('api/requisition/'.'1/'.'0/1/2/6'))
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


                  

                    <!--end HOT EVENT-->

@stop