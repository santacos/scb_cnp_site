@extends('admin.layouts.main.recruiter')
@section('title')
thisIsTitle
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
      {{ HTML::style('assets/css/bootstrap.css') }}
        @include('includes.datatable')
@stop

@section('content')
       
        <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title" style="font-size:2.5em;"> Sign <i class="fa fa-fw fa-edit"></i></h3>
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

                            @if(isset($success))
                            <div class="alert alert-{{ $success?'success':'danger' }} alert-bold-border fade in alert-dismissable" style="margin-left:0px;display:none;">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                        <h5><i class="fa fa-fw fa-smile-o"></i><strong>{{ $message }}</strong></h5>
                                        <p class="text-muted"></p>
                            </div>
                            <script>
                                    $( document ).ready(function() {
                                      $(".alert").animate({opacity:'0'},0);
                                      $(".alert").animate({height:'hide'},1);
                                      $(".alert").animate({opacity:'1'},1500);
                                      $(".alert").animate({height:'show'},500);
                                    });
                            </script>
                            @endif
                            
                           <!-- first data table for requisition-->
                           <div class="box box-solid box-primary">
                                <!-- /.box-header -->
                                    
                                    <!--table style "table-striped"-->
                                    <div class="box-body table-responsive no-padding">
                               
                                       <div style="overflow: auto;">

                                       
                                        {{  Datatable::table()
                                            ->addColumn( 'Requisition ID',
                                                        'Job Title',
                                                        'Corporate Title',
                                                       'Location',
                                                       'Requisition Status',
                                                       'Require',
                                                       'SLA',
                                                       'Deadline',
                                                       'From',
                                                       'Note',
                                                       'Action'
                                                        )    
                                            ->setUrl(URL::to('api/requisition/'.'3/8/'.'6'))
                                            ->render('datatable') }}
                                      </div>


    
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


                  

@stop


