<!doctype html>
<html ng-app>
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>

  <body>

    <div ng-controller="Controller">

      <form novalidate class="simple-form">
        Name: <input type="text" ng-model="user.name" /><br />
        E-mail: <input type="email" ng-model="user.email" /><br />
        Gender: <input type="radio" ng-model="user.gender" value="male" />male
        <input type="radio" ng-model="user.gender" value="female" />female<br />

        <button ng-click="reset()">RESET</button>
        <button ng-click="update(user)">SAVE</button>

      </form>
      
      <pre>form = {{user | json}}</pre>
      <pre>master = {{master | json}}</pre>
    </div>
  </body>
</html>