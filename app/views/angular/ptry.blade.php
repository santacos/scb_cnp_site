<!DOCTYPE html>
<html>
<head>
    <script data-require="angular.js@*" data-semver="1.2.0-rc3-nonmin" src="http://code.angularjs.org/1.2.0-rc.3/angular.js"></script>
    <script data-require="ng-table@*" data-semver="0.3.0" src="ngTable.js"></script>
    
    <link data-require="ng-table@*" data-semver="0.3.0" rel="stylesheet" href="http://bazalt-cms.com/assets/ng-table/0.3.2/ng-table.css" />
    <link data-require="bootstrap-css@*" data-semver="3.0.0" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
</head>

<body ng-app="main" ng-controller="DemoCtrl">
    <p><strong>Page:</strong> {{tableParams.page()}}
    <p><strong>Count per page:</strong> {{tableParams.count()}}

<p>Filter: <input class="form-control" type="text" ng-model="filter.$" /></p>

    <table ng-table="tableParams" class="table">
        <tr ng-repeat="user in $data">
            <td data-title="'ID'" sortable="'id'">
                {{user.id}}
            </td>
            <td data-title="'Name of people'" sortable="'name'">
                {{user.name}}
            </td>
            <td data-title="'Age'" sortable="'age'">
                {{user.age}}
            </td>
            <td data-title="'Email'" sortable="'email'">
                {{user.email}}
            </td>
            <td data-title="'Company'" sortable="'company'">
                {{user.company}}
            </td>
        </tr>
    </table>


</body>
</html>
