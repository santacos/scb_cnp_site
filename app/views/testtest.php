<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Angular.js Example</title>
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script>
      var nameApp = angular.module('nameApp', []);
      nameApp.controller('NameCtrl',['$scope', '$http', function ($scope, $http) {
        $http.get('testrest/user').success(function(data) {
           $scope.users = data;
        }).error(function(){
          console.log('error');
        }

        );
      }]);
    </script>
  </head>
  <body ng-app="nameApp" ng-controller="NameCtrl">
    <div id="tempTest">Hello</div>
    search from username:<input ng-model="search.username"/><br>
    <br>
    <table id="searchTextResults" ng-table="tableParams">
      <tr>
        <th>id</th>
        <th>first</th>
        <th>last</th>
      </tr>

      <tr ng-repeat="user in users | filter:search">
        <td>{{user.username}}</td>
        <td>{{user.first}}</td>
        <td>{{user.last}}</td>
      </tr>
    </table>
    <p>Total number of users: {{users.length}}</p><br>
    <span>{{ users | json }}</span>
    <br>
    <br>
    <p style="color:blue" ><?=User::find(1)->candidate->skill->first()->pivot->toJson()?></p>
    <p style="color:green"><?=""?></p>
  </body>
</html>