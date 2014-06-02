<!DOCTYPE html>
<html ng-app="plunker">
  <head>
    <meta charset="utf-8">


    <title>create requisition</title>

 	<link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>">

 	<style>
	 	.scrollable-menu {
	 		width:250px;
	    height: auto;
	    max-height: 200px;
	    overflow-x: hidden;
		}


 	</style>
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
    <script>
   angular.module('plunker', ['ui.bootstrap']);
	var ModalDemoCtrl = function ($scope, $modal, $log) {

  $scope.items = ['item1', 'item2', 'item3'];

  $scope.open = function (size) {

    var modalInstance = $modal.open({
      templateUrl: 'coscos',
      controller: ModalInstanceCtrl,
      size: size,
      resolve: {
        items: function () {
          return $scope.items;
        }
      }
    });

    modalInstance.result.then(function (selectedItem) {
      $scope.selected = selectedItem;
    }, function () {
      $log.info('Modal dismissed at: ' + new Date());
    });
  };
};

// Please note that $modalInstance represents a modal window (instance) dependency.
// It is not the same as the $modal service used above.

var ModalInstanceCtrl = function ($scope, $modalInstance, items) {

  $scope.items = items;
  $scope.selected = {
    item: $scope.items[0]
  };

  $scope.ok = function () {
    $modalInstance.close($scope.selected.item);
  };

  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
};
    </script>

	</head>
	<body>
	<div ng-controller="ModalDemoCtrl">
    <script type="text/ng-template" id="coscos">
        <div class="modal-header">
            <h3 class="modal-title">I am a modal!</h3>
        </div>
        <div class="modal-body">
           <h1>HEYYYYYY</h1>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" ng-click="ok()">OK</button>
            <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
        </div>
    </script>

    <button class="btn btn-default" ng-click="open()">Open me!</button>
    <button class="btn btn-default" ng-click="open('lg')">Large modal</button>
    <button class="btn btn-default" ng-click="open('sm')">Small modal</button>
    <div ng-show="selected">Selection from a modal: @{{selected}}</div>
</div>
	</body>



</html>
