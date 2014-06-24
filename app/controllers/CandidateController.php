<?php 
class DocxConversion{
    private $filename;

    public function __construct($filePath) {
        $this->filename = $filePath;
    }

    private function read_doc() {
        $fileHandle = fopen($this->filename, "r");
        $line = @fread($fileHandle, filesize($this->filename));   
        $lines = explode(chr(0x0D),$line);
        $outtext = "";
        foreach($lines as $thisline)
          {
            $pos = strpos($thisline, chr(0x00));
            if (($pos !== FALSE)||(strlen($thisline)==0))
              {
              } else {
                $outtext .= $thisline." ";
              }
          }
         $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/","",$outtext);
        return $outtext;
    }

    private function read_docx(){

        $striped_content = '';
        $content = '';

        $zip = zip_open($this->filename);

        if (!$zip || is_numeric($zip)) return false;

        while ($zip_entry = zip_read($zip)) {

            if (zip_entry_open($zip, $zip_entry) == FALSE) continue;

            if (zip_entry_name($zip_entry) != "word/document.xml") continue;

            $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

            zip_entry_close($zip_entry);
        }// end while

        zip_close($zip);

        $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
        $content = str_replace('</w:r></w:p>', "\r\n", $content);
        $striped_content = strip_tags($content);

        return $striped_content;
    }

