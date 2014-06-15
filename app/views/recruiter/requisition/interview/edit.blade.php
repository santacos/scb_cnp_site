@extends('admin.layouts.default')
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

      {{ Form::model($application, array('route' => array('recruiter-interview-confirm.update', $application->application_id), 'method' => 'PUT')) }}
        <?php
            $default_date = $application->intOffSchedule()->whereAppCsId(4)->orderBy('visit_number','desc')->first();
            if(is_null($default_date)){
              $default_date = NULL;
            }else{
              $default_date = $default_date->datetime;
            }
        ?>
        @if(!is_null($default_date))
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('note', 'Preferred Interview Date/Time :') }}
          <span style="color:orange">{{ $default_date }}</span>
        </div>
        @endif
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('date_time', 'Interview Date/Time :') }}
          {{ Form::input('datetime-local', 'date_time') }}
        </div>
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('location', 'Location :') }}
          {{ Form::input('text', 'location', '', array('placeholder' => 'Interview 4 Room, 17th Floor, SCB Park', 'style' => 'width:350px'))}}
        </div>
        <table border="1">
          <tr>
            <th>
              <span class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
                Selected Interviewer(s)
              </span>
            </th>
            <th>
              <span class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
                Suggested Interviewer(s)
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
                      <th>Deselect</th>
                  </tr>
                  <col width="30">
                  <col width="150">
                  <col width="100">
                  <col width="150">
                  <col width="80">
                  <col width="60">
                </table>
              </td>
              <td>
                <table id='suggested' border="1" style="margin:10px;">
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
                        <input value='Select' type='button' onclick='selectInterviewer(this)'/>
                      </td>
                    </tr>
                    <?php
                      $suggest = $suggest->nextLevel;
                      if(!is_null($suggest)){
                        $suggest = $suggest->employee;
                      }
                    ?>
                  @endwhile
                  <col width="30">
                  <col width="150">
                  <col width="100">
                  <col width="150">
                  <col width="80">
                  <col width="60">
                </table>
              </td>
              <tr>
                <td>
                  <iframe src="../../recruiter-interview-confirm-addInterviewer" frameBorder="0" width='540px' height='40px' scrolling='no'></iframe>
                </td>
              </tr>
          </tr>
        </table>
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
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('note', 'Note :') }}
          {{ Form::textarea('note', '', array( 'size' => '30x5')) }}
        </div>
        <input id='interviewer_ids' name='interviewer_ids' type="hidden"/>
        {{ Form::button('Reject Candidate', array('name' => 'approve', 'value' => false, 'type' => 'submit')) }}
        {{ Form::button('Confirm', array('name' => 'approve', 'value' => true, 'type' => 'submit')) }}
      {{ Form::close() }}
    </center>
@stop