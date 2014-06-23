@extends('admin.layouts.main.recruiter')

@section('title')
HM-create-requisition
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>">
      <style>
        .scrollable-menu {
           width:500px;
        height: auto;
        max-height: 200px;
        overflow-x: hidden;
        }


    </style>
    
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
    <script src="https://code.angularjs.org/1.2.17/angular-route.js"></script>
    <!--angular file-->
    <script>var xxx = {{$requisition->requisition_id}};
    </script>
    <script src="<?php echo asset('js/editReq-manager.js')?>"></script>
    <!-- end anugular-->

    <script src="<?php echo asset('vendor/ui-utils.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-utils.min.js')?>"></script>
@stop


@section('content')
    <div ng-app="nameApp">
        <div class="container" ng-controller="NameCtrl">

            <div class="col-md-7 col-md-offset-1" style="margin-top:10px">
                <h1>Verify a requisition before posting </h1>
                <hr/>

                <div class="row">
                    <!--
                    <div class="col-sm-6">
                    <progressbar max="3" value="count"></progressbar>
                    </div>-->
                    <div class="col-sm-12">
                    <progressbar class="progress-striped active" max="5" value="count" type="danger"><i>@{{count}} / 5</i></progressbar>
                    </div>
                </div>

                 @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <!-- if there are creation errors, they will show here -->
                {{ HTML::ul($errors->all()) }}

        <?/**
        START add + edit code
        */?>

        {{ Form::model($requisition, array('route' => array('recruiter-requisition-post.update', $requisition->requisition_id), 'method' => 'PUT', 'onsubmit' => 'questionToJson();')) }}
        
        <div class="form-group">
            {{ Form::label('job_title', 'Job Title :') }}
            {{ Form::text('job_title', Input::old('job_title'), array('class' => 'form-control' ,'required')) }}
        </div>

        <div class="form-group">
            {{ Form::label('job_description', 'Job Summary :') }}
            {{ Form::text('job_description', Input::old('job_description'), array('class' => 'form-control' ,'required')) }}
        </div>

        <?/**
        END add + edit code
        */?>

       {{ Former::populate($requisition) }}
        {{ Former::populateField('group', $requisition->position()->first()->group) }}
        {{ Former::populateField('division', $requisition->position()->first()->division) }}
        {{ Former::populateField('organization', $requisition->position()->first()->organization) }}
        {{ Former::populateField('jobTitle', $requisition->position()->first()->job_title) }}
        {{ Former::populateField('position_id', $requisition->position_id) }}

       <!--  {{$requisition->group}} -->

       
        <div class="form-group">
                    <label for="group">Group : </label>

                   <!--  <select ng-model="group"  ng-click="checkGroup()"  class="form-control scrollable-menu ng-valid ng-dirty " id="group" name="group">
                        <option value="{{$requisition->group}}" selected="selected">{{$requisition->group}}</option>
                        <option ng-repeat="position in allPosition | unique:'group'" value="@{{position.group}}" >@{{position.group}}</option>
                        
                        <div ng-repeat="position in allPosition | unique:'group'">
                            <div ng-if="$requisition->group==position.group"><option value="@{{position.group}}" selected>@{{position.group}}</option></div>
                            <div ng-if="$requisition->group!=position.group"><option value="@{{position.group}}">@{{position.group}}</option></div>
                        </div>
                    
                    </select>   -->  

                   <!--  HEY groupgroup : @{{requisition}}<br> -->
                    <select ng-model="requisition.group"  ng-change="checkGroup()"  
                        class="form-control scrollable-menu ng-valid ng-dirty " 
                        id="group" name="group"
                        ng-options="position.group as position.group for position in allPosition     | unique:'group'">
                        
                    </select> 
                </div>

                <div class="form-group">
                    <label for="division">Division :</label>
                    <!-- <select ng-model="requisition.division" ng-change="checkDivision()" class="form-control scrollable-menu" id="division" name="division">
                         <option ng-repeat="position in allPosition | filter:{group:requisition.group} | unique:'division'" value="@{{position.division}}">@{{position.division}}</option>
                        
                    </select> -->
                    <select ng-model="requisition.division"  ng-change="checkDivision()"  
                        class="form-control scrollable-menu ng-valid ng-dirty " 
                        id="division" name="division"
                        ng-options="position.division as position.division for position in allPosition  | filter:{group:requisition.group}    | unique:'division'">
                        
                    </select> 
                </div>

                <div class="form-group">
                    <label for="organization">Organization :</label>
                    <select ng-model="requisition.organization" ng-change="checkOrganization()" 
                        class="form-control scrollable-menu" id="organization" name="organization"
                        ng-options="position.organization as position.organization 
                        for position in allPosition | filter:{group:requisition.group,division:requisition.division} | unique:'organization' "
                        >
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="job_title">Job Title :</label>
                    <select ng-model="requisition.position_id"  
                    class="form-control scrollable-menu" id="position_idx" name="position_idx"
                    ng-options="position.position_id as position.job_title 
                    for position in allPosition 
                    | filter:{group:requisition.group,division:requisition.division,organization:requisition.organization} | unique:'position_id'"
                    ng-change="changeJobTitle(@{{ requisition.position_id }});"
                    >
                    <input type="hidden" name="position_id" value="@{{requisition.position_id}}"/>
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
                    {{ Form::textarea('responsibility', Input::old('responsibility'), array('class' => 'ckeditor', 'required')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('qualification', 'Qualifications :') }}
                    {{ Form::textarea('qualification', Input::old('qualification'), array('class' => 'ckeditor','required')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('questions', 'Screening Question :') }}<br>
                    <input type="hidden" id="question_json" name="question_json"/>
                    <iframe id="question" width="800px" height="100px" scrolling="no" frameBorder="0"></iframe>
                    <input id="ng-question_id" type='hidden' value="@{{ requisition.position_id }}"/>
                    <script>
                        function changeJobTitle(x){
                            document.getElementById('question').src = "../question-table/"+document.getElementById('ng-question_id').value+"/"+"{{ count($requisition->question()->get()) > 0 ? 'false' : 'true' }}";
                        }
                        function questionToJson(){
                            var jsonObj = [];
                            var table = document.getElementById('question').contentWindow.document.getElementById('t');
                            for(var i=1;i<table.rows.length;i++){
                                jsonObj[i-1] = {};
                                jsonObj[i-1].question_id = table.rows[i].children[0].children[0].value;
                                jsonObj[i-1].is_checked = table.rows[i].children[0].children[1].children[0].checked?true:false;
                                jsonObj[i-1].question = table.rows[i].children[1].children[0].value;
                                jsonObj[i-1].answers = [];
                                var table2 = table.rows[i].children[2].children[0];
                                for(var j=0;j<table2.rows.length;j++){
                                    jsonObj[i-1].answers[j] = {};
                                    jsonObj[i-1].answers[j].answer_id = table2.rows[j].children[0].children[0].value;
                                    jsonObj[i-1].answers[j].name = table2.rows[j].children[0].children[1].value;
                                    jsonObj[i-1].answers[j].point = table2.rows[j].children[1].children[0].value;
                                }
                            }
                            document.getElementById('question_json').value = JSON.stringify(jsonObj);
                        }
                    </script>
                    <!-- 
                        {{ json_decode('[{"name":"a","value":1},{"name":"b"}]')[0]->name }}
                     -->
                    <script>
                        /*var x = [];
                        x[0] = {};
                        x[0].name = "north";
                        x[0].value = 123;
                        x[1] = {};
                        x[1].name = 'cos';
                        alert(JSON.stringify(x));*/
                    </script>
                </div>
                <div class="form-group">
                    {{ Form::label('note', 'Note :') }}
                    {{ Form::textarea('note', Input::old('note'), array('class' => 'form-control', 'id' => 'form','size' => '30x5')) }}
                </div>


    {{ Form::button('Save & View', array('name' => 'view', 'value' => true, 'type' => 'submit','class' => 'btn btn-primary btn-warning btn-block')) }}
               

    {{ Form::close() }}
            </div>
        </div>
    </div>      
@stop





@section('script')
    <script src="<?php echo asset('js/bootstrap-lightbox.js')?>"></script>
        <script src="<?php echo asset('js/bootstrap-lightbox.js')?>"></script>
    <script src="<?php echo asset('vendor/ckeditor/adapters/jquery.min.js')?>"></script>
<script src="<?php echo asset('vendor/ckeditor/ckeditor.js')?>"></script>
<script src="<?php echo asset('vendor/ckeditor/adapters/jquery_ckeditor.js')?>"></script>

  <script type="text/javascript">
  $(document).ready(function(){

    $( '.ckeditor' ).ckeditor();

  });
  </script>
@stop



        <?/**
        START add + edit code
        */?>

        {{ Form::model($requisition, array('route' => array('recruiter-requisition-post.update', $requisition->requisition_id), 'method' => 'PUT')) }}
        
        <div class="form-group">
            {{ Form::label('job_title', 'Job Title :') }}
            {{ Form::text('job_title', Input::old('job_title'), array('class' => 'form-control' ,'required')) }}
        </div>

        <?/**
        END add + edit code
        */?>

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
                    {{ Form::input('number','total_number', Input::old('qualification'), array('min'=>'0','max'=>'1000','placeholder'=>'0','class' => 'form-control', 'required')) }}
                </div>
            <div class="form-group">
                {{ Former::select('recruitment_obj_template_id','Recruitment Objective :')->class('form-control scrollable-menu')->addOption('Select Recruitment Objective')
                        ->fromQuery(RecruitmentObjectiveTemplate::All(), 'message', 'recruitment_objective_template_id') }}  
                 <br>
                 {{ Form::text('recruitment_objective', Input::old('recruitment_objective'), array('class' => 'form-control','placeholder'=>'Recruitment Objective Note')) }}   
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
                    {{ Form::input('number','year_of_experience', Input::old('qualification'), array('min'=>'0','max'=>'100','placeholder'=>'0','class' => 'form-control', 'required')) }}
                </div>
                 
                <div class="form-group">
                    {{ Form::label('responsibility', 'Responsibilities :') }}
                    {{ Form::text('responsibility', Input::old('responsibility'), array('class' => 'form-control', 'required')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('qualification', 'Qualifications :') }}
                    {{ Form::text('qualification', Input::old('qualification'), array('class' => 'form-control','required')) }}
                </div>
                <p><span style="font-weight:bold;">Note From HRBP : </span>{{ $requisition->note }}</p>
                <div class="form-group">
                    {{ Form::label('note', 'Note :') }}
                    {{ Form::textarea('note', '', array('class' => 'form-control','size' => '30x5')) }}
                </div>


      {{ Form::button('View', array('name' => 'view', 'value' => true, 'type' => 'submit', 'class' => 'btn btn-danger btn-lg pull-right','style'=>'width:45%;' )) }}
               

    {{ Form::close() }}
            </div>
        </div>
    </div>      
@stop





@section('script')
    <script src="<?php echo asset('js/bootstrap-lightbox.js')?>"></script>
@stop

