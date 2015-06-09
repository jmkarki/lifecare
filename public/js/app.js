var config = {
  '.chosen-select': {}
}
for (var selector in config) {
  $(selector).chosen(config[selector]);
}

var typingTimer;
var _url = document.getElementById('_url').value+'/';
var app = angular.module('myApp', ['ngRoute', 'ngAnimate', 'toaster'])
	.config(function($httpProvider){
		$httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
	})
	.controller('createController', function($scope, $http, $timeout, $window, $element, RemoteService, AttachService)
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
				if($scope.client.exists == 0){
					$scope.btn = 'Creating';	
				}else if($scope.client.exists == 1){
					$scope.btn = 'Updating';
				}			

				AttachService.create($scope.client)
					.then(function(response){
						if(response.status == 200){
							RemoteService.toast(response);
							$timeout(function(){
								$window.location.href = _url + 'client/show?key='+response.id;
							}, 1000);							
						}
				});
			}
		}
		$scope.check = function(repassword){
			$timeout.cancel(typingTimer);
			typingTimer = $timeout(function(){
				if(repassword != $scope.client.password)
				{
					$scope.createForm.repassword.$setValidity('match', false);
					$scope.donotmatch = 'Password do  not match !';
					$scope.match = false;
				}else
				{
					$scope.createForm.repassword.$setValidity('match', true);
					$scope.donotmatch = '';
					$scope.match = true;
				}
			},500);
		}

		$scope.peoples = [{}];
		$scope.showFeed = function(name){
			if(!name){
				$('.searched-result').fadeOut();
				clear();
			}
			if(name){
				$timeout.cancel(typingTimer);
				typingTimer = $timeout(function(){					
					var text = {"name" : name};					
					AttachService.search(text).then(function(resp, status){
						if(resp == null){
							$('.searched-result').fadeOut();
							clear();
						}
						if(resp != null){
							$scope.peoples = resp;
							$('.searched-result').fadeIn();
							$scope.available = true;
						}
					});					
				},300);	
			}
			$element.on('focusout', function(){
				$('.searched-result').fadeOut();
			});
		};
		function clear(){
			$scope.client.phone = null;
			$scope.client.full_address = null;
			$scope.client.phone_home = null;
			$scope.client.email = null;
			$scope.client.exists = 0;
			$scope.client.id = 0;
			$scope.isOld = false;
			$scope.btn = 'Create';
		}
		$scope.doReset = function(){
			if($scope.client.exists == 1){
				clear();
			}
		}

		$scope.selectEach = function(i){
			$scope.client = $scope.peoples[i];
			$scope.client.exists = 1;
			$scope.isOld = true;
			$scope.btn = 'Update';
		}

		$scope.confirmEmail = function(email){
			$timeout.cancel(typingTimer);
			typingTimer = $timeout(function(){
				RemoteService.post('client/check', {
		            email: email
		        }).then(function (results) {       	
					if(results.status == 200){
						$scope.unique = results.unique;
						$scope.createForm.email.$setValidity('unique', results.unique);
						$scope.emailText = 'Try another, email has already been taken !';
					}
		        });
			},350);
       	};
	})
	.controller('AttachController', function($scope, $http, $timeout, $window, $element, RemoteService)
	{
		$scope.has = false;
		$scope.match = true;
		$scope.btn = 'Attach';

		$scope.client = {};
		$scope.files = [];
		$scope.$on('fileSelected', function(event, args){
			$scope.$apply(function(){
				$scope.files.push(args.file);
				$scope.nofiles = false;				
			});
		});

		$scope.fileSize = function(size)
		{
			if (isNaN(parseFloat(size)) || !isFinite(size)) return '-';
			if (typeof precision === 'undefined') precision = 1;
			var units = ['bytes', 'KB', 'MB', 'GB', 'TB', 'PB'],
				number = Math.floor(Math.log(size) / Math.log(1024));
			return (size / Math.pow(1024, Math.floor(number))).toFixed(precision) +  ' ' + units[number];
		}

		$scope.save = function(attachForm)
		{			
			if(attachForm.$invalid && attachForm.$submitted)
			{
				$scope.has = true;
				$scope.notallvalid = 'Not all required fields are valid.';
			}
			else if($scope.files.length < 1)
			{
				$scope.nofiles = true;
				$scope.notallvalid = 'Files has not been selected yet !';
			}
			else if(attachForm.$valid && attachForm.$submitted && $scope.files.length > 0)
			{
				$scope.btn = 'Attaching';
				$scope.loading = true;
				var fd = new FormData();
		        fd.append('client', angular.toJson($scope.client));
		        fd.append('_token',$scope.client._token);

		        for(var i = 0; i < $scope.files.length; i++)
				{
					fd.append('files[]', $scope.files[i]);
				}				

				$http.post(_url+'client/attach', fd, {
	            	transformRequest: angular.identity,
	           	 headers: {'Content-Type': undefined}
		        })
		        .success(function(data, status, headers, config){
					if(data.status == 200){
						RemoteService.toast(data);
						$window.location.href = _url + 'client/show?key='+data.id;
					}

				}).error(function(data, status, headers, config){
					if(data.status != 200){
						RemoteService.toast(data);
						$scope.btn = 'Attach';
						$scope.loading = false;
					}
				});				
			}
		}

		$scope.removeFile = function(i)
		{
		  var idx = $scope.files.indexOf(i);
		  $scope.files.splice(idx,1);
		}
	})
	.controller('showEachControllers', function($scope){

		$scope.showModal = false;
	    $scope.displayModal = function()
	    {
	    	$scope.showModal = !$scope.showModal;
	    }
	   	
	   	$scope.resetModal = function()
	    {
			$scope.showModal = false;
	    }

	    $scope.files = [];
		$scope.$on('fileSelected', function(event, args){
			$scope.$apply(function(){
				$scope.files.push(args.file);
				$scope.nofiles = false;				
			});
		});

		$scope.fileSize = function(size)
		{
			if (isNaN(parseFloat(size)) || !isFinite(size)) return '-';
			if (typeof precision === 'undefined') precision = 1;
			var units = ['bytes', 'KB', 'MB', 'GB', 'TB', 'PB'],
				number = Math.floor(Math.log(size) / Math.log(1024));
			return (size / Math.pow(1024, Math.floor(number))).toFixed(precision) +  ' ' + units[number];
		}

		$scope.removeFile = function(i)
		{
		  var idx = $scope.files.indexOf(i);
		  $scope.files.splice(idx,1);
		}
	})
	.controller('showEachController', function($scope){
		$scope.btn = 'Attach Files';
		$scope.doLoad = function(attachForm){
			$scope.loading = true;		
			$scope.btn = 'Attaching ...';		
		}
	})
	.directive('fileUpload', function(){
		return {
			scope: true,
			link: function(scope, el, attrs){
				el.bind('change',function(event){
					var files = event.target.files;
					for (var i = 0; i < files.length; i++){
						scope.$emit('fileSelected',{file: files[i] });
					};
				});
			}
		}
	})
	.directive('modal', function (){
		return {
		  template: '<div class="modal fade">' + 
		      '<div class="modal-dialog modal-lg iapp-modal-dialog">' + 
		        '<div class="modal-content iapp-modal-content">' + 
		          '<div class="modal-header iapp-model-header">' + 
		            '<button type="button" class="iapp-modal-close close" data-dismiss="modal" aria-hidden="true" ng-click="resetModal()">&times;</button>' + 
		            '<h4 class="modal-title">{{ title }}</h4>' + 
		          '</div>' + 
		          '<div class="modal-body iapp-modal-body" ng-transclude></div>' + 
		        '</div>' + 
		      '</div>' + 
		    '</div>',
		  restrict: 'E',
		  transclude: true,
		  replace:true,
		  scope:true,
		  link: function postLink(scope, element, attrs) {
		    scope.title = attrs.title;

		    scope.$watch(attrs.visible, function(value){
		      if(value == true)
		        $(element).modal('show');

		      else
		        $(element).modal('hide');
		    });

		    $(element).on('shown.bs.modal', function(){
		      scope.$apply(function(){
		        scope.$parent[attrs.visible] = true;
		      });
		    });

		    $(element).on('hidden.bs.modal', function(){
		      scope.$apply(function(){
		        scope.$parent[attrs.visible] = false;
		      });
		    });
		  }
		};
	});
