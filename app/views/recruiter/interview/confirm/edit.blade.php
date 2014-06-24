@extends('admin.layouts.main.recruiter')
@section('title')
thisIsTitle
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
      
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
    
    <div class="box box-primary">
      <div class="box-header">
        <div class="box-title" style="font-size:2.5em;">
          Interview appointment <i class="fa fa-fw fa-users"></i><br>
        </div>
        <hr>
        <hr>
      </div>
     
      <div class="box-body">
        <div class="row">
          
          <div class="col col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title" style="font-size:1.5em;">
                  <i class="fa fa-fw fa-info-circle"></i><strong>Information</strong>
                </h3>
              </div>
              <div class="panel-body" style="font-size:1.2em;">
                <!--table information-->
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

                <!--detail person-->
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
                            <div class="col col-md-8">COS COSCOSCOS</div>
                          </div>
                          <div class="row">
                            <div class="col col-md-2">
                              <strong>Tel  : </strong>
                              <!-- <div id="external-events">
                                <div class="external-event bg-aqua ui-draggable" style="position: relative;">
                                  Tel :
                                </div>

                              </div> -->
                            </div>
                            <div class="col col-md-8">
                              <i class="fa fa-fw fa-phone"></i>02-838383838
                            </div>
                          </div>
                          <div class="row">
                            <div class="col col-md-11">
                              <strong>Note (preferred time for interviewing): </strong>
                            </div>
                            <div class="col col-md-12">
                              <div class="panel panel-default">
                                <div class="panel-body text-center">
                                  ว่างวันเสาร์อาทิตย์ค่ะโฮะๆๆๆ
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="col col-md-6">
                    <div class="row">

                      <div class="panel panel-info" style="height:218px;margin-left:5px;margin-right:10px;">
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
                            <div class="col col-md-8">COS COSCOSCOS</div>
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
                            <div class="col col-md-8"><i class="fa fa-fw fa-phone"></i>02-838383838</div>
                          </div>
                          <div class="row">
                            <div class="col col-md-2 col-md-offset-1">
                              <strong>Email : </strong>
                            </div>
                            <div class="col col-md-8">santa@hotmail.com</div>
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

        <!--select date-->
        <!-- <div class="panel panel-success">
          <div class="panel-body bg-blue" style="font-size:1.2em;">
            

            {{ Form::model($application, array('route' => array('recruiter-interview-confirm.update', $application->application_id), 'method' => 'PUT')) }}
              <?php
                  $default_date = $application->intOffSchedule()->whereAppCsId(4)->orderBy('visit_number','desc')->first();
                  if(is_null($default_date) || $visit_number > 1){
                    $default_date = NULL;
                  }else{
                    $default_date = $default_date->datetime;
                  }
              ?>
            
            <div class="row" style="padding-top:1.2em;">
              <div class="col col-md-7 col-md-offset-3">
                <div class="form-group" style="font-weight:bold;font-size:1.2em;">
                  {{ Form::label('date_time', 'Interview Date/Time :') }}
                  {{ Form::input('datetime-local', 'date_time') }}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-md-7 col-md-offset-3">
                <div class="form-group" style="font-weight:bold;font-size:1.2em;">
                  {{ Form::label('location', 'Location :') }}
                  {{ Form::input('text', 'location', '', array('placeholder' => 'Interview 4 Room, 17th Floor, SCB Park', 'style' => 'width:350px'))}}
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!--end select date-->
        
        <div class="panel panel-primary" style="box-shadow: 2px 2px 2px #888888;">
          <div class="panel-body" style="background-color:#d9edf7;font-size:1.2em;">
            

            {{ Form::model($application, array('route' => array('recruiter-interview-confirm.update', $application->application_id), 'method' => 'PUT')) }}
              <?php
                  $default_date = $application->intOffSchedule()->whereAppCsId(4)->orderBy('visit_number','desc')->first();
                  if(is_null($default_date) || $visit_number > 1){
                    $default_date = NULL;
                  }else{
                    $default_date = $default_date->datetime;
                  }
              ?>
            
            <div class="row" style="padding-top:1.2em;">
              <div class="col col-md-7 col-md-offset-3">
                <div class="form-group" style="font-weight:bold;font-size:1.2em;">
                  {{ Form::label('date_time', 'Interview Date/Time :') }}
                  {{ Form::input('datetime-local', 'date_time','',array('required')) }}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-md-7 col-md-offset-3">
                <div class="form-group" style="font-weight:bold;font-size:1.2em;">
                  {{ Form::label('location', 'Location :') }}
                  {{ Form::input('text', 'location', '', array('placeholder' => 'Interview 4 Room, 17th Floor, SCB Park', 'style' => 'width:350px','required'))}}
                </div>
              </div>
            </div>
          </div>
        </div>



        <!--start table for interviewer select-->
        <div class="row">
          <!--for selected interviewer-->
          <div class="col col-md-6" style="padding-right:5px;">
            <div class="panel panel-success">
              <div class="panel-heading">
                Selected Interviewer(s)
              </div>
              <div class="panel-body">
                <table id='selected' style="" class="table">
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Position</th>
                      <th>Phone Number</th>
                      <th>Deselect</th>
                  </tr>
                  <col width="5%">
                  <col width="20%">
                  <col width="20%">
                  <col width="25%">
                  <col width="20%">
                  <col width="10%">
                </table>

                <hr>
                <iframe src="../../recruiter-interview-confirm-addInterviewer" frameBorder="0" width='540px' height='40px' scrolling='no'></iframe>
                
              </div>
            </div>
          </div>

          <!-- for suggested interviewer-->
          <div class="col col-md-6" style="padding-left:5px;">
            <div class="panel panel-success">
              <div class="panel-heading">
                Suggested Interviewer(s)
              </div>
              <div class="panel-body">
                <table id='suggested' class="table table-border" style="">
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Position</th>
                      <th>Phone Number</th>
                      <th>Select</th>
                  </tr>
                  <?php
                    $suggest = Employee::find($application->requisition->employee_user_id);
                  ?>
                  @while($suggest != NULL)
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
                        <input value='Select' type='button' class="btn btn-sm btn-success" onclick='selectInterviewer(this)'/>
                      </td>
                    </tr>
                    <?php
                      $suggest = $suggest->nextLevel;
                      if(!is_null($suggest)){
                        $suggest = $suggest->employee;
                      }
                    ?>
                  @endwhile
                  <col width="5%">
                  <col width="20%">
                  <col width="20%">
                  <col width="25%">
                  <col width="20%">
                  <col width="10%">
                </table>
                <hr>
                
              </div>
            </div>
          </div>
        </div>
        
        <!--end table for interviewer select-->



      </div><!-- /.box-body -->
    </div><!-- /.box-->
   
    <div class="well" style="">
      <div class="row">
        <div class="col col-md-3"></div>
        <div class="col col-md-4" style="margin-left:25px;">
          <div class="form-group" style="font-size:1.2em;font-weight:bold;">
            {{ Form::label('note', 'Note :', array( 'style' => 'font-size:1.6em;')) }}
            {{ Form::textarea('note', '', array( 'size' => '53x5','style'=>'')) }}
          </div>
          <input id='interviewer_ids' name='interviewer_ids' type="hidden"/>
          {{ Form::button('Confirm', array('name' => 'approve', 'value' => true,'style'=>'width:115%;' , 'type' => 'submit','class'=>'btn btn-lg btn-primary')) }}
          {{ Form::close() }}
        </div>
      </div>
    </div>





      

    <center>


        
        <script>
          function selectInterviewer(x){
            var tableSuggest = document.getElementById('suggested');
            var row = tableSuggest.rows[x.parentNode.parentNode.rowIndex];
            var tableSelect = document.getElementById('selected');
            var newRow = row.cloneNode(true);
            row.remove();
            tableSelect.children[0].appendChild(newRow);
            var newButton = newRow.cells[newRow.cells.length-1].children[0];
            newButton.onclick = function(){
              deselectInterviewer(this);
            }
            newButton.value = 'Deselect';
            newButton.className='btn btn-sm btn-danger';
            updateInterviewers();
          }
          function deselectInterviewer(x){
            var tableSelect = document.getElementById('selected');
            var row = tableSelect.rows[x.parentNode.parentNode.rowIndex];
            var tableSuggest = document.getElementById('suggested');
            var newRow = row.cloneNode(true);
            row.remove();
            tableSuggest.children[0].appendChild(newRow);
            var newButton = newRow.cells[newRow.cells.length-1].children[0];
            newButton.onclick = function(){
              selectInterviewer(this);
            }
            newButton.value = 'Select';
            newButton.className='btn btn-sm btn-success';
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
            btn.value = 'Deselect';
            btn.type = 'button';
            btn.className='btn btn-sm btn-danger';
            btn.onclick = function(){
              deselectInterviewer(this);
            }
            newRow.insertCell(5).appendChild(btn);
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
    
    </center>
@stop