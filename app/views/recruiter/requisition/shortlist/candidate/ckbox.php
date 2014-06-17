<?php
	$id = Input::get('id');
	$application = Application::find($id);
?>

<body style="background-color:transparent; ">
	<form id='f' method='GET' action=<?php echo 'recruiter-shortlist-candidate-ckbox-ctrl/'.$id; ?>>
		<input style=<?php echo is_null($application->send_number)?'position:absolute;left:0px;top:0px;':'display:none;'; ?> type='checkbox' <?php echo $application->is_in_basket?'checked':''; ?> onchange='toggleCandidate(this)' />
	</form>
	<?php echo is_null($application->send_number)?'':('<span style="position:absolute;left:0px;top:0px;">Sent</span>'); ?>
</body>

<script>
	function changeColor(x){
		var arrFrames = parent.document.getElementsByTagName("IFRAME");
		for (var i = 0; i < arrFrames.length; i++) {
			  if (arrFrames[i].contentWindow === window) {
				var frame = arrFrames[i];
				frame.parentNode.parentNode.parentNode.style.color = x;
			  	break;
			  }
		}
	}
	function toggleCandidate(x){
		document.getElementById('f').style.backgroundColor = 'yellow';
		document.getElementById('f').submit();
	}
	changeColor("<?php echo is_null($application->send_number)?($application->is_in_basket?'black':'#AAAAAA'):'#55CC55';?>");
</script>