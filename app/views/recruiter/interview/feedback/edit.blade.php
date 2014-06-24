@extends('admin.layouts.main.recruiter')
@section('title')
thisIsTitle
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
      
      <script>
        var feedApp = angular.module('feedApp',[]);
        feedApp.controller('feedCtrl',['$scope', '$http',
          function ($scope, $http) {
          $scope.cos='cosocoscosocosco';
          //$scope.result=0;
          $scope.showGreen=false;
          $scope.color='';
          $scope.showInfo=true;
          $scope.showBoxInfo=true;
          $scope.setColor = function(){
            if($scope.result==1){
              $scope.color='blue';
            }
            else if($scope.result==2){
              $scope.color='green';
            }
            else if($scope.result==3){
              $scope.color='yellow';
            }
            else if($scope.result==4){
              $scope.color='red';
            }
          };


          }
        ]);
      </script> 

     
@stop

@section('content')


        <?php
          $display = array(
    'VISIT NUMBER' => $visit_number,
    ''=>'',
    'Requisition ID' => $application->requisition_id ,
    'Application ID' => $application->application_id ,
    'Job title' => Position::find($application->requisition->position_id)->job_title,
    'Organization' => Position::find($application->requisition->position_id)->organization,
    'Division' => Position::find($application->requisition->position_id)->division,
    'Group' => Position::find($application->requisition->position_id)->group,
    'Corporate title' => CorporateTitle::find($application->requisition->corporate_title_id)->name ,
    'Recruitment type' => RecruitmentType::find($application->requisition->recruitment_type_id)->name ,
    'Created At' => $application->created_at ,
    'Updated At' => $application->updated_at
          );
        ?>
    <!--front zone-->

    <div ng-app="feedApp">
      <div ng-controller="feedCtrl">
        
        <div class="box box-info" >
          <div class="box-header">
            <div class="box-title" style="font-size:2.5em;">
              Interview feedback <i class="fa fa-fw fa-comments-o"></i><br>
            </div>
            <hr>
            <hr>
          </div>
         
          <div class="box-body" style="border-color:#00c0ef;" >
            <div class="row">
             
              <div class="col col-md-12">
                <div class="box box-solid box-info" ng-show="showBoxInfo">
                    <div class="box-header">
                      <h3 class="box-title">
                        <i class="fa fa-fw fa-info-circle"></i><strong>Information</strong>
                      </h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-info btn-sm" ng-click="showInfo=!showInfo" data-widget="collapse">
                          <i class="fa fa-minus"></i>
                        </button>
                        <button class="btn btn-info btn-sm" ng-click="showBoxInfo=false" data-widget="remove">
                          <i class="fa fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="box-body" ng-show="showInfo" style="font-size:1.2em;">
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

                      <div class="row" style="margin-top:2em;">
                        <div class="col col-md-6">
                          <div class="row">
                           
                            <div class="panel panel-info" style="margin-left:10px;margin-right:5px;">
                              <div class="panel-heading">
                                <h3 class="panel-title">
                                 <i class="fa fa-fw fa-user"></i> Hiring manager Detail
                                </h3>
                              </div>
                              <div class="panel-body">
                                <div class="row">
                                  <div class="col col-md-2">
                                    <strong>Name : </strong>
                                  </div>
                                  <div class="col col-md-8">
                                    {{ $application->requisition->employee->first }} <span style="visibility:hidden;">.</span> {{ $application->requisition->employee->last }}
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col col-md-2">
                                    <strong>Tel  : </strong>
                                  </div>
                                  <div class="col col-md-8">
                                    <i class="fa fa-fw fa-phone"></i>{{ $application->requisition->employee->contact_number }}
                                  </div>
                                </div>
                                <br>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="col col-md-6">
                          <div class="row">

                            <div class="panel panel-info" style="margin-left:5px;margin-right:10px;">
                              <div class="panel-heading">
                                <h3 class="panel-title ">
                                  
                                    <i class="fa fa-fw fa-user"></i> Candidate Detail 
                                  
                                </h3>
                              </div>
                              <div class="panel-body ">
                                <div class="row">
                                  <div class="col col-md-2 col-md-offset-1">
                                    <strong>Name : </strong>
                                  </div>
                                  <div class="col col-md-8">
                                    {{ $application->candidate->user->first }} <span style="visibility:hidden;">.</span> {{ $application->candidate->user->last }}
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col col-md-2 col-md-offset-1">
                                    <strong>Tel  : </strong>
                                    <!-- <div id="external-events">
                                      <div class="external-event bg-aqua ui-draggable" style="position: relative;">
                                        Tel :
                                      </div>

                                    </div> -->
                                  </div>
                                  <div class="col col-md-8"><i class="fa fa-fw fa-phone"></i>{{ $application->candidate->user->contact_number }}</div>
                                </div>
                                <div class="row">
                                  <div class="col col-md-2 col-md-offset-1">
                                    <strong>Email : </strong>
                                  </div>
                                  <div class="col col-md-8">{{ $application->candidate->user->email }}</div>
                                </div>
                              </div>
                            </div>
                           
                          </div>
                        </div>
                      </div>



                    </div><!-- /.box-body -->
                </div>
                
              </div>
              
            </div>

            <div class="panel panel-primary bg-aqua" style="box-shadow: 2px 2px 2px #888888;">
              <div class="panel-body" style="font-size:1.2em;">
                
                {{ Form::model($application, array('route' => array('recruiter-interview-feedback.update', $application->application_id), 'method' => 'PUT', 'files' => true, 'onsubmit' => 'updateInterviewers()')) }}

                <div class="row" style="padding-top:1.2em;">
                  <div class="col col-md-7 col-md-offset-3">
                    <div class="form-group" style="font-weight:bold;font-size:1.2em;">
                      {{ Form::label('date_time', 'Interview Date/Time :') }}
                      <?php
                        $ts_val = Carbon::createFromFormat('Y-m-d H:i:s', $application->intOffSchedule()->whereAppCsId(4)->orderBy('visit_number','desc')->first()->datetime);
                      ?>
                      {{ Form::input('datetime-local', 'date_time', ($ts_val->format('Y-m-d') .'T'. $ts_val->format('H:i')) ) }}
                    
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col col-md-7 col-md-offset-3">
                    <div class="form-group" style="font-weight:bold;font-size:1.2em;">
                      {{ Form::label('location', 'Location :') }}
                      {{ Form::input('text', 'location', $location, array('placeholder' => 'Interview 4 Room, 17th Floor, SCB Park', 'style' => 'width:350px'))}}
                    </div>
                  </div>
                </div>


              </div>
            </div>



            <!--start table for interviewer select-->
            <div class="row">
              <!--for selected interviewer-->
              <div class="col col-md-12" style="padding-right:5px;">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <strong style="font-size:1.2em;">Selected Interviewer(s)</strong>
                  </div>
                  <div class="panel-body">
                    <table id='selected' style="margin:10px;font-size:1.1em;" class="table">
                      <thead>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Department</th>
                          <th>Position</th>
                          <th>Phone Number</th>
                          <th>Upload Interview Evaluation Form</th>
                          <th>Score</th>
                          <th>Remove</th>
                      </thead>
                      <tbody>
                      <?php
                        $user_ids = $application->interviewEvaluation()->whereVisitNumber($visit_number)->lists('user_id');
                        if(count($user_ids) > 0)
                          $suggests = Employee::whereIn('user_id', $user_ids)->get();
                        else
                          $suggests = array();
                      ?>
                      @foreach($suggests as $suggest)
                        <tr>
                          <td>
                            {{ $suggest->user_id }}
                          </td>
                          <td>
                            {{ $suggest->user->first . " " . $suggest->user->last }}
                          </td>
                          <td>
                            {{ $suggest->dept->name }}
                          </td>
                          <td>
                            {{ $suggest->position->job_title }}
                          </td>
                          <td>
                            {{ $suggest->user->contact_number }}
                          </td>
                          <td>
                            <input  name={{ 'file'.$suggest->user_id }} type='file'/>
                          </td>
                          <td class="center">
                            <input name={{ 'score'.$suggest->user_id }} type='number' min='0' max='10' step='0.01'/>
                          </td>
                          <td>
                            <input value='Remove' class="btn btn-sm btn-danger" type='button' onclick='removeInterviewer(this)'/>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                      <col width="5%">
                      <col width="15%">
                      <col width="15%">
                      <col width="15%">
                      <col width="10%">
                      <col width="20%">
                      <col width="10%">
                      <col width="10%">
                    </table>

                    <hr>
                    <div class="col col-md-offset-1 col-md-11">
                    <iframe src="../../recruiter-interview-confirm-addInterviewer" frameBorder="0" width='600px' height='40px' scrolling='no'></iframe>
                    </div>
                  </div>
                </div>
              </div>




            </div>
            
            <!--end table for interviewer select-->



          </div><!-- /.box-body -->
        </div><!-- /.box-->

        <div class="well" style="">
          <div class="row">
            <div class="col col-md-2" style="">
            </div>
            <div class="col col-md-8">
            

              <div class="panel panel-default" style="background-color:#fff;box-shadow: 2px 2px 2px #888888;">
                <div class="panel-heading bg-@{{color}}" >
                  <center style="font-size:2em;"><strong>Result</strong></center>
                </div>
                <div class="panel-body">
                  <div class="form-group" style="font-size:1.2em;">
                      
                       <div class="row">
                          <div class="col col-md-2"></div>
                          <div class="col col-md-4">  {{ Form::radio('result', '1','',array('ng-model'=>'result','ng-change'=>'setColor()')) }} Pass and Hold a next interview</div>
                          <div class="col col-md-6" ng-show="result==1">{{ Form::checkbox('redirect1') }} Confirm the next interview now</div>
                        </div>
                        <div class="row">
                          <div class="col col-md-2"></div>
                          <div class="col col-md-4">  {{ Form::radio('result', '2','',array('ng-model'=>'result','ng-change'=>'setColor()')) }} Accept</div>
                          <div class="col col-md-6" ng-show="result==2">{{ Form::checkbox('redirect2') }} Prepare package now</div>
                        </div>
                        <div class="row">
                          <div class="col col-md-2"></div>
                          <div class="col col-md-4">  {{ Form::radio('result', '3','',array('ng-model'=>'result','ng-change'=>'setColor()')) }} Pending</div>
                        </div>
                        <div class="row">
                          <div class="col col-md-2"></div>
                          <div class="col col-md-4">  {{ Form::radio('result', '4','',array('ng-model'=>'result','ng-change'=>'setColor()')) }} Reject</div>
                        </div>
                  </div>
                </div>
              </div>
            
            <div class="col col-md-2" style="">
            </div>
          </div>

          <div class="row">
            <div class="col col-md-3">
            </div>
            <div class="col col-md-8" style="margin-left:35px;">
              <div class="form-group" style="font-size:1.2em;font-weight:bold;">
                {{ Form::label('note', 'Note :', array( 'style' => 'font-size:1.6em;')) }}
                {{ Form::textarea('note', '', array( 'size' => '55x5','style'=>'')) }}
              </div>
              
            </div>
            <div class="col col-md-1">
            </div>
          </div>
          <div class="row">
            <div class="col col-md-4"></div>
            <div class="col col-md-4" style="">
              <input id='interviewer_ids' name='interviewer_ids' type="hidden"/>
                {{ Form::button('Confirm', array('type' => 'submit','class'=>'btn btn-lg btn-warning','style'=>'width:120%;')) }}
                {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end front zone cos is here!!!!!!!!!-->




      
        <script>
          function removeInterviewer(x){
            var tableSelect = document.getElementById('selected');
            var row = tableSelect.rows[x.parentNode.parentNode.rowIndex];
            row.remove();
            updateInterviewers();
          }
          function addInterviewer(v1,v2,v3,v4,v5){ // ID name dept position phone deselect
            var tableSelect = document.getElementById('selected');
            var newRow = tableSelect.insertRow(tableSelect.rows.length);
            newRow.insertCell(0).innerHTML = v1;
            newRow.insertCell(1).innerHTML = v2;
            newRow.insertCell(2).innerHTML = v3;
            newRow.insertCell(3).innerHTML = v4;
            newRow.insertCell(4).innerHTML = v5;
            var btn = document.createElement("input");
            btn.name = 'file'+v1;
            btn.type = 'file';
            newRow.insertCell(5).appendChild(btn);
            var btn2 = document.createElement("input");
            btn2.type = 'number';
            btn2.min = '0';
            btn2.max = '10';
            btn2.step = '0.01';
            btn2.name = 'score'+v1;
            newRow.insertCell(6).appendChild(btn2);
            var btn3 = document.createElement("input");
            btn3.value = 'Remove';
            btn3.type = 'button';
            btn3.className='btn btn-sm btn-danger';
            btn3.onclick = function(){
              removeInterviewer(this);
            }
            newRow.insertCell(7).appendChild(btn3);
            updateInterviewers();
          }
          function updateInterviewers(){
            var hidden = document.getElementById('interviewer_ids');
            var tableSelect = document.getElementById('selected');
            hidden.value = '';
            for(var i=1;i<tableSelect.rows.length;i++){
              hidden.value += tableSelect.rows[i].cells[0].innerHTML.trim();
              if(i != tableSelect.rows.length-1)
                hidden.value += ',';
            }
          }
        </script>
        <script src="<?php echo asset('js/jquery.js')?>"></script>
  
@stop