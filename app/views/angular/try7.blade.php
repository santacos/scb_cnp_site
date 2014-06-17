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
        $scope.color = 'blue';
        $scope.specialValue = {
          "id": "12345",
          "value": "green"
        };

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

<form name="myForm">
  <input type="radio" ng-model="color" value="red">  Red <br/>
  <input type="radio" ng-model="color" ng-value="specialValue"> Green <br/>
  <input type="radio" ng-model="color" value="blue"> Blue <br/>
  <tt>color = @{{color | json}}</tt><br/>
 </form>
 Note that `ng-value="specialValue"` sets radio item's value to be the value of `$scope.specialValue`.



  


  </body>

</html>
