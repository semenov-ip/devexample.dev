<!doctype html>
<html ng-app>
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
    <div ng-controller="InvoiceCntl">
      <b>Invoice:</b>
      <br>
      <br>
      <table>
       <tr><td>Quantity</td><td>Cost</td></tr>
       <tr>
         <td><input type="number" ng-pattern="/\d+/" step="1" min="0" ng-model="qty" required ></td>
         <td><input type="number" ng-model="cost" required ></td>
       </tr>
      </table>
      <hr>
      <b>Total:</b> {{qty * cost | currency}}
    </div>
  </body>
</html>