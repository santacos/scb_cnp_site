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
'Requisition ID' => $requisition->requisition_id ,
'Job Title' => '- to be edited by recruiter -' ,
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

      <table id='thetable'>
        <?php $i=0; $col=2?>
        @foreach($display as $key => $value)
          <?php echo (($i%$col==0)?'<tr>':'');?>
          <td><span style="color:brown; font-size:20px; font-weight:bold; padding:15px;">{{ $key }} : </span>
          <span style="color:orange; font-size:20px;">{{ $value }}</span></td>
          <?php echo (($i%$col==$col-1)?'</tr>':'');?>
          <?php $i++; ?>
        @endforeach
      </table>

      {{ Form::model($requisition, array('route' => array('requisition-hrbp-approve.update', $requisition->requisition_id), 'method' => 'PUT')) }}

        {{ Form::button('Decline', array('name' => 'approve', 'value' => false, 'type' => 'submit')) }}
        {{ Form::button('Accept', array('name' => 'approve', 'value' => true, 'type' => 'submit')) }}

      {{ Form::close() }}
    </center>
@stop