@extends('admin.layouts.main.recruiter')
@section('title')
thisIsTitle
@stop

@section('libs')
<link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
<link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
<script src="<?php echo asset('js/jquery.js')?>"></script> 
{{ HTML::style('assets/css/bootstrap.css') }}
@include('includes.datatable')
<script type="text/javascript">
var app = angular.module('app',[]);
app.controller('appCtrl',['$scope', '$http',
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

    $scope.score = "{{(isset($input['score'])?$input['score']:'')}}";
    $scope.monthly_salary = "{{(isset($input['monthly_salary'])?$input['monthly_salary']:'')}}";
    $scope.experience = "{{(isset($input['experience'])?$input['experience']:'')}}";

    ///show zone
    $scope.showEd=false;
    $scope.showEx=false;

          }//before end controller


        ]);//end controller

</script>
@stop

@section('content')
<!--row two for TO DO REQUISITION-->
<div ng-app="app">
  <div class="box box-primary" ng-controller="appCtrl" >
    <div class="box-header" >

      <h3 class="box-title"  style="font-size:2.5em;">
        Select candidate <i class="ion ion-person-add"></i>
      </h3>
    </div>
    <div class="box-body">

          <!-- Nav tabs -->

          <ul class="nav nav-tabs">
            <li class="active"><a href="#quick" data-toggle="tab">Quick search</a></li>
            <li><a href="#advance" data-toggle="tab">Advanced search</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="quick">
              <div class="panel panel-default">
                <div class="panel-body">
                  {{ Form::label('keyword','Keyword : ')}}
                  <br>
                  <input type="text" class="form-control" placeholder="Enter ...">
                  <hr>
                  <div class="row">
                    <div class="col col-md-4">
                    </div>
                    
                    <div class="col col-md-3">
                      <button class="btn btn-warning btn-lg" style="width:100%;" type="submit">Submit</button>
                    </div>
                    <div class="col col-md-4">
                    </div>
                  </div><!--end second row-->
                </div>
              </div>
            </div>
            <div class="tab-pane" id="advance">
              <div class="panel panel-default">
                <div class="panel-body">
                  {{Form::open(array('url' => 'recruiter-shortlist-candidate/'.$requisition_id, 'method' => 'get'))}}
                  <div class="panel-group" id="education">
                     <div class="panel panel-info">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#education" href="#eduSearch">
                            Education
                          </a>
                        </h4>
                      </div>
                      <div id="eduSearch" class="panel-collapse collapse">
                        <div class="panel-body" style="padding-bottom:2em;">
                          <div class="row">
                            <div class="col col-md-10 col-md-offset-1">

                              <div class="panel panel-default">
                                <div class="panel-body">
                                  <strong>Degree :</strong><br>
                                    <div class="row">
                                      <div class="col col-md-2"></div>
                                      <div class="col col-md-2">
                                        {{Form::checkbox('bachelor', 1,isset($input['bachelor'])?$input['bachelor']:'');}}
                                        {{ Form::label('bachelor','Bachelor')}}
                                      </div>
                                      <div class="col col-md-2">
                                        {{Form::checkbox('master', 1,isset($input['master'])?$input['master']:'');}}
                                        {{ Form::label('master','Master')}}
                                      </div>
                                      <div class="col col-md-2">
                                        {{Form::checkbox('doctor', 1,isset($input['doctor'])?$input['doctor']:'');}}
                                        {{ Form::label('doctor','Doctor')}}
                                      </div>
                                      
                                    </div>
                                </div>
                              </div>
                              <hr>
                              {{ Form::label('field_of_study','Field of study : ')}}
                              <br>
                              {{ Form::text('field_of_study',  isset($input['field_of_study'])?$input['field_of_study']:'', array('class' => 'form-control','placeholder'=>'search field of study','style'=>'font-size:1.1em;')) }}

                              <br>
                              {{ Form::label('major','Major : ')}}
                              <br>
                              {{ Form::text('major', isset($input['major'])?$input['major']:'', array('class' => 'form-control','placeholder'=>'search major','style'=>'font-size:1.1em;')) }}
                              <br>
                              {{ Form::label('school_name','Name of institution : ')}}
                              <br>
                              {{ Form::text('school_name', isset($input['school_name'])?$input['school_name']:'', array('class' => 'form-control','placeholder'=>'search name of institution','style'=>'font-size:1.1em;')) }}
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel-group" id="experience">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#experience" href="#expSearch">
                            Work experience
                          </a>
                        </h4>
                      </div>
                      <div id="expSearch" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col col-md-offset-1 col-md-10">
                              {{ Form::label('company_name','Company name : ')}}
                              <br>
                              {{ Form::text('company_name', isset($input['company_name'])?$input['company_name']:'', array('class' => 'form-control','placeholder'=>'search company name','style'=>'font-size:1.1em;')) }}
                              <br>
                              {{ Form::label('location','Location : ')}}
                              <br>
                              {{ Form::text('location', isset($input['location'])?$input['location']:'', array('class' => 'form-control','placeholder'=>'search location of company','style'=>'font-size:1.1em;')) }}

                              <br>
                              {{ Form::label('position','Position : ')}}
                              <br>
                              {{ Form::text('position', isset($input['position'])?$input['position']:'', array('class' => 'form-control','placeholder'=>'search position','style'=>'font-size:1.1em;')) }}

                              <br>
                              {{Former::select('monthly_salary','Monthly Salary :')->addOption('Select Range')->options(array('>=','<=','between'))->attributes(array('ng-model'=>'monthly_salary'))}}
                              
                              <input ng-show="monthly_salary==='0'||monthly_salary==1||monthly_salary==2"name="monthly_salary1" type="number" min=0 max=1000000 class="form-control" value="{{isset($input['monthly_salary1'])?$input['monthly_salary1']:''}}">
                              <input ng-show="monthly_salary==2"name="monthly_salary2" type="number" min=0 max=1000000 class="form-control" value="{{isset($input['monthly_salary2'])?$input['monthly_salary2']:''}}">
                              <br>  
                              {{Former::select('experience','Year of experience :')->addOption('Select Range')->options(array('>=','<=','between'))->attributes(array('ng-model'=>'experience'))}}
                              <input ng-show="experience==='0'||experience==1||experience==2"name="experience1" type="number" min=0 max=50 class="form-control" value="{{isset($input['experience1'])?$input['experience1']:''}}">
                              <input ng-show="experience==2"name="experience2" type="number" min=0 max=50 class="form-control" value="{{isset($input['experience2'])?$input['experience2']:''}}">
                              <br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel-group" id="skill">
                     <div class="panel panel-info">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#skill" href="#skillSearch">
                            Skill
                          </a>
                        </h4>
                      </div>
                      <div id="skillSearch" class="panel-collapse collapse">
                        <div class="panel-body" style="padding-bottom:2em;">
                          <div class="row">
                            <div class="col col-md-10 col-md-offset-1">
                              {{ Form::label('skill','Skill : ')}}
                              <br>
                              {{ Form::text('skill', isset($input['skill'])?$input['skill']:'', array('class' => 'form-control','placeholder'=>'search skill','style'=>'font-size:1.1em;')) }}
                              <br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel-group" id="score">
                     <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#score" href="#scoreSearch">
                            Score from prescreening question
                          </a>
                        </h4>
                      </div>
                      <div id="scoreSearch" class="panel-collapse collapse">
                        <div class="panel-body" style="padding-bottom:2em;">
                          <div class="row">
                            <div class="col col-md-3 col-md-offset-1">
                              {{Former::select('score','Score :')->addOption('Select Range')->options(array('>=','<=','between'))->attributes(array('ng-model'=>'score'))}}
                              <div class="row">
                                <div class="col col-md-5 ">
                                  <input ng-show="score==='0'||score==1||score==2"name="score1" type="number" min=0 max=1000 class="form-control" value="{{isset($input['score1'])?$input['score1']:''}}">
                                </div>
                                <div ng-show="score==2" class="col col-md-1">
                                 - 
                                </div>
                                <div class="col col-md-5">
                                  <input ng-show="score==2" name="score2" type="number" min=0 max=1000 class="form-control" value="{{isset($input['score2'])?$input['score2']:''}}">
                                </div>
                              </div>
                              <!-- <input ng-show="score==='0'||score==1||score==2"name="score1" type="number" min=0 max=1000 class="form-control" value="{{isset($input['score1'])?$input['score1']:''}}">
                              <br>
                              <input ng-show="score==2"name="score2" type="number" min=0 max=1000 class="form-control" value="{{isset($input['score2'])?$input['score2']:''}}">
                              <br> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel-group" id="resume">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#resume" href="#resumeSearch">
                            Resume search
                          </a>
                        </h4>
                      </div>
                      <div id="resumeSearch" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col col-md-offset-1 col-md-10">
                              {{ Form::label('resume','Resume : ')}}
                              <br>
                              {{ Form::text('resume', isset($input['resume'])?$input['resume']:'', array('class' => 'form-control','placeholder'=>'search in resume','style'=>'font-size:1.1em;')) }}
                              <br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col col-md-4">
                    </div>
                    
                    <div class="col col-md-3">
                      <button class="btn btn-primary btn-lg" style="width:100%;" type="submit">Submit</button>
                    </div>
                    <div class="col col-md-4">
                    </div>
                  </div><!--end second row-->

                  {{Form::close()}}


                </div><!--end panel-->
              </div><!--end panel default-->
            </div><!--end tab advance-->
          </div>
          <!--end tab-->

      


     <!-- first data table for requisition-->
     <div class="box box-solid box-primary">
      <!-- /.box-header -->
    <!--   {{Form::open(array('url' => 'recruiter-shortlist-candidate/'.$requisition_id, 'method' => 'get'))}}

      {{ Form::label('Education')}}
      <br>
      <br>

      {{Form::checkbox('bachelor', 1,isset($input['bachelor'])?$input['bachelor']:'');}}
      {{ Form::label('bachelor','Bachelor')}}
      <br>
      {{Form::checkbox('master', 1,isset($input['master'])?$input['master']:'');}}
      {{ Form::label('master','Master')}}
      <br>
      {{Form::checkbox('doctor', 1,isset($input['doctor'])?$input['doctor']:'');}}
      {{ Form::label('doctor','Doctor')}}
      <br>
      {{ Form::label('field_of_study','Field of study : ')}}
      <br>
      {{ Form::text('field_of_study',  isset($input['field_of_study'])?$input['field_of_study']:'', array('class' => 'form-control','placeholder'=>'search field of study','style'=>'font-size:1.1em;')) }}

      <br>
      {{ Form::label('major','Major : ')}}
      <br>
      {{ Form::text('major', isset($input['major'])?$input['major']:'', array('class' => 'form-control','placeholder'=>'search major','style'=>'font-size:1.1em;')) }}
      <br>
      {{ Form::label('school_name','Name of institution : ')}}
      <br>
      {{ Form::text('school_name', isset($input['school_name'])?$input['school_name']:'', array('class' => 'form-control','placeholder'=>'search name of institution','style'=>'font-size:1.1em;')) }}
     
      <br>
      {{ Form::label('Experience')}}
      <br>
      <br>
      {{ Form::label('company_name','Company name : ')}}
      <br>
      {{ Form::text('company_name', isset($input['company_name'])?$input['company_name']:'', array('class' => 'form-control','placeholder'=>'search company name','style'=>'font-size:1.1em;')) }}
      <br>
      {{ Form::label('location','Location : ')}}
      <br>
      {{ Form::text('location', isset($input['location'])?$input['location']:'', array('class' => 'form-control','placeholder'=>'search location of company','style'=>'font-size:1.1em;')) }}

      <br>
      {{ Form::label('position','Position : ')}}
      <br>
      {{ Form::text('position', isset($input['position'])?$input['position']:'', array('class' => 'form-control','placeholder'=>'search position','style'=>'font-size:1.1em;')) }}

      <br>
      {{Former::select('monthly_salary','Monthly Salary :')->addOption('Select Range')->options(array('>=','<=','between'))->attributes(array('ng-model'=>'monthly_salary'))}}
      <input ng-show="monthly_salary==='0'||monthly_salary==1||monthly_salary==2"name="monthly_salary1" type="number" min=0 max=1000000 class="form-control" value="{{isset($input['monthly_salary1'])?$input['monthly_salary1']:''}}">
      <input ng-show="monthly_salary==2"name="monthly_salary2" type="number" min=0 max=1000000 class="form-control" value="{{isset($input['monthly_salary2'])?$input['monthly_salary2']:''}}">
      <br>  
      {{Former::select('experience','Year of experience :')->addOption('Select Range')->options(array('>=','<=','between'))->attributes(array('ng-model'=>'experience'))}}
      <input ng-show="experience==='0'||experience==1||experience==2"name="experience1" type="number" min=0 max=50 class="form-control" value="{{isset($input['experience1'])?$input['experience1']:''}}">
      <input ng-show="experience==2"name="experience2" type="number" min=0 max=50 class="form-control" value="{{isset($input['experience2'])?$input['experience2']:''}}">
      <br>
      
      <br>
      {{ Form::label('skill','Skill : ')}}
      <br>
      {{ Form::text('skill', isset($input['skill'])?$input['skill']:'', array('class' => 'form-control','placeholder'=>'search skill','style'=>'font-size:1.1em;')) }}
      <br>
      

      <br>
      {{Former::select('score','Score :')->addOption('Select Range')->options(array('>=','<=','between'))->attributes(array('ng-model'=>'score'))}}
      <input ng-show="score==='0'||score==1||score==2"name="score1" type="number" min=0 max=1000 class="form-control" value="{{isset($input['score1'])?$input['score1']:''}}">
      <input ng-show="score==2"name="score2" type="number" min=0 max=1000 class="form-control" value="{{isset($input['score2'])?$input['score2']:''}}">
      <br>
      
      <br>
      {{ Form::label('resume','Resume : ')}}
      <br>
      {{ Form::text('resume', isset($input['resume'])?$input['resume']:'', array('class' => 'form-control','placeholder'=>'search in resume','style'=>'font-size:1.1em;')) }}
      <br>

      <div class="row">
        <div class="col col-md-1">
        </div>
        <div class="col col-md-4">
        </div>
        <div class="col col-md-4">
          <button class="btn btn-default " style="width:100%;" type="submit">Submit</button>
        </div>
      </div>

      {{Form::close()}} -->
      <!--table style "table-striped"-->
      <div class="box-body table-responsive no-padding">

        <div style="overflow: auto;">
          {{ $datatable}}
          <!-- .'?major='.Input::getElementById('major') -->
                                       <!--  <table border="1">
                                          <tr>
                                            @if(count($applications->first()) > 0)
                                              @foreach($applications->first()->toArray() as $key => $value)
                                                <th>{{ $key }}</th>
                                              @endforeach
                                            @endif
                                          </tr>
                                          @if(count($applications->first()) > 0)
                                            @foreach($applications as $application)
                                              <tr>
                                                @foreach($application->toArray() as $key => $value)
                                                  <td>
                                                  <?php
                                                  // if($key != "is_in_basket"){
                                                  //   echo $value;
                                                  // }else{
                                                  //   echo '<center>'
                                                  //   .'<iframe width="30px" height="20px" scrolling="no" frameBorder="0" name="ckbox_f'.$application->application_id.'" id="ckbox_f'.$application->application_id.'">'
                                                  //   .'</iframe>'
                                                  //   .'</center>'
                                                  //   .'<form action="../recruiter-shortlist-candidate-ckbox" id="ckbox'.$application->application_id.'" target="ckbox_f'.$application->application_id.'" method="GET">'
                                                  //   .'<input type="hidden" name="id" value="'.$application->application_id.'"/>'
                                                  //   .'</form>'
                                                  //   .'<script>'
                                                  //   .'document.getElementById("ckbox'.$application->application_id.'").submit();'
                                                  //   .'</script>';
                                                  //}
                                                  ?>
                                                  </td>
                                                @endforeach
                                              </tr>
                                            @endforeach
                                          @endif
                                        </table> -->

                                      </div>

                                    </div><!-- /.box-body -->
                                  </div><!-- /.box -->

                                </div><!-- /.box-body -->
                        <!--
                        <div class="box-footer">
                            <br>
                        </div>
                      -->
                    </div>
                    <!--end TO DO REQUISITION-->
                  </div>
                  @stop
