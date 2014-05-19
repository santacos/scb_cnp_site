<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">


    <title>create requisition</title>

 
   <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>">
  

	</head>
	<body>
		<div class="container">
		<h1>create requisition</h1>
		<form role="form">
		  <div class="form-group">
		    <label for="jobtitle">Job title :</label>
		    <input type="text" class="form-control" id="jobtitle" placeholder="Enter job title">
		  </div>
		  <div class="form-group">
		    <label for="corporate">Corporate Title :</label>
		    <input type="text" class="form-control" id="corporate" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="industry">Industry : </label>
		    <div class="input-group">
			    <span class="input-group-addon">@</span>
			    <input type="text" class="form-control" id="industry">
			</div>
		  </div>
		  <div class="form-group">
		    <label for="NoOfVacancy">No. of Vacancy :</label>
		    <input type="text" class="form-control" id="NoOfVacancy" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="ReqObjective">Recruitment Objective :</label>
		    <input type="textfield" class="form-control" id="ReqObjective" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="ReqType">Recruitment type :</label>
		    <input type="textfield" class="form-control" id="ReqType" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="jobLocation">Job Location :</label>
		    <input type="text" class="form-control" id="jobLocation" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="yearOfEx">Years of experience :</label>
		    <input type="text" class="form-control" id="yearOfEx" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="responsibility">Responsibilities:</label>
		    <input type="textfield" class="form-control" id="responsibility" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="qualification">Qualifications :</label>
		    <input type="textfield" class="form-control" id="qualification" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="relatedSkill">Related skill :</label>
		    <input type="textfield" class="form-control" id="relatedSkill" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="note">Note :</label>
		    <input type="textfield" class="form-control" id="note" placeholder="">
		  </div>

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
		<br>
		<br>
	</div>







	</body>



</html>
