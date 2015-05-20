var app = angular.module('myApp', []);

	app.config(['$interpolateProvider','$httpProvider',function($interpolateProvider,$httpProvider)
	{
		$httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
		$interpolateProvider.startSymbol('[[');
		$interpolateProvider.endSymbol(']]');
	}]);

	app.controller('createController', function($scope, $http, $window, $timeout)
	{
		$scope.has = false;
		$scope.btn = 'Create';
		$scope.doPost = function(createForm, url){
			if(createForm.$invalid && createForm.$submitted){
				$scope.has = true;
			}else if(createForm.$valid && createForm.$submitted){
				$scope.running = true;
				$scope.btn = 'Creating';
				$timeout(function(){
				$http({
					method: 'POST',
					url : url+'/client/create',
					data: $scope.client })
					.success(function(response){
						console.log(response);
					});
				},1000);
			}
		}
	});