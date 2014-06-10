
var nameApp = angular.module('nameApp',['ui.bootstrap','ui.utils']);
    	nameApp.controller('NameCtrl',['$scope', '$http',
	  		function ($scope, $http) {
	  		//for process
	

	  		$scope.count = 0;
	  		$scope.isShowSkill=false;
			
	  		
			$http.get('http://localhost/scb_cnp_site/public/rest/edit-requisition/'+ xxx).success(function(data) {
	     		 $scope.requisition = data;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_requisiton');
   			});			

			$http.get('http://localhost/scb_cnp_site/public/rest/position').success(function(dataa) {
	     		 $scope.allPosition = dataa;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_position');
   			});

			$scope.checkGroup = function(){
			 	if($scope.group==""){
			 		$scope.showDivision = false;
			 	}else{
			 		$scope.showDivision = true;
			 	}
			 	$scope.requisition.division="";
			 	$scope.requisition.organization="";
			 	$scope.requisition.position_id="";
   				console.log('checkGroup');
   	
	    	}

	    	$scope.checkDivision = function(){
			 	if($scope.division==""){
			 		$scope.showOrganization = false;
			 	}else{
			 		$scope.showOrganization = true;
			 	}
			 	$scope.requisition.organization="";
			 	$scope.requisition.position_id="";
   				console.log('checkDivision');
   	
	    	}

	    	$scope.checkOrganization = function(){
			 	if($scope.organization==""){
			 		$scope.showJobTitle = false;
			 	}else{
			 		$scope.showJobTitle = true;
			 	}
   				console.log('checkOrganization');
   				$scope.requisition.position_id="";
   	
	    	}
	    			////////////////////////////////////////////

			 $scope.checkProgress = function(){
			 	$scope.temp=0;
			 	if($scope.requisition.group){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.requisition.division){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.organization){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.position_id){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	

			 	$scope.count = $scope.temp;

			 };

			 $scope.addSkill = function(){
			 	$scope.skills.push({category:$scope.tempBranch,name:$scope.tempName});
			 	$scope.tempBranch='';
			 	$scope.tempName='';
			 }


    	
  			}//before end controller

  	
  		]);//end controller

	