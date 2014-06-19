@extends('admin.layouts.default')
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
         <!--row two for TO DO REQUISITION-->
         
        <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"> Offer..</h3>
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

                                        <table border="1">
                                          <tr>
                                            @if(count($applications) > 0)
                                              @foreach($applications->first()->toArray() as $key => $value)
                                                <th>{{ $key }}</th>
                                              @endforeach
                                              <th>Action</th>
                                            @endif
                                          </tr>
                                          @if(count($applications) > 0)
                                            @foreach($applications as $application)
                                              <tr>
                                                @foreach($application->toArray() as $key => $value)
                                                  <td>
                                                    {{ $value }}
                                                  </td>
                                                @endforeach
                                                <td>
                                                <a href={{ $application->application_id . "/edit" }}>View(popup)</a>
                                                </td>
                                              </tr>
                                            @endforeach
                                          @endif
                                        </table>
                                        {{  Datatable::table()
                                        ->addColumn( 
                                            'Application ID', 
                                            'Name',
                                            '%Related',
                                            'Point',
                                            'Application Status',
                                            'Education',
                                            'Previous Job',
                                            'SLA',
                                            'Deadline',
                                            'Saved',
                                            'Note',
                                            'Action'
                                                      )    
                                          ->setUrl(URL::to('api/application/'.$requisition_id .'/0' .'/7'))
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
