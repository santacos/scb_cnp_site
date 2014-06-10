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
        public function getRequisitionDatatable($user_id='',$status_id1='',$status_id2='',$status_id3='',$status_id4='',$status_id5='',$status_id6='',$status_id7='')
    {       
         // return $action;
        // return $user_id.'----'.$status_id;

                    if($user_id=='' || $user_id==0||$user_id==1){  $req=Requisition::where('employee_user_id','!=',0);}
                    else{  $req=Requisition::where('employee_user_id','=',$user_id);
                        }
                    if($status_id1!='' && $status_id1!=0)
                    {
                        $req=$req->where('requisition_current_status_id','=',$status_id1);
                         
                    }
                    if($status_id2!='' && $status_id2!=0)
                    {
                        $req=$req->OrWhere('requisition_current_status_id','=',$status_id2);
                         
                    }
                    if($status_id3!='' && $status_id3!=0)
                    {
                        $req=$req->OrWhere('requisition_current_status_id','=',$status_id3);
                         
                    }
                    if($status_id4!='' && $status_id4!=0)
                    {
                        $req=$req->OrWhere('requisition_current_status_id','=',$status_id4);
                         
                    }
                    if($status_id5!='' && $status_id5!=0)
                    {
                        $req=$req->OrWhere('requisition_current_status_id','=',$status_id5);
                         
                    }
                    if($status_id6!='' && $status_id6!=0)
                    {
                        $req=$req->OrWhere('requisition_current_status_id','=',$status_id6);
                         
                    }
                    if($status_id7!='' && $status_id7!=0)
                    {
                        $req=$req->OrWhere('requisition_current_status_id','=',$status_id7);
                         
                    }
                   $req=$req->get();
                    $return = Datatable::collection($req)
                    ->addColumn('requisitsion_id',function($model)
                        {
                            $bin = sprintf( "%020d",  $model->corporate_title_id );
                                return '<input type="hidden" name="Language" value="'.$bin.'"><span class="badge bg-grey">'.$model->requisition_id.'</span>';
                                // }
                                    // return '<span class="badge bg-grey">'.$model->requisition_id.'</span>';
                        })
                    ->addColumn('job_title',function($model)
                        {
                            return $model->position()->first()->job_title;
                        })
                    ->addColumn('corporate_title_id',function($model)
                        {   $bin = sprintf( "%020d",  $model->corporate_title_id );
                            return '<input type="hidden" name="Language" value="'.$bin.'">'.$model->corporateTitle()->first()->name;
                        })
                    ->addColumn('location_id',function($model)
                        {
                            return $model->location()->first()->name;
                        })
                    ->addColumn('requisition_current_status_id',function($model)
                        {   $bin = sprintf( "%020d",  $model->requisition_current_status_id );
                            return '<input type="hidden" name="Language" value="'.$bin.'"><span class="label label-success">'.$model->requisitionCurrentStatus()->first()->name.'</span>';
                        })
                    ->addColumn('Require',function($model)
                        { return $model->total_number;
                        })
                    ->addColumn('SLA',function($model)
                        { return Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
                        })
                    ->addColumn('Deadline',function($model)
                        { return '<input type="hidden" name="Language" value="'.$model->created_at.'">'.Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
                        })
                    ->addColumn('From',function($model)
                        { return $model->employee()->first()->first.' '.$model->employee()->first()->last;
                        })
                    ->addColumn('Note',function($model)
                        { return '<i class="fa fa-fw fa-envelope-o"></i>';
                        });
            if($user_id==1)
            {           $return=$return->addColumn('Action',function($model) { 
                        if($model ->requisition_current_status_id < 2) //Creating Requisition
                         {
                            return '<a href="' .URL::to('hm-requisition/' . $model->requisition_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';

                        }
                         // else    return '<a href="' .URL::to('hm/requisition/' . $model->requisition_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';
                          
                        else if($model ->requisition_current_status_id == 2) //
                        {
                            return '<a href="' .URL::to('hm-nl-requisition/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                        }
            
                         else if($model ->requisition_current_status_id == 3 )
                        {
                            return '<a href="' .URL::to('hrbp-manager-requisition/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
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
                            return '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">See infomation (ยังไม่ได้ทำ)</button></a>';
                        }
                        else if($model ->requisition_current_status_id == 7)
                        {
                          return '';
                        }
                    })
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
                else{

                         $return=$return->addColumn('Action',function($model) { 
                        if($model ->requisition_current_status_id < 2) //Creating Requisition
                         {
                            return '<a href="' .URL::to('hm-requisition/' . $model->requisition_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';

                        }
                         // else    return '<a href="' .URL::to('hm/requisition/' . $model->requisition_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';
                          
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
                            return '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">See infomation (ยังไม่ได้ทำ)</button></a>';
                        }
                        else if($model ->requisition_current_status_id == 7)
                        {
                          return '';
                        }
                    })
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
                 return $return;
        }
	   
	}