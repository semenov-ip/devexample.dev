angular.module('MyReverseModule', []).
	filter('reverse', function(){
		return function(input, uppercase){
			var out = "";

			for(var i = 0; i < input.length; i++){
				out = input.charAt(i) + out;
			}

			if(uppercase){
				out = out.tuUpperCase();
			}

			return out;
		}
	});



function Ctrl($scope){
	$scope.greeting = "Hello";
}