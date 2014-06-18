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
                        Detail
                        <small># {{$candidate->user_id}}</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">Candidate# {{$candidate->user_id}}</li>
                    </ol>
                </section>
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                          <h6 class="page-header">
                                <b>Candidate : </b> 
                                
                            </h6> 
                            <table class="table table-striped text-left table-hover" style="font-size:1.2em;">
                               <thead>
                                    <tr>
                                        <th style="width:40%;"></th>
                                        <th style="width:60%;"></th>
                                        
                                    </tr>                                    
                                </thead>
                                <tbody>
                                    <tr>
                                         <td><strong>Profile Picture :</strong></td>
                                          <td><img style="max-height: 200px; max-width: 200px;" ng-src="@{{candidate.profile_pic}}"/></td> <!--pic-->
                                    </tr>
                                    <tr> 
                                        <td><strong>ชื่อ-นามสกุล :</strong></td>
                                        <td>{{$candidate->thai_saluation.' '.$candidate->thai_firstname.' '.$candidate->thai_lastname}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>First name and last name :</strong></td>
                                        <td>{{$candidate->eng_saluation.' '.$user->first.' '.$user->last}}</td>
                                    </tr>
                                    <tr> 
                                        <td><strong>Gender :</strong></td>
                                        <td>@if($candidate->is_male)
                                             Male
                                            @else Female
                                            @endif
                                        </td>
                                     
                                    </tr>
                                    <tr> 
                                        <td><strong>Passport Number :</strong></td>
                                        <td>{{$candidate->passport_number}}</td>
                                       
                                    </tr>
                                    <tr>
                                        <td><strong>National ID Number :</strong></td>
                                        <td>{{$candidate->idcard}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nationality :</strong></td>
                                        <td>{{$candidate->nationality}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email :</strong></td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr> 
                                        <td><strong>Contact Number :</strong></td>
                                        <td>{{$user->contact_number}}</td>
                                       
                                    </tr>
                                    <tr> 
                                        <td><strong>Current Living Location :</strong></td>
                                        <td>{{$candidate->full_location}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>City :</strong></td>
                                        <td>{{$candidate->city}}</td>

                                    </tr>
                                    <tr> 
                                        <td><strong>Zip/Postal Code :</strong></td>
                                        <td>{{$candidate->zip_code}}</td>
                                    </tr>
                                    <tr> 
                                        <td><strong>Country :</strong></td>
                                        <td>{{$candidate->country}}</td>
                                    </tr>
                                    
                                    <tr> 
                                        <td><strong>Datetime Create :</strong></td>
                                        <td>{{$candidate->created_at}}</td>
                                    </tr>
                                    <FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
                                </tbody>
                            </table>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
            </div><!-- /.right-side -->
@stop