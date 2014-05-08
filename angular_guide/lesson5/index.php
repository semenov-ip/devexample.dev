<!doctype html>
<html ng-app="directive">
	<head>
  		<script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
  		<script src="script.js"></script>
  		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div contentEditable="true" ng-model="content">Edit Me</div>
		<pre>model = {{content}}</pre>

	</body>
</html>