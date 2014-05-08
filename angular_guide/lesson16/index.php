<!doctype html>
<html ng-app>
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
    <style>
    /* remove .doc-example-live in jsfiddle */
    .doc-example-live .ng-scope {
      border: 1px dashed red;
    }
    </style>
  </head>
  <body>
    <div ng-controller="EmployeeController">
      Manager: {{employee.name}} [ {{department}} ]<br>
      Reports:
        <ul>
          <li ng-repeat="employee in employee.reports">
            {{employee.name}} [ {{department}} ]
          </li>
        </ul>

      <hr>


      {{greeting}}
      </div>
  </body>
</html>