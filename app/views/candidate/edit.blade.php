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
    
    <script src="<?php echo asset('vendor/ui-utils.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-utils.min.js')?>"></script>

    <script src="<?php echo asset('js/jquery.js')?>"></script> 
    <script>
        var editApp = angular.module('editApp',[]);
        editApp.controller('editCtrl',['$scope', '$http',
            function ($scope, $http) {
              $scope.cos='default';
         $scope.img_selc='aaaa';
            $scope.color = 'blue';
            $scope.specialValue = {
              "id": "12345",
              "value": "green"
            };
          
          $scope.selected = "";
          
          $scope.selectItem = function(item){
            $scope.selected = item;
          };


          }//before end controller

    
        ]);//end controller
    </script>
@stop


@section('content')
        <div class="container" ng-app="editApp">

            <div class="col-md-7 col-md-offset-1" style="margin-top:10px" ng-controller="editCtrl">
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


        {{ Form::model($candidate, array('route' => array('cd.update', $candidate->user_id), 'method' => 'PUT','files'=>true)) }}
        {{ Former::populate($candidate) }}
        {{ Former::populateField('first', $candidate->user()->first()->first) }}
        {{ Former::populateField('last', $candidate->user()->first()->last) }}
        {{ Former::populateField('email',  $candidate->user()->first()->email) }}
        {{ Former::populateField('contact_number',  $candidate->user()->first()->contact_number) }}


        <div class="form-group">
           {{ Form::label('filepath_picture', 'Image :') }} 
           <br>
            @if(file_exists($candidate->filepath_picture))
                 <img src="{{asset($candidate->filepath_picture)}}" style="height: 300px; width: 300px;"> 
            @elseif(isset($candidate->filepath_picture))
                  <img src="{{asset($candidate->filepath_picture)}}" style="height: 300px; width: 300px;"> 
            @endif    
            <br><br>
                <input type="radio" name="img_selc" ng-model="img_selc" value="text" checked="checked"/>  URL &nbsp&nbsp
                <input type="radio" name="img_selc" ng-model="img_selc" value="file"> Upload <br/>
                <input ng-show="img_selc=='text'"name="filepath_picture" type="text" class="form-control" value="{{$candidate->filepath_picture}}">
                <input ng-show="img_selc=='file'" name="filepath_picture" type="file" class="form-control" value="{{Input::old('filepath_picture')}}">
          
       </div>
        <div class="form-group">
           {{ Form::label('filepath_cv', 'CV :') }} 
           <br>
            @if(file_exists(public_path().$candidate->filepath_cv))
            <?php   $fileArray = pathinfo(public_path().$candidate->filepath_cv);

             ?>
                @if(isset($fileArray['extension'])&&$fileArray['extension']=="pdf")
                    <embed src="{{asset($candidate->filepath_cv)}}" width="800" height="500"> 
                @endif
            @endif
             <br><br>
                <!-- <input type="radio" name="cv_selc" ng-model="cv_selc" value="text" checked="checked"/>  URL &nbsp&nbsp -->
                <!-- <input type="radio" name="cv_selc" ng-model="cv_selc" value="file"> Upload <br/> -->
                <!-- <input ng-show="cv_selc=='text'"name="filepath_cv" type="text" class="form-control" value="{{$candidate->filepath_cv}}"> -->
                <input  name="filepath_cv" type="file" class="form-control" value="{{Input::old('filepath_cv')}}">
          
       </div>
        <div class="form-group">
           {{ Form::label('filepath_video', 'Video :') }} 
           <br>
            @if(isset($candidate->filepath_video))
             <embed src="{{asset($candidate->filepath_video)}}" allowfullscreen="true" width="500" height="500"> 
            @endif
              <br><br>
               <input name="filepath_video" type="text" class="form-control" value="{{$candidate->filepath_video}}">
           
       </div>
        
        {{ Form::label('Personal Details :') }}
                <div class="form-group">
                    
                    {{ Form::text('thai_saluation', Input::old('thai_saluation'), array('class' => 'form-control','placeholder'=>'คำนำหน้าชื่อ' )) }}
                    {{ Form::text('thai_firstname', Input::old('thai_firstname'), array('class' => 'form-control','placeholder'=>'ชื่อ' )) }}
                    {{ Form::text('thai_lastname', Input::old('thai_lastname'), array('class' => 'form-control','placeholder'=>'นามสกุล' )) }}
                </div>
              	<div class="form-group">
                    
                    {{ Form::text('eng_saluation', Input::old('end_saluation'), array('class' => 'form-control','placeholder'=>'Saluation' , 'required')) }}
                    {{ Form::text('first', Input::old('first'), array('class' => 'form-control','placeholder'=>'First Name' , 'required')) }}
                    {{ Form::text('last', Input::old('last'), array('class' => 'form-control','placeholder'=>'Last name' , 'required')) }}
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
                    {{ Form::text('passport_number', Input::old('passport_number'), array('class' => 'form-control' )) }}
                </div>
                <div class="form-group">
                    {{ Form::label('idcard', 'National ID Number :') }}
                    {{ Form::text('idcard', Input::old('idcard'), array('class' => 'form-control' )) }}
                </div>
                <div class="form-group">
                    {{ Form::label('nationality', 'Nationality :') }}
                    {{ Form::text('nationality', Input::old('nationality'), array('class' => 'form-control' )) }}
                </div>

                {{ Form::label( 'Contact information :') }}
                <div class="form-group">
                    {{ Form::label('email', 'Email :') }}
                    {{ Form::text('email', Input::old('email'), array('class' => 'form-control' )) }}
                </div>
                <div class="form-group">
                    {{ Form::label('contact_number', 'Contact Number :') }}
                    {{ Form::text('contact_number', Input::old('contact_number'), array('class' => 'form-control' )) }}
                </div>
                <div class="form-group">
                    {{ Form::label('full_location', 'Current Living Location :') }}
                    {{ Form::text('full_location', Input::old('full_location'), array('class' => 'form-control' )) }}
                </div>
                <div class="form-group">
                    {{ Form::label('city', 'City :') }}
                    {{ Form::text('city', Input::old('city'), array('class' => 'form-control' )) }}
                </div>
                <div class="form-group">
                    {{ Form::label('zip_coder', 'Zip/Postal Code :') }}
                    {{ Form::text('zip_code', Input::old('zip_code'), array('class' => 'form-control' )) }}
                </div>
                 <div class="form-group">
                    {{ Form::label('country', 'Country :') }}
                    {{ Form::text('country', Input::old('country'), array('class' => 'form-control' )) }}
                </div>

    {{ Form::submit('Save', array('class' => 'btn btn-primary btn-lg btn-block')) }}

    {{ Form::close() }}
            </div>
        </div>
       
@stop





@section('script')
    <script src="<?php echo asset('js/bootstrap-lightbox.js')?>"></script>
    
@stop

