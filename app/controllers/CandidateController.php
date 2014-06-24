<?php 
class PDF2Text {
	// Some settings
	var $multibyte = 4; // Use setUnicode(TRUE|FALSE)
	var $convertquotes = ENT_QUOTES; // ENT_COMPAT (double-quotes), ENT_QUOTES (Both), ENT_NOQUOTES (None)
	var $showprogress = true; // TRUE if you have problems with time-out

	// Variables
	var $filename = '';
	var $decodedtext = '';

	function setFilename($filename) {
		// Reset
		$this->decodedtext = '';
		$this->filename = $filename;
	}

	function output($echo = false) {
		if($echo) echo $this->decodedtext;
		else return $this->decodedtext;
	}

	function setUnicode($input) {
		// 4 for unicode. But 2 should work in most cases just fine
		if($input == true) $this->multibyte = 4;
		else $this->multibyte = 2;
	}

	function decodePDF() {
		// Read the data from pdf file
		$infile = @file_get_contents($this->filename, FILE_BINARY);
		if (empty($infile))
			return "";

		// Get all text data.
		$transformations = array();
		$texts = array();

		// Get the list of all objects.
		preg_match_all("#obj[\n|\r](.*)endobj[\n|\r]#ismU", $infile . "endobj\r", $objects);
		$objects = @$objects[1];

		// Select objects with streams.
		for ($i = 0; $i < count($objects); $i++) {
			$currentObject = $objects[$i];

			// Prevent time-out
			@set_time_limit ();
			if($this->showprogress) {
//				echo ". ";
				flush(); ob_flush();
			}

			// Check if an object includes data stream.
			if (preg_match("#stream[\n|\r](.*)endstream[\n|\r]#ismU", $currentObject . "endstream\r", $stream )) {
				$stream = ltrim($stream[1]);
				// Check object parameters and look for text data.
				$options = $this->getObjectOptions($currentObject);

				if (!(empty($options["Length1"]) && empty($options["Type"]) && empty($options["Subtype"])) )
//				if ( $options["Image"] && $options["Subtype"] )
//				if (!(empty($options["Length1"]) &&  empty($options["Subtype"])) )
					continue;

				// Hack, length doesnt always seem to be correct
				unset($options["Length"]);

				// So, we have text data. Decode it.
				$data = $this->getDecodedStream($stream, $options);

				if (strlen($data)) {
	                if (preg_match_all("#BT[\n|\r](.*)ET[\n|\r]#ismU", $data . "ET\r", $textContainers)) {
						$textContainers = @$textContainers[1];
						$this->getDirtyTexts($texts, $textContainers);
					} else
						$this->getCharTransformations($transformations, $data);
				}
			}
		}

		// Analyze text blocks taking into account character transformations and return results.
		$this->decodedtext = $this->getTextUsingTransformations($texts, $transformations);
	}


	function decodeAsciiHex($input) {
		$output = "";

		$isOdd = true;
		$isComment = false;

		for($i = 0, $codeHigh = -1; $i < strlen($input) && $input[$i] != '>'; $i++) {
			$c = $input[$i];

			if($isComment) {
				if ($c == '\r' || $c == '\n')
					$isComment = false;
				continue;
			}

			switch($c) {
				case '\0': case '\t': case '\r': case '\f': case '\n': case ' ': break;
				case '%':
					$isComment = true;
				break;

				default:
					$code = hexdec($c);
					if($code === 0 && $c != '0')
						return "";

					if($isOdd)
						$codeHigh = $code;
					else
						$output .= chr($codeHigh * 16 + $code);

					$isOdd = !$isOdd;
				break;
			}
		}

		if($input[$i] != '>')
			return "";

		if($isOdd)
			$output .= chr($codeHigh * 16);

		return $output;
	}

	function decodeAscii85($input) {
		$output = "";

		$isComment = false;
		$ords = array();

		for($i = 0, $state = 0; $i < strlen($input) && $input[$i] != '~'; $i++) {
			$c = $input[$i];

			if($isComment) {
				if ($c == '\r' || $c == '\n')
					$isComment = false;
				continue;
			}

			if ($c == '\0' || $c == '\t' || $c == '\r' || $c == '\f' || $c == '\n' || $c == ' ')
				continue;
			if ($c == '%') {
				$isComment = true;
				continue;
			}
			if ($c == 'z' && $state === 0) {
				$output .= str_repeat(chr(0), 4);
				continue;
			}
			if ($c < '!' || $c > 'u')
				return "";

			$code = ord($input[$i]) & 0xff;
			$ords[$state++] = $code - ord('!');

			if ($state == 5) {
				$state = 0;
				for ($sum = 0, $j = 0; $j < 5; $j++)
					$sum = $sum * 85 + $ords[$j];
				for ($j = 3; $j >= 0; $j--)
					$output .= chr($sum >> ($j * 8));
			}
		}
		if ($state === 1)
			return "";
		elseif ($state > 1) {
			for ($i = 0, $sum = 0; $i < $state; $i++)
				$sum += ($ords[$i] + ($i == $state - 1)) * pow(85, 4 - $i);
			for ($i = 0; $i < $state - 1; $i++) {
				try {
					if(false == ($o = chr($sum >> ((3 - $i) * 8)))) {
						throw new Exception('Error');
					}
					$output .= $o;
				} catch (Exception $e) { /*Dont do anything*/ }
			}
		}

		return $output;
	}

