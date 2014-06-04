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


                {{ Form::open(array('url' => 'hm-requisition','files'=>true ))}}

            <!--    <div class="form-group">
                  {{ Form::label('job_title_id', 'Job Title :') }}  
                 {{ Form::text('job_title', Input::old('job_title'), array('class' => 'form-control', 'id' => 'form','ng-model'=>'try1','ng-blur'=>'checkProgress()','placeholder'=>'Enter job title','required')) }}
                  </div>-->
                  <div class="form-group">
                    {{ Former::select('group', 'Group :')->class('form-control scrollable-menu')->addOption('Select Group')
                            ->fromQuery(Position::All()->unique(), 'group', 'group') }}    
                </div>
                <div class="form-group">
                    {{ Former::select('division', 'Devision :')->class('form-control scrollable-menu')->addOption('Select Division')
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
