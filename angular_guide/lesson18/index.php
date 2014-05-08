<!doctype html>
<html ng-app="MyServiceModule">
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
    
    <div ng-controller="myController">
      
      <p>Let's try this simple notify service, injected into the controller...</p>
      
      <input ng-init="message='test'" ng-model="message" >
      
      <button ng-click="callNotify(message);">NOTIFY</button>
    </div>

  </body>
</html>