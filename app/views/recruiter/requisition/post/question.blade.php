<table class="QuestionTable" id="t" border="1" style="top:0px;left:0px;">
	<tr>
		<td>Select</td>
		<td>Question</td>
		<td>Answer | Point</td>
		<td>Action</td>
	</tr>
	<col width="50">
	<col width="300">
	<col width="200">
	<col width="50">
</table>
<style>
	.QuestionTable {
		margin:0px;padding:0px;
		width:100%;
		box-shadow: 10px 10px 5px #888888;
		border:1px solid #898989;
		
		-moz-border-radius-bottomleft:6px;
		-webkit-border-bottom-left-radius:6px;
		border-bottom-left-radius:6px;
		
		-moz-border-radius-bottomright:6px;
		-webkit-border-bottom-right-radius:6px;
		border-bottom-right-radius:6px;
		
		-moz-border-radius-topright:6px;
		-webkit-border-top-right-radius:6px;
		border-top-right-radius:6px;
		
		-moz-border-radius-topleft:6px;
		-webkit-border-top-left-radius:6px;
		border-top-left-radius:6px;
	}.QuestionTable table{
	    border-collapse: collapse;
	        border-spacing: 0;
		width:100%;
		height:100%;
	}.QuestionTable tr:last-child td:last-child {
		-moz-border-radius-bottomright:6px;
		-webkit-border-bottom-right-radius:6px;
		border-bottom-right-radius:6px;
	}
	.QuestionTable table tr:first-child td:first-child {
		-moz-border-radius-topleft:6px;
		-webkit-border-top-left-radius:6px;
		border-top-left-radius:6px;
	}
	.QuestionTable table tr:first-child td:last-child {
		-moz-border-radius-topright:6px;
		-webkit-border-top-right-radius:6px;
		border-top-right-radius:6px;
	}.QuestionTable tr:last-child td:first-child{
		-moz-border-radius-bottomleft:6px;
		-webkit-border-bottom-left-radius:6px;
		border-bottom-left-radius:6px;
	}.QuestionTable tr:hover td{
		
	}
	.QuestionTable tr:nth-child(odd){ background-color:#d3dfff; }
	.QuestionTable tr:nth-child(even)    { background-color:#dbdbff; }.QuestionTable td{
		vertical-align:middle;
		
		
		border:1px solid #898989;
		border-width:0px 1px 1px 0px;
		text-align:left;
		font-size:14px;
		font-family:Arial;
		font-weight:normal;
		color:#000000;
	}.QuestionTable tr:last-child td{
		border-width:0px 1px 0px 0px;
	}.QuestionTable tr td:last-child{
		border-width:0px 0px 1px 0px;
	}.QuestionTable tr:last-child td:last-child{
		border-width:0px 0px 0px 0px;
	}
	.QuestionTable tr:first-child td{
			background:-o-linear-gradient(bottom, #4fadf9 5%, #0048ff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4fadf9), color-stop(1, #0048ff) );
		background:-moz-linear-gradient( center top, #4fadf9 5%, #0048ff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4fadf9", endColorstr="#0048ff");	background: -o-linear-gradient(top,#4fadf9,0048ff);

		background-color:#4fadf9;
		border:0px solid #898989;
		text-align:center;
		border-width:0px 0px 1px 1px;
		font-size:14px;
		font-family:Arial;
		font-weight:bold;
		color:#ffffff;
	}
	.QuestionTable tr:first-child:hover td{
		background:-o-linear-gradient(bottom, #4fadf9 5%, #0048ff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4fadf9), color-stop(1, #0048ff) );
		background:-moz-linear-gradient( center top, #4fadf9 5%, #0048ff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4fadf9", endColorstr="#0048ff");	background: -o-linear-gradient(top,#4fadf9,0048ff);

		background-color:#4fadf9;
	}
	.QuestionTable tr:first-child td:first-child{
		border-width:0px 0px 1px 0px;
	}
	.QuestionTable tr:first-child td:last-child{
		border-width:0px 0px 1px 1px;
	}
</style>
<input type="button" value="Add Question" onclick="addRow('0',true,'')" />
<script>
	function addRow(v1,v2,v3){
		var table = document.getElementById('t');
        var row = table.insertRow(table.rows.length);
        row.insertCell(0).innerHTML = '<input type="hidden" value="'+v1+'"/><center><input type="checkbox"'+(v2==true?'checked':'')+'/></center>';
        row.insertCell(1).innerHTML = '<input type="text" value="'+v3+'" style="width:100%;border:1px;padding:5px;margin:0px;background-color:transparent;"/>';
        var answer = document.createElement("table");
        answer.border = "1";
        answer.className = "";
        answer.innerHTML = '<tbody><tr><td>Answer</td><td>Point</td></tr></tbody>';
        row.insertCell(2).appendChild(answer);
        var btn = document.createElement("input");
        btn.value = 'Remove';
        btn.type = 'button';
        btn.onclick = function(){
          this.parentNode.parentNode.remove();
          changeHeight();
        };
        row.insertCell(3).appendChild(document.createElement("center").appendChild(btn));
        changeHeight();
	}
	function addAnswer(v){

		changeHeight();
	}
	function changeHeight(){
        parent.document.getElementById("question").height = (document.getElementById('t').offsetHeight+40)+"px";
	}
</script>
@foreach($questions as $question)
	<script>
		addRow( "{{ $question->question_id }}", "{{ $question->pivot->is_checked }}", "{{ $question->question }}" );
	</script>
@endforeach