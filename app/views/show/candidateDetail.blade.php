@extends('admin.layouts.main.hm')
@section('title')
thisIsTitle
@stop

@section('libs')
    <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
@stop

@section('content')
        <div class="container pull-left">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Candidate detail
                    </h1>
                </section>

              

                <!-- Main content -->
                <section class="content invoice" style="font-size:1.1em;">                    
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="page-header">
                                <!--edit-->
                                <i class="fa fa-fw fa-user"></i>{{$candidate->eng_saluation}} {{$candidate->user()->first()->first}} {{$candidate->user()->first()->last}}
                            </h1>                            
                        </div><!-- /.col -->
                    </div>
                    <!-- info row -->

                    <!--short detail-->
                    <div class="row invoice-info">
                        <div class="col col-md-10">
                            <!--personal detail-->
                            <div class="row">
                                <div class="col col-md-8">
                                    <table class="table text-left" style="font-size:1.1em;">
                                            <tbody>
                                            <tr>
                                              <td><strong>Firstname:</strong>
                                              <td>{{$candidate->user()->first()->first}}</td>
                                              <td><strong>Lastname:</strong>
                                              <td>{{$candidate->user()->first()->last}}</td>
                                            
                                            </tr>
                                            <tr>
                                              <td><strong>ชื่อ: </strong>
                                              <td>{{$candidate->thai_firstname}}</td>
                                              <td><strong>นามสกุล: </strong></td>
                                              <td>{{$candidate->thai_lastname}}</td>
                                              
                                            </tr>
                                            <tr>
                                              <td><strong>Gender: </strong></td>
                                              <td>Male</td>
                                              <td><strong>Age: </strong></td>
                                              <td>  @if($candidate->birth_date!='' && $candidate->birth_date!=0)
                                                        {{Carbon::createFromFormat('Y-m-d',$candidate->birth_date)->diffInYears()}}
                                                    @endif
                                                    </td>
                                            </tr>
                                            <tr>
                                              <td><strong>Date of Birth :</strong></td>
                                              <td>@if($candidate->birth_date!='' && $candidate->birth_date!=0)
                                                        {{Carbon::createFromFormat('Y-m-d',$candidate->birth_date)->format('j F Y');}}
                                                    @endif
                                                </td>
                                              <td><strong>Nationality : </strong></td>
                                              <td>{{$candidate->nationality}}</td>
                                            </tr>
                                            <tr>
                                              <td><strong>Passport NO:</strong></td>
                                              <td>{{$candidate->passport_number}}</td>
                                              <td><strong>ID Number :</strong></td>
                                              <td>{{$candidate->idcard}}</td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                                <!--for photo resume file-->
                                                    <?php
                            if(file_exists($candidate->filepath_picture)||isset($candidate->filepath_picture))
                            {$picture = asset($candidate->filepath_picture);}
                            else
                            {$picture = asset('assets/img/avatar3.png');}
                        ?>
                        <div class="col col-md-4" style="margin-top:-100px;">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="bs-docs-example-images">
                                        <a class="img-thumbnail img-rounded lightbox" style="padding-bottom:1.3em;" rel="fancybox" href="{{$picture}}" >
                                            <img src="{{$picture}}" style="height: 223px; width: 223px;"> 
                                            <span class="bg-images">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-4 pull-left" style="padding-left:0px;padding-right:0px;">
                                    <button class="btn push-top push-bottom btn-border btn-info" 
                                    style="width:90%;"data-toggle="modal" data-target="#videoModal">
                                        Video resume
                                    </button><br>
                                    <button class="btn push-top push-bottom btn-border btn-success" 
                                    style="width:90%;" data-toggle="modal" data-target="#myModal">
                                        View resume from file
                                    </button><br>
                                    <button class="btn push-top push-bottom btn-border btn-warning" 
                                    style="width:90%;" data-toggle="modal" data-target="#myModal">
                                        Export resume to pdf
                                    </button>
                                </div>
                                <!--modal zone-->
                                <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <a href="#" class="close" data-dismiss="modal" aria-hidden="true">×</a>
                                          <div class="title-box">
                                            <h4 class="title">Video resume</h4>
                                          </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="video-box youtube">
                                                <!-- <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/oNBBijn4JuY?showinfo=0&amp;wmode=opaque"></iframe>
                                                 -->
                                                 <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/0oHhD3Bk9Uc"></iframe>
                                            
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <!--end modal zone-->
                            </div>
                        </div>
                            </div>
                            
                            <!--first row for box-->
                            <div class="row">
                                <!--contact information-->
                                <div class="col col-md-12">
                                    <div class="panel panel-default frame frame-shadow-curved">
                                        <div class="panel-heading"  >
                                            <h3 class="panel-title"><strong>Contact information</strong></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col col-md-12">
                                                    <div class="content-block frame border-radius" style="padding:5px;">
                                                        <!-- <div class="row">
                                                            <div class="col col-md-6">
                                                                <p><strong>Job title :</strong>Programmer
                                                                <br><strong>Time period :</strong>2009 - 2011
                                                                </p>
                                                            </div>
                                                            <div class="col col-md-6">
                                                                <strong>Company name :</strong>Lotuss
                                                                <br><strong>Location :</strong>Bangkok
                                                            </div>
                                                        </div> -->
                                                        <div class="row">
                                                            <div class="col col-md-6">
                                                                <strong>Email :</strong> {{$candidate->user->email}}<br>
                                                                <strong>Contact Number :</strong> {{$candidate->user->contact_number}}<br>
                                                                <!-- <strong>Telephone(Home) :</strong> 029999999<br> -->
                                                            </div>
                                                            <div class="col col-md-6">
                                                                <strong>Current Living Location :</strong>{{$candidate->current_living_location}}<br>
                                                                <strong>Country :</strong> {{$candidate->country}}<br>
                                                                <strong>City :</strong> {{$candidate->city}}<br>
                                                                <strong>Zip/Postal Code :</strong> {{$candidate->zip_code}} <br>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div><!--end first row for Work Experience-->
                                            
                                            
                                        </div>
                                    </div>
                                </div>

                                <!--experience box-->
                                <div class="col col-md-12">
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
                                                            <p><strong>Job title : </strong><!--edit-->{{$work_experience->position}}
                                                            <br><strong>Time period : </strong><!--edit-->
                                                                    @if($work_experience->time_period_start!='')
                                                                    {{$work_experience->time_period_start}} - {{$work_experience->time_period_end}}
                                                                    @endif
                                                            </p>
                                                        </div>
                                                        <div class="col col-md-6">
                                                            <strong>Company name : </strong><!--edit-->{{$work_experience->company_name}}
                                                            <br><strong>Location : </strong><!--edit-->{{$work_experience->location}}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-md-12">
                                                            <strong>Job Achievement(s) : </strong> 
                                                            {{$work_experience->job_achieve}}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-md-12">
                                                            <strong>Reasons for Leaving a Job : </strong> 
                                                            {{$work_experience->reason_leave}}
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div><!--end first row for Work Experience-->
                                        <br>
                                        @endforeach
                                        <!-- <div class="row">
                                            <carousel interval="400">
                                              <slide>
                                                
                                                  <h4>Slide index</h4>
                                                
                                              </slide>
                                               <slide>
                                                
                                                  <h4>Slide index</h4>
                                                
                                              </slide>
                                               <slide>
                                                
                                                  <h4>Slide index</h4>
                                                
                                              </slide>
                                            </carousel>
                                        </div> -->
                                  </div>
                                </div>
                                </div>

                                <!--skill-->
                                <div class="col col-md-12">
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
                                        </div>
                                    </div>
                                </div>

                                <!--education-->
                                <div class="col col-md-12">
                                    <div class="panel panel-success  frame frame-shadow-curved " >
                                        <div class="panel-heading"  >
                                            <h3 class="panel-title">Education</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col col-md-12">
                                                    <div class="content-block frame border-radius" style="padding: 5px;">
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
                                <div class="col col-md-12">
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
                                <div class="col col-md-12">
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
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end first row-->

                        </div><!--end col-md-10-->
                                  
                            
                        
                    
                    <!--end short detail-->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-6">
                                <button class="btn btn-default pull-left" style="width:8em;" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                            </div>
                            <div class="col-xs-6">
                             </div>
                        </div>
                </section><!-- /.content -->

        </div><!-- /.right-side -->

<script>
        if(!window.locationbar.visible){
            $(".left-side").remove();
            $(".navbar").remove();
            $(".header").remove();
            $(".right-side").toggleClass(false);
            $(".content").animate({opacity:'0'},0);
            $(".content").animate({marginTop:'0px',opacity:'1'},1000);
        }
</script>
      
@stop