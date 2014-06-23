var nameApp = angular.module('nameApp',['ui.bootstrap','ui.utils','ngSanitize']);
		nameApp.directive('ckEditor', [function () {
        return {
            require: '?ngModel',
            restrict: 'C',
            link: function (scope, elm, attr, model) {
                var isReady = false;
                var data = [];
                var ck = CKEDITOR.replace(elm[0]);
                
                function setData() {
                    if (!data.length) {
                        return;
                    }
                    
                    var d = data.splice(0, 1);
                    ck.setData(d[0] || '<span></span>', function () {
                        setData();
                        isReady = true;
                    });
                }

                ck.on('instanceReady', function (e) {
                    if (model) {
                        setData();
                    }
                });
                
                elm.bind('$destroy', function () {
                    ck.destroy(false);
                });

                if (model) {
                    ck.on('change', function () {
                        scope.$apply(function () {
                            var data = ck.getData();
                            if (data == '<span></span>') {
                                data = null;
                            }
                            model.$setViewValue(data);
                        });
                    });

                    model.$render = function (value) {
                        if (model.$viewValue === undefined) {
                            model.$setViewValue(null);
                            model.$viewValue = null;
                        }

                        data.push(model.$viewValue);

                        if (isReady) {
                            isReady = false;
                            setData();
                        }
                    };
                }
                
            }
        };
    }]);
    //////////////////
    	nameApp.controller('NameCtrl',['$scope', '$http',
	  		function ($scope, $http) {
	  		//for process
	  		$scope.temp=0;
	  		$scope.count = 0;
	  		$scope.isShowSkill=false;

	  		//for template//
	  		$scope.showtempqual=false;
	  		$scope.showtemp=false;
	  		$scope.text='yeah ckck';
	  		$scope.showtext='Select option';
	  		$scope.showqualtext='Select option';
	  		$scope.setText=function(responText){
	  			$scope.showtext=responText;
	  			
	  		};
	  		$scope.templateRespons=[
	  		{name:'option1',text:
	  			'<ul><li>Overseeing and monitoring the internal rules, regulations, notification concerned the business&nbsp;issued by the Bank of Thailand.&nbsp;</li><li>Preparing compliance report focus on operation, advisory function to senior&nbsp;management on compliance law, rules and standards, including update on changes&nbsp;and developments in this area.</li><li>Creating business operation about action plans program and activities</li><li>Reviewing and monitoring internal compliance activities</li><li>Developing internal process related to the regulation and legal.</li></ul>'
	  		},{name:'option2',text:
	  		'<ul><li>Drive, develop and control the professional and competencies development process by&nbsp;:Contribute to the development of a good work environment with managers, employees and staff representatives by identifying, analyzing and addressing risks and establishing, fostering constructive dialogue.<ul><li>identifying with the managers the short and long term competency&nbsp;<br />requirements&nbsp;</li><li>offering and implementing a relevant (in terms of cost, quality and time)&nbsp;<br />training plan&nbsp;so as to meet the entity&rsquo;s objectives</li></ul></li><li>Contribute to the development of a good work environment with managers, employees, and staff representatives by identifying, analyzing and addressing risk and establishing fostering constructive dialogue</li><li>Organize the HR department and follow up the HR and training budget&nbsp;</li></ul>'

	  		},{name:'option3',text:
	  			'hey3'
	  		},{name:'option4',text:
	  			'hey4'
	  		},{name:'option5',text:
	  			'hey5'
	  		}
	  		];

	  		$scope.templateQual=[
	  		{name:'option1',text:
	  			'<ul><li>Overseeing and monitoring the internal rules, regulations, notification concerned the business&nbsp;issued by the Bank of Thailand.&nbsp;</li><li>Preparing compliance report focus on operation, advisory function to senior&nbsp;management on compliance law, rules and standards, including update on changes&nbsp;and developments in this area.</li><li>Creating business operation about action plans program and activities</li><li>Reviewing and monitoring internal compliance activities</li><li>Developing internal process related to the regulation and legal.</li></ul>'
	  		},{name:'option2',text:
	  		'<ul><li>Drive, develop and control the professional and competencies development process by&nbsp;:Contribute to the development of a good work environment with managers, employees and staff representatives by identifying, analyzing and addressing risks and establishing, fostering constructive dialogue.<ul><li>identifying with the managers the short and long term competency&nbsp;<br />requirements&nbsp;</li><li>offering and implementing a relevant (in terms of cost, quality and time)&nbsp;<br />training plan&nbsp;so as to meet the entity&rsquo;s objectives</li></ul></li><li>Contribute to the development of a good work environment with managers, employees, and staff representatives by identifying, analyzing and addressing risk and establishing fostering constructive dialogue</li><li>Organize the HR department and follow up the HR and training budget&nbsp;</li></ul>'

	  		},{name:'option3',text:
	  			'hey3'
	  		},{name:'option4',text:
	  			'hey4'
	  		},{name:'option5',text:
	  			'hey5'
	  		}
	  		];

	  		$scope.setShowqual=function(qualText){
	  			$scope.showqualtext=qualText;
	  			
	  		};


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
   				console.log('checkGroup');
   	
	    	}

	    	$scope.checkDivision = function(){
			 	if($scope.division==""){
			 		$scope.showOrganization = false;
			 	}else{
			 		$scope.showOrganization = true;
			 	}

			 	//
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
   				console.log('checkGroup');
   	
	    	}

	    	$scope.checkOrganization = function(){
			 	if($scope.organization==""){
			 		$scope.showJobTitle = false;
			 	}else{
			 		$scope.showJobTitle = true;
			 	}

			 	//
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

			 $scope.resetqual=function(){
			 	$scope.qualification='';
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

			 }



			 $scope.addSkill = function(){
			 	$scope.skills.push({category:$scope.tempBranch,name:$scope.tempName});
			 	$scope.tempBranch='';
			 	$scope.tempName='';
			 }


    		//set responsibility and qualification
    		$scope.setRespon = function(){
    			$scope.responsibility = $scope.showtext;

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
    		}

    		$scope.setQual = function(){
    			
    			$scope.qualification = $scope.showqualtext
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
    		}

  			}//before end controller

  	
  		]);//end controller