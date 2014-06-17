<!doctype html>
<html ng-app="plunker">
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.10/angular.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.11.0.js"></script>
    <script>
		    	angular.module('plunker', ['ui.bootstrap']);
					function TypeaheadCtrl($scope, $http) {

					  $scope.selected = undefined;
					  $scope.states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Dakota', 'North Carolina', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];
					  // Any function returning a promise object can be used to load values asynchronously
					  
	}

    </script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>


<div class='container-fluid' ng-controller="TypeaheadCtrl">

    <h4>Static arrays</h4>
    <pre>Model: @{{selected | json}}</pre>
    <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control">

     
        text:<input type="text" ng-model="text">
        <br>show: @{{text}}

        <br>radio:
        <input type="radio" ng-model="lunch" value="chicken" name="lunch">
        <input type="radio" ng-model="lunch" value="beef" name="lunch">
        <input type="radio" ng-model="lunch" value="fish" name="lunch">  
        @{{lunch}}
        <br>
        


   </div>
  </body>
</html>
