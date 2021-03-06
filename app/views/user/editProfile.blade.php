@extends('user.layouts.default')

@section('title')
SCB Recruitment-Home
@stop

@section('body-class')
"fixed-header "
@stop


@section('header-class')
"header header-two"
@stop

@section('libs')
<script type="text/javascript">
var app = angular.module('app',[]);
app.controller('appCtrl',['$scope', '$http',
  function ($scope, $http) {
    $scope.color='rgba(225, 225, 225, 1)';
    $scope.contact=true;
    $scope.Experience=true;
    $scope.skill=true;
    $scope.education=true;
    $scope.award=true;
    $scope.certificate=true;
    $scope.showVideo=false;
      $scope.showResume=false;
      $scope.showImage=false;  
    $scope.showPicZone=function(y){
      // $scope.showVideo=false;
      // $scope.showResume=false;
      // $scope.showImage=false;  
      if(y==1){
       // $scope.showVideo=true;
        $scope.showVideo=!$scope.showVideo;
      }
      else if(y==2){
       // $scope.showResume=true;
        $scope.showResume=!$scope.showResume;
      }
      else if(y==3){
        //$scope.showImage=true;
        $scope.showImage=!$scope.showImage;
      }
    }
    $scope.setShow=function(x){
      if(x==1){
        $scope.contact=true;
        $scope.Experience=true;
        $scope.skill=true;
        $scope.education=true;
        $scope.award=true;
        $scope.certificate=true;

        $scope.color='rgba(225, 225, 225, 1)';
      }
      else if(x==2){
        $scope.contact=true;
        $scope.Experience=false;
        $scope.skill=false;
        $scope.education=false;
        $scope.award=false;
        $scope.certificate=false;
        $scope.color='rgba(225, 225, 225, 1)';
      }
      else if(x==3){
        $scope.contact=false;
        $scope.Experience=true;
        $scope.skill=false;
        $scope.education=false;
        $scope.award=false;
        $scope.certificate=false;

        $scope.color='rgba(66,139,202,1)';
      }
      else if(x==4){
        $scope.contact=false;
        $scope.Experience=false;
        $scope.skill=true;
        $scope.education=false;
        $scope.award=false;
        $scope.certificate=false;


        $scope.color='rgba(0,152,202,1)';
      }
      else if(x==5){
        $scope.contact=false;
        $scope.Experience=false;
        $scope.skill=false;
        $scope.education=true;
        $scope.award=false;
        $scope.certificate=false;


        $scope.color='rgba(115,141,0,1)';
      }
      else if(x==6){
        $scope.contact=false;
        $scope.Experience=false;
        $scope.skill=false;
        $scope.education=false;
        $scope.award=true;
        $scope.certificate=false;


        $scope.color='rgba(248,148,6,1)';
      }
      else if(x==7){
        $scope.contact=false;
        $scope.Experience=false;
        $scope.skill=false;
        $scope.education=false;
        $scope.award=false;
        $scope.certificate=true;

        $scope.color='rgba(193,8,65,1)';
      }
    }


    //pee zone

    $scope.img_selc='aaaa';

        }//before end controller


        ]);//end controller

</script>
@stop



