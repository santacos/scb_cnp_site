@extends('admin.layouts.default')

@section('title')
HM-create-requisition
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>">
      <style>
        .scrollable-menu {
            width:250px;
        height: auto;
        max-height: 200px;
        overflow-x: hidden;
        }


    </style>
    
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
    <script src="<?php echo asset('js/createReq-manager.js')?>"></script>
    <script src="<?php echo asset('vendor/ui-utils.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-utils.min.js')?>"></script>
@stop


@section('content')
    <div ng-app="nameApp">
        <div class="container" ng-controller="NameCtrl">

            <div class="col-md-7 col-md-offset-1" style="margin-top:10px">
                <h1>Edit a Candidate</h1>
                <hr/>
                <div class="row">
                    <!--
                    <div class="col-sm-6">
                    <progressbar max="3" value="count"></progressbar>
                    </div>-->
                    <div class="col-sm-12">
                    <progressbar class="progress-striped active" max="3" value="count" type="danger"><i>@{{count}} / 3</i></progressbar>
                    </div>
                </div>

                 @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <!-- if there are creation errors, they will show here -->
                {{ HTML::ul($errors->all()) }}


        {{ Form::model($candidate, array('route' => array('candidate.update', $candidate->user_id), 'method' => 'PUT')) }}
        {{ Former::populate($candidate) }}
        {{ Former::populateField('first', $candidate->user()->first()->first) }}
        {{ Former::populateField('last', $candidate->user()->first()->last) }}
        {{ Former::populateField('email',  $candidate->user()->first()->email) }}
        {{ Former::populateField('contact_number',  $candidate->user()->first()->contact_number) }}
        {{ Former::populateField('position_id',  $candidate->user()->first()->first) }}



        {{ Form::label('Personal Details :') }}
        <div class="form-group">
                    
                    {{ Form::text('thai_saluation', Input::old('thai_saluation'), array('class' => 'form-control','placeholder'=>'คำนำหน้าชื่อ', 'id' => 'form')) }}
                    {{ Form::text('thai_firstname', Input::old('thai_firstname'), array('class' => 'form-control','placeholder'=>'ชื่อ', 'id' => 'form')) }}
                    {{ Form::text('thai_lastname', Input::old('thai_lastname'), array('class' => 'form-control','placeholder'=>'นามสกุล', 'id' => 'form')) }}
                </div>
              	<div class="form-group">
                    
                    {{ Form::text('eng_saluation', Input::old('end_saluation'), array('class' => 'form-control','placeholder'=>'Saluation', 'id' => 'form', 'required')) }}
                    {{ Form::text('first', Input::old('first'), array('class' => 'form-control','placeholder'=>'First Name', 'id' => 'form', 'required')) }}
                    {{ Form::text('last', Input::old('last'), array('class' => 'form-control','placeholder'=>'Last name', 'id' => 'form', 'required')) }}
                </div>

        <div class="form-group">
                   {{ Former::select('is_male','Gender :')->class('form-control scrollable-menu')->options(array(''=>'Select Gender',0=>'Female',1=>'Male'))
                        }} 
                          </div>
                          	<div class="form-group">
			                   {{ Form::label('birth_date', 'Date of Birth :') }}
                      			 {{Form::input('date', 'birth_date', null, ['class' => 'form-control', 'placeholder' => 'Date'])}}
                          </div>

                         
                     	<div class="form-group">
                    {{ Form::label('passport_number', 'Passport Number :') }}
                    {{ Form::text('passport_number', Input::old('passport_number'), array('class' => 'form-control', 'id' => 'form')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('idcard', 'National ID Number :') }}
                    {{ Form::text('idcard', Input::old('idcard'), array('class' => 'form-control', 'id' => 'form')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('nationality', 'Nationality :') }}
                    {{ Form::text('nationality', Input::old('nationality'), array('class' => 'form-control', 'id' => 'form')) }}
                </div>

                {{ Form::label( 'Contact information :') }}
                <div class="form-group">
                    {{ Form::label('email', 'Email :') }}
                    {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'id' => 'form')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('contact_number', 'Contact Number :') }}
                    {{ Form::text('contact_number', Input::old('contact_number'), array('class' => 'form-control', 'id' => 'form')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('full_location', 'Current Living Location :') }}
                    {{ Form::text('full_location', Input::old('full_location'), array('class' => 'form-control', 'id' => 'form')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('city', 'City :') }}
                    {{ Form::text('city', Input::old('city'), array('class' => 'form-control', 'id' => 'form')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('zip_coder', 'Zip/Postal Code :') }}
                    {{ Form::text('zip_code', Input::old('zip_code'), array('class' => 'form-control', 'id' => 'form')) }}
                </div>
                 <div class="form-group">
                    {{ Form::label('country', 'Country :') }}
                    {{ Form::text('country', Input::old('country'), array('class' => 'form-control', 'id' => 'form')) }}
                </div>
    {{ Form::submit('Save', array('class' => 'btn btn-primary btn-lg btn-block')) }}

    {{ Form::close() }}
            </div>
        </div>
    </div>      
@stop





@section('script')
    <script src="<?php echo asset('js/bootstrap-lightbox.js')?>"></script>
@stop

