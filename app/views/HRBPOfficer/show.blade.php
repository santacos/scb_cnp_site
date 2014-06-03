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
'Job Title' => $requisition->job_title ,
'Total Number' => $requisition->total_number ,
'Get Number' => $requisition->get_number ,
'Employee User ID' => $requisition->employee_user_id ,
// 'Datetime Create' => $requisition->datetime_create ,
// 'Datetime Previous Status' => $requisition->datetime_prev_status ,
'Location ID' => $requisition->location_id ,
'Corporate Title ID' => $requisition->corporate_title_id ,
'Position ID' => $requisition->position_id ,
'Dept ID' => $requisition->dept_id ,
'Requisition Current Status ID' => $requisition->requisition_current_status_id ,
'Recruitment Type ID' => $requisition->recruitment_type_id ,
'Year Of Experience' => $requisition->year_of_experience ,
'Recruitment Objective Template ID' => $requisition->recruitment_obj_template_id ,
'Recruitment Objective' => $requisition->recruitment_objective ,
'Responsibility' => $requisition->responsibility ,
'Qualification' => $requisition->qualification ,
'Note' => $requisition->note ,
// 'Created At' => $requisition->created_at ,
// 'Updated At' => $requisition->updated_at
      );
    ?>

    <table id='thetable'>
      <?php $i=0; $col=3?>
      @foreach($display as $key => $value)
        <?php echo (($i%$col==0)?'<tr>':'');?>
        <td><span style="color:brown; font-size:20px; font-weight:bold;">{{ $key }} : </span>
        <span style="color:orange; font-size:20px;">{{ $value }}</span></td>
        <?php echo (($i%$col==$col-1)?'</tr>':'');?>
        <?php $i++; ?>
      @endforeach
    </table>

    <center>
      {{ Form::model($requisition, array('route' => array('requisition-hrbp-approve.update', $requisition->requisition_id), 'method' => 'PUT')) }}

        {{ Form::button('Decline', array('name' => 'approve', 'value' => false, 'type' => 'submit')) }}
        {{ Form::button('Accept', array('name' => 'approve', 'value' => true, 'type' => 'submit')) }}

      {{ Form::close() }}
    </center>
@stop