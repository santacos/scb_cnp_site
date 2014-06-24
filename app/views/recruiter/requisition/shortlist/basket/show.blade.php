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
                 <?php
          $display = array(

    'Requisition ID' => $requisition->requisition_id ,
    ''=>'',
    'Job title' => Position::find($requisition->position_id)->job_title,
    'Organization' => Position::find($requisition->position_id)->organization,
    'Division' => Position::find($requisition->position_id)->division,
    'Group' => Position::find($requisition->position_id)->group,
    'Corporate title' => CorporateTitle::find($requisition->corporate_title_id)->name ,
    'Recruitment type' => RecruitmentType::find($requisition->recruitment_type_id)->name ,
    'Created At' => $requisition->created_at ,
    'Updated At' => $requisition->updated_at
          );
        ?>
         
        <div class="box box-warning">
          <div class="box-header">
              <div class="box-title" style="font-size:2.5em;">
                Basket <i class="fa fa-fw fa-shopping-cart"></i><br>
              </div>
              <hr>
              <hr>
              <!-- <div class="box-tools pull-right">
                  <button class="btn btn-primary btn-xs" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                  </button>
                  <button class="btn btn-primary btn-xs" data-widget="remove">
                      <i class="fa fa-times"></i>
                  </button>
              </div> -->
          </div>

          <div class="box-body">

            <!--box for requisition detail-->
            <div class="box box-solid box-warning">
              <div class="box-header">
                <h3 class="box-title">Requisition detail</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-warning btn-sm" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <!-- <button class="btn btn-warning btn-sm" data-widget="remove">
                    <i class="fa fa-times"></i>
                  </button> -->
                </div>
              </div>
              <div class="box-body">
                <center>
                  <table class="table table-hover" >
                    <tbody>
                    <?php $i=0; $col=2?>
                    @foreach($display as $key => $value)
                      <?php echo (($i%$col==0)?'<tr>':'');?>

                      <td width="15%">
                        <strong>{{ $key }} {{ $key=='' ? '':':'}} </strong>
                      </td>
                      <td width="35%">
                        <span>{{ $value }}</span>
                      </td>

                      <?php echo (($i%$col==$col-1)?'</tr>':'');?>
                      <?php $i++; ?>
                    @endforeach
                    </tbody>
                  </table>
                </center>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <div class="container">
                  <div class="row">
                    <div class="col col-md-1 pull-right">
                      <a href="{{URL::to('recruiter-shortlist-candidate/'.$requisition->requisition_id)}}" class="btn btn-danger">
                        Select more
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!--box for showing number blabblabl-->
            <div class="box box-warning">
              <div class="box-header">
                <h3 class="box-title">Statistics</h3>
                
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col col-md-3">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <table id="example2" class="table table-hover table-striped">
                            <!-- <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead> -->
                            <tbody>
                              <tr>
                                  <td><strong>Total got number</strong></td>
                                  <td>1</td>
                              </tr>
                              <tr>
                                  <td><strong class="text-yellow">Required number</strong></td>
                                  <td class="text-yellow">3</td>
                              </tr>
                              <tr>
                                  <td><strong>Sent Number</strong></td>
                                  <td>5</td>
                              </tr>
                              <tr>
                                  <td><strong class="text-yellow">number of Application</strong></td>
                                  <td class="text-yellow">60</td>
                              </tr>
                                
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </tfoot> -->
                        </table>
                      </div>
                    </div>
                    
                  </div><!--end col-3-->
                  <div class="col col-md-8" style="margin-left:10px;">
                      <div class="row">
                        <div class="col col-md-12">
                          <table class="table table-hover table-striped table-bordered text-center">
                              <thead>
                                  <tr >
                                    <th style="width:40%;" ><strong>Sent number</strong></th>
                                    <th style="width:60%;"><strong>Interviewed</strong></th>
                                  </tr>
                              </thead>
                              <tbody>
                                
                                <tr>
                                    <td style="width:40%;">5</td>
                                    <td style="width:60%;">3</td>
                                </tr>
  
                              </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col col-md-4"></div>
                        <div class="col col-md-8" >
                          <table class="table table-hover table-bordered text-center" style="margin-left:3em;width:92%;">
                              <thead>
                                  <!-- <tr class="warning">
                                    <th colspan="3"><strong>Interviewed(3)</strong></th>
                                  </tr> -->
                                  <tr>
                                    <th style="width:33%;" class="danger">Fail</th>
                                    <th style="width:33%;" class="warning">Pending</th>
                                    <th style="width:33%;" class="success">Pass</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>-</td>
                                    <td>1</td>
                                </tr>
                              </tbody>
                          </table>
                        </div>
                      </div>

                      
                  </div>
                </div>

              </div><!-- /.box-body -->
            </div>

            <!-- first data table for requisition-->
            <div class="box box-solid box-primary" style="margin-top:2.5em;">
              <!-- /.box-header -->
              <!--  <p><span>In Cart : </span><span>{{ $in_basket }}</span></p>
              <p><span>Required : </span><span>{{   $require-$num_get }}</span></p>  
              <p><span>Sent : </span><span>{{ 'X' }}</span></p>
              <p><span>Interviewed : </span><span>{{ 'X' }}</span></p>
              <p><span>Pending : </span><span>{{ 'X' }}</span></p>
              <p><span>Passed : </span><span>{{ $num_get  }}</span></p>
              <p><span>Failed : </span><span>{{ 'X' }}</span></p>-->
              <!--table style "table-striped"-->
              <div class="box-body table-responsive no-padding">
                  
                <div style="overflow: auto;">
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
                    'Choose',
                    'Note',
                    'Action'
                                )    
                    ->setUrl(URL::to('api/application/'.$requisition_id .'/1a' .'/1' ))
                    ->render('datatable') }}
                </div>
              
                

              </div><!-- /.box-body -->
            </div><!-- /.box -->



          </div><!-- /.box-body -->
         
        </div>
        <div class="well">
          <div class="row">
            <div class="col col-md-5 col-md-offset-3">
              {{ Form::open(array('route' => array('recruiter-shortlist-log.store'), 'method' => 'POST')) }}
                  <div class="form-group" style="font-size:1.2em;font-weight:bold;">
                    {{ Form::hidden('id', $requisition->requisition_id) }}
                    {{ Form::label('note', 'Note :') }}
                    {{ Form::textarea('note', '', array( 'size' => '50x5')) }}
                  </div>
            </div>
            <div class="col col-md-8" style="">
            
              
            </div>
          </div>
          <div class="row">
            
            <div class="col col-md-2 col-md-offset-3" style="width:100%;">
                {{ Form::button('Send Shortlist', array('type' => 'submit', 'class' => 'btn btn-warning btn-lg pull-left','style'=>'width:33%;margin-left:2.5em;')) }}
                {{ Form::close() }}
            </div>
          </div>
        </div>

@stop