@section('content')

  
    <div class="row" ng-app="app" ng-controller="appCtrl">
     
    <!--sidebar-->
      @include('user.includes.sidebar')
    <!-- .end sidebar -->

      <!-- center content -->
      <article class="content pull-left col-sm-9 col-md-9">

          <br>
          
      <!-- profile-->
      <div class="row">
        {{ Form::model($candidate, array('route' => array('cd.update', $candidate->user_id), 'method' => 'PUT','files'=>true)) }}
        {{ Former::populate($candidate) }}
        {{ Former::populateField('first', $candidate->user()->first()->first) }}
        {{ Former::populateField('last', $candidate->user()->first()->last) }}
        {{ Former::populateField('email',  $candidate->user()->first()->email) }}
        {{ Former::populateField('contact_number',  $candidate->user()->first()->contact_number) }}
          <div class="content-block bottom-padding frame">
            
            <!-- <div class="content-block bottom-padding bg">-->
            
              <!--progress bar-->
            <div class="progress-circular progress-striped pull-right" style="padding-left:10px;">
              <input type="text" class="knob" value="0" rel="75" data-linecap="round" data-width="80" data-bgColor="#f2f2f2" data-fgColor="#c10841" data-thickness=.30 data-readOnly=true disabled>
            </div>
            <!--end progress bar-->
            

            <!--profile-->
            <h1>
              Edit Profile
              <!--button to link to full profile-->
              <a href="{{ URL::to('/cd/profile')}}">
              <button class="btn btn-border btn-warning btn-sm " style="margin-left:0px;">View profile</button>
              </a>
              <!-- end button-->
            </h1>
            <hr style="margin-top:5px;margin-bottom:5px;">
          
          <!--personal detail-->
          <div class="row">
              <div class="col col-md-7">
                <table class="table text-left" style="font-size:1.1em;padding-bottom:2px;">
                <tbody>
                <tr style="padding-bottom:2px;">
                  <td style="padding-bottom:2px;width:20%;"><strong>Thai saluation:</strong>
                  <td style="padding-bottom:2px;width:25%;">
                    {{ Form::text('thai_saluation', Input::old('thai_saluation'), array('class' => 'form-control','placeholder'=>'คำนำหน้าชื่อ' )) }}
                  </td>
                  <td style="padding-bottom:2px;width:20%;"><strong>English saluation:</strong>
                  <td style="padding-bottom:2px;width:25%;">
                    {{ Form::text('eng_saluation', Input::old('end_saluation'), array('class' => 'form-control','placeholder'=>'Saluation' , 'required')) }}

                  </td>
                
                </tr>
                <tr>
                  <td style="padding-bottom:2px;"><strong>Firstname:</strong>
                  <td style="padding-bottom:2px;">
                    {{ Form::text('first', Input::old('first'), array('class' => 'form-control','style'=>'padding-bottom:1px;','placeholder'=>'First Name' , 'required')) }}
                  </td>
                  <td style="padding-bottom:2px;"><strong>Lastname:</strong>
                  <td style="padding-bottom:2px;">
                    {{ Form::text('last', Input::old('last'), array('class' => 'form-control','style'=>'padding-bottom:1px;','placeholder'=>'Last name' , 'required')) }}
                  </td>
                
                </tr>
                <tr>
                  <td style="padding-bottom:2px;"><strong>ชื่อ: </strong>
                  <td style="padding-bottom:2px;">
                    {{ Form::text('thai_firstname', Input::old('thai_firstname'), array('class' => 'form-control','placeholder'=>'ชื่อ' )) }}
                  </td>
                  <td style="padding-bottom:2px;"><strong>นามสกุล: </strong></td>
                  <td style="padding-bottom:2px;">
                    {{ Form::text('thai_lastname', Input::old('thai_lastname'), array('class' => 'form-control','placeholder'=>'นามสกุล' )) }}
                  </td>
                  
                </tr>
                <tr>
                  <td style="padding-bottom:2px;"><strong>Gender: </strong></td>
                  <td style="padding-bottom:2px;">
                    {{ Former::select('is_male','')->class('form-control scrollable-menu')->options(array(''=>'Select Gender',0=>'Female',1=>'Male'))
                        }} 
                  </td>
                  <td style="padding-bottom:2px;"><strong>Age: </strong></td>
                  <td style="padding-bottom:2px;">  @if($candidate->birth_date!='' && $candidate->birth_date!=0)
                        {{Carbon::createFromFormat('Y-m-d',$candidate->birth_date)->diffInYears()}}
                      @endif
                      </td>
                </tr>
                <tr>
                  <td style="padding-bottom:2px;"><strong>Date of Birth :</strong></td>
                  <td style="padding-bottom:2px;">
                    {{Form::input('date', 'birth_date', null, ['class' => 'form-control', 'placeholder' => 'Date'])}}
                  </td>
                  <td style="padding-bottom:2px;"><strong>Nationality : </strong></td>
                  <td style="padding-bottom:2px;">
                    {{ Form::text('nationality', Input::old('nationality'), array('class' => 'form-control' )) }}
                  </td>
                </tr>
                <tr>
                  <td style="padding-bottom:2px;"><strong>Passport NO:</strong></td>
                  <td style="padding-bottom:2px;">
                    {{ Form::text('passport_number', Input::old('passport_number'), array('class' => 'form-control' )) }}
                  </td>
                  <td style="padding-bottom:2px;"><strong>ID Number :</strong></td>
                  <td style="padding-bottom:2px;">
                    {{ Form::text('idcard', Input::old('idcard'), array('class' => 'form-control' )) }}
                  </td>
                </tr>
                </tbody>
              </table>
              <div class="row" style="padding-bottom:2em;">
                <div class="col col-md-4"></div>
                <div class="col col-md-4">
                  {{ Form::submit('Save', array('class' => 'btn btn-primary btn-lg btn-block')) }}
    
                </div>
                <div class="col col-md-4"></div>

              </div>
              
              </div>
              <?php
                if(file_exists($candidate->filepath_picture)||isset($candidate->filepath_picture))
                {$picture = asset($candidate->filepath_picture);}
                else
                {$picture = asset('assets/img/avatar3.png');}
            ?>
              <div class="col col-md-5">
                <div class="row">
                  <div class="col col-md-8 pull-left" style="margin-top:-8em;padding-left:0px;">
                    <div class="col-md-12">
                      <div class="bs-docs-example-images">
                        <a class="img-thumbnail img-rounded lightbox" style="padding-bottom:1.3em;" rel="fancybox" href="{{$picture}}" >
                          <img src="{{$picture}}" style="height: 223px; width: 223px;"> 
                          <span class="bg-images">
                            <i class="fa fa-search"></i>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col col-md-4 pull-left" style="margin-top:-8em;padding-left:0px;padding-right:0px;">
                    <a class="btn push-top push-bottom btn-border btn-info" 
                      style="width:90%;" ng-click="showPicZone(1)">
                      Upload Video
                    </a><br>
                    <a class="btn push-top push-bottom btn-border btn-success" 
                    style="width:90%;" ng-click="showPicZone(2)">
                      Upload resume
                    </button><a>
                    <a class="btn push-top push-bottom btn-border btn-warning" 
                    style="width:90%;" ng-click="showPicZone(3)">
                      Upload image
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-12">
                    <div class="panel panel-primary" ng-show="showVideo">
                      <div class="panel-body">
                        {{ Form::label('filepath_video', 'Video :') }} 
                         <br>
                          @if(isset($candidate->filepath_video))
                           <embed src="{{asset($candidate->filepath_video)}}" allowfullscreen="true" width="500" height="500"> 
                          @endif
                            <br><br>
                             <input name="filepath_video" type="text" class="form-control" value="{{$candidate->filepath_video}}">
                      </div>
                    </div>
                    <div class="panel panel-primary" ng-show="showResume">
                      <div class="panel-body">
                       {{ Form::label('filepath_cv', 'CV :') }} 
                       <br>
                       @if(file_exists(public_path().$candidate->filepath_cv))
                       <?php   $fileArray = pathinfo(public_path().$candidate->filepath_cv);

                       ?>
                       @if(isset($fileArray['extension'])&&$fileArray['extension']=="pdf")
                       <embed src="{{asset($candidate->filepath_cv)}}" width="800" height="500"> 
                        @endif
                        @endif
                        <br><br>
                        <!-- <input type="radio" name="cv_selc" ng-model="cv_selc" value="text" checked="checked"/>  URL &nbsp&nbsp -->
                        <!-- <input type="radio" name="cv_selc" ng-model="cv_selc" value="file"> Upload <br/> -->
                        <!-- <input ng-show="cv_selc=='text'"name="filepath_cv" type="text" class="form-control" value="{{$candidate->filepath_cv}}"> -->
                        <input  name="filepath_cv" type="file" class="form-control" value="{{Input::old('filepath_cv')}}">
                      </div>
                    </div>
                    <div class="panel panel-primary" ng-show="showImage">
                      <div class="panel-body">
                        {{ Form::label('filepath_picture', 'Image :') }} 
                       <br>
                        @if(file_exists($candidate->filepath_picture))
                             <img src="{{asset($candidate->filepath_picture)}}" style="height: 300px; width: 300px;"> 
                        @elseif(isset($candidate->filepath_picture))
                              <img src="{{asset($candidate->filepath_picture)}}" style="height: 300px; width: 300px;"> 
                        @endif
                        <div class="row">
                          <div class="col col-md-3 col-md-offset-1">
                            <input type="radio" name="img_selc" ng-model="img_selc" value="text" checked="checked"/>  URL &nbsp&nbsp
                            <input type="radio" name="img_selc" ng-model="img_selc" value="file"> Upload <br/>
                            <input ng-show="img_selc=='text'"name="filepath_picture" type="text" class="form-control" value="{{$candidate->filepath_picture}}">
                            <input ng-show="img_selc=='file'" name="filepath_picture" type="file" class="form-control" value="{{Input::old('filepath_picture')}}">
                      
                          </div>
                        </div>
                            
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              
            </div>
            
            <div class="well" style="padding-bottom:2px;opacity:0.8;" ng-style="{'background-color':color}">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li ng-click="setShow(1)" class="active"><a href="#All" data-toggle="tab"  style="font-size:1em;">All</a></li>
                <li ng-click="setShow(2)"><a href="#Contact" data-toggle="tab" style="font-size:1em;">Contact information</a></li>
                <li ng-click="setShow(3)"><a href="#Experience" data-toggle="tab" style="font-size:1em;">Experience</a></li>
                <li ng-click="setShow(4)"><a href="#Skill" data-toggle="tab" style="font-size:1em;">Skill</a></li>
                <li ng-click="setShow(5)"><a href="#Education" data-toggle="tab" style="font-size:1em;">Education</a></li>
                <li ng-click="setShow(6)"><a href="#Award" data-toggle="tab" style="font-size:1em;">Award</a></li>
                <li ng-click="setShow(7)"><a href="#Certicate" data-toggle="tab" style="font-size:1em;">Certicate</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <!-- <div class="tab-pane active" id="All">...</div>
                <div class="tab-pane" id="Experience">...</div>
                <div class="tab-pane" id="Skill">...</div>
                <div class="tab-pane" id="Education">...</div>
                <div class="tab-pane" id="Award">...</div>
                <div class="tab-pane" id="Certicate">...</div> -->
              </div>
            </div>
            <!--first row for box-->
            <div class="row">
              
               <!--contact information-->
                        <div ng-show="contact" class="col col-md-12">
                            <div class="panel panel-default frame frame-shadow-curved">
                                <div class="panel-heading"  >
                                    <h3 class="panel-title"><strong>Contact information</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col col-md-12">
                                            <div class="content-block frame border-radius" style="padding:5px;">
                                                <div class="row">
                                                    <div class="col col-md-6">
                                                        <strong>Email :</strong> {{ Form::text('email', Input::old('email'), array('class' => 'form-control' )) }}<br>
                                                        <strong>Contact Number :</strong> {{ Form::text('contact_number', Input::old('contact_number'), array('class' => 'form-control' )) }}<br>
                                                        <strong>Current Living Location :</strong>{{ Form::text('full_location', Input::old('full_location'), array('class' => 'form-control' )) }}<br>
                                                        
                                                        <!-- <strong>Telephone(Home) :</strong> 029999999<br> -->
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <strong>Country :</strong> {{ Form::text('country', Input::old('country'), array('class' => 'form-control' )) }}<br>
                                                        <strong>City :</strong> {{ Form::text('city', Input::old('city'), array('class' => 'form-control' )) }}<br>
                                                        <strong>Zip/Postal Code :</strong>{{ Form::text('zip_code', Input::old('zip_code'), array('class' => 'form-control' )) }} <br>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div><!--end first row for Work Experience-->
                                    <hr>
                                    <div class="row" style="padding-bottom:2em;">
                                      <div class="col col-md-6"></div>
                                      <div class="col col-md-3"></div>
                                      <div class="col col-md-2">

                                        {{ Form::submit('Save', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                          
                                      </div>
                                      

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
              <!--experience box-->
              <div ng-show="Experience" class="col col-md-12">
                <div class="panel panel-primary frame frame-shadow-curved">
                <div class="panel-heading"  >
                <h3 class="panel-title">Work Experience</h3>
                </div>
                <div class="panel-body">
                  @foreach($candidate->workExperience()->orderBy('time_period_start', 'ASC')->get() as $work_experience)
                    
                  <div class="row">
                      <div class="col col-md-12">
                      <div class="content-block frame border-radius" style="padding:5px;">
                        <div class="row">
                          <div class="col col-md-6">
                            <p><strong>Job title :</strong><!--edit-->{{$work_experience->position}}
                            <br><strong>Time period</strong><!--edit-->
                                @if($work_experience->time_period_start!='')
                                  {{$work_experience->time_period_start}} - {{$work_experience->time_period_end}}
                                  @endif
                            </p>
                          </div>
                          <div class="col col-md-6">
                            <strong>Company name :</strong><!--edit-->{{$work_experience->company_name}}
                            <br><strong>Location :</strong><!--edit-->{{$work_experience->location}}
                          </div>
                        </div>
                        <div class="row">
                          <div class="col col-md-12">
                            <strong>Job Achievement(s) :</strong> 
                            {{$work_experience->job_achieve}}
                          </div>
                        </div>
                        <div class="row">
                            <div class="col col-md-6">
                              <strong>Reasons for Leaving a Job : </strong> 
                              {{$work_experience->reason_leave}}
                            </div>
                        </div>
                      </div>
                    </div>
                    
                  </div><!--end first row for Work Experience-->
                  <br>
                  @endforeach
                  <div class="row">
                      <div class="col col-md-12">
                      <div class="content-block frame border-radius" style="padding:5px;">
                        <div class="row">
                          <div class="col col-md-6">
                            <p><strong>Job title :</strong><!--edit-->Programmer
                            <br><strong>Time period</strong><!--edit-->2009 - 2011
                            </p>
                          </div>
                          <div class="col col-md-6">
                            <strong>Company name :</strong><!--edit-->Lotuss
                            <br><strong>Location :</strong><!--edit-->Bangkok
                          </div>
                        </div>
                        <div class="row">
                          <div class="col col-md-12">
                            <strong>Job Achievement(s) :</strong> 
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    
                  </div><!--end second row for Work Experience-->
                </div>
              </div>
              </div>

              <!--skill-->
              <div ng-show="skill" class="col col-md-12">
                <div class="panel panel-info frame frame-shadow-curved">
                <div class="panel-heading"  >
                <h3 class="panel-title">Skill</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                      @foreach($candidate->skill()->get() as $skill)
                      <div class="col col-md-6">
                      <div class="content-block frame border-radius" style="padding:5px;">
                        <p><strong>Skill name : </strong><!--edit-->{{$skill->name}} 
                          <br><strong>Skill branch : </strong><!--edit-->{{$skill->category->name}}
                          <br><strong>level : </strong><!--edit-->{{$skill->pivot->level}}  
                        </p>
                      </div>
                    </div>
                    @endforeach
                  </div><!--end first row for skill-->
                  <br>
                  <div class="row">
                      <div class="col col-md-6">
                      <div class="content-block frame border-radius" style="padding:5px;padding-top:10px;">
                        <p><strong>Skill name : </strong><!--edit-->JAVA 
                        <br><strong>Skill branch : </strong><!--edit-->Programming language </p>
                      </div>
                    </div>
                    <div class="col col-md-6">
                      <div class="content-block frame border-radius" style="padding:5px;">
                        <p><strong>Skill name : </strong><!--edit-->JAVA 
                        <br><strong>Skill branch : </strong><!--edit-->Programming language </p>
                      </div>
                    </div>
                  </div><!--end second row for skill-->
                </div>
              </div>
              </div>

              <!--education-->
              <div ng-show="education" class="col col-md-12">
                <div class="panel panel-success  frame frame-shadow-curved " >
                <div class="panel-heading"  >
                <h3 class="panel-title">Education</h3>
                </div>
                <div class="panel-body">
                <div class="row">
                    <div class="col col-md-12">
                    <div class="content-block frame border-radius" style="padding:5px;">
                      @foreach($candidate->Education()->orderBy('year_end', 'DESC')->orderBy('education_degree_id', 'DESC')->get() as $education)
                        
                      @if($education->year_start!='')
                      <div class="row">
                        <div class="col col-md-3">
                          <p><strong>{{$education->year_start}} - {{$education->year_end}}</strong><!--edit-->
                          
                          </p>
                        </div>
                        <div class="col col-md-9">
                          <strong>{{$education->school_name}}</strong><!--edit-->
                          <br><!--edit-->Degree : {{$education->educationDegree()->first()->name}}
                          <br><!--edit-->Field of study : {{$education->field_of_study}}
                          <br><!--edit-->Major : {{$education->major}}
                          <br><!--edit-->GPA : {{$education->GPA}}
                        </div>
                      </div>
                      @else
                          <div class="row">
                            <div class="col col-md-3">
                              <p><strong></strong><!--edit-->
                              
                              </p>
                            </div>
                            <div class="col col-md-9">
                              <strong>{{$education->school_name}}</strong><!--edit-->
                                <br><!--edit-->Degree : {{$education->educationDegree()->first()->name}}
                                <br><!--edit-->Field of study : {{$education->field_of_study}}
                                <br><!--edit-->Major : {{$education->major}}
                                <br><!--edit-->GPA : {{$education->GPA}}
                            </div>
                          </div>
                      @endif
                      @endforeach 
                    </div>
                  </div>
                    
                </div><!--end first row for Education-->

                </div>
              </div>
              </div>

              <!--award-->
              <div ng-show="award" class="col col-md-12">
                <div class="panel panel-warning  frame frame-shadow-curved">
                <div class="panel-heading"  >
                <h3 class="panel-title">Award and Honors</h3>
                </div>
                <div class="panel-body">
                <div class="row">
                    @if($candidate->award()->count()!=0)
                      <div class="col col-md-12">
                      <div class="content-block frame border-radius" style="padding:5px;">
                        @foreach($candidate->award()->orderBy('date_get', 'DESC')->get() as $award)
                        
                        <div class="row">
                          <div class="col col-md-3">
                            <p><strong>{{Carbon::createFromFormat('Y-m-d',$award->date_get)->format('F Y');}} </strong><!--edit-->
                            
                            </p>
                          </div>
                          <div class="col col-md-9">
                            <strong>{{$award->title}}</strong><!--edit-->
                            <br><!--edit-->By issuer : {{$award->issuer}}
                            <br><!--edit-->Date: {{Carbon::createFromFormat('Y-m-d',$award->date_get)->format('j F Y');}}
                            <br><!--edit-->Description : <p> {{$award->description}}</p>
                            
                          </div>
                        </div>
                        
                        @endforeach
                      </div>
                    </div>
                    @endif
                    
                    
                </div><!--end first row for Award and Honors-->
                </div>
              </div>
              </div>

              <!--Professional certificate-->
              <div ng-show="certificate" class="col col-md-12">
                <div class="panel panel-danger frame frame-shadow-curved" >
                <div class="panel-heading"  >
                <h3 class="panel-title">Professional certificate</h3>
                </div>
                <div class="panel-body">
                @foreach($candidate->certificate()->orderBy('date_get', 'DESC')->get() as $certificate)
                  <div class="row">
                      <div class="col col-md-12">
                      <div class="content-block frame border-radius" style="padding:5px;">
                        <div class="row">
                          <div class="col col-md-3">
                            <p><strong>{{$certificate->name}}</strong><!--edit-->
                            
                            </p>
                          </div>
                          <div class="col col-md-9">
                            <p>{{$certificate->description}}</p>
                          
                          </div>
                        </div>
                      </div>


                    </div>
                      
                  </div><!--end first row for Professional certificate-->
                  @endforeach
                  <!--end first row for Professional certificate-->
                <div class="row">
                    <div class="col col-md-12">
                    <div class="content-block frame border-radius" style="padding:5px;">
                      <div class="row">
                        <div class="col col-md-3">
                          <p><strong>CPA certificate</strong><!--edit-->
                          
                          </p>
                        </div>
                        <div class="col col-md-9">
                          <p>the statutory title of qualified accountants in the United States who have passed the Uniform Certified Public Accountant Examination and have met additional state education and experience requirements for membership in their respective professional accounting bodies and certification as a CPA. Individuals who have</p>
                        
                        </div>
                      </div>
                    </div>

                    
                  </div>
                    
                </div><!--end second row for Professional certificate-->
                </div>
              </div>
              </div>

            </div>
            <!--end first row-->


          </div><!--end content in profile-->
      </div>
      <!-- end profile-->

      
        </article><!-- .content -->
        <!--end center content-->

      

    </div><!--row-->
    {{ Form::close() }}
  <!-- .container -->

@stop

