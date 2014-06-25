<?php

class ApplicationRestController extends \BaseController {

	

        public function getApplicationDatatable($requsition_id='',$special_status='',$status_id1='',$status_id2='',$status_id3='',$status_id4='',$status_id5='',$status_id6='',$status_id7='',$status_id8='',$status_id9='',$status_id10='')
    {       
         // return $action;
        // return $user_id.'----'.$status_id;
                    if($requsition_id=='' || $requsition_id==0)
                    {    
                        $app=Application::where('requisition_id','!=',0);

                   }
                    else 
                    {  
                        $app=Application::where('requisition_id','=',$requsition_id);
                    }
                    if($status_id1!='' && $status_id1!=0)
                    {
                        $app=$app->where('application_current_status_id','=',$status_id1);
                         
                    }
                    if($status_id2!='' && $status_id2!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id2);
                         
                    }
                    if($status_id3!='' && $status_id3!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id3);
                         
                    }
                    if($status_id4!='' && $status_id4!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id4);
                         
                    }
                    if($status_id5!='' && $status_id5!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id5);
                         
                    }
                    if($status_id6!='' && $status_id6!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id6);
                         
                    }
                    if($status_id7!='' && $status_id7!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id7);
                         
                    }
                    if($status_id8!='' && $status_id8!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id8);
                         
                    }
                    if($status_id9!='' && $status_id9!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id9);
                         
                    }
                    if($status_id10!='' && $status_id10!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id10);
                         
                    }
                   if($special_status == '1a'){
                        $app=$app->where('is_in_basket','=',1);
                   }
            //degree       
            $GLOBALS['bachelor']= trim(Input::get( 'bachelor' ));//0 or 1
            $GLOBALS['master']= trim(Input::get( 'master' ));//0 or 1
            $GLOBALS['doctor'] = trim(Input::get( 'doctor' ));//0 or 1
            $GLOBALS['field_of_study'] = trim(Input::get( 'field_of_study' ));//text
            $GLOBALS['major'] = trim(Input::get( 'major' ));//text
            $GLOBALS['school_name'] = trim(Input::get( 'school_name' ));//text
            //experience
            $GLOBALS['company_name'] = trim(Input::get( 'company_name' ));//text
            $GLOBALS['position'] = trim(Input::get( 'position' ));//text
            $GLOBALS['monthly_salary'] = trim(Input::get( 'monthly_salary' ));//มากกว่า น้อยกว่า ระหว่าง
            $GLOBALS['monthly_salary1'] = trim(Input::get( 'monthly_salary1' ));
            $GLOBALS['monthly_salary2'] = trim(Input::get( 'monthly_salary2' ));
            $GLOBALS['location'] = trim(Input::get( 'location' ));//text
            $GLOBALS['experience'] = trim(Input::get( 'experience' ));//มากกว่าน้อยกว่าระว่าง
            $GLOBALS['experience1'] = trim(Input::get( 'experience1' ));
            $GLOBALS['experience2'] = trim(Input::get( 'experience2' ));
            //skill
            $GLOBALS['skill'] = trim(Input::get( 'skill' ));//text
            //score
            $GLOBALS['score'] = trim(Input::get( 'score' ));//มากกว่าน้อยกว่าระหว่าง
            $GLOBALS['score1'] = trim(Input::get( 'score1' ));
            $GLOBALS['score2'] = trim(Input::get( 'score2' ));

            $GLOBALS['resume'] = trim(Input::get( 'resume' ));
            if( $GLOBALS['resume']!='')
                {   
                    $app=$app->where(function($s)
                        {   $s->whereHas('candidate',function($q){
                                     $searchTerms = explode(' ', $GLOBALS['resume']);
                                
                                         $GLOBALS['searchTerms'] = $searchTerms;
                                         foreach($GLOBALS['searchTerms'] as $term)
                                        {   $GLOBALS['term']=$term;
                                            $q->Where(function($query)
                                                    {
                                                         $query->orwhere('text_cv', 'LIKE', '%'.   $GLOBALS['term'] .'%'); 
                                                    });
                                         }      
                             
                            });
                    });
                }
            else{
            $app=$app->whereHas('candidate',function($q){
                
                $q->whereHas('education',function($r){
                    if($GLOBALS['bachelor']==1|| $GLOBALS['master']==1|| $GLOBALS['doctor']==1)
                    {
                        
                        $r->where(function($s)
                        {
                            if( $GLOBALS['bachelor']==1)
                            {

                                $s->orWhere('education_degree_id','=',6)->where('education_degree_id','!=',7)->where('education_degree_id','!=',8);
                            }
                           if( $GLOBALS['master']==1)
                            {
                                $s->orWhere('education_degree_id','=',7)->where('education_degree_id','!=',8);
                            }
                            if( $GLOBALS['doctor']==1)
                            {
                                $s->orWhere('education_degree_id','=',8);
                            }
                        });
                       
                    }
                     if( $GLOBALS['field_of_study']!='')
                    {
                            $searchTerms = explode(' ',  $GLOBALS['field_of_study']);
                        
                                 $GLOBALS['searchTerms'] = $searchTerms;
                                $r->where(function($query)
                                        {
                                             foreach($GLOBALS['searchTerms'] as $term)
                                             {$query->orWhere('field_of_study', 'LIKE', '%'.  $term .'%'); }
                                        });
                            
                    }
                    if($GLOBALS['major']!='')
                    {
                            $searchTerms = explode(' ', $GLOBALS['major']);
                        
                                 $GLOBALS['searchTerms'] = $searchTerms;
                                $r->where(function($query)
                                        {
                                             foreach($GLOBALS['searchTerms'] as $term)
                                             {$query->orWhere('major', 'LIKE', '%'.  $term .'%'); }
                                        });
                            
                    }
                    
                      if( $GLOBALS['school_name']!='')
                    {
                            $searchTerms = explode(' ', $GLOBALS['school_name']);
                        
                                 $GLOBALS['searchTerms'] = $searchTerms;
                                $r->where(function($query)
                                        {
                                             foreach($GLOBALS['searchTerms'] as $term)
                                             {$query->orWhere('school_name', 'LIKE', '%'.  $term .'%'); }
                                        });
                            
                    }
                });
                     $q->whereHas('WorkExperience',function($r){
                            if( $GLOBALS['company_name']!='')
                            {
                                    $searchTerms = explode(' ', $GLOBALS['company_name']);
                                
                                         $GLOBALS['searchTerms'] = $searchTerms;
                                        $r->where(function($query)
                                                {
                                                     foreach($GLOBALS['searchTerms'] as $term)
                                                     {$query->orWhere('company_name', 'LIKE', '%'.  $term .'%'); }
                                                });
                                    
                            }
                             if( $GLOBALS['position']!='')
                            {
                                    $searchTerms = explode(' ', $GLOBALS['position']);
                                
                                         $GLOBALS['searchTerms'] = $searchTerms;
                                        $r->where(function($query)
                                                {
                                                     foreach($GLOBALS['searchTerms'] as $term)
                                                     {$query->orWhere('position', 'LIKE', '%'.  $term .'%'); }
                                                });
                                    
                            }
                             if( $GLOBALS['location']!='')
                            {
                                    $searchTerms = explode(' ', $GLOBALS['location']);
                                
                                         $GLOBALS['searchTerms'] = $searchTerms;
                                        $r->where(function($query)
                                                {
                                                     foreach($GLOBALS['searchTerms'] as $term)
                                                     {$query->orWhere('location', 'LIKE', '%'.  $term .'%'); }
                                                });
                                    
                            }
                             if( $GLOBALS['monthly_salary']!='')
                            {
                                if( $GLOBALS['monthly_salary1']!='')
                                   { 

                                       
                                     if($GLOBALS['monthly_salary']==0)
                                       { $r->where('monthly_salary','>=',$GLOBALS['monthly_salary1']);}
                                   else if($GLOBALS['monthly_salary']==1)
                                       { $r->where('monthly_salary','<=',$GLOBALS['monthly_salary1']);}
                                   else if($GLOBALS['monthly_salary']==2&&  $GLOBALS['monthly_salary2']!='')
                                       { $r->where('monthly_salary','>=',$GLOBALS['monthly_salary1']);
                                        $r->where('monthly_salary','<=',$GLOBALS['monthly_salary2']);
                                       }
                                 }
                            }
                             if( $GLOBALS['experience']!='')
                            {
                                if( $GLOBALS['experience1']!='')
                                   { 

                                     if($GLOBALS['experience']==0)
                                       { $r->where('year_experience','>=',$GLOBALS['experience1']);}
                                   else if($GLOBALS['experience']==1)
                                       {  $r->where('year_experience','<=',$GLOBALS['experience1']);}
                                   else if($GLOBALS['experience']==2&&  $GLOBALS['experience2']!='')
                                       { $r->where('year_experience','>=',$GLOBALS['experience1']);
                                        $r->where('year_experience','<=',$GLOBALS['experience2']);
                                       }
                                 }
                            }
                     });
            

                if( $GLOBALS['score']!='')
                            {
                                if( $GLOBALS['score1']!='')
                                   { 

                                     if($GLOBALS['score']==0)
                                       { $q->where('question_point','>=',$GLOBALS['score1']);}
                                   else if($GLOBALS['score']==1)
                                       {  $q->where('question_point','<=',$GLOBALS['score1']);}
                                   else if($GLOBALS['score']==2&&  $GLOBALS['score2']!='')
                                       { $q->where('question_point','>=',$GLOBALS['score1']);
                                        $q->where('question_point','<=',$GLOBALS['score2']);
                                       }
                                 }
                            }

            });     
            }
            
                   $app=$app->get();
                    $return = Datatable::collection($app)
                    ->addColumn('application_id',function($model)
                        {

                            $bin = sprintf( "%020d",  $model->application_id);
                                return '<input type="hidden" name="Language" value="'.$bin.'"><span class="badge bg-grey">'.$model->application_id.'</span>';
                                // }
                                    // return '<span class="badge bg-grey">'.$model->application_id.'</span>';
                        })
                    ->addColumn('Name',function($model)
                        {   
                            $user_id=$model->candidate()->first()->user_id;
                            $user=User::where('user_id','=',$user_id)->first();
                            return $user->first.' '.$user->last;
                        })
                    ->addColumn('%Related',function($model)
                        {   
                            return 10;
                            $bin = sprintf( "%020d",  $model->corporate_title_id );
                            return '<input type="hidden" name="Language" value="'.$bin.'">'.$model->corporateTitle()->first()->name;
                        })
                    ->addColumn('Point',function($model)
                        {   
                            $bin = sprintf( "%05d",  $model->question_point );
                            $total = 0;
                            $questions = $model->requisition->question()->get();
                            foreach($questions as $question){
                                $max = $question->answer()->first()->point;
                                foreach ($question->answer()->get() as $answer) {
                                    if($answer->point > $max){
                                        $max = $answer->point;
                                    }
                                }
                                $total += $max;
                            }
                            return '<input type="hidden" name="Language" value="'.$bin.'">' . $model->question_point . " / " . $total;
                        })
                    ->addColumn('Application Status',function($model)
                        {   
                            $bin = sprintf( "%020d",  $model->application_current_status_id );
                            return '<input type="hidden" name="Language" value="'.$bin.'"><span class="label label-success">'.$model->applicationCurrentStatus()->first()->name.'</span>';
                        })
                    ->addColumn('Education',function($model)
                        {  
                            return $model->candidate()->first()->Education()->first()->educationDegree()->first()->name.' '.$model->candidate()->first()->Education()->first()->major.' '.$model->candidate()->first()->Education()->first()->field_of_study;
                        })
                    ->addColumn('Previous Job',function($model)
                        { 
                            return $model->candidate()->first()->workExperience()->first()->position.' '.$model->candidate()->first()->workExperience()->first()->company_name;
                            return '<input type="hidden" name="Language" value="'.$model->created_at.'">'.Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
                        })
                    ->addColumn('SLA',function($model)
                        { 
                            $app_cur_stat_id = $model->applicationCurrentStatus->application_current_status_id;
                            if($app_cur_stat_id == 3 || $app_cur_stat_id == 4){
                                $visit_number = $model->interviewLog()->orderBy('visit_number','desc')->first();
                                if(is_null($visit_number)){
                                    $visit_number = 1;
                                }else{
                                    $visit_number = $visit_number->visit_number+1;
                                }
                            }else{
                                $visit_number = 1;
                            }
                            $SLA = $model->requisition->corporateTitle->group->SLACandidate()->whereAppCsId($app_cur_stat_id)->whereVisitNumber($visit_number);
                            if($SLA->count() == 0){
                                $SLA = $SLA->orWhere('visit_number','>=',1)->whereAppCsId($app_cur_stat_id)->orderBy('visit_number','desc')->first()->SLA;
                            }else{
                                $SLA = $SLA->first()->SLA;
                            }
                            $start_timestamp = $model->applicationLog()->orderBy('action_datetime','desc');
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
                                    $day_left = $SLA-$i;
                                    return '<input id="table_row'.$model->application_id.'" type="hidden" name="sla" value="'.sprintf("%06d",$day_left).'">'
                                    . $i . " / " . $SLA
                                    .'<script>'
                                    .'var row = document.getElementById("table_row'.$model->application_id.'").parentNode.parentNode;'
                                    .'row.className = row.className+" ' . ($day_left > 3?'':($day_left > 0?'warning':'danger')) . '";'
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
                        { return '<input type="hidden" name="Language" value="'.$model->created_at.'">'.Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
                        })
                    ->addColumn('Saved',function($model)
                        { 
                            return ' ';
                            return $model->employee()->first()->first.' '.$model->employee()->first()->last;
                        });
                    if($special_status == 1 || $special_status == '1a' || $special_status == 2){
                        $GLOBALS['special_status'] = $special_status;
                        $return->addColumn('Choose',function($model)
                            { 
                                if($GLOBALS['special_status'] == 1 || $GLOBALS['special_status'] == '1a'){
                                    return '<center>'
                                                        .'<iframe width="30px" height="20px" scrolling="no" frameBorder="0" name="ckbox_f'.$model->application_id.'" id="ckbox_f'.$model->application_id.'">'
                                                        .'</iframe>'
                                                        .'</center>'
                                                        .'<form action="../recruiter-shortlist-candidate-ckbox" id="ckbox'.$model->application_id.'" target="ckbox_f'.$model->application_id.'" method="GET">'
                                                        .'<input type="hidden" name="id" value="'.$model->application_id.'"/>'
                                                        .'</form>'
                                                        .'<script>'
                                                        .'document.getElementById("ckbox'.$model->application_id.'").submit();'
                                                        .'</script>';
                                }else if($GLOBALS['special_status'] == 2){
                                    return '<center>'
                                            .'<input type="checkbox" onchange="toggleCandidate2(this)"/>'
                                            .'<style onload="toggleCandidate(this.parentNode.firstChild)"></style>'
                                            .'</center>';
                                }
                            });
                    }
                    $return->addColumn('Note',function($model)
                        { 
                            if(is_null($model->note) || strlen($model->note) == 0)
                                return '';
                            return '<i class="fa fa-fw fa-envelope-o"></i>';
                        })
                    ->addColumn('Action',function($model)
                        { 
                            if($model->application_current_status_id == 2){

                                //return'<a href="' .URL::to('cd/' . $model->candidate_user_id).'"><button class="btn btn-sm btn-warning">Detail</button></a>';
                                return '<div class="btn-group-vertical">
                                            <a href="' .URL::to('cd/' . $model->candidate_user_id).'" target="_blank" style="width:8.5em;" class="btn  btn-warning">
                                                <i class="fa fa-fw fa-info-circle"></i>Detail
                                            </a>
                                        </div>
                                        ';
                            }
                            else  if($model->application_current_status_id == 3){

                                // return'<a href="' .URL::to('cd/' . $model->candidate_user_id).'"><button class="btn btn-sm btn-warning">Detail</button></a>'.' '.
                                //                 '<a href="' .URL::to('recruiter-interview-confirm/' . $model->application_id . '/edit').'"><button class="btn btn-sm btn-success">Confirm</button></a>';
                                return '<div class="btn-group-vertical">
                                            <a href="'.URL::to('recruiter-interview-confirm/' . $model->application_id . '/edit').'" type="button" class="btn btn-warning">
                                                Confirm
                                            </a>
                                            <a href="' .URL::to('cd/' . $model->candidate_user_id). '" target="_blank" type="button" class="btn btn-success">
                                                <i class="fa fa-fw fa-info-circle"></i> Detail
                                            </a>
                                        </div>';
                            }
                            else  if($model->application_current_status_id == 4){

                                // return'<a href="' .URL::to('cd/' . $model->candidate_user_id).'"><button class="btn btn-sm btn-warning">Detail</button></a>'.' '.
                                //                 '<a href="' .URL::to('recruiter-interview-feedback/' . $model->application_id . '/edit').'"><button class="btn btn-sm btn-success">Feedback</button></a>';
                                return '<div class="btn-group-vertical">
                                            <a href="' .URL::to('recruiter-interview-feedback/' . $model->application_id . '/edit').'" type="button" class="btn btn-warning">
                                                Feedback
                                            </a>
                                            <a href="' .URL::to('cd/' . $model->candidate_user_id). '" target="_blank" type="button" class="btn btn-success">
                                                <i class="fa fa-fw fa-info-circle"></i> Detail
                                            </a>
                                            
                                        </div>';
                            }
                            else  if($model->application_current_status_id == 5){

                                // return'<a href="' .URL::to('cd/' . $model->candidate_user_id).'"><button class="btn btn-sm btn-warning">Detail</button></a>'.' '.
                                //                 '<a href="' .URL::to('recruiter-prepare-package/' . $model->application_id . '/edit').'"><button class="btn btn-sm btn-success">Prepare</button></a>';
                                return '<div class="btn-group-vertical">
                                            <a href="'.URL::to('recruiter-prepare-package/' . $model->application_id . '/edit').'" 
                                            type="button" class="btn btn-warning">
                                                Prepare
                                            </a>
                                            <a href="'.URL::to('cd/' . $model->candidate_user_id).'" target="_blank" type="button" class="btn btn-success">
                                                <i class="fa fa-fw fa-info-circle"></i> Detail
                                            </a>

                                        </div>';
                            }
                            else  if($model->application_current_status_id == 6){

                                // return'<a href="' .URL::to('cd/' . $model->candidate_user_id).'"><button class="btn btn-sm btn-warning">Detail</button></a>'.' '.
                                //                 '<a href="' .URL::to('hrbp-manager-confirm-package/' . $model->application_id . '/edit').'"><button class="btn btn-sm btn-success">Confirm</button></a>';

                                return '<div class="btn-group-vertical">
                                            <a href="'.URL::to('hrbp-manager-confirm-package/' . $model->application_id . '/edit').'" 
                                            type="button" class="btn btn-warning">
                                                Confirm
                                            </a>
                                            <a href="' .URL::to('cd/' . $model->candidate_user_id).'" target="_blank" type="button" class="btn btn-success">
                                                <i class="fa fa-fw fa-info-circle"></i> Detail
                                            </a>

                                        </div>';
                            }
                            else  if($model->application_current_status_id == 7){

                                // return'<a href="' .URL::to('cd/' . $model->candidate_user_id).'"><button class="btn btn-sm btn-warning">Detail</button></a>'.' '.
                                //                 '<a href="' .URL::to('recruiter-offer-package/' . $model->application_id . '/edit').'"><button class="btn btn-sm btn-success">Offer</button></a>';
                                return '<div class="btn-group-vertical">
                                            <a href="' .URL::to('recruiter-offer-package/' . $model->application_id . '/edit').'" 
                                            type="button" class="btn btn-warning">
                                                Offer
                                            </a>
                                            <a href="'.URL::to('cd/' . $model->candidate_user_id).'" target="_blank" type="button" class="btn btn-success">
                                                <i class="fa fa-fw fa-info-circle"></i> Detail
                                            </a>

                                        </div>';
                            }
                                else  if($model->application_current_status_id == 8){

                                // return'<a href="' .URL::to('cd/' . $model->candidate_user_id).'"><button class="btn btn-sm btn-warning">Detail</button></a>'.' '.
                                //                 '<a href="' .URL::to('recruiter-sign/' . $model->application_id . '/edit').'"><button class="btn btn-sm btn-success">Sign</button></a>';
                                return '<div class="btn-group-vertical">
                                            <a href="' .URL::to('recruiter-sign/' . $model->application_id . '/edit').'" 
                                            type="button" class="btn btn-warning">
                                                Sign
                                            </a>
                                            <a href="'.URL::to('cd/' . $model->candidate_user_id).'" target="_blank" type="button" class="btn btn-success">
                                                <i class="fa fa-fw fa-info-circle"></i> Detail
                                            </a>

                                        </div>';
                            }
                            else{
                                //return '<a href="' .URL::to('cd/' . $model->candidate_user_id).'"><button class="btn btn-sm btn-warning">Detail</button></a>';
                                return '<div class="btn-group-vertical">
                                            <a href="' .URL::to('cd/' . $model->candidate_user_id).'" style="width:8.5em;" class="btn btn-success"><i class="fa fa-fw fa-info-circle"></i> Detail</a>
                                        </div>
                                        ';
                            }
                        });
                       $return=$return->searchColumns('application_id',
                                'Name',
                                '%Related',
                                'Point',
                                'application_current_status_id',
                                'Education',
                                'Previous Job',
                                'SLA',
                                'Deadline',
                                'Saved',
                                'Choose',
                                'Note',
                                'Action'
                                )
                            ->make();

                        return $return;
            
        }

       /* public function getBasketDatatable($requsition_id='',$status_id1='',$status_id2='',$status_id3='',$status_id4='',$status_id5='',$status_id6='',$status_id7='',$status_id8='',$status_id9='',$status_id10='')
    {       
         // return $action;
        // return $user_id.'----'.$status_id;
                    if($requsition_id=='' || $requsition_id==0)
                    {    
                        $app=Application::where('requisition_id','!=',0);

                   }
                    else 
                    {  
                        $app=Application::where('requisition_id','=',$requsition_id);
                    }
                    if($status_id1!='' && $status_id1!=0)
                    {
                        $app=$app->where('application_current_status_id','=',$status_id1);
                         
                    }
                    if($status_id2!='' && $status_id2!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id2);
                         
                    }
                    if($status_id3!='' && $status_id3!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id3);
                         
                    }
                    if($status_id4!='' && $status_id4!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id4);
                         
                    }
                    if($status_id5!='' && $status_id5!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id5);
                         
                    }
                    if($status_id6!='' && $status_id6!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id6);
                         
                    }
                    if($status_id7!='' && $status_id7!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id7);
                         
                    }
                    if($status_id8!='' && $status_id8!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id8);
                         
                    }
                    if($status_id9!='' && $status_id9!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id9);
                         
                    }
                    if($status_id10!='' && $status_id10!=0)
                    {
                        $app=$app->OrWhere('application_current_status_id','=',$status_id10);
                         
                    }
                    $app=$app->where('is_in_basket','=',1);
                   $app=$app->get();
                    $return = Datatable::collection($app)
                    ->addColumn('application_id',function($model)
                        {

                            $bin = sprintf( "%020d",  $model->application_id);
                                return '<input type="hidden" name="Language" value="'.$bin.'"><span class="badge bg-grey">'.$model->application_id.'</span>';
                                // }
                                    // return '<span class="badge bg-grey">'.$model->application_id.'</span>';
                        })
                    ->addColumn('Name',function($model)
                        {   
                            $user_id=$model->candidate()->first()->user_id;
                            $user=User::where('user_id','=',$user_id)->first();
                            return $user->first.' '.$user->last;
                        })
                    ->addColumn('%Related',function($model)
                        {   
                            return 10;
                            $bin = sprintf( "%020d",  $model->corporate_title_id );
                            return '<input type="hidden" name="Language" value="'.$bin.'">'.$model->corporateTitle()->first()->name;
                        })
                    ->addColumn('Point',function($model)
                        {   return '10'.'/'.'20';
                            return $model->location()->first()->name;
                        })
                    ->addColumn('application_current_status_id',function($model)
                        {   
                            $bin = sprintf( "%020d",  $model->application_current_status_id );
                            return '<input type="hidden" name="Language" value="'.$bin.'"><span class="label label-success">'.$model->applicationCurrentStatus()->first()->name.'</span>';
                        })
                    ->addColumn('Education',function($model)
                        { return $model->candidate()->first()->Education()->first()->level.' '.$model->candidate()->first()->Education()->first()->major.' '.$model->candidate()->first()->Education()->first()->field_of_study;
                        })
                    ->addColumn('Previous Job',function($model)
                        { 
                            return $model->candidate()->first()->workExperience()->first()->postion.' '.$model->candidate()->first()->workExperience()->first()->company_name;
                            return '<input type="hidden" name="Language" value="'.$model->created_at.'">'.Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
                        })
                    ->addColumn('SLA',function($model)
                        { return Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
                        })
                     ->addColumn('Deadline',function($model)
                        { return '<input type="hidden" name="Language" value="'.$model->created_at.'">'.Carbon::createFromTimestamp(strtotime($model->created_at))->format('j F Y');
                        })
                    ->addColumn('Saved',function($model)
                        { 
                            return ' ';
                            return $model->employee()->first()->first.' '.$model->employee()->first()->last;
                        })
                    ->addColumn('Choose',function($model)
                        { 
                            return '<center>'
                                                    .'<iframe width="30px" height="20px" scrolling="no" frameBorder="0" name="ckbox_f'.$model->application_id.'" id="ckbox_f'.$model->application_id.'">'
                                                    .'</iframe>'
                                                    .'</center>'
                                                    .'<form action="../recruiter-shortlist-candidate-ckbox" id="ckbox'.$model->application_id.'" target="ckbox_f'.$model->application_id.'" method="GET">'
                                                    .'<input type="hidden" name="id" value="'.$model->application_id.'"/>'
                                                    .'</form>'
                                                    .'<script>'
                                                    .'document.getElementById("ckbox'.$model->application_id.'").submit();'
                                                    .'</script>';
                            return $model->employee()->first()->first.' '.$model->employee()->first()->last;
                        })
                    ->addColumn('Note',function($model)
                        { return '<i class="fa fa-fw fa-envelope-o"></i>';
                        })
                    ->addColumn('Action',function($model)
                        {  return '<a href="' .URL::to('cd/' . $model->candidate_user_id).'"><button class="btn btn-sm btn-warning">Detail</button></a>';
                            
                        });
                            $return=$return->searchColumns('application_id',
                                'Name',
                                '%Related',
                                'Point',
                                'application_current_status_id',
                                'Education',
                                'Previous Job',
                                'SLA',
                                'Deadline',
                                'Saved',
                                'Choose',
                                'Note',
                                'Action'
                                )
                            ->make();

                        return $return;
            
        }*/
	   
	}