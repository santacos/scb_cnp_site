<!DOCTYPE html>
<html ng-app="nameApp">
  <head>
    <meta charset="utf-8">
    <title>Angular.js Example</title>
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script>
      var nameApp = angular.module('nameApp', []);
        nameApp.controller('NameCtrl',['$scope', '$http',
	  		function ($scope, $http) {
	    	$http.get('userrest/user').success(function(data) {
	     		 $scope.users = data;
	     		 console.log('YEAH');
	    	});

    	
  		}]);



    </script>
  </head>
  <body ng-controller="NameCtrl">
		<input type="text" keyboard-poster post-function="searchFlight" name="first_name" placeholder="Zurich, Switzerland" list="_countries" style='margin-bottom: 100px'>
            <datalist id="_countries">
             <select style="display: none;" id="_select" name="_select" ng-model='selectedCountry' ng-options='k as v for (k,v) in countries'></select>
			</datalist>

		<br>

		<input type="text" list="_countries" style='margin-bottom: 100px'>
			<datalist id="_countries">
				<select style="display: none;" id="_select" name="_select" ng-model="users" ng-options="user in users"></select>
			</datalist>

		<br>
    <table id="searchTextResults">
      <tr>
      	<th>id</th>
      	<th>firstname</th>
      	<th>lastname</th>
      </tr>

      <tr ng-repeat="personOb in users|filter:search">
        <td>@{{personOb.user_id}}</td>
        <td>@{{personOb.firstname}}</td>
        <td>@{{personOb.lastname}}</td>
      </tr>
    </table>

    <ul>
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>

    <p>Total number of phones: @{{users.length}}</p><br>

   search:<input ng-model="search"/><br>
   search from firstname:<input ng-model="search.firstname"/><br>

    


  </body>
</html>