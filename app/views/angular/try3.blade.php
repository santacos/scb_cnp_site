<!DOCTYPE html>
<html ng-app="nameApp">
  <head>
    <meta charset="utf-8">
    @include('user.includes.head')
    <title>Angular.js Example</title>

    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('js/jquery.js')?>"></script> 
    <script src="<?php echo asset('js/typeahead.jquery.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script> 
 
   <script>
   var nameApp = angular.module('nameApp',['ui.bootstrap']);
	   	nameApp.controller('NameCtrl',['$scope', '$http',
	  		function ($scope, $http) {
	    	$http.get('userrest/user').success(function(data) {
	     		 $scope.users = data;
	     		 console.log('YEAH');
	    	});

	    	$scope.selected = undefined;

	   		$scope.states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Dakota', 'North Carolina', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];

	   		$http.get('rest/corperate_title').success(function(dataa) {
	     		 $scope.corperate_title = dataa;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_corperate_title');
   			 });

    		
  			}

  	
  		]);
 		
 		



   </script>

	</head>
	<body ng-controller="NameCtrl">
		<div class="container-fluid">

			<h4>@{{corperate_title}}</h4><br>

		    <h4>Static arrays</h4>
		    <pre>Model: @{{selected | json}}</pre>
		    <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control">



		    @{{users}}<br>
		    <h4>user arrays</h4>
		    <pre>Model: @{{selectedd | json}}</pre>
		    <input type="text" ng-model="selectedd" typeahead="user.username for user in users | filter:{username:$viewValue} | limitTo:8" class="form-control">



		  
		</div>



	


	</body>

</html>
