@extends('admin.layouts.main.hm')

@section('title')
HM-create-requisition
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>">
      <style>
        .scrollable-menu {
            max-width:300px;
        height: auto;
        max-height: 200px;
        overflow-x: hidden;
        }


    </style>
    
    <!--for angular-->
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
    <script src="<?php echo asset('js/createReq-manager.js')?>"></script>

    <script src="<?php echo asset('vendor/ui-utils.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-utils.min.js')?>"></script>

    <script src="<?php echo asset('js/jquery.js')?>"></script> 

    
    
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular-sanitize.js"></script>
      
@stop

@section('content')
    <div ng-app="nameApp">
        <div class="container" ng-controller="NameCtrl">
            <!-- col-md-offset-1 -->
            

                <!--title of create requisition-->
                <div class="row">
                    <div class="col col-md-11 col-md-offset-1">
                        <div style="postion:fixed;">
                            <h1>Create a requisition</h1>
                            <hr/>
                            <div class="row">
                                <div class="col-sm-7">
                                <progressbar class="progress-striped active" max="12" value="count" type="warning"><i>@{{count}} / 12</i></progressbar>
                                </div>
                            </div>
                        </div>

                        @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif

                        <!-- if there are creation errors, they will show here -->
                        {{ HTML::ul($errors->all()) }}


                        {{ Form::open(array('url' => 'hm-requisition','files'=>true ))}}

                    </div>
                </div>

                    
                <!--
                <div class="form-group">
                  {{ Form::label('job_title_id', 'Job Title :') }}  
                 {{ Form::text('job_title', Input::old('job_title'), array('class' => 'form-control','ng-model'=>'try1','ng-blur'=>'checkProgress()','placeholder'=>'Enter job title','required')) }}
                  </div>-->
                  <!--
                <div class="form-group">
                    {{ Former::select('group', 'Group :')->attributes(array('ng-model' => 'GGroup','ng-blur'=>'checkGroup()'))->class('form-control scrollable-menu')->addOption('Select Group')
                            ->fromQuery(Position::All()->unique(), 'group', 'group') }}    
                </div>
                -->

                <!--for select position -->
                <div class="row">
                    <div class="col-md-7 col-md-offset-1" style="margin-top:10px;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-fw fa-user"></i>
                                <strong>Select Position</strong>
                            </div>
                            <div class="panel-body">
                            
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="form-group">
                                        <label for="group">Group :</label>
                                        <!--
                                        <select ng-model="group" ng-blur="checkGroup()" ng-blur="checkGroup()" class="form-control scrollable-menu ng-valid ng-dirty" id="group" name="group">
                                            <option value="">Select Group</option>
                                            <option ng-repeat="position in allPosition | unique:'group'" value="@{{position.group}}">@{{position.group}}</option>
                                            
                                        </select>   
                                        -->
                                         <select ng-model="group"  ng-change="checkGroup()" 
                                            class="form-control scrollable-menu ng-valid ng-dirty " 
                                            id="group" name="group"
                                            ng-options="position.group as position.group for position in allPosition     | unique:'group'">
                                            <option value="">Select Group</option>
                                        </select> 
                                    </div>

                                    <div class="form-group" ng-show="showDivision">
                                        <label for="division">Division :</label>
                                        <select ng-model="division" ng-change="checkDivision()" class="form-control scrollable-menu" id="division" name="division">
                                            <option value="">Select Division</option>
                                            <option ng-repeat="position in allPosition | filter:{group:group} | unique:'division'" value="@{{position.division}}">@{{position.division}}</option>
                                            
                                        </select>
                                    </div>

                                    <div class="form-group" ng-show="showOrganization">
                                        <label for="organization">Organization :</label>
                                        <select ng-model="organization" ng-change="checkOrganization()" class="form-control scrollable-menu" id="organization" name="organization">
                                            <option value="">Select Organization</option>
                                            <option ng-repeat="position in allPosition | filter:{group:group,division:division} | unique:'organization'" value="@{{position.organization}}">@{{position.organization}}</option>
                                            
                                        </select>
                                    </div>

                                    <div class="form-group" ng-show="showJobTitle">
                                        <label for="job_title">Job Title :</label>
                                        <select ng-model="job_title" ng-change="checkProgress()" class="form-control scrollable-menu" id="position_id" name="position_id">
                                            <option value="">Select Job Title</option>
                                            <option ng-repeat="position in allPosition | filter:{group:group,division:division,organization:organization} | unique:'position_id'" value="@{{position.position_id}}">@{{position.job_title}}</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-md-6">  
                                    <br>
                                    <div ng-if="!group" class="alert alert-info alert-dismissable">
                                      <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                       --><strong>Please select :</strong> Group 
                                    </div>
                                    <div ng-show="(!division)&&group" class="alert alert-warning alert-dismissable">
                                      <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                       --><strong>Please select :</strong> Division 
                                    </div>
                                    <div ng-show="(!organization)&&division&&group" class="alert alert-danger alert-dismissable">
                                      <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                       --><strong>Please select :</strong> Organization
                                    </div>
                                    <div ng-show="(!job_title)&&organization&&division&&group" class="alert alert-success alert-dismissable">
                                      <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                       --><strong>Please select :</strong> Job title
                                    </div>
                                </div>
                            </div><!--end row-->
                            </div><!--end panel body-->
                        </div><!-- end panel-->
                    </div>
                </div>


                <!--second panel-->
                <div class="row">
                    <div class="col-md-7 col-md-offset-1" style="margin-top:10px;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-fw fa-info-circle"></i>Detail of requisition
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-7 " style="margin-top:10px;">
                                        <div class="form-group">
                                            {{ Former::select('corporate_title_id', 'Corporate Title :')->attributes(array('class' => 'form-control scrollable-menu','ng-change'=>'checkProgress()','style'=>'         width:300px;
                                            height: auto;
                                            max-height: 100px;
                                            overflow-x: hidden;','ng-model'=>'corporate_title_id'))->addOption('Select Corporate Title')
                                                    ->fromQuery(CorporateTitle::All(), 'name', 'corporate_title_id') }}    
                                        </div>

                                        <div class="form-group">
                                                {{ Form::label('total_number', 'No. of Vacancy :') }}
                                                {{ Form::input('number','total_number', Input::old('qualification'), array('min'=>'0','max'=>'1000','placeholder'=>'0','ng-model'=>'totalNumber','style'=>'width:300px;','ng-change'=>'checkProgress()','class' => 'form-control', 'required')) }}
                                        </div>
                                        
                                        <div class="form-group">
                                            {{ Former::select('recruitment_obj_template_id','Recruitment Objective :')->addOption('Select Recruitment Objective')
                                                    ->fromQuery(RecruitmentObjectiveTemplate::All(), 'message', 'recruitment_objective_template_id')->attributes(array('ng-model'=>'recruitment_obj','ng-change'=>'checkProgress()','class'=>'form-control scrollable-menu')) }}  
                                             <br>
                                             {{ Form::text('recruitment_objective', Input::old('recruitment_objective'), array('class' => 'form-control','placeholder'=>'Recruitment Objective Note','style'=>'width:300px;')) }}   
                                        </div>

                                        <div class="form-group">
                                            {{ Former::select('recruitment_type_id','Recruitment type :')->addOption('Select Recruitment Type')
                                                    ->fromQuery(RecruitmentType::All(), 'name', 'recruitment_type_id')->attributes(array('ng-model'=>'recruitment_type','ng-change'=>'checkProgress()','class'=>'form-control scrollable-menu')) }}  
                                        </div>
                                         <div class="form-group">
                                             {{ Former::select('location_id', 'Location :')->addOption('Select Location')
                                                    ->fromQuery(Location::All(), 'name', 'location_id')->attributes(array('ng-model'=>'location_id','ng-change'=>'checkProgress()','class'=>'form-control scrollable-menu')) }}  
                                        </div>
                                                
                                        <div class="form-group">
                                            {{ Form::label('year_of_experience', 'Years of experience :') }}
                                            {{ Form::input('number','year_of_experience', Input::old('qualification'), array('min'=>'0','max'=>'100','placeholder'=>'0','class' => 'form-control','style'=>'width:300px;','ng-change'=>'checkProgress()','ng-model'=>'year_of_experience', 'required')) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end second panel-->

                <!-- hide template-->
                <div class="row" ng-show="showtemp">
                    <div class="col col-md-11 col-md-offset-1">
                        <div class="well well-lg">
                            <div class="row">
                                <h2 class="panel-title  badge bg-blue">
                                    <strong>Template responsibility</strong>
                                </h2>
                                <a class="btn btn-default pull-right" ng-click="showtemp=false">
                                                <i class="fa fa-fw fa-eye-slash "></i>hide template
                                            </a>
                                <hr/>
                            </div>
                            <div class="row">
                                <div class="col col-md-2" style="margin-left:20px;padding-left:0em;">
                                    <div style="border:1px solid #ccc;width:100%;height:150px; overflow-y: scroll;">
                                        <div class="list-group">
                                          <a ng-click="setText(respon.text)"ng-repeat="respon in templateRespons" class="list-group-item">@{{respon.name}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-9"  style="padding-left:0em;">
                                    <div>
                                        <div class="panel panel-default" >
                                            <div class="panel-body" style="">
                                                <div style="width:100%;max-height:300px; overflow-y: scroll;">
                                                    <p ng-bind-html="showtext"></p>
                                                </div>
                                                <hr/>
                                                <a type="button" class="btn btn-success btn-lg pull-right " ng-click="responsibility=showtext">Select</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end hide template-->


                <!-- 3 panel : responsibility-->
                <div class="row">
                    <div class="col-md-7 col-md-offset-1" style="margin-top:10px;"> 
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Responsibility</h3>
                            </div>
                            <div class="panel-body">
                                
                                    <!-- <div class="form-group">
                                        {{ Form::textarea('responsibility', Input::old('responsibility'), array('class' => 'ckeditor form-control','ng-change'=>'checkProgress()','ng-model'=>'responsibility', 'required')) }}
                                    </div> -->
                                
                                <div class="form-group">
                                    {{ Form::label('responsibility', 'Responsibilities :') }}
                                    <textarea class="ck-editor" value="{{Input::old('responsibility')}}" ng-model="responsibility" ng-change= "checkProgress()" name="responsibility" id="responsibility"></textarea>
                                     
                                </div>
                                <div class="row">
                                    <div class="col col-md-5 pull-right">
                                        <a class="btn btn-primary pull-left" ng-click="showtemp=true">Show template</a>
                                        <a class="btn btn-danger pull-right " ng-click="responsibility=''"style="width:120px;" type="button">
                                            <i class="fa fa-fw fa-trash-o"></i>Reset
                                        </a>
                                    </div>
                                </div>
                            </div><!--end panel body-->
                        </div><!--end panel-->     
                    </div><!--end col-->
                </div>
                <!--end 3 panel :responsibility-->


                <!--hide template for qualification-->
                <div class="row" ng-show="showtempqual">
                    <div class="col col-md-11 col-md-offset-1">
                        <div class="well well-lg">
                            <div class="row">
                                <h2 class="panel-title  badge bg-blue">
                                    <strong>Template qualification</strong>
                                </h2>
                                <a class="btn btn-default pull-right" ng-click="showtempqual=false">
                                                <i class="fa fa-fw fa-eye-slash "></i>hide template
                                            </a>
                                <hr/>
                            </div>
                            <div class="row">
                                <div class="col col-md-2" style="margin-left:20px;padding-left:0em;">
                                    <div style="border:1px solid #ccc;width:100%;height:150px; overflow-y: scroll;">
                                        <div class="list-group">
                                          <a ng-click="setShowqual(qual.text)"ng-repeat="qual in templateQual" class="list-group-item">@{{qual.name}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-9"  style="padding-left:0em;">
                                    <div>
                                        <div class="panel panel-default" >
                                            <div class="panel-body" style="">
                                                <div style="width:100%;max-height:300px; overflow-y: scroll;">
                                                    <p ng-bind-html="showqualtext"></p>
                                                </div>
                                                <hr/>
                                                <a type="button" class="btn btn-success btn-lg pull-right " ng-click="qualification=showqualtext">Select</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end hide template-->
                <!--qualification-->
                <div class="row">
                    <div class="col-md-7 col-md-offset-1" style="margin-top:10px;"> 
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Qualifications</h3>
                            </div>
                            <div class="panel-body">
                                    
                                    <!-- <div class="form-group">
                                        {{ Form::label('qualification', 'Qualifications :') }}
                                        {{ Form::textarea('qualification', Input::old('qualification'), array('class' => 'ckeditor form-control','ng-change'=>'checkProgress()','ng-model'=>'qualification','required')) }}
                                    </div> -->
                                <div class="form-group">
                                    {{ Form::label('qualification', 'Qualifications :') }}
                                    <textarea class="ck-editor" value="{{Input::old('qualification')}}" ng-change= "checkProgress()" ng-model="qualification" name="qualification" id="qualification"></textarea>

                                </div>
                                <div class="row">
                                    <div class="col col-md-5 pull-right">
                                        <a class="btn btn-primary pull-left" ng-click="showtempqual=true">Show template</a>
                                        <a class="btn btn-danger pull-right " ng-click="resetqual()"style="width:120px;" type="button">
                                            <i class="fa fa-fw fa-trash-o"></i>Reset
                                        </a>
                                    </div>
                                </div>
                            </div><!--end panel body-->
                        </div><!--end panel-->     
                    </div><!--end col-->
                </div>
                <!--end qualification-->
            

           <!--  <div class="row">
                <div class="col-md-7 col-md-offset-1" style="margin-top:10px;"> 
                    <div class="form-group">
                        {{ Form::label('qualification', 'Qualifications :') }}
                        {{ Form::textarea('qualification', Input::old('qualification'), array('class' => 'ckeditor form-control','ng-change'=>'checkProgress()','ng-model'=>'qualification','required')) }}
                    </div>
                </div>
            </div> -->

            <!--note-->
            <div class="row">
                <div class="col-md-7 col-md-offset-1" style="margin-top:10px;"> 
                    <div class="form-group">
                        {{ Form::label('note', 'Note :') }}
                        {{ Form::textarea('note', Input::old('note'), array('class' => 'form-control','size' => '30x5')) }}
                    </div>

                {{ Form::button('Save', array('name' => 'save', 'value' => true, 'type' => 'submit','class' => 'btn btn-primary btn-lg btn-block')) }}
                {{ Form::button('Send to approve', array('name' => 'save', 'value' => false, 'type' => 'submit','class' => 'btn btn-primary btn-warning btn-block')) }}
                </div>
            </div>

            {{ Form::close() }}
            
        </div>
    </div>
              
@stop





@section('script')
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
