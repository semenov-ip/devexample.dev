<!doctype html>
<html ng-app>
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>
  
  <body>
    <div ng-controller="Cntl2" class="expressions">
      Expression:
        <input type='text' ng-model="expr" size="80"/>

        <button ng-click="addExp(expr)">Evaluate</button>

          <ul>
            <li ng-repeat="expr in exprs">
              [ <a href="" ng-click="removeExp($index)">X</a> ]
              <tt>{{expr}}</tt> => <span ng-bind="$parent.$eval(expr)"></span>
            </li>
          </ul>

    </div>
  </body>
</html>