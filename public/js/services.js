	app.factory('RemoteService', function ($http, toaster) 
	{ 
		var client = {};

		client.get = function (q) {
		    return $http.get(_url + q).then(function (results){
		        return results.data;
		    });
		};
		client.post = function (q, object){
		    return $http.post(_url + q, object).then(function (results){
		        return results.data;
		    });
		};
		client.put = function (q, object) {
		    return $http.put(_url + q, object).then(function (results){
		        return results.data;
		    });
		};
		client.delete = function (q) {
		    return $http.delete(_url + q).then(function (results) {
		        return results.data;
		    });
		};
		client.toast = function (data) {
            toaster.pop(data.status, "", data.message, 10000, 'trustedHtml');
        }

		return client;
	})

	.factory('AttachService', function($q, $http) {
		var service = {
			search: function(name) {
			var d = $q.defer();
				$http.post(_url + 'client/available', name)
				.success(function(data, status) {
					d.resolve(data, status);
				}).error(function(data, status) {
					d.reject(data, status);
				});
				return d.promise;
			},
			create: function(store) {
				var d = $q.defer();
				$http.post(_url+'client/create', store)
				.success(function(data, status) {
					d.resolve(data, status);
				}).error(function(data, status) {
					d.reject(data, status);
				});
				return d.promise;
			}
		}
		return service;
	});