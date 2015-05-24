var typingTimer;
var siteBase = 'http://local.dev/lifecare/public/';
var app = angular.module('myApp', [])
	.config(['$interpolateProvider','$httpProvider',
		function($interpolateProvider,$httpProvider){
		$httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
		$interpolateProvider.startSymbol('[[');
		$interpolateProvider.endSymbol(']]');
	}])

	.controller('createController', function($scope, $http, $window, $timeout)
	{
		$scope.has = false;
		$scope.match = true;
		$scope.btn = 'Create';
		$scope.doPost = function(createForm, url){
			if(createForm.$invalid && createForm.$submitted){
				$scope.has = true;
				$scope.notallvalid = 'Not all required fields are valid.';
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
				},500);
			}
		}
		$scope.check = function(repassword){
			$timeout.cancel(typingTimer);
			typingTimer = $timeout(function(){
				if(repassword != $scope.client.password)
				{
					$scope.createForm.repassword.$setValidity('match', false);
					$scope.donotmatch = 'Password do  not match';
					$scope.match = false;
				}else
				{
					$scope.createForm.repassword.$setValidity('match', true);
					$scope.donotmatch = '';
					$scope.match = true;
				}
			},300);

		}
		$scope.confirmEmail = function(email){
			$timeout.cancel(typingTimer);
			var isUnique;
			typingTimer = $timeout(function(){
				isUnique = ClientService.checkEmail(email);
			},300);
			console.log(isUnique);
		}
	})

	.controller('TestController', function($scope, GithubService,$timeout) {

		$scope.pullRequests = {};
		$scope.fetchAll = function(){
			$scope.pullRequests = GithubService.getPullRequests();				
		}		
	})
	.factory('FetchService', ['$q', '$http', function($q, $http) {
	        var getPullRequests = function() {
	          var deferred = $q.defer();
	          $http.get(siteBase+'client/check')
	          .success(function(data) {
	          	console.log(data);
	            deferred.resolve(data);
	          })
	          .error(function(reason) {
	            deferred.reject(reason);
	          });
	          return deferred.promise;
	        };

	        return {
	          getPullRequests: getPullRequests
	        };
	  }]);

