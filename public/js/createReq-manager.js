
var nameApp = angular.module('nameApp',['ui.bootstrap','ui.utils']);
    	nameApp.controller('NameCtrl',['$scope', '$http',
	  		function ($scope, $http) {
	  		//for process
	  		$scope.count = 0;
	  		$scope.isShowSkill=false;

	  		//skill relate
	  		$scope.skills=[
	  			{category:'Programming', name:'java'},
	  			{category:'English', name:'writing'}
	  		];
			

			$http.get('rest/position').success(function(dataa) {
	     		 $scope.allPosition = dataa;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_position');
   			});

   			$http.get('rest/dept').success(function(dataa) {
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
   				console.log('checkGroup');
   	
	    	}

	    	$scope.checkDivision = function(){
			 	if($scope.division==""){
			 		$scope.showOrganization = false;
			 	}else{
			 		$scope.showOrganization = true;
			 	}
   				console.log('checkGroup');
   	
	    	}

	    	$scope.checkOrganization = function(){
			 	if($scope.organization==""){
			 		$scope.showJobTitle = false;
			 	}else{
			 		$scope.showJobTitle = true;
			 	}
   				console.log('checkGroup');
   	
	    	}



			$http.get('rest/location').success(function(dataa) {
	     		 $scope.locations = dataa;
	     		 
	    	}).error(function(data, status, headers, config) {
			      // called asynchronously if an error occurs
			      // or server returns response with an error status.
			      console.log('error_corperate_title');
   			});

   			$scope.addLocation = function(){

   				console.log('add location');
   				

		    	$http.post('setlocation',{ 'name' :$scope.chooseLocation }).success(function(){
		    		console.log('post_location_success');
		    	});

	    	}



			/////////////////
			$scope.status = {
			    isopenIndustry: false,
			    isopenCorp: false,
			    isopenRecOb: false,
			    isopenRecType: false,
			    isopenLocation : false
			  };

			/////////////////
			$scope.toggled = function(open) {
			    console.log('Dropdown is now: ', open);
			  };

			$scope.toggleDropdown = function($event) {
			    $event.preventDefault();
			    $event.stopPropagation();
			    $scope.status.isopen = !$scope.status.isopen;
			  };

			$scope.whenClickIndustry = function(item){
			  	$scope.chooseIndustry = item;
			  	$scope.status.isopenIndustry = !$scope.status.isopenIndustry;

			  };

			 $scope.whenClickCorp = function(temp){
			  	$scope.chooseCorp = temp.name;
			  	$scope.status.isopenCorp = !$scope.status.isopenCorp;
			  	$scope.sentCorp =temp;

			  };

			  $scope.whenClickRecOb = function(Objective){
			  	$scope.chooseRecOb = Objective;
			  	$scope.status.isopenRecOb = !$scope.status.isopenRecOb;

			  };

			  $scope.whenClickRecType = function(type){
			  	$scope.chooseRecType = type;
			  	$scope.status.isopenRecType = !$scope.status.isopenRecType;

			  };

			  $scope.whenClickLocation = function(location){
			  	$scope.chooseLocation = location.name;
			  	$scope.status.isopenLocation = !$scope.status.isopenLocation;
			  	$scope.sentLocation=location;

			  };


			 ////////////////////////////////////////////

			 $scope.checkProgress = function(){
			 	$scope.temp=0;
			 	if($scope.try1){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.try2){
			 		$scope.temp = $scope.temp+1;
			 	}
			 	if($scope.try3){
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