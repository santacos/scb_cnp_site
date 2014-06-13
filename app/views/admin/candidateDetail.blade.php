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
                                <i class="fa fa-fw fa-user"></i> Peepeepee northnorth
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
                                              <td>Peepeepee</td>
                                              <td><strong>Lastname:</strong>
                                              <td>northnorthnorth</td>
                                            </tr>
                                            <tr>
                                              <td><strong>ชื่อ: </strong>
                                              <td>พีพีพี</td>
                                              <td><strong>นามสกุล: </strong></td>
                                              <td>นอร์ทนอร์ท</td>
                                            </tr>
                                            <tr>
                                              <td><strong>Gender: </strong></td>
                                              <td>Male</td>
                                              <td><strong>Age: </strong></td>
                                              <td>25&nbsp;&nbsp;years</td>
                                            </tr>
                                            <tr>
                                              <td><strong>Date of Birth :</strong></td>
                                              <td>12 July 1988</td>
                                              <td><strong>Nationality : </strong></td>
                                              <td>Thai</td>
                                            </tr>
                                            <tr>
                                              <td><strong>Passport NO:</strong></td>
                                              <td>1100932419323</td>
                                              <td><strong>ID Number :</strong></td>
                                              <td>1100932419323</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--for photo resume file-->
                                <div class="col col-md-4">
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
                                                                <strong>Email :</strong> Napa@hotmail.com<br>
                                                                <strong>Contact Number :</strong> 0892432934<br>
                                                                <strong>Telephone(Home) :</strong> 029999999<br>
                                                            </div>
                                                            <div class="col col-md-6">
                                                                <strong>Current Living Location :</strong> 96/134 xxx xxx xxxx  xxxx<br>
                                                                <strong>Country :</strong> Thailand<br>
                                                                <strong>City :</strong> Bangkok<br>
                                                                <strong>Zip/Postal Code :</strong> 10240 <br>
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
                                            <div class="row">
                                                <div class="col col-md-12">
                                                    <div class="content-block frame border-radius" style="padding:5px;">
                                                        <div class="row">
                                                            <div class="col col-md-6">
                                                                <p><strong>Job title :</strong><!--edit-->Programmer
                                                                <br><strong>Time period :</strong><!--edit-->2009 - 2011
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
                                                
                                            </div><!--end first row for Work Experience-->
                                            <br>
                                            <div class="row">
                                                <div class="col col-md-12">
                                                    <div class="content-block frame border-radius" style="padding:5px;">
                                                        <div class="row">
                                                            <div class="col col-md-6">
                                                                <p><strong>Job title : </strong><!--edit-->Programmer
                                                                <br><strong>Time period : </strong><!--edit-->2009 - 2011
                                                                </p>
                                                            </div>
                                                            <div class="col col-md-6">
                                                                <strong>Company name : </strong><!--edit-->Lotuss
                                                                <br><strong>Location : </strong><!--edit-->Bangkok
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col col-md-12">
                                                                <strong>Job Achievement(s) : </strong> 
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div><!--end second row for Work Experience-->
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
                                                    <div class="col col-md-6">
                                                        <div class="content-block frame border-radius" style="padding: 5px;">
                                                            <p><strong>Skill name :  </strong><!--edit-->JAVA 
                                                            <br><strong>Skill branch :  </strong><!--edit-->Programming language </p>
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <div class="content-block frame border-radius" style="padding: 5px;">
                                                            <p><strong>Skill name :  </strong><!--edit-->JAVA 
                                                            <br><strong>Skill branch :  </strong><!--edit-->Programming language </p>
                                                        </div>
                                                    </div>
                                                </div><!--end first row for skill-->
                                                <br>
                                                <div class="row">
                                                    <div class="col col-md-6">
                                                        <div class="content-block frame border-radius" style="padding: 5px;padding-top: 10px;">
                                                            <p><strong>Skill name :  </strong><!--edit-->JAVA 
                                                            <br><strong>Skill branch :  </strong><!--edit-->Programming language </p>
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <div class="content-block frame border-radius" style="padding: 5px;">
                                                            <p><strong>Skill name :  </strong><!--edit-->JAVA 
                                                            <br><strong>Skill branch :  </strong><!--edit-->Programming language </p>
                                                        </div>
                                                    </div>
                                                </div><!--end second row for skill-->
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
                                                        <div class="row">
                                                            <div class="col col-md-3">
                                                                <p><strong>2000 - 2004 </strong><!--edit-->
                                                                
                                                                </p>
                                                            </div>
                                                            <div class="col col-md-9">
                                                                <strong>Chulalongkorn university</strong><!--edit-->
                                                                <br><!--edit-->Degree : Bachelor
                                                                <br><!--edit-->Field of study :  Faculty of Science and Technology
                                                                <br><!--edit-->Major :  Information Technology
                                                                <br><!--edit-->GPA :  4.00
                                                            </div>
                                                        </div>
                                                        
                                                        
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
                                                <div class="col col-md-12">
                                                    <div class="content-block frame border-radius" style="padding:5px;">
                                                        <div class="row">
                                                            <div class="col col-md-3">
                                                                <p><strong>June 2010 </strong><!--edit-->
                                                                
                                                                </p>
                                                            </div>
                                                            <div class="col col-md-9">
                                                                <strong>Award title</strong><!--edit-->
                                                                <br><!--edit-->By issuer
                                                                <br><!--edit-->Date: month,year
                                                                <br><!--edit-->Description : <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit ad</p>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                                    
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
                                                    
                                            </div><!--end first row for Professional certificate-->
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


      
@stop