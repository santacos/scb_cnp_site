<!DOCTYPE html>
<html ng-app="nameApp">
  <head>
    <meta charset="utf-8">


    <title>create requisition</title>

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>">

    <style>
        .scrollable-menu {
            width:250px;
        height: auto;
        max-height: 200px;
        overflow-x: hidden;
        }


    </style>
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
    <script src="<?php echo asset('js/createReq-manager.js')?>"></script>

    </head>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="col-md-6 col-md-offset-3" style="margin-top:10px">
        <h1>Create a requisition</h1>

        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}


        {{ Form::open(array('url' => 'requisition','files'=>true ))}}

        <div class="form-group">
            {{ Form::label('job_title', 'Job title') }}
            {{ Form::text('job_title', Input::old('job_title'), array('class' => 'form-control', 'id' => 'form')) }}
        </div>

    <div class="form-group">
        {{ Form::label('corporate_title_id', 'Corporate Title') }}
        <select name="corporate_title_id" class="form-control scrollable-menu">
            <option value=null >Select Corporate Title</option>
            @foreach(CorporateTitle::All() as $corporate_title)
            <option value="{{$corporate_title->corporate_title_id}}">{{$corporate_title->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
            {{ Form::label('total_number', 'No. of Vacancy :') }}
            {{ Form::input('number','total_number', Input::old('qualification'), array('min'=>'0','max'=>'1000','placeholder'=>'0','class' => 'form-control', 'id' => 'form')) }}
        </div>

    <div class="form-group">
        {{ Form::label('recruitment_type_id', 'Recruitment Type') }}
        <select name="recruitment_type_id" class="form-control scrollable-menu">
            <option value=null >Select Recruitment Type</option>
            @foreach(RecruitmentType::All() as $recruitment_type)
            <option value="{{$recruitment_type->recruitment_type_id}}">{{$recruitment_type->name}}</option>
            @endforeach
        </select>
    </div>
     <div class="form-group">
        {{ Form::label('location_id', 'Location') }}
        <select name="location_id" class="form-control scrollable-menu">
            <option value=null >Select Location</option>
            @foreach(Location::All() as $location)
            <option value="{{$location->location_id}}">{{$location->name}}</option>
            @endforeach
        </select>
    </div>
            
                <div class="form-group">
                    <label for="year_of_experience">Years of experience :</label>
                    <input type="number"  min="0" max="100"  class="form-control" id="year_of_experience" placeholder="0"  >
                  </div>

        <div class="form-group">
            {{ Form::label('responsibility', 'Responsibilities :') }}
            {{ Form::text('responsibility', Input::old('responsibility'), array('class' => 'form-control', 'id' => 'form')) }}
        </div>
        <div class="form-group">
            {{ Form::label('qualification', 'Qualifications :') }}
            {{ Form::text('qualification', Input::old('qualification'), array('class' => 'form-control', 'id' => 'form')) }}
        </div>
        <div class="form-group">
            {{ Form::label('note', 'Note :') }}
            {{ Form::textarea('note', Input::old('note'), array('class' => 'form-control', 'id' => 'form','size' => '30x5')) }}
        </div>

    {{ Form::submit('Create', array('class' => 'btn btn-primary btn-lg btn-block')) }}

    {{ Form::close() }}
</div>


</div>
<hr class="tall" />



</html>
