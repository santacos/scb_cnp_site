<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example of Twitter Bootstrap 3 Buttons Radio</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
        	margin: 20px;
        }
    </style>
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
    <script src="<?php echo asset('js/createReq-manager.js')?>"></script>
    <script src="<?php echo asset('vendor/ui-utils.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-utils.min.js')?>"></script>
</head>
<body ng-app="">
    <div class="bs-example">
        <div class="btn-group" data-toggle="buttons">
            <button class="btn btn-primary" ng-click="options='aaa'">
                <input type="radio"  name="options" value="1" id="option1"/> Option 1
            </button>
            <button class="btn btn-primary" ng-click="options='bbb'">
                <input type="radio" ng-model="options" name="options" value="2" id="option2"/> Option 2
            </button>
            <button class="btn btn-primary" ng-click="options='ccc'">
                <input type="radio" ng-model="options" name="options" value="3" id="option3"/> Option 3
            </button>
        </div>
        @{{options}}
    </div>
</body>
</html>                                		