	function decodeFlate($data) {
		return @gzuncompress($data);
	}

	function getObjectOptions($object) {
		$options = array();

		if (preg_match("#<<(.*)>>#ismU", $object, $options)) {
			$options = explode("/", $options[1]);
			@array_shift($options);

			$o = array();
			for ($j = 0; $j < @count($options); $j++) {
				$options[$j] = preg_replace("#\s+#", " ", trim($options[$j]));
				if (strpos($options[$j], " ") !== false) {
					$parts = explode(" ", $options[$j]);
					$o[$parts[0]] = $parts[1];
				} else
					$o[$options[$j]] = true;
			}
			$options = $o;
			unset($o);
		}

		return $options;
	}

	function getDecodedStream($stream, $options) {
		$data = "";
		if (empty($options["Filter"]))
			$data = $stream;
		else {
			$length = !empty($options["Length"]) ? $options["Length"] : strlen($stream);
			$_stream = substr($stream, 0, $length);

			foreach ($options as $key => $value) {
				if ($key == "ASCIIHexDecode")
					$_stream = $this->decodeAsciiHex($_stream);
				elseif ($key == "ASCII85Decode")
					$_stream = $this->decodeAscii85($_stream);
				elseif ($key == "FlateDecode")
					$_stream = $this->decodeFlate($_stream);
				elseif ($key == "Crypt") { // TO DO
				}
			}
			$data = $_stream;
		}
		return $data;
	}

	function getDirtyTexts(&$texts, $textContainers) {
		for ($j = 0; $j < count($textContainers); $j++) {
			if (preg_match_all("#\[(.*)\]\s*TJ[\n|\r]#ismU", $textContainers[$j], $parts))
				$texts = array_merge($texts, array(@implode('', $parts[1])));
			elseif (preg_match_all("#T[d|w|m|f]\s*(\(.*\))\s*Tj[\n|\r]#ismU", $textContainers[$j], $parts))
				$texts = array_merge($texts, array(@implode('', $parts[1])));
			elseif (preg_match_all("#T[d|w|m|f]\s*(\[.*\])\s*Tj[\n|\r]#ismU", $textContainers[$j], $parts))
				$texts = array_merge($texts, array(@implode('', $parts[1])));
		}

	}

