<!doctype html>
<html ng-app>
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
  </head>
  <body>
    <div ng-init="list = ['Chrome', 'Safari', 'Firefox', 'IE']">
      <input ng-model="list" ng-list> <br>
      <input ng-model="list" ng-list> <br>

      <pre>list={{list}}</pre> <br>

      <ol>
        <li ng-repeat="item in list">
          {{item}}
        </li>
      </ol>
    </div>
  </body>
</html>