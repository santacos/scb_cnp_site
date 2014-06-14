<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <!--[if lt IE 9]>
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <![endif]-->
        <script src="js/ng-table/try.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="js/ng-table.js"></script>
        <link rel="stylesheet" href="css/ng-table.css">
    </head>
<body ng-app="main">

<h1>Saving params in url</h1>

<div ng-controller="DemoCtrl">
        <table ng-table="tableParams" class="table">
            <tr ng-repeat="user in $data">
                <td data-title="'Name'" sortable="'name'">
                    @{{user.name}}
                </td>
                <td data-title="'Age'" sortable="'age'">
                   @{{user.age}}
                </td>
            </tr>
        </table>

       

</div>


    </body>
</html>