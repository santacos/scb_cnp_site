<?php

class RequisitionRestController extends \BaseController {

	

		public function getCoporateTitle()
		{
			$corporate_titles = CorporateTitle::All()->toJson();
			return $corporate_titles;
		}

		public function getDept()
		{
			$depts = Dept::All()->toJson();
			return $depts;
		}
		public function getRecruitmentType()
		{
			$recruitment_types = RecruitmentType::All()->toJson();
			return $recruitment_types;
		}
		public function getLocation()
		{
			$locations = Location::All()->toJson();
			return $locations;
		}
		public function getRequisitionDatatable($status_id='')
    {    	
    	 // return $action;
    	if($status_id==''){  $req=Requisition::All();}
    	else{  $req=Requisition::where('requisition_current_status_id','=',$status_id)->get();}
    	return  Datatable::collection($req)
    ->addColumn('requisitsion_id',function($model)
   		{
   			// if($model->requisition_id==3){
   				return $model->requisition_id;
   				// }
   					// return '<span class="badge bg-grey">'.$model->requisition_id.'</span>';
   		})
    ->addColumn('job_title',function($model)
        {
            return $model->position()->first()->job_title;
        })
    ->addColumn('corporate_title_id',function($model)
        {
            return $model->corporateTitle()->first()->name;
        })
    ->addColumn('location_id',function($model)
        {
            return $model->location()->first()->name;
        })
    ->addColumn('requisition_current_status_id',function($model)
        {
            return '<span class="label label-success">'.$model->requisitionCurrentStatus()->first()->name.'</span>';
        })
    ->addColumn('Require',function($model)
        { return $model->total_number;
        })
    // ->addColumn('Date Order',function($model)
    //     { return Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
    //     })
    ->addColumn('Deadline',function($model)
        { return Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
        })
    ->addColumn('From',function($model)
        { return $model->employee()->first()->first.' '.$model->employee()->first()->last;
        })
    ->addColumn('Note',function($model)
        { return '<i class="fa fa-fw fa-envelope-o"></i>';
        })
    ->addColumn('Action',function($model)
        { 
        	if($model ->requisition_current_status_id < 2) //Creating Requisition
        	 {
        	 	return '<a href="' .URL::to('hm-requisition/' . $model->requisition_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';

        	}
        	 // else	return '<a href="' .URL::to('hm/requisition/' . $model->requisition_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';
        	  
        	else if($model ->requisition_current_status_id == 2) //
        	{
        		return '<a href="' .URL::to('hm-nl-requisition/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
        	}
        	else if($model ->requisition_current_status_id == 3)
        	{
        		return '<a href="' .URL::to('hrbp-officer-requisition/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
        	}
        	else if($model ->requisition_current_status_id == 4)
        	{
        		return '<a href="' .URL::to('recruiter-requisition-post/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Post Job</button></a>';
        	}
        	else if($model ->requisition_current_status_id == 5)
        	{
        		return '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Basket</button></a>';
        	}
        	else if($model ->requisition_current_status_id == 6)
        	{
        		return '';
        		// return '<a href="' .URL::to('hrbp/officer/requisition/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
        	}
        	else if($model ->requisition_current_status_id == 7)
        	{
        		return '';
        		// return '<a href="' .URL::to('hrbp/officer/requisition/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
        	}
        })
    ->orderColumns('requisitsion_id')
    ->searchColumns('requisitsion_id',
    	'job_title',
    	'corporate_title_id',
    	'location_id',
    	'requisition_current_status_id',
    	'Require',
    	'Deadline',
    	'From',
    	'Note',
    	'Action')
    ->make();
    }

	}