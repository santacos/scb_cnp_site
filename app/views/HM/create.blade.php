<!DOCTYPE html>
<html ng-app="nameApp">
  <head>
    <meta charset="utf-8">


    <title>create requisition</title>

 	<link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>">

 	<style>
	 	.scrollable-menu {
	 		width:250px;
	    height: auto;
	    max-height: 200px;
	    overflow-x: hidden;
		}


 	</style>
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
    <script src="<?php echo asset('js/createReq-manager.js')?>"></script>

	</head>
	<body ng-controller="NameCtrl">
		<div class="container">
		<h1>create requisition</h1>
		<hr/>
	
		<div class="row">
			<div class="col-sm-6">
			<progressbar max="3" value="count"></progressbar>
			</div>
			<div class="col-sm-6">
			<progressbar class="progress-striped active" max="3" value="count" type="danger"><i>@{{count}} / 3</i></progressbar>
			</div>
		</div>


		<!-- paste error message here!!! -->



		<!--start Form -->
		<div class="row">
			<div class="col-md-6">
				<form role="form" name="myForm">

				  <div class="form-group">
				    <label for="jobtitle">Job title :</label>
				    <input type="text" ng-model="try1" ng-blur="checkProgress()" class="form-control" id="jobtitle" placeholder="Enter job title" required>
				  	
				  </div>


				  <div class="form-group">
				    <label for="corporate">Corporate Title :</label>

				    <div class="btn-group" dropdown is-open="status.isopenCorp">
				      <button type="button" class="btn btn-default dropdown-toggle"  style="width:250px;">
				        @{{chooseCorp}} <span class="caret"></span>
				      </button>
				      <ul class="dropdown-menu scrollable-menu" role="menu">
				      	<li ng-repeat="temp in corps"><a ng-click="whenClickCorp(temp)">@{{temp}}</a></li>
				      </ul>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="industry">Industry : </label>

				    <div class="btn-group" dropdown is-open="status.isopenIndustry">
				      <button type="button" class="btn btn-default dropdown-toggle"  style="width:250px;">
				        @{{chooseIndustry}} <span class="caret"></span>
				      </button>
				      <ul class="dropdown-menu scrollable-menu" role="menu">
				      	<li ng-repeat="item in industries"><a ng-click="whenClickIndustry(item)">@{{item}}</a></li>
				      </ul>
				    </div>
				  </div>


				  <div class="form-group">
				    <label for="NoOfVacancy">No. of Vacancy :</label>
				    <input type="number" class="form-control" id="NoOfVacancy" ng-model="try2" ng-blur="checkProgress()" placeholder="" >
				  </div>


				  <div class="form-group">
				    <label for="ReqObjective">Recruitment Objective :</label>
					    <div class="btn-group" dropdown is-open="status.isopenRecOb">
					      <button type="button" class="btn btn-default dropdown-toggle"  style="width:250px;">
					        @{{chooseRecOb}} <span class="caret"></span>
					      </button>
					      <ul class="dropdown-menu scrollable-menu" role="menu">
					      	<li ng-repeat="Objective in objectives"><a ng-click="whenClickRecOb(Objective)">@{{Objective}}</a></li>
					      </ul>
					    </div>
					    <div>
					    <br>
					    <input ng-show="chooseRecOb === 'Replace resign of'" type="text" class="form-control" placeholder="Enter name of replacement">
				  		</div>
				  </div>


				  <div class="form-group">
				    <label for="ReqType">Recruitment type :</label>
				    <div class="btn-group" dropdown is-open="status.isopenRecType">
				      <button type="button" class="btn btn-default dropdown-toggle"  style="width:250px;">
				        @{{chooseRecType}} <span class="caret"></span>
				      </button>
				      <ul class="dropdown-menu scrollable-menu" role="menu">
				      	<li ng-repeat="type in recTypes"><a ng-click="whenClickRecType(type)">@{{type}}</a></li>
				      </ul>
				    </div>
				    
				  </div>

				  <div class="form-group">
				    <label for="jobLocation">Job Location :</label>
				    <div id ="jobLocation" class="btn-group" dropdown is-open="status.isopenLocation">
				      <button type="button" class="btn btn-default dropdown-toggle"  style="width:250px;">
				        @{{chooseLocation}} <span class="caret"></span>
				      </button>
				      <ul class="dropdown-menu scrollable-menu" role="menu">
				      	<li ng-repeat="location in locations"><a ng-click="whenClickLocation(location)">@{{location}}</a></li>
				      </ul>
				    </div>
				    
				  </div>

				  <div class="form-group">
				    <label for="yearOfEx">Years of experience :</label>
				    <input type="number" class="form-control" id="yearOfEx" placeholder="" ng-model="try3" ng-blur="checkProgress()">
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


			</div> <!-- end column-->
		</div> <!--end row-->

		<br>
		<br>
	</div> <!-- end Container -->









	</body>



</html>
