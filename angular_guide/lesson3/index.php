<!doctype html>
<html ng-app>

  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>

  <body>
    <div ng-controller="GreetCtrl">
      Hello {{name}}!
    </div>

    <div ng-controller="ListCtrl">

      <ol>

        <li ng-repeat="name in names">{{name}}</li>

      </ol>

    </div>

  </body>
</html>