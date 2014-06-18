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
         <!--row two for TO DO REQUISITION-->
         
        <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"> All Candidate..</h3>
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
                                        ->addColumn( 
                                'application_id', 
                                'Name',
                                '%Related',
                                'Point',
                                'Application Status',
                                'Education',
                                'Previous Job',
                                'SLA',
                                'Deadline',
                                'Saved',
                                'Choose',
                                'Note',
                                'Action'
                                          )    
                                          ->setUrl(URL::to('api/application/'.$requisition_id .'/1' .'/1'))
                              ->render('datatable') }}
                                       <!--  <table border="1">
                                          <tr>
                                            @if(count($applications->first()) > 0)
                                              @foreach($applications->first()->toArray() as $key => $value)
                                                <th>{{ $key }}</th>
                                              @endforeach
                                            @endif
                                          </tr>
                                          @if(count($applications->first()) > 0)
                                            @foreach($applications as $application)
                                              <tr>
                                                @foreach($application->toArray() as $key => $value)
                                                  <td>
                                                  <?php
                                                  // if($key != "is_in_basket"){
                                                  //   echo $value;
                                                  // }else{
                                                  //   echo '<center>'
                                                  //   .'<iframe width="30px" height="20px" scrolling="no" frameBorder="0" name="ckbox_f'.$application->application_id.'" id="ckbox_f'.$application->application_id.'">'
                                                  //   .'</iframe>'
                                                  //   .'</center>'
                                                  //   .'<form action="../recruiter-shortlist-candidate-ckbox" id="ckbox'.$application->application_id.'" target="ckbox_f'.$application->application_id.'" method="GET">'
                                                  //   .'<input type="hidden" name="id" value="'.$application->application_id.'"/>'
                                                  //   .'</form>'
                                                  //   .'<script>'
                                                  //   .'document.getElementById("ckbox'.$application->application_id.'").submit();'
                                                  //   .'</script>';
                                                  //}
                                                  ?>
                                                  </td>
                                                @endforeach
                                              </tr>
                                            @endforeach
                                          @endif
                                        </table> -->

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
