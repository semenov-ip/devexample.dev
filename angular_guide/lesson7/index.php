<!doctype html>
<html ng-app>
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
    <div ng-controller="Ctrl1">
      Hello <input ng-model='name'> <hr/>
      &lt;span ng:bind="name"&gt; <span ng:bind="name"></span> <br/>
      &lt;span ng_bind="name"&gt; <span ng_bind="name"></span> <br/>
      &lt;span ng-bind="name"&gt; <span ng-bind="name"></span> <br/>
      &lt;span data-ng-bind="name"&gt; <span data-ng-bind="name"></span> <br/>
      &lt;span x-ng-bind="name"&gt; <span x-ng-bind="name"></span> <br/>
    </div>
  </body>
</html>