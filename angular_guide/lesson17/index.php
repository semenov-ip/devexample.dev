<!doctype html>
<html ng-app="MyReverseModule">

  <head>

    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>

    <script src="script.js"></script>
  </head>

  <body>

    <div ng-controller="Ctrl">

      <input ng-model="greeting" type="greeting" />

      <br>

      No filter: {{greeting}}<br>

      Reverse: {{greeting|reverse}}<br>

      Reverse + uppercase: {{greeting|reverse:true}}<br>
    </div>

  </body>
</html>