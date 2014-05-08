<!doctype html>
<html ng-app="time">
<head>
  <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
  <script src="script.js"></script>
</head>
  <body>
    <div ng-controller="Ctr12">
      Date format: <input ng-model="format" />
      Curent time is: <span my-current-time="format"></span>
    </div>
  </body>
</html>