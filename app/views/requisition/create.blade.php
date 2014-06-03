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
                <h1>Create a requisition</h1>
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


                {{ Form::open(array('url' => 'requisition','files'=>true ))}}

            <!--    <div class="form-group">
                  {{ Form::label('job_title_id', 'Job Title :') }}  
                 {{ Form::text('job_title', Input::old('job_title'), array('class' => 'form-control', 'id' => 'form','ng-model'=>'try1','ng-blur'=>'checkProgress()','placeholder'=>'Enter job title','required')) }}
                  </div>-->
                  <p>group</p> @{{group}}<br>
                  <!--
                <div class="form-group">
                    {{ Former::select('group', 'Group :')->attributes(array('ng-model' => 'GGroup','ng-blur'=>'checkGroup()'))->class('form-control scrollable-menu')->addOption('Select Group')
                            ->fromQuery(Position::All()->unique(), 'group', 'group') }}    
                </div>
            -->

                <div class="form-group">
                    <label for="group">Group :</label>
                    <select ng-model="group" ng-blur="checkGroup()" class="form-control scrollable-menu ng-valid ng-dirty" id="group" name="group">
                        <option value="">Select Group</option>
                        <option ng-repeat="position in allPosition | unique:'group'" value="@{{position.group}}">@{{position.group}}</option>
                        
                    </select>    
                </div>

                <div class="form-group" ng-show="showDivision">
                    <label for="division">Division :</label>
                    <select ng-model="division" ng-blur="checkDivision()" class="form-control scrollable-menu" id="division" name="division">
                        <option value="">Select Division</option>
                        <option ng-repeat="position in allPosition | filter:{group:group} | unique:'division'" value="@{{position.division}}">@{{position.division}}</option>
                        
                    </select>
                </div>

                <div class="form-group" ng-show="showOrganization">
                    <label for="organization">Organization :</label>
                    <select ng-model="organization" ng-blur="checkOrganization()" class="form-control scrollable-menu" id="organization" name="organization">
                        <option value="">Select Organization</option>
                        <option ng-repeat="position in allPosition | filter:{group:group,division:division} | unique:'organization'" value="@{{position.organization}}">@{{position.organization}}</option>
                        
                    </select>
                </div>

                 <div class="form-group" ng-show="showJobTitle">
                    <label for="job_title">Job Title :</label>
                    <select ng-model="job_title" ng-blur="" class="form-control scrollable-menu" id="job_title" name="job_title">
                        <option value="">Select Job Title</option>
                        <option ng-repeat="position in allPosition | filter:{group:group,division:division,organization:organization} | unique:'job_title'" value="@{{position.position_id}}">@{{position.job_title}}</option>
                        
                    </select>
                </div>

                <!--
                <div class="form-group" ng-show="showDivision">
                    {{ Former::select('division', 'Division :')->class('form-control scrollable-menu')->addOption('Select Division')
                            ->fromQuery(Position::All()->unique(), 'division','division') }}    
                </div>
                <div class="form-group">
                    {{ Former::select('organization', 'Organization :')->class('form-control scrollable-menu')->addOption('Select Organization')
                            ->fromQuery(Position::All()->unique(), 'organization','organization') }}    
                </div>
                <div class="form-group">
                    {{ Former::select('position_id', 'Job Title :')->class('form-control scrollable-menu')->addOption('Select Job Title')
                            ->fromQuery(Position::All()->unique(), 'job_title','position_id') }}    
                </div>

            <div class="form-group">
                {{ Former::select('corporate_title_id', 'Corporate Title :')->attributes(array('class' => 'form-control scrollable-menu','style'=>'         width:250px;
                height: auto;
                max-height: 100px;
                overflow-x: hidden;'))->addOption('Select Corporate Title')
                        ->fromQuery(CorporateTitle::All(), 'name', 'corporate_title_id') }}    
            </div>

            <div class="form-group">
<<<<<<< HEAD
                {{ Former::select('dept_id', 'Department :')->class('form-control scrollable-menu')->addOption('Select Department')
                        ->fromQuery(Dept::All(), 'name', 'dept_id') }}    
            </div>
            -->

            <div class="form-group">
                    {{ Form::label('total_number', 'No. of Vacancy :') }}
                    {{ Form::input('number','total_number', Input::old('qualification'), array('min'=>'0','max'=>'1000','placeholder'=>'0','class' => 'form-control', 'id' => 'form', 'required')) }}
                </div>
            <div class="form-group">
                {{ Former::select('recruitment_obj_template_id','Recruitment Objective :')->class('form-control scrollable-menu')->addOption('Select Recruitment Objective')
                        ->fromQuery(RecruitmentObjTemplate::All(), 'message', 'recruitment_objective_template_id') }}  
                 <br>
                 {{ Form::text('recruitment_objective', Input::old('recruitment_objective'), array('class' => 'form-control', 'id' => 'form','placeholder'=>'Recruitment Objective Note')) }}   
            </div>

            <div class="form-group">
                {{ Former::select('recruitment_type_id','Recruitment type :')->class('form-control scrollable-menu')->addOption('Select Recruitment Type')
                        ->fromQuery(RecruitmentType::All(), 'name', 'recruitment_type_id') }}  
            </div>
             <div class="form-group">
                 {{ Former::select('location_id', 'Location :')->class('form-control scrollable-menu')->addOption('Select Location')
                        ->fromQuery(Location::All(), 'name', 'location_id') }}  
            </div>
                    
                        <div class="form-group">
                    {{ Form::label('year_of_experience', 'Years of experience :') }}
                    {{ Form::input('number','year_of_experience', Input::old('qualification'), array('min'=>'0','max'=>'100','placeholder'=>'0','class' => 'form-control', 'id' => 'form', 'required')) }}
                </div>
                 
                <div class="form-group">
                    {{ Form::label('responsibility', 'Responsibilities :') }}
                    {{ Form::text('responsibility', Input::old('responsibility'), array('class' => 'form-control', 'id' => 'form', 'required')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('qualification', 'Qualifications :') }}
                    {{ Form::text('qualification', Input::old('qualification'), array('class' => 'form-control', 'id' => 'form','required')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('note', 'Note :') }}
                    {{ Form::textarea('note', Input::old('note'), array('class' => 'form-control', 'id' => 'form','size' => '30x5')) }}
                </div>

            {{ Form::submit('Create', array('class' => 'btn btn-primary btn-lg btn-block')) }}

            {{ Form::close() }}
            </div>
        </div>
    </div>
              
@stop





@section('script')
    <script src="<?php echo asset('js/bootstrap-lightbox.js')?>"></script>
@stop
