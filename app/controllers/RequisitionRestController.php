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
                    $req=Requisition::where('employee_user_id','!=',0);
                    
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
                    if($user_id ==21)
                    { 
                        $ddd = Requisition::whereHas('requisitionLog', function($q){
                            $q->whereActionType(3)->whereSendNumber(1);
                        })->lists('requisition_id');
                        if(count($ddd) > 0)
                        {$req=$req->whereNotIn('requisition_id',$ddd);}
                    }
                   $req=$req->get();
                    $return = Datatable::collection($req)
                    ->addColumn('requisitsion_id',function($model)
                        {
                            $bin = sprintf( "%020d",  $model->requisition_id);
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
                            $color = 'info';
                            $usecolor='';
                            if($model->requisition_current_status_id==2)//shortlist sent
                            {   $color = 'success';
                                $usecolor='';
                            }
                            if($model->requisition_current_status_id==3)//shortlist sent
                            {   $color = '';
                                $usecolor='aqua';
                            }
                           
                            //recruiter
                            if($model->requisition_current_status_id==4)//post job
                            {   $color = '';
                                $usecolor='aqua';
                            }
                            if($model->requisition_current_status_id==5)//send shortlist
                            {   $color = 'success';
                                $usecolor='';
                            }
                            if($model->requisition_current_status_id==6)//shortlist sent
                            {   $color = 'warning';
                                $usecolor='';
                            }
                            if($model->requisition_current_status_id==7)//shortlist sent
                            {   $color = 'default';
                                $usecolor='';
                            }



                            return '<input type="hidden" name="Language" value="'.$bin.'"><span class="label label-'.$color.' bg-'.$usecolor.'">'.$model->requisitionCurrentStatus()->first()->name.'</span>';
                        })
                    ->addColumn('Require',function($model)
                        { 
                            return $model->total_number;
                        })
                    ->addColumn('SLA',function($model)
                        { 
                            $req_cur_stat_id = $model->requisitionCurrentStatus->requisition_current_status_id;
                            $SLA = $model->corporateTitle->group->SLARequisition()->whereRequisitionCsId($req_cur_stat_id)->first()->SLA;
                            $start_timestamp = $model->requisitionLog()->orderBy('action_datetime','desc');
                            if($req_cur_stat_id == 3){
                                $start_timestamp = $start_timestamp->where('action_type','<>',3);
                            }else if($req_cur_stat_id == 4){
                                $start_timestamp = $start_timestamp->whereSendNumber(2);
                            }else if($req_cur_stat_id == 6){
                                $start_timestamp = $start_timestamp->whereSendNumber(1);//orderBy('send_number','desc');
                            }
                            $start_timestamp = $start_timestamp->first();
                            $skip = false;
                            if(is_null($start_timestamp)){
                                $start_timestamp = Carbon::createFromTimeStamp(0);
                                $skip = true;
                            }else{
                                $start_timestamp = Carbon::createFromFormat('Y-m-d H:i:s',$start_timestamp->action_datetime);
                            }
                            $end_timestamp = $start_timestamp->copy();
                            $holidays = PublicHoliday::all();
                            for($i=0; !$skip && $end_timestamp->diffInSeconds(Carbon::now(),false) >= 0; $i++){
                                if($end_timestamp->toDateString() == Carbon::now()->toDateString()){
                                    return '<input id="table_row'.$model->requisition_id.'" type="hidden" name="sla" value="'.sprintf("%06d",($SLA-$i)).'">'
                                    . $i . " / " . $SLA
                                    .'<script>'
                                    .'var row = document.getElementById("table_row'.$model->requisition_id.'").parentNode.parentNode;'
                                    .'row.className = row.className+" danger";'
                                    .'</script>';
                                }
                                $end_timestamp->addDays(1);
                                if($end_timestamp->isWeekend()){
                                   $i--; 
                                }else{
                                    foreach($holidays as $holiday){
                                        if($end_timestamp->toDateString() == $holiday->date){
                                            $i--;
                                            break;
                                        }
                                    }
                                }
                            }
                            return ('<input type="hidden" name="sla" value="'."999999".'">')
                                    . "SLA = " . $SLA;
                        })
                    ->addColumn('Deadline',function($model)
                        { 
                            $req_cur_stat_id = $model->requisitionCurrentStatus->requisition_current_status_id;
                            $SLA = $model->corporateTitle->group->SLARequisition()->whereRequisitionCsId($req_cur_stat_id)->first()->SLA;
                            $start_timestamp = $model->requisitionLog()->orderBy('action_datetime','desc');
                            if($req_cur_stat_id == 4){
                                $start_timestamp = $start_timestamp->whereSendNumber(2);
                            }else if($req_cur_stat_id == 6){
                                $start_timestamp = $start_timestamp->whereSendNumber(1);//orderBy('send_number','desc');
                            }
                            $start_timestamp = $start_timestamp->first();
                            if(is_null($start_timestamp)){
                                $start_timestamp = Carbon::createFromTimeStamp(0);
                            }else{
                                $start_timestamp = Carbon::createFromFormat('Y-m-d H:i:s',$start_timestamp->action_datetime);
                            }
                            $end_timestamp = $start_timestamp->copy();
                            $holidays = PublicHoliday::all();
                            for($i=0; $i<$SLA; $i++){
                                $end_timestamp->addDays(1);
                                if($end_timestamp->isWeekend()){
                                   $i--; 
                                }else{
                                    foreach($holidays as $holiday){
                                        if($end_timestamp->toDateString() == $holiday->date){
                                            $i--;
                                            break;
                                        }
                                    }
                                }
                            }
                            return ('<input type="hidden" name="deadline" value="'.sprintf("%014d",$end_timestamp->getTimestamp()).'">')
                                    . $end_timestamp->toDayDateTimeString();
                        })
                    ->addColumn('From',function($model)
                        { return $model->employee()->first()->first.' '.$model->employee()->first()->last;
                        })
                    ->addColumn('Note',function($model)
                        {
                            if(is_null($model->note) || strlen($model->note) == 0)
                                return '';
                            return '<i class="fa fa-fw fa-envelope-o"></i>';
                        });
                        if($user_id == 0)
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
                                    else  if($model ->requisition_current_status_id == 3 )
                                    {
                                        return '<a href="' .URL::to('hrbp-officer-requisition/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                                    }  
                                    else if($model ->requisition_current_status_id == 4)
                                    {
                                        return '<a href="' .URL::to('recruiter-requisition-post/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Post Job</button></a>';
                                    }
                                    else if($model ->requisition_current_status_id == 5)
                                    {
                                        return  '<a href="' .URL::to('recruiter-shortlist-candidate/' . $model->requisition_id).'"><button class="btn btn-sm btn-info">Application</button></a>'

                                        .'  '.'<a href="' .URL::to('recruiter-shortlist-basket/' . $model->requisition_id).'"><button class="btn btn-sm btn-success">Basket</button></a>'
                                                
                                        ;
                                    }
                                    else if($model ->requisition_current_status_id == 6)
                                    {
                                        return '<a href="' .URL::to('hm-application-review/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Select Candidate</button></a>';
                                    }
                                    else 
                                    {
                                      return '';
                                    }
                                });
                        }
                        else if($user_id==1)
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
                                    else if($model ->requisition_current_status_id == 6)
                                    {
                                        // return  '<a href="' .URL::to('recruiter-shortlist/' . $model->requisition_id).'"><button class="btn btn-sm btn-info">Detail</button></a>'.'  '.
                                        // '<a href="' .URL::to('hm-application-review/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Select Candidate</button></a>';
                                        return  '<div class="btn-group-vertical">
                                                    <a href="' .URL::to('hm-application-review/' . $model->requisition_id). '" type="button" class="btn btn-sm btn-default">
                                                        Select Candidate
                                                    </a>
                                                    <a href="' .URL::to('recruiter-shortlist/' . $model->requisition_id).'" type="button" class="btn btn-sm btn-default">
                                                        <i class="fa fa-fw fa-info-circle"></i>Detail
                                                    </a>
                                                </div>';
                                    }
                                    else        
                                    {
                                      return '';
                                    }
                                });
                        }
                        else if($user_id==21)
                        {
                                $return=$return->addColumn('Action',function($model) { 
                                    if($model ->requisition_current_status_id == 3 )
                                    {
                                        return '<a href="' .URL::to('hrbp-officer-requisition/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                                    }
                        
                                    else 
                                    {
                                      return '';
                                    }
                                });

                        }
                         else if($user_id==22)
                        {
                                $return=$return->addColumn('Action',function($model) { 
                                    if($model ->requisition_current_status_id == 3 )
                                    {
                                        return '<a href="' .URL::to('hrbp-manager-requisition/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                                    }
                        
                                    else 
                                    {
                                      return '';
                                    }
                                }); 

                        }
                         else if($user_id==3)
                        {
                                $return=$return->addColumn('Action',function($model) { 
                                   if($model ->requisition_current_status_id == 4)
                                    {
                                        return '<a href="' .URL::to('recruiter-requisition-post/' . $model->requisition_id.'/edit').'"><button class="btn btn-sm btn-warning">Post Job</button></a>';
                                    }
                                    else if($model ->requisition_current_status_id == 5)
                                    {
                                         $app = Application::where('application_current_status_id', '=', 1)->where('is_in_basket','=','0')->where('requisition_id','=',$model->requisition_id)->count();
                                        $basket = Application::where('application_current_status_id', '=', 1)->where('is_in_basket','=','1')->where('requisition_id','=',$model->requisition_id)->count();
                                        $sent =  Application::where('application_current_status_id', '=', 2)->where('requisition_id','=',$model->requisition_id)->count();
                                        return
                                        '<a href="' .URL::to('recruiter-shortlist/' . $model->requisition_id).'"><button class="btn btn-sm btn-info">Detail</button></a>'.'  '.  
                                        '<a href="' .URL::to('recruiter-shortlist-candidate/' . $model->requisition_id).'"><button class="btn btn-danger btn-info">Application ('.$app.')</button></a>'.'<br>'.
                                        '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->requisition_id).'"><button class="btn btn-sm btn-success">Basket ('.$basket.')</button></a>'.'  '.
                                        '<a href="' .URL::to('recruiter-shortlist-log/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Shortlist Sent ('.$sent.')</button></a>'
                                                
                                        ;
                                    }
                                    else if($model ->requisition_current_status_id == 6)
                                    {
                                        $confirm = Application::where('application_current_status_id', '=', 3)->where('requisition_id','=',$model->requisition_id)->count();
                                        $feed = Application::where('application_current_status_id', '=', 4)->where('requisition_id','=',$model->requisition_id)->count();
                                       $prepare = Application::where('application_current_status_id', '=', 5)->where('requisition_id','=',$model->requisition_id)->count();
                                        return
                                        '<a href="' .URL::to('recruiter-interview-confirm/' . $model->requisition_id).'"><button class="btn btn-sm btn-info">Interview Confirm ('.$confirm.')</button></a>'.'  '.  
                                        '<a href="' .URL::to('recruiter-interview-feedback/' . $model->requisition_id).'"><button class="btn btn-danger btn-info">Interview Feedback ('.$feed.')</button></a>'.'<br>'.
                                        '<a href="' .URL::to('recruiter-prepare-package/' . $model->requisition_id).'"><button class="btn btn-sm btn-success">Prepare Package ('.$prepare.')</button></a>'.'  '.
                                        '<a href="' .URL::to('recruiter-offer/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Offer(ยังไม่มี)</button></a>'
                                                
                                        ;
                                    }
                                    else 
                                    {
                                      return '';
                                    }
                                });

                        }
                        else {$return=$return->addColumn('Action',function($model) {return ''; });}
                            $return=$return->searchColumns('requisitsion_id',
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

                        return $return;
            
        }
	       public function getSendShortlist()
        {
                 $req=Requisition::where('requisition_current_status_id','=',5)->whereHas('application', function($q) {
                                      $q->whereApplicationCurrentStatusId(1);
                         });
                 $req=$req->get();
                    $return = Datatable::collection($req)
                    ->addColumn('requisitsion_id',function($model)
                        {
                            $bin = sprintf( "%020d",  $model->requisition_id);
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
                        { 
                            return $model->total_number;
                        })
                    ->addColumn('SLA',function($model)
                        { 
                            $req_cur_stat_id = $model->requisitionCurrentStatus->requisition_current_status_id;
                            $SLA = $model->corporateTitle->group->SLARequisition()->whereRequisitionCsId($req_cur_stat_id)->first()->SLA;
                            $start_timestamp = $model->requisitionLog()->orderBy('action_datetime','desc');
                            if($req_cur_stat_id == 3){
                                $start_timestamp = $start_timestamp->where('action_type','<>',3);
                            }else if($req_cur_stat_id == 4){
                                $start_timestamp = $start_timestamp->whereSendNumber(2);
                            }else if($req_cur_stat_id == 6){
                                $start_timestamp = $start_timestamp->whereSendNumber(1);//orderBy('send_number','desc');
                            }
                            $start_timestamp = $start_timestamp->first();
                            $skip = false;
                            if(is_null($start_timestamp)){
                                $start_timestamp = Carbon::createFromTimeStamp(0);
                                $skip = true;
                            }else{
                                $start_timestamp = Carbon::createFromFormat('Y-m-d H:i:s',$start_timestamp->action_datetime);
                            }
                            $end_timestamp = $start_timestamp->copy();
                            $holidays = PublicHoliday::all();
                            for($i=0; !$skip && $end_timestamp->diffInSeconds(Carbon::now(),false) >= 0; $i++){
                                if($end_timestamp->toDateString() == Carbon::now()->toDateString()){
                                    return '<input type="hidden" name="sla" value="'.sprintf("%06d",($SLA-$i)).'">'
                                    . $i . " / " . $SLA;
                                }
                                $end_timestamp->addDays(1);
                                if($end_timestamp->isWeekend()){
                                   $i--; 
                                }else{
                                    foreach($holidays as $holiday){
                                        if($end_timestamp->toDateString() == $holiday->date){
                                            $i--;
                                            break;
                                        }
                                    }
                                }
                            }
                            return ('<input type="hidden" name="sla" value="'."999999".'">')
                                    . "SLA = " . $SLA;
                        })
                    ->addColumn('Deadline',function($model)
                        { 
                            $req_cur_stat_id = $model->requisitionCurrentStatus->requisition_current_status_id;
                            $SLA = $model->corporateTitle->group->SLARequisition()->whereRequisitionCsId($req_cur_stat_id)->first()->SLA;
                            $start_timestamp = $model->requisitionLog()->orderBy('action_datetime','desc');
                            if($req_cur_stat_id == 4){
                                $start_timestamp = $start_timestamp->whereSendNumber(2);
                            }else if($req_cur_stat_id == 6){
                                $start_timestamp = $start_timestamp->whereSendNumber(1);//orderBy('send_number','desc');
                            }
                            $start_timestamp = $start_timestamp->first();
                            if(is_null($start_timestamp)){
                                $start_timestamp = Carbon::createFromTimeStamp(0);
                            }else{
                                $start_timestamp = Carbon::createFromFormat('Y-m-d H:i:s',$start_timestamp->action_datetime);
                            }
                            $end_timestamp = $start_timestamp->copy();
                            $holidays = PublicHoliday::all();
                            for($i=0; $i<$SLA; $i++){
                                $end_timestamp->addDays(1);
                                if($end_timestamp->isWeekend()){
                                   $i--; 
                                }else{
                                    foreach($holidays as $holiday){
                                        if($end_timestamp->toDateString() == $holiday->date){
                                            $i--;
                                            break;
                                        }
                                    }
                                }
                            }
                            return ('<input type="hidden" name="deadline" value="'.sprintf("%014d",$end_timestamp->getTimestamp()).'">')
                                    . $end_timestamp->toDayDateTimeString();
                        })
                    ->addColumn('From',function($model)
                        { return $model->employee()->first()->first.' '.$model->employee()->first()->last;
                        })
                    ->addColumn('Note',function($model)
                        {
                            if(is_null($model->note) || strlen($model->note) == 0)
                                return '';
                            return '<i class="fa fa-fw fa-envelope-o"></i>';
                        })
                    ->addColumn('Action',function($model) { 
                                     $app = Application::where('application_current_status_id', '=', 1)->where('is_in_basket','=','0')->where('requisition_id','=',$model->requisition_id)->count();
                                        $basket = Application::where('application_current_status_id', '=', 1)->where('is_in_basket','=','1')->where('requisition_id','=',$model->requisition_id)->count();
                                        $sent =  Application::where('application_current_status_id', '=', 2)->where('requisition_id','=',$model->requisition_id)->count();
                                        return
                                        '<a href="' .URL::to('recruiter-shortlist/' . $model->requisition_id).'"><button class="btn btn-sm btn-info">Detail</button></a>'.'  '.  
                                        '<a href="' .URL::to('recruiter-shortlist-candidate/' . $model->requisition_id).'"><button class="btn btn-danger btn-info">Application ('.$app.')</button></a>'.'<br>'.
                                        '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->requisition_id).'"><button class="btn btn-sm btn-success">Basket ('.$basket.')</button></a>'.'  '.
                                        '<a href="' .URL::to('recruiter-shortlist-log/' . $model->requisition_id).'"><button class="btn btn-sm btn-warning">Shortlist Sent ('.$sent.')</button></a>'
                                                
                                        ;
                                });
        }   
	}