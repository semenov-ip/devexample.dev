<!doctype html>
<html ng-app>

  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>

  <body>
    <div ng-controller="MyCtrl">
      Hello {{name}}!

      <button ng-click="action()">
        OK
      </button>

    </div>
  </body>
</html>