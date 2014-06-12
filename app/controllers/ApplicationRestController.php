<?php

class ApplicationRestController extends \BaseController {

	

        public function getApplicationDatatable($requsition_id='',$status_id1='',$status_id2='',$status_id3='',$status_id4='',$status_id5='',$status_id6='',$status_id7='',$status_id8='',$status_id9='',$status_id10='')
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
                    ->addColumn('Application Status',function($model)
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
                    ->addColumn('Acition',function($model)
                        { return '';
                        });
                    //     if($user_id == 0)
                    //      {           $return=$return->addColumn('Choose',function($model) { 
                    //                 if($model ->application_current_status_id == 1) //Creating Requisition
                    //                  {
                    //                     return '<a href="' .URL::to('hm-requisition/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';

                    //                 }
                    //                  // else    return '<a href="' .URL::to('hm/requisition/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';
                                    
                    //                 else if($model ->application_current_status_id == 2) //
                    //                 {
                    //                     return '<a href="' .URL::to('hm-nl-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }
                    //                 else  if($model ->application_current_status_id == 3 )
                    //                 {
                    //                     return '<a href="' .URL::to('hrbp-officer-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }  
                    //                 else if($model ->application_current_status_id == 4)
                    //                 {
                    //                     return '<a href="' .URL::to('recruiter-requisition-post/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Post Job</button></a>';
                    //                 }
                    //                 else if($model ->application_current_status_id == 5)
                    //                 {
                    //                     return  '<a href="' .URL::to('recruiter-shortlist-candidate/' . $model->application_id).'"><button class="btn btn-sm btn-info">Application</button></a>'

                    //                     .'  '.'<a href="' .URL::to('recruiter-shortlist-basket/' . $model->application_id).'"><button class="btn btn-sm btn-success">Basket</button></a>'
                                                
                    //                     ;
                    //                 }
                    //                 else if($model ->application_current_status_id == 6)
                    //                 {
                    //                     return '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->application_id).'"><button class="btn btn-sm btn-warning">See infomation (ยังไม่ได้ทำ)</button></a>';
                    //                 }
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });
                    //     }
                    //     else if($application_current_status_id==1)
                    //     {           $return=$return->addColumn('Action',function($model) { 
                    //                 if($model ->application_current_status_id < 2) //Creating Requisition
                    //                  {
                    //                     return '<a href="' .URL::to('hm-requisition/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';

                    //                 }
                    //                  // else    return '<a href="' .URL::to('hm/requisition/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';
                                      
                    //                 else if($model ->application_current_status_id == 2) //
                    //                 {
                    //                     return '<a href="' .URL::to('hm-nl-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }
                    //                 else if($model ->application_current_status_id == 6)
                    //                 {
                    //                     return '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->application_id).'"><button class="btn btn-sm btn-warning">See infomation (ยังไม่ได้ทำ)</button></a>';
                    //                 }
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });
                    //     }
                    //     else if($user_id==21)
                    //     {
                    //             $return=$return->addColumn('Action',function($model) { 
                    //                 if($model ->application_current_status_id == 3 )
                    //                 {
                    //                     return '<a href="' .URL::to('hrbp-officer-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }
                        
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });

                    //     }
                    //      else if($user_id==22)
                    //     {
                    //             $return=$return->addColumn('Action',function($model) { 
                    //                 if($model ->application_current_status_id == 3 )
                    //                 {
                    //                     return '<a href="' .URL::to('hrbp-manager-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }
                        
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });

                    //     }
                    //      else if($user_id==3)
                    //     {
                    //             $return=$return->addColumn('Action',function($model) { 
                    //                if($model ->application_current_status_id == 4)
                    //                 {
                    //                     return '<a href="' .URL::to('recruiter-requisition-post/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Post Job</button></a>';
                    //                 }
                    //                 else if($model ->application_current_status_id == 5)
                    //                 {
                    //                     return
                    //                     '<a href="' .URL::to('recruiter-shortlist/' . $model->application_id).'"><button class="btn btn-sm btn-info">Detail</button></a>'.'  '.  
                    //                     '<a href="' .URL::to('recruiter-shortlist-candidate/' . $model->application_id).'"><button class="btn btn-danger btn-info">Application</button></a>'.'<br>'.
                    //                     '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->application_id).'"><button class="btn btn-sm btn-success">Basket</button></a>'.'  '.
                    //                     '<a href="' .URL::to('recruiter-shortlist-log/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Shortlist Sent</button></a>'
                                                
                    //                     ;
                    //                 }
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });

                    //     }
                    //     else {$return=$return->addColumn('Action',function($model) {return ''; });}
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
                                'Acition'
                                )
                            ->make();

                        return $return;
            
        }

        public function getBasketDatatable($requsition_id='',$status_id1='',$status_id2='',$status_id3='',$status_id4='',$status_id5='',$status_id6='',$status_id7='',$status_id8='',$status_id9='',$status_id10='')
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
                        });
                    //     if($user_id == 0)
                    //      {           $return=$return->addColumn('Choose',function($model) { 
                    //                 if($model ->application_current_status_id == 1) //Creating Requisition
                    //                  {
                    //                     return '<a href="' .URL::to('hm-requisition/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';

                    //                 }
                    //                  // else    return '<a href="' .URL::to('hm/requisition/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';
                                    
                    //                 else if($model ->application_current_status_id == 2) //
                    //                 {
                    //                     return '<a href="' .URL::to('hm-nl-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }
                    //                 else  if($model ->application_current_status_id == 3 )
                    //                 {
                    //                     return '<a href="' .URL::to('hrbp-officer-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }  
                    //                 else if($model ->application_current_status_id == 4)
                    //                 {
                    //                     return '<a href="' .URL::to('recruiter-requisition-post/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Post Job</button></a>';
                    //                 }
                    //                 else if($model ->application_current_status_id == 5)
                    //                 {
                    //                     return  '<a href="' .URL::to('recruiter-shortlist-candidate/' . $model->application_id).'"><button class="btn btn-sm btn-info">Application</button></a>'

                    //                     .'  '.'<a href="' .URL::to('recruiter-shortlist-basket/' . $model->application_id).'"><button class="btn btn-sm btn-success">Basket</button></a>'
                                                
                    //                     ;
                    //                 }
                    //                 else if($model ->application_current_status_id == 6)
                    //                 {
                    //                     return '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->application_id).'"><button class="btn btn-sm btn-warning">See infomation (ยังไม่ได้ทำ)</button></a>';
                    //                 }
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });
                    //     }
                    //     else if($application_current_status_id==1)
                    //     {           $return=$return->addColumn('Action',function($model) { 
                    //                 if($model ->application_current_status_id < 2) //Creating Requisition
                    //                  {
                    //                     return '<a href="' .URL::to('hm-requisition/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';

                    //                 }
                    //                  // else    return '<a href="' .URL::to('hm/requisition/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Edit</button></a>';
                                      
                    //                 else if($model ->application_current_status_id == 2) //
                    //                 {
                    //                     return '<a href="' .URL::to('hm-nl-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }
                    //                 else if($model ->application_current_status_id == 6)
                    //                 {
                    //                     return '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->application_id).'"><button class="btn btn-sm btn-warning">See infomation (ยังไม่ได้ทำ)</button></a>';
                    //                 }
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });
                    //     }
                    //     else if($user_id==21)
                    //     {
                    //             $return=$return->addColumn('Action',function($model) { 
                    //                 if($model ->application_current_status_id == 3 )
                    //                 {
                    //                     return '<a href="' .URL::to('hrbp-officer-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }
                        
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });

                    //     }
                    //      else if($user_id==22)
                    //     {
                    //             $return=$return->addColumn('Action',function($model) { 
                    //                 if($model ->application_current_status_id == 3 )
                    //                 {
                    //                     return '<a href="' .URL::to('hrbp-manager-requisition/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Approve</button></a>';
                    //                 }
                        
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });

                    //     }
                    //      else if($user_id==3)
                    //     {
                    //             $return=$return->addColumn('Action',function($model) { 
                    //                if($model ->application_current_status_id == 4)
                    //                 {
                    //                     return '<a href="' .URL::to('recruiter-requisition-post/' . $model->application_id.'/edit').'"><button class="btn btn-sm btn-warning">Post Job</button></a>';
                    //                 }
                    //                 else if($model ->application_current_status_id == 5)
                    //                 {
                    //                     return
                    //                     '<a href="' .URL::to('recruiter-shortlist/' . $model->application_id).'"><button class="btn btn-sm btn-info">Detail</button></a>'.'  '.  
                    //                     '<a href="' .URL::to('recruiter-shortlist-candidate/' . $model->application_id).'"><button class="btn btn-danger btn-info">Application</button></a>'.'<br>'.
                    //                     '<a href="' .URL::to('recruiter-shortlist-basket/' . $model->application_id).'"><button class="btn btn-sm btn-success">Basket</button></a>'.'  '.
                    //                     '<a href="' .URL::to('recruiter-shortlist-log/' . $model->application_id).'"><button class="btn btn-sm btn-warning">Shortlist Sent</button></a>'
                                                
                    //                     ;
                    //                 }
                    //                 else 
                    //                 {
                    //                   return '';
                    //                 }
                    //             });

                    //     }
                    //     else {$return=$return->addColumn('Action',function($model) {return ''; });}
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
                                'Note'
                                )
                            ->make();

                        return $return;
            
        }
	   
	}