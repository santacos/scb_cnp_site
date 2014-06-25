@extends('admin.layouts.main.recruiter')
@section('title')
thisIsTitle
@stop

@section('libs')
    <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
@stop

@section('content')
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title"  style="font-size:2.5em;">
            Prepare package <i class="fa fa-fw fa-clipboard"></i>
          </h3>
          <hr><hr>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col col-md-12">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title" style="font-size:1.2em;">
                        <i class="fa fa-fw fa-info-circle"></i><strong>Information</strong>
                    </h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col col-md-6">
                        <div class="panel panel-success">
                          <div class="panel-body">
                            <h4 class="list-group-item-heading text-muted"><strong>Candidate detail</strong></h4>
                              <hr>
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
                                        <td><span style="10%"><strong>{{ $key }} {{ $key=='' ? '':':'}} </strong></span></td>
                                        <td><span style="40%">{{ $value }}</span></td>
                                       </tr>
                                        <?php $i++; ?>
                                      @endforeach
                                    </table>

                         <!--            <hr> -->

                                    <table class="table">
                                      <tr>
                                        @if(count($evaluations) > 0)
                                          @foreach($evaluations->first()->toArray() as $key => $value)
                                            <th>{{ $key }}</th>
                                          @endforeach
                                          <th>Action</th>
                                        @endif
                                      </tr>
                                      @if(count($evaluations) > 0)
                                        @foreach($evaluations as $evaluation)
                                          <tr>
                                            @foreach($evaluation->toArray() as $key => $value)
                                              <td>
                                                {{ $value }}
                                              </td>
                                            @endforeach
                                            <td>
                                            <a href={{"recruiter-interview-confirm/" . $requisition->requisition_id}}>View(Not Finished Yet)</a>
                                            </td>
                                          </tr>
                                        @endforeach
                                      @endif
                                    </table>
                                    <br><br>
                                    <hr>
                                    <div class="row">
                                      <div class="col col-md-12">
                                        <div class="col col-md-3"></div>
                                        <div class="col col-md-6">
                                          <a href="javascript:window.open('{{ URL::to('candidate/'.$application->candidate->user_id) }}','Calendar','width=1000,height=650,menubar=no,location=no,resizable=yes,scrollbars=yes,status=no,personalbar=no,titlebar=no')" class="btn btn-default" style="width:100%;"> View detail</a>
                                        </div>
                                      </div>

                                    </div>
                          </div>
                        </div>
                      </div>
                      <div class="col col-md-6">
                        <div class="panel panel-success" style="">
                          <div class="panel-body">
                             <h4 class="list-group-item-heading text-muted"><strong>Requisition detail</strong></h4>
                              <hr>
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
                              <table style="font-size:1.1em;">
                                <?php $i=0; $col=2?>
                                @foreach($display as $key => $value)
                                  <tr>
                                  <td class="text-left"><span style="width:50%;"><strong>{{ $key }} {{ ($key=='')||($key==' ') ? '':':'}}</strong></span></td>
                                  <td><span style="width:50%;">  {{ $value }}</span></td>
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
                                    <a href="javascript:window.open('{{ URL::to('recruiter-shortlist/'.$requisition->requisition_id) }}','Calendar','width=1000,height=650,menubar=no,location=no,resizable=yes,scrollbars=yes,status=no,personalbar=no,titlebar=no')" class="btn btn-default" style="width:100%;"> View detail</a>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                
            </div>
            <div class="col col-md-12">
                <div class="panel panel-success" style="font-size:1.2em;">
                  <div class="panel-heading"><br>
                  <div class="row" >
                    <div class="col col-md-4 col-md-offset-1">
                      {{ Form::model($application, array('route' => array('recruiter-prepare-package.update', $application->application_id), 'method' => 'PUT')) }}
                      <strong>{{ Form::label('current_salary', 'Current Salary :') }}</strong>
                    </div>
                    <div class="col col-md-7">
                        <div class="form-group" style="font-size:1.2em;">
                          {{ Form::input('text', 'current_salary', Input::old('current_salary')) }}
                        </div>
      
                    </div><!--end col-6-->
                  </div>
                  <div class="row">
                    <div class="col col-md-4 col-md-offset-1">
                        {{ Form::label('expected_salary', 'Expected Salary :') }}
                    </div>
                    <div class="col col-md-7">
                      <div class="form-group" style="font-size:1.2em;">
                        {{ Form::input('text', 'expected_salary', Input::old('expected_salary')) }}
                      </div>
                    </div><!--end col-6-->
                    
                  </div>
                  <div class="row">
                    <div class="col col-md-4 col-md-offset-1">
                        {{ Form::label('position_salary', 'Position Salary :') }}
                    </div>
                    <div class="col col-md-6">
                      <div class="form-group" style="font-size:1.2em;">
                        {{ Form::input('text', 'position_salary', Input::old('position_salary')) }}
                      </div>
                    </div><!--end col-6-->
                  </div>
                  <div class="row">
                    <div class="col col-md-4 col-md-offset-1">
                        {{ Form::label('cola', 'Cost of Living Allowance :') }}
                    </div>
                    <div class="col col-md-7">
                      <div class="form-group" style="font-size:1.2em;">
                        {{ Form::input('text', 'cola', Input::old('cola')) }}
                      </div>
                    </div><!--end col-6-->
                  </div>
                  <div class="row">
                    <div class="col col-md-4 col-md-offset-1">
                        {{ Form::label('final_salary', 'Max Final Salary :') }}
                    </div>
                    <div class="col col-md-7">
                      <div class="form-group" style="font-size:1.2em;">
                        {{ Form::input('text', 'final_salary', Input::old('final_salary')) }}
                      </div>
                    </div>
                  </div>
              
                  <hr>
                  <div class="row">

                    <div class="col col-md-offset-4 col-md-4" style="padding-bottom:2em;">
                      <a class="btn btn-lg btn-success" style="width:100%;" href="javascript:window.open('{{ URL::to('package/'.$application->application_id) }}','Calendar','width=1000,height=650,menubar=no,location=no,resizable=yes,scrollbars=yes,status=no,personalbar=no,titlebar=no')"> <i class="fa fa-fw fa-calendar"></i><span>  View package</span>  </a>
    <!-- 
                      {{ Form::button('View package', array('name' => 'approve', 'value' => true, 'type' => 'submit','class'=>'btn btn-lg btn-success','style'=>'width:100%;')) }}
                      {{ Form::close() }} -->
                    </div>
                  </div>
                  </div>  
                </div><!--end panel-->

                <!--note-->
                <div class="well" style="padding-bottom:5em;">
                  <div class="row" style="margin-top:3em;">
                    <div class="col col-md-4">
                    </div>
                    <div class="col col-md-8">
                      <div class="form-group" style="font-size:1.2em;font-weight:bold;">
                        {{ Form::label('note', 'Note ', array( 'style' => 'font-size:1.6em;')) }}
                        <br>
                        {{ Form::textarea('note', '', array( 'size' => '45x5','style'=>'')) }}
                      </div>
                      
                    </div>
                    <div class="col col-md-1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-md-4"></div>
                    <div class="col col-md-3" style="">
                        {{ Form::button('Accept', array('name' => 'approve','class'=>'btn btn-lg btn-warning','style'=>'width:136%;', 'value' => true, 'type' => 'submit')) }}
                        {{ Form::close() }}
                    </div>
                  </div>
                </div>
                <!--end note-->
            </div>
          </div>

        </div><!-- /.box-body -->
      </div>

    <!--end front zone-->

    <?php
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


@stop