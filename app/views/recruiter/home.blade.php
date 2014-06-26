@extends('admin.layouts.main.recruiter')

@section('title')
home-recruiter
@stop

@section('libs')
@stop

@section('content')
<!--welcome box-->
        <div class="alert alert-info alert-bold-border fade in alert-dismissable" style="margin-left:0px;display:none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h3><i class="fa fa-fw fa-smile-o"></i><strong>Welcome to SCB recruitment system!</strong></h3>
            <p class="text-muted"></p>
        </div>

         <!--recruiter tool-->
        @include('admin.partials.recruiter.statBox')


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
                                            ->setUrl(URL::to('api/requisition/'.'3/'.'0/5'))
                                            ->render('datatable') }}


    
                                    </div><!-- /.box-body -->
                        </div><!-- /.box -->
             </div>
        </div>
        <!--end TO DO REQUISITION-->


                   

                    <!--end HOT EVENT-->
        <script>
        $( document ).ready(function() {
          $(".alert").animate({opacity:'0'},0);
          $(".alert").animate({height:'hide'},1);
          $(".box").animate({marginTop:'+=50px',opacity:'0'},0);
          $(".small-box").animate({height:'hide',marginTop:'+=50px',opacity:'0'},0);
          $(".panel").animate({marginTop:'+=50px',opacity:'0'},0);
          $(".box").animate({marginTop:'-=50px',opacity:'1'},2000);
          $(".small-box").animate({height:'show',marginTop:'-=50px',opacity:'1'},1000);
          $(".panel").animate({marginTop:'-=50px',opacity:'1'},2000);
          $(".alert").animate({opacity:'1'},4000);
          $(".alert").animate({height:'show'},500);
        });
        </script>
@stop