 /************************excel sheet************************************/

function xlsx_to_text($input_file){
    $xml_filename = "xl/sharedStrings.xml"; //content file name
    $zip_handle = new ZipArchive;
    $output_text = "";
    if(true === $zip_handle->open($input_file)){
        if(($xml_index = $zip_handle->locateName($xml_filename)) !== false){
            $xml_datas = $zip_handle->getFromIndex($xml_index);
            $xml_handle = DOMDocument::loadXML($xml_datas, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
            $output_text = strip_tags($xml_handle->saveXML());
        }else{
            $output_text .="";
        }
        $zip_handle->close();
    }else{
    $output_text .="";
    }
    return $output_text;
}

/*************************power point files*****************************/
function pptx_to_text($input_file){
    $zip_handle = new ZipArchive;
    $output_text = "";
    if(true === $zip_handle->open($input_file)){
        $slide_number = 1; //loop through slide files
        while(($xml_index = $zip_handle->locateName("ppt/slides/slide".$slide_number.".xml")) !== false){
            $xml_datas = $zip_handle->getFromIndex($xml_index);
            $xml_handle = DOMDocument::loadXML($xml_datas, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
            $output_text .= strip_tags($xml_handle->saveXML());
            $slide_number++;
        }
        if($slide_number == 1){
            $output_text .="";
        }
        $zip_handle->close();
    }else{
    $output_text .="";
    }
    return $output_text;
}


    public function convertToText() {

        if(isset($this->filename) && !file_exists($this->filename)) {
            return "File Not exists";
        }

        $fileArray = pathinfo($this->filename);
        $file_ext  = $fileArray['extension'];
        if($file_ext == "doc" || $file_ext == "docx" || $file_ext == "xlsx" || $file_ext == "pptx")
        {
            if($file_ext == "doc") {
                return $this->read_doc();
            } elseif($file_ext == "docx") {
                return $this->read_docx();
            } elseif($file_ext == "xlsx") {
                return $this->xlsx_to_text();
            }elseif($file_ext == "pptx") {
                return $this->pptx_to_text();
            }
        } else {
            return "Invalid File Type";
        }
    }

}
?>
<?php

class CandidateController extends \BaseController {

	/**
	 * Display a listing of candidates
	 *
	 * @return Response
	 */
	public function index()
	{
		$candidate = Candidate::find(Auth::user()->user_id);
		return View::make('user.homeprofile', array( 'candidate'=> $candidate));
	}
	public function getJobdetail($id)
	{
		$questions = Requisition::find($id)->question()->get();
		return View::make('user.jobDetail',compact('questions'))->with('requisition',Requisition::find($id));
	}
	public function getJobstatus()
	{	
		$id=Auth::user()->user_id;
		$search = trim(Input::get( 'search' ));
        $status = trim(Input::get( 'status' ));
		$apps=Application::where('candidate_user_id','=',$id);
		if($status!=''&&$status!=0)
		{	
			$apps=$apps->where('application_current_status_id','=',$status);
		}
		
		if($search!='')
		{		
			$searchTerms = explode(' ', $search);
			 foreach($searchTerms as $term)
			    {
			    	 $GLOBALS['term'] = $term;
			        $apps->whereHas('requisition', function($q) {
				   		$q->where('job_title', 'LIKE', '%'.  $GLOBALS['term'] .'%');
				     
				     });
			    }

		}
		$applications=$apps->paginate(10);
	
		return View::make('user.jobStatus', compact('applications'))->with(array('search'=>$search,'status'=>$status));	
	}
	
	public function getJobfollow()
	{
		$questions = Requisition::find($id)->question()->get();
		return View::make('user.jobFollow');
		return View::make('user.jobDetail',compact('questions'))->with('requisition',Requisition::find($id));
	}
	/**
	 * Show the form for creating a new candidate
	 *
	 * @return Response
	 */
	public function create()
	{
		

		return View::make('candidate.create');
	}

	/**
	 * Store a newly created candidate in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$validator = Validator::make($data = Input::all(), Candidate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/
			$candidate = new candidate;
			$candidate->user_id = Auth::user()->user_id;
			$candidate->save();

		return Response::json(array('success' => true));
	}

	/**
	 * Display the specified candidate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function show($id)
	// {
	// 	$candidate = Candidate::find($id);
	// 	$user=$candidate->user()->first();
	// 	return View::make('candidate.show', array( 'candidate'=> $candidate,'user'=>$user));
	// }
	/**
	 * Show the form for editing the specified candidate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$candidate = Candidate::find(Auth::user()->user_id);
		$user=$candidate->user()->first();
		return View::make('candidate.edit', array( 'candidate'=> $candidate,'user'=>$user));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	public function update()
	{
		/*$candidate = Candidate::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Candidate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$candidate->update($data);

		return Redirect::route('candidates.index');*/
		/*$validator = Validator::make($data = Input::all(), Candidate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}*/
			$candidate = Candidate::findOrFail(Auth::user()->user_id);
			$user=User::find($candidate->user_id);
            $user->email = trim(strtolower(Input::get( 'email' )));
            $user->first = trim(Input::get( 'first' ));
            $user->last = trim(Input::get( 'last' ));
            $user->contact_number = Input::get( 'contact_number' );
             DB::table('users')->where('user_id',$candidate->user_id)->update($user->toArray());
             // $user=User::find($candidate->user_id);
             // return $user;
             // return $user->errors()->all();
            if(Input::hasFile('filepath_picture')){
				$image = Input::file('filepath_picture');
				$filename = date('Y-m-d-H-i-s')."-".$image->getClientOriginalName();
				Image::make($image->getRealPath())->save(public_path().'/img/candidatepics/'.$filename);
				File::delete(public_path().$candidate->filepath_picture);
				$candidate->filepath_picture = '/img/candidatepics/'.$filename;

			}else if (Input::has('filepath_picture')) {
				File::delete(public_path().$candidate->filepath_picture);
				$candidate->filepath_picture = Input::get('filepath_picture');
			}
			if(Input::hasFile('filepath_cv')){
				$cv = Input::file('filepath_cv');
				$filename = date('Y-m-d-H-i-s')."-".$cv->getClientOriginalName();
				$uploadSuccess   = $cv->move(public_path().'/cv/candidatecvs/', $filename);
				$docObj = new DocxConversion(public_path().'/cv/candidatecvs/'.$filename); 
				//$docObj = new Doc2Txt("test.doc"); 
				$txt = $docObj->convertToText(); 
				// return $txt;
				// Image::make($image->getRealPath())->save(public_path().'/cv/candidatecvs/'.$filename);
				File::delete(public_path().$candidate->filepath_cv);
				$candidate->filepath_cv = '/cv/candidatecvs/'.$filename;



			}
			if(Input::hasFile('filepath_video')){
				$video = Input::file('filepath_video');
				$filename = date('Y-m-d-H-i-s')."-".$video->getClientOriginalName();
				$uploadSuccess   = $video->move(public_path().'/video/candidatevideos/', $filename);
				// Image::make($image->getRealPath())->save(public_path().'/cv/candidatecvs/'.$filename);
				File::delete(public_path().$candidate->filepath_video);
				$candidate->filepath_cv = '/video/candidatevideos/'.$filename;

			}else if (Input::has('filepath_video')) {
				File::delete(public_path().$candidate->filepath_video);
				$candidate->filepath_video = Input::get('filepath_video');
			}
			$candidate->idcard = Input::get('idcard');
			$candidate->passport_number = Input::get('passport_number');
			$candidate->thai_saluation = Input::get('thai_saluation');
			$candidate->thai_firstname = Input::get('thai_firstname');
			$candidate->thai_lastname = Input::get('thai_lastname');
			$candidate->eng_saluation = Input::get('eng_saluation');
			$candidate->is_male = Input::get('is_male');
			$candidate->birth_date = Input::get('birth_date');
			$candidate->nationality = Input::get('nationality');
			$candidate->country = Input::get('country');
			$candidate->city = Input::get('city');
			$candidate->zip_code = Input::get('zip_code');
			$candidate->full_location = Input::get('full_location');
			$candidate->current_living_location = Input::get('current_living_location');
			$candidate->filepath_profile_picture = Input::get('filepath_profile_picture');

			$candidate->push();
		return Response::json(array('success' => true));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Candidate::destroy($id);

		return Response::json(array('success' => true));
	}

	public function postApply($id){
		$application = new Application;
		$application->requisition_id = $id;
		$application->candidate_user_id = Auth::user()->user_id;
		$application->application_current_status_id = 1;
		$application->save();
		$point = 0;
		$questions = $application->requisition->question()->get();
		$i=0;
		foreach($questions as $question){
			$i++;
			$answer = $question->answer()->skip(Input::get('question_'.$i))->first();
			$question->application()->attach($application->application_id, array('answer_id' => $answer->answer_id ));
			$point += $answer->point;
		}
		$application->question_point = $point;
		$application->save();
		$questions = Requisition::find($id)->question()->get();
		return View::make('user.jobDetail',compact('questions'))->with('requisition',Requisition::find($id))->with('success',true);
	}
}