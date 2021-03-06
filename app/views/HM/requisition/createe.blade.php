<!DOCTYPE html>
<html ng-app="nameApp">
  <head>
    <meta charset="utf-8">


    <title>create requisition</title>

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>">

    <style>
        .scrollable-menu {
            width:250px;
        height: auto;
        max-height: 100px;
        overflow-x: hidden;
        }


    </style>
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
    <script src="<?php echo asset('js/createReq-manager.js')?>"></script>

    </head>
    <body ng-controller="NameCtrl">
        <div class="container" ng-controller="NameCtrl">
        <h1>create requisition</h1>
        <hr/>
    
        <div class="row">
            <div class="col-sm-6">
            <progressbar max="3" value="count"></progressbar>
            </div>
            <div class="col-sm-6">
            <progressbar class="progress-striped active" max="3" value="count" type="danger"><i>@{{count}} / 3</i></progressbar>
            </div>
        </div>


        <!-- paste error message here!!! -->
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="col-md-6 col-md-offset-3" style="margin-top:10px">
        <h1>Create a requisition</h1>

        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}


        {{ Form::open(array('url' => 'requisition','files'=>true ))}}
        <div class="form-group">
          {{ Form::label('job_title_id', 'Job Title :') }}  
         {{ Form::text('job_title', Input::old('job_title'), array('class' => 'form-control', 'id' => 'form','ng-model'=>'try1','ng-blur'=>'checkProgress()','placeholder'=>'Enter job title','required')) }}
          </div>


    <div class="form-group">
        {{ Former::select('corporate_title_id', 'Corporate Title :')->attributes(array('class' => 'form-control scrollable-menu','style'=>'         width:250px;
        height: auto;
        max-height: 100px;
        overflow-x: hidden;'))->addOption('Select Corporate Title')
                ->fromQuery(CorporateTitle::All(), 'name', 'corporate_title_id') }}    
    </div>

    <div class="form-group">
        {{ Former::select('dept_id', 'Department :')->class('form-control scrollable-menu')->addOption('Select Department')
                ->fromQuery(Dept::All(), 'name', 'dept_id') }}    
    </div>

    <div class="form-group">
            {{ Form::label('total_number', 'No. of Vacancy :') }}
            {{ Form::input('number','total_number', Input::old('qualification'), array('min'=>'0','max'=>'1000','placeholder'=>'0','class' => 'form-control', 'id' => 'form', 'required')) }}
        </div>
    <div class="form-group">
        {{ Former::select('recruitment_obj_template_id','Recruitment Objective :')->class('form-control scrollable-menu')->addOption('Select Recruitment Objective')
                ->fromQuery(RecruitmentObjTemplate::All(), 'message', 'recruitment_objective_template_id') }}  
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
<hr class="tall" />



</html>