	function getCharTransformations(&$transformations, $stream) {
		preg_match_all("#([0-9]+)\s+beginbfchar(.*)endbfchar#ismU", $stream, $chars, PREG_SET_ORDER);
		preg_match_all("#([0-9]+)\s+beginbfrange(.*)endbfrange#ismU", $stream, $ranges, PREG_SET_ORDER);

		for ($j = 0; $j < count($chars); $j++) {
			$count = $chars[$j][1];
			$current = explode("\n", trim($chars[$j][2]));
			for ($k = 0; $k < $count && $k < count($current); $k++) {
				if (preg_match("#<([0-9a-f]{2,4})>\s+<([0-9a-f]{4,512})>#is", trim($current[$k]), $map))
					$transformations[str_pad($map[1], 4, "0")] = $map[2];
			}
		}
		for ($j = 0; $j < count($ranges); $j++) {
			$count = $ranges[$j][1];
			$current = explode("\n", trim($ranges[$j][2]));
			for ($k = 0; $k < $count && $k < count($current); $k++) {
				if (preg_match("#<([0-9a-f]{4})>\s+<([0-9a-f]{4})>\s+<([0-9a-f]{4})>#is", trim($current[$k]), $map)) {
					$from = hexdec($map[1]);
					$to = hexdec($map[2]);
					$_from = hexdec($map[3]);

					for ($m = $from, $n = 0; $m <= $to; $m++, $n++)
						$transformations[sprintf("%04X", $m)] = sprintf("%04X", $_from + $n);
				} elseif (preg_match("#<([0-9a-f]{4})>\s+<([0-9a-f]{4})>\s+\[(.*)\]#ismU", trim($current[$k]), $map)) {
					$from = hexdec($map[1]);
					$to = hexdec($map[2]);
					$parts = preg_split("#\s+#", trim($map[3]));

					for ($m = $from, $n = 0; $m <= $to && $n < count($parts); $m++, $n++)
						$transformations[sprintf("%04X", $m)] = sprintf("%04X", hexdec($parts[$n]));
				}
			}
		}
	}
	function getTextUsingTransformations($texts, $transformations) {
		$document = "";
		for ($i = 0; $i < count($texts); $i++) {
			$isHex = false;
			$isPlain = false;

			$hex = "";
			$plain = "";
			for ($j = 0; $j < strlen($texts[$i]); $j++) {
				$c = $texts[$i][$j];
				switch($c) {
					case "<":
						$hex = "";
						$isHex = true;
                        $isPlain = false;
					break;
					case ">":
						$hexs = str_split($hex, $this->multibyte); // 2 or 4 (UTF8 or ISO)
						for ($k = 0; $k < count($hexs); $k++) {

							$chex = str_pad($hexs[$k], 4, "0"); // Add tailing zero
							if (isset($transformations[$chex]))
								$chex = $transformations[$chex];
							$document .= html_entity_decode("&#x".$chex.";");
						}
						$isHex = false;
					break;
					case "(":
						$plain = "";
						$isPlain = true;
                        $isHex = false;
					break;
					case ")":
						$document .= $plain;
						$isPlain = false;
					break;
					case "\\":
						$c2 = $texts[$i][$j + 1];
						if (in_array($c2, array("\\", "(", ")"))) $plain .= $c2;
						elseif ($c2 == "n") $plain .= '\n';
						elseif ($c2 == "r") $plain .= '\r';
						elseif ($c2 == "t") $plain .= '\t';
						elseif ($c2 == "b") $plain .= '\b';
						elseif ($c2 == "f") $plain .= '\f';
						elseif ($c2 >= '0' && $c2 <= '9') {
							$oct = preg_replace("#[^0-9]#", "", substr($texts[$i], $j + 1, 3));
							$j += strlen($oct) - 1;
							$plain .= html_entity_decode("&#".octdec($oct).";", $this->convertquotes);
						}
						$j++;
					break;

					default:
						if ($isHex)
							$hex .= $c;
						elseif ($isPlain)
							$plain .= $c;
					break;
				}
			}
			$document .= "\n";
		}

		return $document;
	}
}
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
		$active['current']='index';
		return View::make('user.homeprofile', array( 'candidate'=> $candidate,'active' =>$active));
	}
	public function getEditProfile()
	{
		$candidate = Candidate::find(Auth::user()->user_id);
		$active['current']='editprofile';
		return View::make('user.editProfile', array( 'candidate'=> $candidate,'active' =>$active));
	}
	public function getProfile()
	{
		$candidate = Candidate::find(Auth::user()->user_id);
		$active['current']='profile';
		return View::make('user.profile', array( 'candidate'=> $candidate,'active' =>$active));
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
		$active['current']='jobstatus';
		return View::make('user.jobStatus', compact('applications','active'))->with(array('search'=>$search,'status'=>$status));	
	}
	public function getJobfollow()
	{

		$active['current']='jobfollow';
		return View::make('user.jobFollow',compact('active'));
	}
	public function getJobrecommend()
	{

		$active['current']='jobrecommend';
		return View::make('user.jobrecommend',compact('active'));
	}
	public function getJobcart()
	{

		$active['current']='jobcart';
		return View::make('user.jobcart',compact('active'));
	}
	public function getSearchjob()
	{

		$active['current']='searchjob';
		return View::make('user.searchjob',compact('active'));
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
				$fileArray = pathinfo(public_path().'/cv/candidatecvs/'.$filename);
				if(isset($fileArray['extension']))
				{
	                if($fileArray['extension']=="pdf")
	                {
						$a = new PDF2Text();
						$a->setFilename(public_path().'/cv/candidatecvs/'.$filename); //grab the test file at http://www.newyorklivearts.org/Videographer_RFP.pdf
						$a->decodePDF();
						$candidate->text_cv=$a->output(); 
					}
					else{
						$docObj = new DocxConversion(public_path().'/cv/candidatecvs/'.$filename); 
						//$docObj = new Doc2Txt("test.doc"); 
						$txt = $docObj->convertToText(); 
						$candidate->text_cv=$txt;
					}
				}
				// Image::make($image->getRealPath())->save(public_path().'/cv/candidatecvs/'.$filename);
				File::delete(public_path().$candidate->filepath_cv);
				$candidate->filepath_cv = '/cv/candidatecvs/'.$filename;



			}
			if (Input::has('filepath_video')) {
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