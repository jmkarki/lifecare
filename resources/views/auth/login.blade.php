<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lifecare</title>

	<link href="{{asset('/css/crulean.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Lifecare</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<!-- <li><a href="{{ url('/') }}">Home</a></li> -->
					</ul>

					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<!-- <li><a href="{{ url('/auth/login') }}">Login</a></li> -->
							<!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
								</ul>
							</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>		
		<div class="content-holder">
			<div class="container">
				<div class="login-container">
					<div class="legend">
						<h3>Lifecare Log In</h3>
					</div>
					<div id="output"></div>
					<div class="avatar"></div>
					<div class="form-box" ng-controller="LoginFormController">	    
					    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
					        <input name="email" type="email" placeholder="YOUR EMAIL" value="{{old('email')}}">
					        <input type="password" name="password" placeholder="PASSWORD">
					        <!-- <input type="text" name="user_id" placeholder="USER ID" value="{{old('user_id')}}"> -->
					        <input type="hidden" name="_token" value="{{ csrf_token() }}"><p></p>
					       	@if(count($errors) > 0)
					       		<div class="alert app-alert app-alert-danger">
					       		{!!$errors->first('email','<span class="text-danger">:message</span><br>')!!}
					       		{!!($errors->has('password') && $errors->has('email')) ? '<hr>': ''!!}
					        	{!!$errors->first('password','<span class="text-danger">:message</span>')!!}
					       	</div>
					       	@endif	        
					        <button class="btn btn-primary btn-block login" ng-click="checkLogin()" type="submit" ng-cloak>@{{buttonText}}</button>
					    </form>
					</div>
				</div> 
			</div>
		</div> 
		<div class="app-footer">
	       <center>
	          <p>&copy; 2015 | All rights reserved. <!-- <a href="javascript:void(0)" class="app-terms hidden-xs">Privacy</a>  <a href="javascript:void(0)" class="app-policy hidden-xs">Terms</a> <a href="" class="app-policy hidden-xs">Security</a> --></p>
	       </center>	             
	  </div>
	</div>
	<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/angular.min.js')}}"></script>	
	<script type="text/javascript">
		angular.module('myApp', []).controller('LoginFormController',function($scope){
		$scope.buttonText = 'Sign In';
		$scope.checkLogin = function(){
			$scope.buttonText = 'Signing In ...';
		}
	});
	</script>
</body>
</html>