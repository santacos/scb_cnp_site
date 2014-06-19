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
       <!--   row two for TO DO REQUISITION
         <table cellpadding="3" cellspacing="0" border="0" style="width: 67%; margin: 0 auto 2em auto;">
        <thead>
            <tr>
                <th>Target</th>
                <th>Filter text</th>
                <th>Treat as regex</th>
                <th>Use smart filter</th>
            </tr>
        </thead>
 
        <tbody>
            <tr id="filter_global">
                <td>Global filtering</td>
                <td align="center"><input type="text" class="global_filter" id="global_filter"></td>
            </tr>
            <tr id="filter_col1" data-column="0">
                <td>Requisition ID</td>
                <td align="center"><input type="text" class="column_filter" id="col0_filter"></td>
            </tr>
            <tr id="filter_col2" data-column="1">
                <td>Job Title</td>
                <td align="center"><input type="text" class="column_filter" id="col1_filter"></td>
            </tr>
            <tr id="filter_col3" data-column="2">
                <td>Corporate Title</td>
                <td align="center"><input type="text" class="column_filter" id="col2_filter"></td>
            </tr>
            <tr id="filter_col4" data-column="3">
                <td>Location</td>
                <td align="center"><input type="text" class="column_filter" id="col3_filter"></td>
            </tr>
            <tr id="filter_col5" data-column="4">
                <td>Status</td>
                <td align="center"><input type="text" class="column_filter" id="col4_filter"></td>
            </tr>
            <tr id="filter_col6" data-column="5">
                <td>Date Order</td>
                <td align="center"><input type="text" class="column_filter" id="col5_filter"></td>
            </tr>
        </tbody>
    </table> -->
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
                                            ->setUrl(URL::to('api/requisition/'.'3/3/'.'6'))
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


