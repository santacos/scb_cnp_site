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
                <h1>Edit a requisition</h1>
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


        {{ Form::model($requisition, array('route' => array('hm-requisition.update', $requisition->requisition_id), 'method' => 'PUT')) }}
        {{ Former::populate($requisition) }}
        {{ Former::populateField('group', $requisition->position()->first()->group) }}
        {{ Former::populateField('division', $requisition->position()->first()->division) }}
        {{ Former::populateField('organization', $requisition->position()->first()->organization) }}
        {{ Former::populateField('jobTitle', $requisition->position()->first()->job_title) }}
        {{ Former::populateField('position_id', $requisition->position_id) }}

        {{$requisition->group}}


        <div class="form-group">
                    <label for="group">Group : </label>
                    <select ng-model="group"  ng-blur="checkGroup()"  class="form-control scrollable-menu ng-valid ng-dirty " id="group" name="group">
                        <option value="{{$requisition->group}}" selected="selected">{{$requisition->group}}</option>
                        <option ng-repeat="position in allPosition | unique:'group'" value="@{{position.group}}" >@{{position.group}}</option>
                        
                        <!-- <div ng-repeat="position in allPosition | unique:'group'">
                            <div ng-if="$requisition->group==position.group"><option value="@{{position.group}}" selected>@{{position.group}}</option></div>
                            <div ng-if="$requisition->group!=position.group"><option value="@{{position.group}}">@{{position.group}}</option></div>
                        </div> -->
                    
                    </select>    
                </div>

                <div class="form-group" ng-show="showDivision">
                    <label for="division">Division :</label>
                    <select ng-model="division" ng-blur="checkDivision()" class="form-control scrollable-menu" id="division" name="division">
                        <option value="{{$requisition->division}}" >{{$requisition->division}}</option>
                        <option ng-repeat="position in allPosition | filter:{group:group} | unique:'division'" value="@{{position.division}}">@{{position.division}}</option>
                        
                    </select>
                </div>

                <div class="form-group" ng-show="showOrganization">
                    <label for="organization">Organization :</label>
                    <select ng-model="organization" ng-blur="checkOrganization()" class="form-control scrollable-menu" id="organization" name="organization">
                        <option value="{{$requisition->organization}}" >{{$requisition->organization}}</option>
                        <option ng-repeat="position in allPosition | filter:{group:group,division:division} | unique:'organization'" value="@{{position.organization}}">@{{position.organization}}</option>
                        
                    </select>
                </div>

                 <div class="form-group" ng-show="showJobTitle">
                    <label for="job_title">Job Title :</label>
                    <select ng-model="position_id" ng-blur="" class="form-control scrollable-menu" id="position_id" name="position_id">
                       <option value="{{$requisition->position_id}}" >{{$requisition->jobTitle}}</option>
                        <option ng-repeat="position in allPosition | filter:{group:group,division:division,organization:organization} | unique:'position_id'" value="@{{position.position_id}}">@{{position.job_title}}</option>
                        
                    </select>
                </div>

            <div class="form-group">
                {{ Former::select('corporate_title_id', 'Corporate Title :')->attributes(array('class' => 'form-control scrollable-menu','style'=>'         width:250px;
                height: auto;
                max-height: 100px;
                overflow-x: hidden;'))->addOption('Select Corporate Title')
                        ->fromQuery(CorporateTitle::All(), 'name', 'corporate_title_id') }}    
            </div>

            <div class="form-group">
                    {{ Form::label('total_number', 'No. of Vacancy :') }}
                    {{ Form::input('number','total_number', Input::old('qualification'), array('min'=>'0','max'=>'1000','placeholder'=>'0','class' => 'form-control', 'id' => 'form', 'required')) }}
                </div>
            <div class="form-group">
                {{ Former::select('recruitment_obj_template_id','Recruitment Objective :')->class('form-control scrollable-menu')->addOption('Select Recruitment Objective')
                        ->fromQuery(RecruitmentObjectiveTemplate::All(), 'message', 'recruitment_objective_template_id') }}  
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

