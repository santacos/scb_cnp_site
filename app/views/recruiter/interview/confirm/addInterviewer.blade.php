{{ HTML::style('assets/css/bootstrap.min.css') }}

<form id="f" action="?" method="GET">
	Add interviewer (by ID or Name) : 
	<span>  </span> <input name="query"/> <span>  </span> <input type='submit' value='Add' class='btn btn-sm btn-default'>
</form>
<?php
	if(isset($_GET['query']) && strlen($_GET['query']) > 0){
		//echo '<script>document.getElementById("f").style.display = "none";</script>';
		$emp = Employee::whereUserId($_GET['query']);
		if($emp->count() == 0){
			echo '<script>alert("Interviewer not found.");</script>';
		}else if($emp->count() == 1){
			$emp = $emp->first();
			echo '<script>parent.addInterviewer("' . $emp->user_id . '","'
				. $emp->user->first . ' ' . $emp->user->last . '","' . $emp->dept->name . '","'
				. $emp->position->job_title . '","' . $emp->user->contact_number . '");</script>';
		}else{
			echo '<script>alert("Too many interviewers. Please be more specific.");</script>';
		}
		//echo '<script>document.getElementById("f").submit();</script>';
	}
?>