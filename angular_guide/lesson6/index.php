<!doctype html>
<html ng-app="timeExampleModule">
<head>
  <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
  <script src="script.js"></script>
 </head>
 <body>
 	<div ng-controller="ClockCtrl">
 		Current time is: {{time.now}}
 	</div>
 </body>
 </script>
</html>