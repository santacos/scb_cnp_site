@extends('admin.layouts.default')
@section('title')
thisIsTitle
@stop

@section('libs')
    <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
@stop

@section('content')
         <!--row two for TO DO REQUISITION-->
          {{ HTML::style('css/jquery.dataTables.css')}}
        {{ HTML::script('js/jquery.dataTables.js')}}
        <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"> All Requisiton..</h3>
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
                                        
                                       {{ Datatable::table()
    ->addColumn( 'Requisition ID',
                'Job Title',
                'Corporate Title',
               'Location',
               'Status',
               'Detail',
               'SLA',
               'Date Order',
               'Deadline',
               'Note',
               'Progress'
                )    
    ->setUrl(route('api.requisition'))  
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


                  

@stop


