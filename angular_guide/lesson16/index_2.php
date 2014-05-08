<!doctype html>
<html ng-app>
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
  </head>
  
    <body ng-controller="MainCtrl"> 
      <p>Good {{timeOfDay}}, {{name}}!</p> 
      
      <div ng-controller="ChildCtrl">
        <p>Good {{timeOfDay}}, {{name}}!</p>
        
        <p ng-controller="BabyCtrl">Good {{timeOfDay}}, {{name}}!</p>
      </div>

</body>






<script>
function MainCtrl($scope) { 
  $scope.timeOfDay = 'morning'; $scope.name = 'Nikki';
}

function ChildCtrl($scope) {
  $scope.name = 'Mattie';
}

function BabyCtrl($scope) {
  $scope.timeOfDay = 'evening'; $scope.name = 'Gingerbreak Baby'; 
}
</script>
</html>