@extends('admin.layouts.main.hm')
@section('title')
thisIsTitle
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
      {{ HTML::style('assets/css/bootstrap.css') }}
        @include('includes.datatable')
@stop

@section('content')
         <!--row two for TO DO REQUISITION-->
         
        <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title"> Sent Shortlist Candidate..</h3>
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

                                      
                                         {{  Datatable::table()
                                        ->addColumn( 
                                            'Application ID', 
                                            'Name',
                                            '%Related',
                                            'Point',
                                            'Application Status',
                                            'Education',
                                            'Previous Job',
                                            'SLA',
                                            'Deadline',
                                            'Saved',
                                            'Choose',
                                            'Note',
                                            'Action'
                                                      )    
                                          ->setUrl(URL::to('api/application/'.$requisition->requisition_id .'/2' .'/2'))
                                          ->render('datatable') }}
                                      </div>
                                      


                                      <div class="well" style="">
                                        {{ Form::model($requisition, array('route' => array('hm-application-review.update', $requisition->requisition_id), 'method' => 'PUT')) }}
                                          <div class="form-group" style="font-size:1.2em;font-weight:bold; padding:15px;">
                                            {{ Form::label('note', 'Note (preferred time for interviewing) :') }}
                                            {{ Form::textarea('note', '', array( 'size' => '60x5','style'=>'margin-left:10px;')) }}
                                          </div>
                                          {{ Form::hidden('sel_application_ids','',array('id' => 'sel_application_ids')) }}
                                          {{ Form::hidden('unsel_application_ids','',array('id' => 'unsel_application_ids')) }}
                                        
                                        <div class="row">
                                          <div class="col col-md-3"></div>
                                          <div class="col col-md-4" style="margin-left:25px;">
                                            {{ Form::button('Accept', array('name' => 'approve','style'=>'width:115%;' ,'value' => true, 'type' => 'submit','class'=>'btn btn-lg btn-success')) }}
                                        {{ Form::close() }}

                                          </div>

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
                    <!--end TO DO REQUISITION-->
<script>
  var vals = [];
  function toggleCandidate(x){
    var row = x.parentNode.parentNode.parentNode;
    var id = row.children[0].children[1].innerHTML;
    if(vals[id] === undefined){
      vals[id] = x.checked;
    }else{
      x.checked = vals[id];
    }
    if(x.checked){
      row.style.color = 'black';
    }else{
      row.style.color = '#AAAAAA';
    }
    updateAll(document.getElementById('DataTables_Table_0'));
  }
  function toggleCandidate2(x){
    var row = x.parentNode.parentNode.parentNode;
    var id = row.children[0].children[1].innerHTML;
    vals[id] = x.checked;
    if(x.checked){
      row.style.color = 'black';
    }else{
      row.style.color = '#AAAAAA';
    }
    updateAll(document.getElementById('DataTables_Table_0'));
  }
  function updateAll(x){
    document.getElementById('sel_application_ids').value = '';
    document.getElementById('unsel_application_ids').value = '';
    var rows = x.rows;
    for(var i=1;i<rows.length;i++){
      var id = rows[i].children[0].children[1].innerHTML;
      if(rows[i].children[10].firstChild.firstChild.checked){
        document.getElementById('sel_application_ids').value += (document.getElementById('sel_application_ids').value==''?'':',') + id;
      }else{
        document.getElementById('unsel_application_ids').value += (document.getElementById('unsel_application_ids').value==''?'':',') + id;
      }
    }
  }
</script>
@stop
