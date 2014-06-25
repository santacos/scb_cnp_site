@extends('admin.layouts.main.recruiter')
@section('title')
thisIsTitle
@stop

@section('libs')
    <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
@stop

@section('content')
<section class="content-header">
 <h1>
   Prepare package <i class="fa fa-fw fa-clipboard"></i>
  <!-- <small>#007612</small> -->
</h1>
<!-- <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Examples</a></li>
  <li class="active">Blank page</li>
</ol> -->
</section>

<!-- <div class="pad margin no-print">
  <div class="alert alert-info" style="margin-bottom: 0!important;">
    <i class="fa fa-info"></i>
    <b>Candidate detail:</b><br>

  </div>
</div> -->

<!-- Main content -->
<section class="content invoice">                    
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
         Package for <!--edit-->Requisition (ID#{{ $application->requisition->requisition_id }}) >> {{ $application->requisition->position->job_title }}, {{ $application->requisition->position->organization }}, {{ $application->requisition->position->division }}, {{ $application->requisition->position->group }}<!--edit-->
        <small class="pull-right"><!--edit--> Date: 2/10/2014</small>
      </h2>                            
    </div><!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row">
    <div class="col-xs-6">
      <p class="lead text-light-blue"><i class="fa fa-fw fa-info-circle"></i><strong>Information</strong></p>
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width:50%">Current Salary:</th>
            <td>{{ $application->current_salary }}</td>
          </tr>
          <tr>
            <th>Expected Salary:</th>
            <td>{{ $application->expected_salary }}</td>
          </tr>
          <tr>
            <th>Position Salary:</th>
            <td>{{ $application->position_salary }}</td>
          </tr>
          <tr>
            <th>Allowance:</th>
            <td>{{ $application->cola }}</td>
          </tr>
          <tr>
            <th>Max Final Salary:</th>
            <td>{{ $application->final_salary }}</td>
          </tr>
        </table>
      </div>
    </div><!-- /.col -->
    <div class="col-xs-1">
    </div><!-- /.col -->
    <div class="col-xs-5" style="font-size:1.2em;">
      <div class="panel panel-primary">
        <div class="panel-heading"><b>Candidate detail</b></div>
        <div class="panel-body">
          
          <address>
            Name : {{ $application->candidate->user->first . " " . $application->candidate->user->last }}<br>
            Location : {{$application->candidate->current_living_location }}<br>
            Phone: {{ $application->candidate->user->contact_number }}<br/>
            Email: {{ $application->candidate->user->email }}
          </address>
        </div>
      </div><!--end panel-->
      
    </div><!-- /.col -->
  </div><!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-xs-12 table-responsive">
      <table class="table table-striped table-hover table-bordered text-center">
        <thead>
          <tr>
            <th class="text-center" style="width:20%">Detail</th>
            <th class="text-center" style="width:16%">Option1</th>
            <th class="text-center" style="width:16%">Option2</th>
            <th class="text-center" style="width:16%">Option3</th>
            <th class="text-center" style="width:16%">Option4</th>
            <th class="text-center" style="width:16%">Option5</th>
          </tr>                                    
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Call of Duty</td>
            <td>455-981-221</td>
            <td>El snort testosterone trophy driving gloves handsome</td>
            <td>$64.50</td>
            <td>$64.50</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Need for Speed IV</td>
            <td>247-925-726</td>
            <td>Wes Anderson umami biodiesel</td>
            <td>$50.00</td>
            <td>$50.00</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Monsters DVD</td>
            <td>735-845-642</td>
            <td>Terry Richardson helvetica tousled street art master</td>
            <td>$10.70</td>
            <td>$10.70</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Grown Ups Blue Ray</td>
            <td>422-568-642</td>
            <td>Tousled lomo letterpress</td>
            <td>$25.99</td>
            <td>$25.99</td>
          </tr>
        </tbody>
      </table>                            
    </div><!-- /.col -->
  </div><!-- /.row -->

  <div class="row">
    <br>
    <!-- accepted payments column -->
    <div class="col-xs-4">
     <p class="text-center text-muted">__________________________ </p><br> <p class="lead text-center">Mr. AAA BBB AAA </p>
    </div><!-- /.col -->
    <div class="col-xs-4">
     <p class="text-center text-muted">__________________________ </p><br> <p class="lead text-center">Mr. AAA BBB AAA </p>
    </div><!-- /.col -->
    <div class="col-xs-4">
     <p class="text-center text-muted">__________________________ </p><br> <p class="lead text-center">Mr. AAA BBB AAA </p>
    </div><!-- /.col -->
  </div><!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
      <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>  
      <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
    </div>
  </div>
</section><!-- /.content -->
<script>
        if(!window.locationbar.visible){
            $(".left-side").remove();
            $(".navbar").remove();
            $(".header").remove();
            $(".right-side").toggleClass(false);
            $(".content").animate({opacity:'0'},0);
            $(".content").animate({marginTop:'0px',opacity:'1'},1000);
        }
</script>
@stop