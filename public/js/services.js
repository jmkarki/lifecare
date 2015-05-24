// app.provider('GithubService', ['$q', '$http', function($q, $http) {
//         var getPullRequests = function() {
//           var deferred = $q.defer();
//           $http.get('https://api.github.com/repos/angular/angular.js/pulls')
//           .success(function(data) {
//             deferred.resolve(data);
//           })
//           .error(function(reason) {
//             deferred.reject(reason);
//           });
//           return deferred.promise;
//         };

//         return {
//           getPullRequests: getPullRequests
//         };
//   }]);

// app.provider('ClientService',['$q','$http', function($q, $http){
//   deferred = $q.defer();
//   var checkEmail = function(email){
//     $http.get(siteBase+'client/check?email='+email)
//         .success(function(data) {
//           deferred.resolve(data);
//         })
//         .error(function(reason) {
//           deferred.reject(reason);
//         });
//         return deferred.promise;
//   };
// }]);