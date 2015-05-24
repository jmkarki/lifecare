var siteBase = 'http://local.dev/lifecare/public/';
app.factory('GithubService', ['$q', '$http', function($q, $http) {
		var getPullRequests = function() {
		  var deferred = $q.defer();
		  $http.get('https://api.github.com/repos/angular/angular.js/pulls')
		  .success(function(data) {
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
	 }])

	.factory('ClientService',['$q','$http', function($q, $http){
		deferred = $q.defer();
		var checkEmail = function(email){
		$http.get(siteBase+'client/check?email='+email)
		    .success(function(data) {
		      deferred.resolve(data);
		    })
		    .error(function(reason) {
		      deferred.reject(reason);
		    });
		    return deferred.promise;
		};
	}])

	.factory('Data', ['$http', function ($http) { 
	    // This service connects to our REST API

	        var obj = {};
	        obj.toast = function (data) {
	            toaster.pop(data.status, "", data.message, 10000, 'trustedHtml');
	        }
	        obj.get = function (q) {
	            return $http.get(serviceBase + q).then(function (results) {
	                return results.data;
	            });
	        };
	        obj.post = function (q, object) {
	            return $http.post(serviceBase + q, object).then(function (results) {
	                return results.data;
	            });
	        };
	        obj.put = function (q, object) {
	            return $http.put(serviceBase + q, object).then(function (results) {
	                return results.data;
	            });
	        };
	        obj.delete = function (q) {
	            return $http.delete(serviceBase + q).then(function (results) {
	                return results.data;
	            });
	        };

	        return obj;
	}]);