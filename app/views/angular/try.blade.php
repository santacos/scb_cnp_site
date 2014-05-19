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
      var nameApp = angular.module('nameApp', []);
        nameApp.controller('NameCtrl', function ($scope){
        $scope.names = ['Larry', 'Curly', 'Moe'];

        $scope.person = [{name:'John', phone:'555-1276'},
                         {name:'Mary', phone:'800-BIG-MARY'},
                         {name:'Mike', phone:'555-4321'},
                         {name:'Adam6', phone:'555-578'},
                         {name:'Julie', phone:'555-8765'},
                         {name:'Juliette', phone:'555-5678'}];

      
        $scope.removeName = function(name){
          var n = $scope.names.indexOf(name);
          $scope.names.splice(n,1);
        }

        $scope.addPerson =function(){
          $scope.person.push({name:$scope.enteredName,
                              phone:$scope.enteredPhone});
        }

        $scope.whenChange = function(){
          $scope.data = $filter('filter')($scope.person, $scope.search);
          
        }

      });
    </script>
  </head>
  <body ng-controller="NameCtrl">
 
   <br><h3>  type 1</h3><br>
    autocompletebox <br>
    <input ng-model="search.$" type="text" name="search" id="search" list="datalist1" />
      <datalist id = "datalist1">
        <option ng-repeat="personOb in person|filter:search" value="@{{personOb.name}}">
      </datalist>

    <br><h3>  type 2</h3><br>
    autocompletebox <br>
    <input ng-change="whenChange()" ng-model="search.$" type="text" name="search" id="search" list="datalist1" />
      <datalist id = "datalist1">
        <option ng-repeat="personOb in data" value="@{{personOb.name}}">
      </datalist>


      <!--add person -->
      <form ng-submit="addPerson()">
      <p> add person </p><br>
      name:<input ng-model="enteredName" type="text"/><br>
      phone:<input ng-model="enteredPhone" type="text"/><br>
      <input type="submit" value="add">
      </form>
      <!--__________________________________________-->


      <br><h1>  Now Showing</h1>
      <table id="searchTextResults">
        <tr><th>Name</th><th>Phone</th></tr>

        <tr ng-repeat="personOb in person|filter:search">
          <td>@{{personOb.name}}</td>
          <td>@{{personOb.phone}}</td>
        </tr>
      </table>

      <br>
    <p>Total number of phones: @{{person.length}}</p><br>

    <!-- search -->
    searchAll:<input ng-model="search.$"/><br>
    search from name: <input ng-model="search.name"/><br>
    search from phone: <input ng-model="search.phone"/><br>



  
  </body>
</html>