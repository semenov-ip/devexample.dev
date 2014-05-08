<!doctype html>
<html ng-app="zippyModule">
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <div ng-controller="Ctr13">
  	Title: <input ng-model="title" /><br />
  	Text: <textarea ng-model="text"></textarea>

  	<hr />

  	<div class="zippy" zippy-title="Details: {{title}}...">{{text}}</div>

  </div>
  </body>
  </html>