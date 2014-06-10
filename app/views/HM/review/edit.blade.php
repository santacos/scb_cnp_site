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

      {{ Form::model($application, array('route' => array('hm-application-review.update', $application->application_id), 'method' => 'PUT')) }}
        <div class="form-group" style="color:brown; font-size:20px; font-weight:bold; padding:15px;">
          {{ Form::label('note', 'Note :') }}
          {{ Form::textarea('note', '', array( 'size' => '30x5')) }}
        </div>
        {{ Form::button('Decline', array('name' => 'approve', 'value' => false, 'type' => 'submit')) }}
        {{ Form::button('Accept', array('name' => 'approve', 'value' => true, 'type' => 'submit')) }}
      {{ Form::close() }}
    </center>
@stop