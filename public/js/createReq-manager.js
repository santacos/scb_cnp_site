
var nameApp = angular.module('nameApp',['ui.bootstrap','ui.utils']);
    	nameApp.controller('NameCtrl',['$scope', '$http',
	  		function ($scope, $http) {
	  		//for process
	  		$scope.temp=0;
	  		$scope.count = 0;
	  		$scope.isShowSkill=false;

	  		//skill relate
	  		$scope.skills=[
	  			{category:'Programming', name:'java'},
	  			{category:'English', name:'writing'}
	  		];
			

			$http.get('../rest/position').success(function(dataa) {
	     		 $scope.allPosition = dataa;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_position');
   			});

   			$http.get('../rest/dept').success(function(dataa) {
	     		 $scope.allDept = dataa;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_dept');
   			});


			 $scope.checkGroup = function(){
			 	if($scope.group==""){
			 		$scope.showDivision = false;
			 	}else{
			 		$scope.showDivision = true;
			 	}

   				///
   				$scope.temp=0;
			 	if($scope.group!=""){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.division){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.organization){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.job_title){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	

			 	$scope.count = $scope.temp;
   				console.log('checkGroup');
   	
	    	}

	    	$scope.checkDivision = function(){
			 	if($scope.division==""){
			 		$scope.showOrganization = false;
			 	}else{
			 		$scope.showOrganization = true;
			 	}

			 	$scope.temp=0;
			 	if($scope.group){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.division){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.organization){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.job_title){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	

			 	$scope.count = $scope.temp;
   				console.log('checkGroup');
   	
	    	}

	    	$scope.checkOrganization = function(){
			 	if($scope.organization==""){
			 		$scope.showJobTitle = false;
			 	}else{
			 		$scope.showJobTitle = true;
			 	}

			 	$scope.temp=0;
			 	if($scope.group){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.division){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.organization){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.job_title){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	

			 	$scope.count = $scope.temp;
   				console.log('checkGroup');
   	
	    	}



			$http.get('../rest/location').success(function(dataa) {
	     		 $scope.locations = dataa;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_corperate_title');
   			});

   		
			 ////////////////////////////////////////////

			 $scope.checkProgress = function(){
			 	$scope.temp=0;
			 	if($scope.group){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.division){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.organization){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.job_title){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.corporate_title_id){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.totalNumber>0){
			 		$scope.temp = $scope.temp+1;
			 		console.log($scope.totalNumber);
			 	}
			 	if($scope.recruitment_obj){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.recruitment_type){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.location_id){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.year_of_experience){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.responsibility){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.qualification){
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