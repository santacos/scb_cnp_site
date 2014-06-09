<?php
	$id = Input::get('id');
	$application = Application::find($id);
?>

<body style="background-color:transparent; ">
	<form id='f' method='GET' action=<?php echo '../public/recruiter-shortlist-candidate-ckbox-ctrl/'.$id; ?>>
		<input type='checkbox' <?php echo $application->is_in_basket?'checked':''; ?> onchange='toggleCandidate(this)' />
	</form>
</body>

<script>
	function toggleCandidate(x){
		document.getElementById('f').style.backgroundColor = 'yellow';
		document.getElementById('f').submit();
	}
</script>