@extends('admin.layouts.main.recruiter')
@section('title')
thisIsTitle
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>"><!-- 
          <script src="<?php echo asset('js/jquery.js')?>"></script> 
       -->{{ HTML::style('assets/css/bootstrap.css') }}
      @include('includes.datatable')
      
@stop

@section('content')
         <!--row two for TO DO REQUISITION-->
         <div ng-app="app">
        <div class="box box-primary" ng-controller="appCtrl" >
                    <div class="box-header" >
                        <h3 class="box-title"> Analytics Search </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-primary btn-xs" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" data-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                   <div id="collapse" class="box-body">
                           <!-- first data table for requisition-->
                           <div class="box box-solid box-primary">
                                <!-- /.box-header -->
                                {{Form::open(array('url' => 'analytics', 'method' => 'get'))}}
                      <script>
                        function changeVal(x){
                          for(var i=1;i<=7;i++){
                            var e = document.getElementById('option'+i);
                            if(e != x){
                              e.value = 0;
                            }
                          }
                        }
                        function init(){
                          var val = [
                          @if(isset($input['mode']))
                            "{{ $input['mode'] }}",
                          @else
                            0,
                          @endif
                          @for($i=1;$i<=7;$i++)
                            @if(isset($input['option'.$i]))
                              {{ $input['option'.$i] }},
                            @else
                              0,
                            @endif
                          @endfor
                          0];
                          for(var i=1;i<=7;i++){
                            var e = document.getElementById('option'+i);
                            e.value = val[i];
                          }
                        }
                        setTimeout(function(){init();},1000);
                      </script>

                      <div class="form-group">
                        Mode : 
                        <input type="radio" name="mode" value="requisition" {{ isset($input['mode'])&&$input['mode']=='requisition'?'checked':'' }}>View Requisition
                        <span style="visibility: hidden;">..</span>
                        <input type="radio" name="mode" value="application" {{ isset($input['mode'])&&$input['mode']=='application'?'checked':'' }}>View Application
                      </div>
                      Filter By...
                      <table class="table">
                        <tr>
                          <td>
                            <div class="form-group">
                              <p>By Job</p>
                              <select id="option1" onchange='changeVal(this);' name="option1">
                                <option value="0">-- Not Used --</option>
                                @foreach(Position::where('position_id','>',0)->get() as $key => $value )
                                <option value="{{ $value->position_id }}">{{ $value->position_id.":".$value->job_title }}</option>
                                @endforeach
                              </select>
                            </div>
                          </td>
                        </tr>
                      </table>
                      <table class="table">
                        <tr>
                          <td>
                            <div class="form-group">
                              <p>By Division</p>
                              <select id="option2" onchange='changeVal(this);' name="option2">
                                <option value="0">-- Not Used --</option>
                                @foreach(Position::where('position_id','>',0)->distinct()->get(array('division')) as $key => $value )
                                <option value="{{ Position::whereDivision($value->division)->first()->position_id }}">{{ $value->division }}</option>
                                @endforeach
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <p>By Business Group</p>
                              <select id="option3" onchange='changeVal(this);' name="option3">
                                <option value="0">-- Not Used --</option>
                                @foreach(Position::where('position_id','>',0)->distinct()->get(array('group')) as $key => $value )
                                <option value="{{ Position::whereGroup($value->group)->first()->position_id }}">{{ $value->group }}</option>
                                @endforeach
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <p>By Organization</p>
                              <select id="option4" onchange='changeVal(this);' name="option4">
                                <option value="0">-- Not Used --</option>
                                @foreach(Position::where('position_id','>',0)->distinct()->get(array('group')) as $key => $value )
                                <option value="{{ Position::whereGroup($value->group)->first()->position_id }}">{{ $value->group }}</option>
                                @endforeach
                              </select>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-group">
                              <p>By Recruiter</p>
                              <select id="option5" onchange='changeVal(this);' name="option5">
                                <option value="0">-- Not Used --</option>
                                @foreach(User::where('username','like','%recruiter%')->get() as $key => $value )
                                <option value="{{ $value->user_id }}">{{ $value->first . " " . $value->last }}</option>
                                @endforeach
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <p>By Corporate Level</p>
                              <select id="option6" onchange='changeVal(this);' name="option6">
                                <option value="0">-- Not Used --</option>
                                @foreach(CorporateTitle::where('corporate_title_id','>',0)->get() as $key => $value )
                                <option value="{{ $value->corporate_title_id }}">{{ $value->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <p>By Overall Bankwide</p>
                              <select id="option7" onchange='changeVal(this);' name='option7'>
                                <option value="0">-- Not Used --</option>
                                <option value="1">-- In Used --</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                      </table>


          
  <div class="row">
    <div class="col col-md-1">
    </div>
    <div class="col col-md-4">
    </div>
    <div class="col col-md-4">
      <button class="btn btn-default " style="width:100%;" type="submit">Submit</button>
    </div>
  </div><!--end second row-->

                                    {{Form::close()}}
                                   
                        </div><!-- /.box -->

                    </div><!-- /.box-body -->
                        <!--
                        <div class="box-footer">
                            <br>
                        </div>
                        -->
                    </div>
                    <!--end TO DO REQUISITION-->




<div class="box box-primary" ng-controller="appCtrl" >
                    <div class="box-header" >
                        <h3 class="box-title"> Analytics Data </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-primary btn-xs" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" data-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    
                   <div class="box-body">
                           <!-- first data table for requisition-->
                           <div class="box box-solid box-primary">
                                <!-- /.box-header -->
                                    <!--table style "table-striped"-->
                                    <div class="box-body table-responsive no-padding">
                                        
                                      <div style="overflow: auto;">
                                            {{ isset($datatable)?$datatable:'Please Submit to see analytics' }}
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


                  </div>
@stop
