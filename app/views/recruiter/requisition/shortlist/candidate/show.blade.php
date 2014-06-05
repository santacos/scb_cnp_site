@extends('admin.layouts.default')
@section('title')
thisIsTitle
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
      {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::script('js/jquery.dataTables.js')}}
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

                                        <table border="1">
                                          <tr>
                                            @foreach($applications->first()->toArray() as $key => $value)
                                              <th>{{ $key }}</th>
                                            @endforeach
                                          </tr>
                                          @foreach($applications as $application)
                                            <tr>
                                              @foreach($application->toArray() as $key => $value)
                                                <td>
                                                <?php
                                                if($key != "is_in_basket"){
                                                  echo $value;
                                                }else{
                                                  echo '<center><iframe src="../recruiter-shortlist-candidate-ckbox" width="300px" height="300px" scrolling="no" frameBorder="0" name="ckbox_f'.$application->application_id.'"></iframe></center>'
                                                  .'<form id="ckbox'.$application->application_id.'" target="ckbox_f'.$application->application_id.'" method="POST"><input type="hidden" name="id" value="'.$application->application_id.'"/></form>'
                                                  .'<script>document.getElementById("ckbox'.$application->application_id.'").action = document.windows["ckbox_f'.$application->application_id.'"].src;'
                                                  .'document.forms["ckbox'.$application->application_id.'"].submit();</script>';
                                                }
                                                ?>
                                                </td>
                                              @endforeach
                                            </tr>
                                          @endforeach
                                        </table>

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
