<!doctype html>
<html ng-app>
<head>
  <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
</head>
<body>
	<div ng-init="list=['Chrome', 'IE', 'Safary', 'Firefox']">
		Number formating: {{ 123456789 | number }}<br />
		Array filtering: <input ng-model="predicate">
		{{list | filter:predicate | json }}
	</div>
</body>
</html>