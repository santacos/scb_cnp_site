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

		<div class="row">	
			location = <br>
			@{{locations}} <br>
			sentLocation is @{{sentLocation}}
		</div>

		<!--start Form -->
		<div class="row">
			<div class="col-md-6">
				<form role="form" name="myForm" ng-submit="addLocation()">

				  
				  <div class="form-group">
				    <label for="jobLocation">Job Location :</label>
				    <div id ="jobLocation" class="btn-group" dropdown is-open="status.isopenLocation">
				      <button type="button" class="btn btn-default dropdown-toggle"  style="width:250px;">
				        @{{chooseLocation}} <span class="caret"></span>
				      </button>
				      <ul class="dropdown-menu scrollable-menu" role="menu">
				      	<li ng-repeat="location in locations"><a ng-click="whenClickLocation(location)">@{{location.name}}</a></li>
				      </ul>
				    </div>
				    
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
