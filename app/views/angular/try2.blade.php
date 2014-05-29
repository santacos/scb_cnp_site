<!DOCTYPE html>
<html ng-app="locationApp">
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
    <script>
    var nameApp = angular.module('locationApp',['ui.bootstrap']);
    	nameApp.controller('LocationCtrl',['$scope', '$http',
	  		function ($scope, $http) {
	  		
	  		
			$http.get('rest/location').success(function(dataa) {
	     		 $scope.locations = dataa;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_load_location');
   			});

   			$scope.addLocation = function(){

   				console.log('add location fn');
   				
				console.log($scope.name);
		    	$http.post('setlocation',{ 'name' :$scope.name })
		    	.success(function(){
		    		console.log('post_location_success');
		    	}).error(function() {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_post_location');
   				});

	    	}



    	
  			}//before end controller

  	
  		]);//end controller



    </script>

	</head>
	<body ng-controller="LocationCtrl">
		<div class="container">
		<h1>create location</h1>
		<hr/>
	


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

					@{{jobName}}
				  <div class="form-group">
				    <label for="jobLocation">Job Location name:</label>
				    <input ng-model="name" type="text" class="form-control" id="jobLocation" placeholder="">
				    
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
