<!doctype html>
<html ng-app="form-example1">
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>
  
  <body>
    <div>
      <form name="form" class="css-form" novalidate>
        

        <div>
          Size (integer 0 - 10):
          <input type="number" ng-model="size" name="size" min="0" max="10" integer />{{size}}<br />
          <span ng-show="form.size.$error.integer">This is not valid integer!</span>
          <span ng-show="form.size.$error.min || form.size.$error.max">The value must be in range 0 to 10!</span>
        </div>
        


        <div>
          Length (float):
          <input type="text" ng-model="length" name="length" smart-float />
          {{length}}<br />
          <span ng-show="form.length.$error.float">
            This is not a valid float number!</span>
        </div>
      </form>
    </div>
  </body>

</html>