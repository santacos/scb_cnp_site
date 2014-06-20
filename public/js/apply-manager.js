var app = angular.module('app',['ui.bootstrap','ui.utils']);
	app.controller('appCtrl',['$scope', '$http',
		function ($scope, $http) {
			$http.get('../rest/position').success(function(dataa) {
	     		 $scope.allPosition = dataa;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_position');
   			});

			$scope.jobOpenings = [{name:'JobsDB'},
			{name:'Nationjob'},
			{name:'Newspaper'},
			{name:'University Poster'},
			{name:'Facebook'}
			];

			$scope.cos='HEY';
  		}//before end controller


]);//end controller