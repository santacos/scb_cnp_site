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
                          /*for(var i=1;i<=8;i++){
                            var e = document.getElementById('option'+i);
                            if(e != x){
                              e.value = 0;
                            }
                          }*/
                        }
                        function resetVal(){
                          for(var i=1;i<=8;i++){
                            var e = document.getElementById('option'+i);
                            e.value = 0;
                          }
                        }
                        function init(){
                          var val = [
                          @if(isset($input['mode']))
                            "{{ $input['mode'] }}",
                          @else
                            0,
                          @endif
                          @for($i=1;$i<=8;$i++)
                            @if(isset($input['option'.$i]))
                              {{ $input['option'.$i] }},
                            @else
                              0,
                            @endif
                          @endfor
                          0];
                          for(var i=1;i<=8;i++){
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
                          <td>
                            <div class="form-group">
                              <p>By Requisition</p>
                              <select id="option8" onchange='changeVal(this);' name="option8">
                                <option value="0">-- Not Used --</option>
                                @foreach(Requisition::where('requisition_id','>',0)->get() as $key => $value )
                                <option value="{{ $value->requisition_id }}">{{ $value->requisition_id.":".$value->position->job_title }}</option>
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
    <div class="col col-md-3">
    </div>
    <div class="col col-md-4">
      <button class="btn btn-default " style="width:50%;" type="button" onclick="resetVal();">Reset</button> <button class="btn btn-default " style="width:50%;" type="submit">Submit</button>
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
                                        @if(!isset($custom) || $custom == 0)
                                            <?php $thname = array('Just Apply',
                                                                    'Send Shortlist',//1
                                                                    'Review Resume',//2
                                                                    'Interview Appointment',//3
                                                                    'Interview Feedback',//4
                                                                    'Prepare Package',//5
                                                                    'Approve Package',//6
                                                                    'Offer Package',//7
                                                                    'Sign Contract'//8
                                                                    );
                                              ?>
                                              @if(Input::get('option9') > 0)
                                              <center><h1>Process : {{ $thname[Input::get('option9')] }}</h1></center>
                                              @endif
                                            {{ isset($datatable)?$datatable:'Please Submit to see analytics' }}
                                        @elseif($custom == 1)
                                            <?php
  $req = Requisition::where('requisition_id','>',0);
  if(Input::get('option7') == 0){
    if(Input::get('option1') > 0){
      $req = $req->whereHas('Position',function($q){
        $q->wherePositionId(Input::get('option1'));
      });
    }
    if(Input::get('option2') > 0){
      $temp = Position::find(Input::get('option2'))->division;
      $req = $req->whereHas('Position',function($q) use ($temp){
        $q->whereDivision($temp);
      });
    }
    if(Input::get('option3') > 0){
      $temp = Position::find(Input::get('option3'))->group;
      $req = $req->whereHas('Position',function($q) use ($temp){
        $q->whereGroup($temp);
      });
    }
    if(Input::get('option4') > 0){
      $temp = Position::find(Input::get('option4'))->organization;
      $req = $req->whereHas('Position',function($q) use ($temp){
        $q->whereOrganization($temp);
      });
    }
    if(Input::get('option5') > 0){
      $req = $req->whereHas('Dept',function($q){
        $q->whereRecruiterUserId(Input::get('option5'));
      });
    }
    if(Input::get('option6') > 0){
      $req = $req->whereCorporateTitleId(Input::get('option6'));
    }
    if(Input::get('option8') > 0){
      $req = $req->whereRequisitionId(Input::get('option8'));
    }
  }
  $req_ids = $req->lists('requisition_id');
  if(count($req_ids) == 0) $req_ids = array(0);
  $applications = Application::whereIn('requisition_id',$req_ids)->get();
                                              $app_ids = $applications->lists('application_id');
                                              if(count($app_ids) == 0) $app_ids = array(0);
                                            ?>
                                            <table class='table'>
                                              <tr>
                                                <th>Process</th><th>Max</th><th>Min</th><th>Average</th><th>Record</th><th>Candidate</th><th>Action</th>
                                              </tr>
                                              <tr>
                                                <th>Just Apply</th>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>{{ Application::whereIn('application_id',$app_ids)->whereApplicationCurrentStatusId(1)->count() }}</td>
                                                <td></td>
                                              </tr>
                                              <?php $thname = array('Just Apply',
                                                                    'Send Shortlist',//1
                                                                    'Review Resume',//2
                                                                    'Interview Appointment',//3
                                                                    'Interview Feedback',//4
                                                                    'Prepare Package',//5
                                                                    'Approve Package',//6
                                                                    'Offer Package',//7
                                                                    'Sign Contract'//8
                                                                    );
                                              ?>
                                              @for($xqx=1;$xqx<=8;$xqx++)
                                              <tr>
                                                <th>{{ $thname[$xqx] }}</th>
                                                <?php
                                                  $logs = ApplicationLog::whereIn('application_id',$app_ids)->whereActionType($xqx)->whereVisitNumber(1)->get();
                                                  $first = true;
                                                  $max = 0; $min = 0; $count = 0; $sum = 0;
                                                  foreach($logs as $log){
                                                    $start = Carbon::createFromFormat('Y-m-d H:i:s', $log->prev_action_datetime);
                                                    $end = Carbon::createFromFormat('Y-m-d H:i:s', $log->action_datetime);
                                                    $hour = $end->diffInHours($start);
                                                    if($first){
                                                      $first = false;
                                                      $max = $hour;
                                                      $min = $hour;
                                                    }else{
                                                      if($hour > $max){
                                                        $max = $hour;
                                                      }
                                                      if($hour < $min){
                                                        $min = $hour;
                                                      }
                                                    }
                                                    $sum += $hour;
                                                    $count++;
                                                  }
                                                  if($first){
                                                    $max = '-'; $min = '-'; $ave = '-';
                                                    $maxH = '-';
                                                    $minH = '-';
                                                  }else{
                                                    $maxH = $max;
                                                    $minH = $min;
                                                    $max = intval($max/24);
                                                    $min = intval($min/24);
                                                    $max = $max==0?1:$max;
                                                    $min = $min==0?1:$min;
                                                    $ave = $sum/$count;
                                                  }
                                                ?>
                                                <td>{{ $max }} ({{$maxH}} Hour(s))</td>
                                                <td>{{ $min }} ({{$minH}} Hour(s))</td>
                                                <td>{{ sprintf("%.2f",$ave/24) }} ({{sprintf("%.2f",$ave)}} Hour(s))</td>
                                                <td>{{ $count }}</td>
                                                <td>{{ Application::whereIn('application_id',$app_ids)->where('application_current_status_id','=',$xqx+1)->count() }}</td>
                                                <td><a href="{{'analytics?mode=application&option1='.Input::get('option1').'&option2='.Input::get('option2').'&option3='.Input::get('option3').'&option4='.Input::get('option4').'&option5='.Input::get('option5').'&option6='.Input::get('option6').'&option7='.Input::get('option7').'&option8='.Input::get('option8').'&option9='.$xqx}}" type="button" class="btn btn-sm btn-default">
                                                    Process Analytics
                                                </a></td>
                                              </tr>
                                              @endfor
                                              <tr>
                                                <th>Pass</th>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>{{ Application::whereIn('application_id',$app_ids)->whereApplicationCurrentStatusId(10)->count() }}</td>
                                                <td></td>
                                              </tr>
                                              <tr>
                                                <th>Pending</th>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>{{ Application::whereIn('application_id',$app_ids)->whereApplicationCurrentStatusId(11)->count() }}</td>
                                                <td></td>
                                              </tr>
                                              <tr>
                                                <th>Fail</th>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>{{ Application::whereIn('application_id',$app_ids)->whereApplicationCurrentStatusId(9)->count() }}</td>
                                                <td></td>
                                              </tr>
                                            </table>
                                        @endif
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
