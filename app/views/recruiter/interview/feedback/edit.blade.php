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

      {{ Form::model($application, array('route' => array('recruiter-interview-feedback.update', $application->application_id), 'method' => 'PUT', 'files' => true, 'onsubmit' => 'updateInterviewers()')) }}
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('date_time', 'Interview Date/Time :') }}
          <?php
            $ts_val = Carbon::createFromFormat('Y-m-d H:i:s', $application->intOffSchedule()->whereAppCsId(4)->orderBy('visit_number','desc')->first()->datetime);
          ?>
          {{ Form::input('datetime-local', 'date_time', ($ts_val->format('Y-m-d') .'T'. $ts_val->format('H:i')) ) }}
        </div>
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('location', 'Location :') }}
          {{ Form::input('text', 'location', $location, array('placeholder' => 'Interview 4 Room, 17th Floor, SCB Park', 'style' => 'width:350px'))}}
        </div>
        <table border="1">
          <tr>
            <th>
              <span class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
                Selected Interviewer(s)
              </span>
            </th>
          </tr>
          <tr>
              <td>
                <table id='selected' border="1" style="margin:10px;">
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Position</th>
                      <th>Phone Number</th>
                      <th>Upload Interview Evaluation Form</th>
                      <th>Score</th>
                      <th>Remove</th>
                  </tr>
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
                        <input name={{ 'file'.$suggest->user_id }} type='file'/>
                      </td>
                      <td>
                        <input name={{ 'score'.$suggest->user_id }} type='number' min='0' max='10' step='0.01'/>
                      </td>
                      <td>
                        <input value='Remove' type='button' onclick='removeInterviewer(this)'/>
                      </td>
                    </tr>
                  @endforeach
                  <col width="30">
                  <col width="150">
                  <col width="100">
                  <col width="150">
                  <col width="80">
                  <col width="220">
                  <col width="60">
                  <col width="60">
                </table>
              </td>
              <tr>
                <td>
                  <iframe src="../../recruiter-interview-confirm-addInterviewer" frameBorder="0" width='600px' height='40px' scrolling='no'></iframe>
                </td>
              </tr>
          </tr>
        </table>
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
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('note', 'Note :') }}
          {{ Form::textarea('note', '', array( 'size' => '30x5')) }}
        </div>
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('result_title', '----- Result -----') }} <br>
          {{ Form::radio('result', '1') }} Pass and Hold a next interview {{ Form::checkbox('redirect1') }} Confirm the next interview now<br> 
          {{ Form::radio('result', '2') }} Accept {{ Form::checkbox('redirect2') }} Prepare package now<br>
          {{ Form::radio('result', '3') }} Pending <br>
          {{ Form::radio('result', '4') }} Reject
        </div>
        <input id='interviewer_ids' name='interviewer_ids' type="hidden"/>
        {{ Form::button('Confirm', array('type' => 'submit')) }}
      {{ Form::close() }}
    </center>
@stop