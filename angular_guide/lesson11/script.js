function Cntl1($window, $scope){
	$scope.name = 'World';

	$scope.greet = function(){
		($window.mockWindow || $window).alert('Hello ' + $scope.name);
	}
}