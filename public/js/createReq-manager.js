var nameApp = angular.module('nameApp',['ui.bootstrap']);
    	nameApp.controller('NameCtrl',['$scope', '$http',
	  		function ($scope, $http) {
	  		//for process
	  		$scope.count = 0;
			
	  		//default of industry
	  		$scope.chooseIndustry = 'choose industry';
	  		$scope.chooseCorp = 'choose corporate title';
	  		$scope.chooseRecOb = 'choose Objective';
	  		$scope.chooseRecType = 'choose recruitment type';
	  		$scope.chooseLocation = 'choose job location';


	  		//change information of industry here
	    	$scope.industries = [
			    'The first choice!',
			    'And another choice for you.',
			    'but wait! A third!',
			    'a','b','c','d','e','f','g'
			  ];
			//change information of Corporate here
	    	$scope.corps = [
			    'President',
				'SEVP',
				'FEVP',
				'EVP',
				'FSVP',
				'SVP',
				'VP',
				'AVP',
				'Officer 4',
				'Officer 3',
				'Officer 2',
				'Officer 1',
				'Associate',
				'Staff 4',
				'Staff 3',
				'Staff 2',
				'Staff 1'
			  ];

			 $scope.objectives = [
			 	'new',
			 	'Replace resign of'
			 ];
			 $scope.recTypes = [
			 	'All',
			 	'internal',
			 	'external'

			 ];
			 $scope.locations=[
			 	'Bangkok',
			 	'Chiangmai',
			 	'Nakhon Pathom'
			 ];

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
			  	$scope.chooseCorp = temp;
			  	$scope.status.isopenCorp = !$scope.status.isopenCorp;

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
			  	$scope.chooseLocation = location;
			  	$scope.status.isopenLocation = !$scope.status.isopenLocation;

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


    	
  			}//before end controller

  	
  		]);//end controller