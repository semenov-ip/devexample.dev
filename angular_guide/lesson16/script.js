function EmployeeController($scope){
console.log($scope);
	$scope.department = 'Enginering';

	$scope.employee = {
		name: 'Joe the Manager',
		reports: [
			{name: 'John Smith'},
			{name: 'Mary Run'}
		]
	}
}