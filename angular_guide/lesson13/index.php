<!doctype html>
<html ng-app>
  
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>
  
  <body>
    

    <div ng-controller="Controller">
      <form novalidate class="css-form">
        Name:   <input type="text" ng-model="user.name" required /><br />
        E-mail: <input type="email" ng-model="user.email" required /><br />
        Gender: <input type="radio" ng-model="user.gender" value="male" />male
        <input type="radio" ng-model="user.gender" value="female" />female<br />

        <button ng-click="reset()">RESET</button>        
        <button ng-click="update(user)">SAVE</button>

      </form>
    </div>

    <style type="text/css">
      .css-form input.ng-invalid.ng-dirty {
        background-color: #FA787E;
      }
      .css-form input.ng-valid.ng-dirty {
        background-color: #78FA89;
      }
    </style>
  </body>
</html>