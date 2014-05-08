<!doctype html>
<html ng-app>
<head>
  <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
  <script src="script.js"></script>
</head>
<body>
	<div class="example2" ng-controller="Cntl1">
  		Name: <input ng-model="name" type="text"/>
  		<button ng-click="greet()">Greet</button>
  	</div>
</body>
</html>