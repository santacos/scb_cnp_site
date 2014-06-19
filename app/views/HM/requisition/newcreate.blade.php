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
            width:250px;
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
    
    
      
@stop

@section('content')
    <div ng-app="nameApp">
        <div class="row" ng-controller="NameCtrl">
                {{ Form::open(array('url' => 'hm-requisition','files'=>true ))}}
                <div class="col-md-12">
                    <ul class="timeline">
                        <li class="time-label">
                            <span class="bg-blue" style="padding-left:10em;padding-right:10em;"> 
                                <h1>Create a requisition</h1> 
                            </span>
                        </li>
                         @if (Session::has('message'))
                         <li>

                            <div class="timeline-item col col-md-6">
                                <div class="timeline-body">
                                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                                    <!-- if there are creation errors, they will show here -->
                                    {{ HTML::ul($errors->all()) }}
                                </div>
                            </div>
                        </li>
                        @endif
                        <li class="time-label">
                            <span class="bg-aqua"> 
                               <i class="fa fa-fw fa-user"></i> Select position 
                            </span>
                        </li>
                        <li>
                            <i class="fa bg-yellow">1</i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h1 class="timeline-header">Select Group</h1>
                                <div class="timeline-body">
                                    <div class="form-group">
                                        <label for="group">Group :</label>
                                        <select ng-model="group"  ng-change="checkGroup()" 
                                            class="form-control scrollable-menu ng-valid ng-dirty " 
                                            id="group" name="group"
                                            ng-options="position.group as position.group for position in allPosition     | unique:'group'">
                                            <option value="">Select Group</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="timeline-footer">
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa bg-orange">2</i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h1 class="timeline-header">Select Division</h1>
                                <div class="timeline-body">
                                    <div class="form-group">
                                        <label for="group">Group :</label>
                                        <select ng-model="group"  ng-change="checkGroup()" 
                                            class="form-control scrollable-menu ng-valid ng-dirty " 
                                            id="group" name="group"
                                            ng-options="position.group as position.group for position in allPosition     | unique:'group'">
                                            <option value="">Select Group</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="timeline-footer">
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa bg-yellow">3</i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h1 class="timeline-header">Select Organization</h1>
                                <div class="timeline-body">
                                    <div class="form-group">
                                        <label for="group">Group :</label>
                                        <select ng-model="group"  ng-change="checkGroup()" 
                                            class="form-control scrollable-menu ng-valid ng-dirty " 
                                            id="group" name="group"
                                            ng-options="position.group as position.group for position in allPosition     | unique:'group'">
                                            <option value="">Select Group</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="timeline-footer">
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa bg-yellow">4</i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h1 class="timeline-header">Select Job title</h1>
                                <div class="timeline-body">
                                    <div class="form-group">
                                        <label for="group">Group :</label>
                                        <select ng-model="group"  ng-change="checkGroup()" 
                                            class="form-control scrollable-menu ng-valid ng-dirty " 
                                            id="group" name="group"
                                            ng-options="position.group as position.group for position in allPosition     | unique:'group'">
                                            <option value="">Select Group</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="timeline-footer">
                                </div>
                            </div>
                        </li>
                        {{ Form::close() }}
                    </ul>
                </div><!--end colmd12-->
            
            
        </div><!--end container-->
    </div><!--end div for nameApp-->
              
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
