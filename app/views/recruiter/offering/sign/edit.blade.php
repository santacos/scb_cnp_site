@extends('admin.layouts.main.recruiter')
@section('title')
thisIsTitle
@stop

@section('libs')
    <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
@stop

@section('content')
    <!--front zone-->
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title" style="font-size:2.5em;">Sign contract<i class="fa fa-fw fa-edit"></i></h3>
          <hr><hr>
        </div>
        <div class="box-body">
          <div class="panel panel-success">
            <div class="panel-heading bg-green">
              <h3 class="panel-title " style="font-size:1.2em;">
                  <i class="fa fa-fw fa-info-circle"></i><strong>Information</strong>
              </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                      <div class="col col-md-6">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <strong style="font-size:1.2em;">Candidate detail</strong>
                          </div>
                          <div class="panel-body">
                            
                              <?php
                                  $age = '';
                                  $candidate = $application->candidate;
                                  if($candidate->birth_date!='' && $candidate->birth_date!=0){
                                    $age = Carbon::createFromFormat('Y-m-d',$candidate->birth_date)->diffInYears();
                                  }
                                    $display = array(
                              'Application ID' => $application->application_id ,
                              ''=>'',
                              'Candidate name' => $application->candidate->user->first . " " . $application->candidate->user->last,
                              'Tel' => $application->candidate->user->contact_number,
                              'Address'=> $application->candidate->current_living_location,
                              'Age'=> $age,
                              'Current Salary' => $application->current_salary ,
                              'Expected Salary' => $application->expected_salary ,
                              'Position Salary' => $application->position_salary ,
                              'Cola' => $application->cola ,
                              'Final Salary' => $application->final_salary 
                                    );
                                  ?>
                                  <center>

                                    <table style="font-size:1.1em;width:90%;">
                                      <?php $i=0; $col=2?>
                                      @foreach($display as $key => $value)
                                        <tr>
                                        <td style="width:30%"><span><strong>{{ $key }} {{ $key=='' ? '':':'}} </strong></span></td>
                                        <td style="width:70%"><span>{{ $value }}</span></td>
                                       </tr>
                                        <?php $i++; ?>
                                      @endforeach
                                    </table>

                         <!--            <hr> -->
                                    <br>
                                    <hr>
                                    <div class="row">
                                      <div class="col col-md-12">
                                        <div class="col col-md-3"></div>
                                        <div class="col col-md-6">
                                          <a href="javascript:window.open('{{ URL::to('candidate/'.$application->candidate->user_id) }}','Calendar','width=1500,height=1200,menubar=no,location=no,resizable=yes,scrollbars=yes,status=no,personalbar=no,titlebar=no')" class="btn btn-default btn-lg" style="width:100%;"> View detail</a>
                                          
                                        </div>
                                      </div>

                                    </div>
                          </div>
                        </div>
                      </div>
                      <div class="col col-md-6">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <strong style="font-size:1.2em;">Requisition detail</strong>
                          </div>
                          <div class="panel-body">
                            <?php
                              $display = array(
                        'Position' => $requisition->position->job_title . ' (#'.$requisition->position_id.')' ,
                        ''=>'',
                        'Group' => $requisition->dept->name . ' (#'.$requisition->dept_id.')' ,
                        ' '=>' ',
                        'Requisition ID' => $requisition->requisition_id ,
                        'Job Title' => $requisition->job_title ,
                        'Hiring Manager' => $requisition->employee->first . ' ' . $requisition->employee->last . ' (#'.$requisition->employee_user_id.')' ,
                        'Location' => $requisition->location->name . ' (#'.$requisition->location_id.')' ,
                        
                        
                        'Corporate Title' => $requisition->corporateTitle->name . ' (#'.$requisition->corporate_title_id.')' ,
                        ''=>'',
                        'Recruitment Type' => $requisition->recruitmentType->name . ' (#'.$requisition->recruitment_type_id.')' ,
                        'Year Of Experience' => $requisition->year_of_experience . ' Year(s)' ,
                              );
                            ?>
                            <center>
                              <table style="font-size:1.1em;margin-left:1em;">
                                <?php $i=0; $col=2?>
                                @foreach($display as $key => $value)
                                  <tr>
                                  <td class="text-left" style="width:30%;"><span><strong>{{ $key }} {{ ($key=='')||($key==' ') ? '':':'}}</strong></span></td>
                                  <td style="width:70%;"><span>  {{ $value }}</span></td>
                                  </tr>
                                  <?php $i++; ?>
                                @endforeach
                              </table>
                              <br>
                            </center>
                            <hr>
                            
                              <div class="row">
                                <div class="col col-md-12">
                                  <div class="col col-md-3"></div>
                                  <div class="col col-md-6">
                                    <a href="javascript:window.open('{{ URL::to('recruiter-shortlist/'.$requisition->requisition_id) }}','Calendar','width=1500,height=1250,menubar=no,location=no,resizable=yes,scrollbars=yes,status=no,personalbar=no,titlebar=no')" class="btn btn-default btn-lg" style="width:100%;"> View detail</a>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
          </div>
         
        </div><!-- /.box-body -->
      </div>

      {{ Form::model($application, array('route' => array('recruiter-sign.update', $application->application_id), 'method' => 'PUT')) }}

      <div class="well" style="">
        <div class="row">
          <div class="col col-md-3"></div>
          <div class="col col-md-4" style="margin-left:25px;">
            <div class="form-group" style="font-size:1.2em;font-weight:bold;">
              {{ Form::label('note', 'Note :', array( 'style' => 'font-size:1.6em;')) }}
              {{ Form::textarea('note', '', array( 'size' => '53x5','style'=>'')) }}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col col-md-3"></div>
          <div class="col col-md-5" style="margin-left:20px;">
            <div class="row">
              <div class="col col-md-6">
                {{ Form::button('Accept', array('name' => 'approve', 'value' => true, 'type' => 'submit','class'=>'btn btn-success btn-lg','style'=>'width:85%')) }}
              </div>
              <div class="col col-md-6">
                {{ Form::button('Decline', array('name' => 'approve', 'value' => false, 'type' => 'submit','class'=>'btn btn-danger btn-lg','style'=>'width:85%')) }}
              </div>
                {{ Form::close() }}
            </div>
            
          </div>
        </div>
      </div>
    <!--end front zone-->

  <!--   <?php
      $display = array(
'Requisition ID' => $requisition->requisition_id ,
'Job Title' => $requisition->job_title ,
'Total Number' => $requisition->total_number ,
'Get Number' => $requisition->get_number ,
'Employee (Hiring Manager)' => $requisition->employee->first . ' ' . $requisition->employee->last . ' (#'.$requisition->employee_user_id.')' ,
'Datetime Create' => $requisition->datetime_create ,
'Datetime Previous Status' => $requisition->datetime_prev_status ,
'Location' => $requisition->location->name . ' (#'.$requisition->location_id.')' ,
'Corporate Title' => $requisition->corporateTitle->name . ' (#'.$requisition->corporate_title_id.')' ,
'Position' => $requisition->position->job_title . ' (#'.$requisition->position_id.')' ,
'Dept ID' => $requisition->dept->name . ' (#'.$requisition->dept_id.')' ,
'Requisition Current Status' => $requisition->requisitionCurrentStatus->name . ' (#'.$requisition->requisition_current_status_id.')' ,
'Recruitment Type' => $requisition->recruitmentType->name . ' (#'.$requisition->recruitment_type_id.')' ,
'Year Of Experience' => $requisition->year_of_experience . ' Year(s)' ,
'Recruitment Objective Template' => $requisition->objective->message . ' (#'.$requisition->recruitment_obj_template_id.')' ,
'Recruitment Objective' => $requisition->recruitment_objective ,
'Responsibility' => $requisition->responsibility ,
'Qualification' => $requisition->qualification ,
'Note' => $requisition->note ,
'Created At' => $requisition->created_at ,
'Updated At' => $requisition->updated_at
      );
    ?>
    <center>
      <table>
        <?php $i=0; $col=2?>
        @foreach($display as $key => $value)
          <?php echo (($i%$col==0)?'<tr>':'');?>
          <td><span style="color:brown; font-size:20px; font-weight:bold; padding:15px;">{{ $key }} : </span>
          <span style="color:orange; font-size:20px;">{{ $value }}</span></td>
          <?php echo (($i%$col==$col-1)?'</tr>':'');?>
          <?php $i++; ?>
        @endforeach
      </table>

      <hr>

    <?php
      $display = array(
'Application ID' => $application->application_id ,
'Requisition ID' => $application->requisition_id ,
'Candidate User ID' => $application->candidate_user_id ,
'Application Current Status ID' => $application->application_current_status_id ,
'Is In Basket' => $application->is_in_basket ,
'Question Point' => $application->question_point ,
'Send Number' => $application->send_number ,
'Result' => $application->result ,
'Color' => $application->color ,
'Note' => $application->note ,
'Current Salary' => $application->current_salary ,
'Expected Salary' => $application->expected_salary ,
'Position Salary' => $application->position_salary ,
'Cola' => $application->cola ,
'Final Salary' => $application->final_salary ,
'Created At' => $application->created_at ,
'Updated At' => $application->updated_at
      );
    ?>
    <center>

      <table>
        <?php $i=0; $col=2?>
        @foreach($display as $key => $value)
          <?php echo (($i%$col==0)?'<tr>':'');?>
          <td><span style="color:brown; font-size:20px; font-weight:bold; padding:15px;">{{ $key }} : </span>
          <span style="color:orange; font-size:20px;">{{ $value }}</span></td>
          <?php echo (($i%$col==$col-1)?'</tr>':'');?>
          <?php $i++; ?>
        @endforeach
      </table>

      <hr>

      {{ Form::model($application, array('route' => array('recruiter-sign.update', $application->application_id), 'method' => 'PUT')) }}
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('note', 'Note :') }}
          {{ Form::textarea('note', '', array( 'size' => '30x5')) }}
        </div>
        {{ Form::button('Decline', array('name' => 'approve', 'value' => false, 'type' => 'submit')) }}
        {{ Form::button('Accept', array('name' => 'approve', 'value' => true, 'type' => 'submit')) }}
      {{ Form::close() }}
    </center> -->

@stop